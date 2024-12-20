<?php

namespace Inmovilla\ApiProxyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Inmovilla\Proxy\ProxyService;

class ProxyController extends AbstractController
{
    private ProxyService $proxyService;

    public function __construct(ProxyService $proxyService)
    {
        $this->proxyService = $proxyService;
    }

    public function proxy(Request $request): JsonResponse
    {
        $response = $this->proxyService->handleRequest($request->getContent());
        return new JsonResponse($response);
    }
}