<?php
passthru('php artisan storage:link');
dd("Command executed.");
if (function_exists('symlink')) {
    dd("symlink() is available.");
} else {
    dd("symlink() is not available.");
}
$targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';

echo "Target folder: $targetFolder\n";
echo "Link folder: $linkFolder\n";

if (!is_dir($targetFolder)) {
    echo "Target folder does not exist.\n";
}

if (symlink($targetFolder, $linkFolder)) {
    echo 'Symlink created successfully.';
} else {
    echo 'Failed to create symlink.';
}
