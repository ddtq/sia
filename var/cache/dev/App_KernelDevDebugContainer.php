<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXKnKTWN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXKnKTWN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXKnKTWN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXKnKTWN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXKnKTWN\App_KernelDevDebugContainer([
    'container.build_hash' => 'XKnKTWN',
    'container.build_id' => '1a91ec9e',
    'container.build_time' => 1584660944,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXKnKTWN');
