<?php

namespace Liip\MonitorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Liip\MonitorBundle\DependencyInjection\Compiler\CheckTagCompilerPass;

class LiipMonitorBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new CheckTagCompilerPass());
    }
}
