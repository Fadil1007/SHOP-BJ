<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGkmBJlT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGkmBJlT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGkmBJlT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGkmBJlT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGkmBJlT\App_KernelDevDebugContainer([
    'container.build_hash' => 'GkmBJlT',
    'container.build_id' => '0d6af63e',
    'container.build_time' => 1751845814,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGkmBJlT');
