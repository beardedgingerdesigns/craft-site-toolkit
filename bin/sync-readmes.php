<?php

$pluginBaseDir = dirname(__DIR__);
$projectBaseDir = dirname($pluginBaseDir, 3);

$syncTargets = [
    [
        'label' => 'body block',
        'source' => $pluginBaseDir . '/templates/body_blocks/README.md',
        'targetDir' => $projectBaseDir . '/templates/body_blocks',
    ],
    [
        'label' => 'column item',
        'source' => $pluginBaseDir . '/templates/_includes/columnItems/README.md',
        'targetDir' => $projectBaseDir . '/templates/_includes/columnItems',
    ],
    [
        'label' => 'content builder',
        'source' => $pluginBaseDir . '/templates/_includes/content-builders/README.md',
        'targetDir' => $projectBaseDir . '/templates/_includes/content-builders',
    ],
];

foreach ($syncTargets as $syncTarget) {
    $source = $syncTarget['source'];
    $targetDir = $syncTarget['targetDir'];
    $target = $targetDir . '/README.md';

    if (!is_file($source)) {
        fwrite(STDOUT, "Site Toolkit {$syncTarget['label']} README not found; skipping sync.\n");
        continue;
    }

    if (!is_dir($targetDir) && !mkdir($targetDir, 0777, true) && !is_dir($targetDir)) {
        fwrite(STDERR, "Unable to create target directory: {$targetDir}\n");
        exit(1);
    }

    if (!copy($source, $target)) {
        fwrite(STDERR, "Unable to copy {$source} to {$target}\n");
        exit(1);
    }

    fwrite(STDOUT, "Synced Site Toolkit {$syncTarget['label']} README to {$target}\n");
}
