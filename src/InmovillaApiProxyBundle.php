<?php

namespace Inmovilla\ApiProxyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Inmovilla\ApiProxyBundle\DependencyInjection\InmovillaApiProxyExtension;

class InmovillaApiProxyBundle extends Bundle
{
    public function getContainerExtension(): ?InmovillaApiProxyExtension
    {
        if (null === $this->extension) {
            $this->extension = new InmovillaApiProxyExtension();
        }

        return $this->extension;
    }
}