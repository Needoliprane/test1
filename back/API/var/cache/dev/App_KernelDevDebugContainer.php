<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDybuRbA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDybuRbA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDybuRbA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDybuRbA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDybuRbA\App_KernelDevDebugContainer([
    'container.build_hash' => 'DybuRbA',
    'container.build_id' => 'fd7d5d0f',
    'container.build_time' => 1618846045,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDybuRbA');
