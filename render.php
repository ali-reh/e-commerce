<?php
// Simple static exporter: renders top-level PHP pages to HTML in /dist

$root = __DIR__;
$dist = $root . '/dist';

function rrmdir($dir) {
    if (!is_dir($dir)) return;
    $items = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($items as $item) {
        if ($item->isDir()) rmdir($item->getRealPath()); else unlink($item->getRealPath());
    }
    rmdir($dir);
}

function copyDir($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst, 0755, true);
    while(false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            $srcPath = $src . '/' . $file;
            $dstPath = $dst . '/' . $file;
            if (is_dir($srcPath)) {
                copyDir($srcPath, $dstPath);
            } else {
                copy($srcPath, $dstPath);
            }
        }
    }
    closedir($dir);
}

// Clean previous build
if (is_dir($dist)) {
    rrmdir($dist);
}
mkdir($dist, 0755, true);

// Copy public assets directories if present
$assetDirs = ['style', 'images', 'public', 'uploads'];
foreach ($assetDirs as $d) {
    $src = $root . '/' . $d;
    if (is_dir($src)) {
        echo "Copying $d...\n";
        copyDir($src, $dist . '/' . $d);
    }
}

// Find top-level php pages to render (exclude include files)
$exclude = ['render.php', 'header.php', 'config.php', 'db.php'];
$files = glob($root . '/*.php');
foreach ($files as $file) {
    $name = basename($file);
    if (in_array($name, $exclude)) continue;
    // render
    echo "Rendering $name...\n";
    ob_start();
    include $file;
    $html = ob_get_clean();
    // Convert links to .php -> .html where obvious
    $html = str_replace('.php"', '.html"', $html);
    $html = str_replace(".php'", ".html'", $html);
    $outName = ($name === 'index.php') ? 'index.html' : preg_replace('/\.php$/', '.html', $name);
    file_put_contents($dist . '/' . $outName, $html);
}

echo "Export complete. Dist folder: $dist\n";
