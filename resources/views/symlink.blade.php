<?php

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
