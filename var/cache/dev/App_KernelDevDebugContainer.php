<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHpE03xS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHpE03xS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHpE03xS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHpE03xS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHpE03xS\App_KernelDevDebugContainer([
    'container.build_hash' => 'HpE03xS',
    'container.build_id' => 'c77e2a9a',
    'container.build_time' => 1652949832,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHpE03xS');
