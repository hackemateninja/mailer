<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCcXebBx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCcXebBx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCcXebBx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCcXebBx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCcXebBx\App_KernelDevDebugContainer([
    'container.build_hash' => 'CcXebBx',
    'container.build_id' => 'b42093db',
    'container.build_time' => 1745004347,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCcXebBx');
