<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9hCJHZR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9hCJHZR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9hCJHZR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9hCJHZR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9hCJHZR\App_KernelDevDebugContainer([
    'container.build_hash' => '9hCJHZR',
    'container.build_id' => 'd4516901',
    'container.build_time' => 1668618377,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9hCJHZR');
