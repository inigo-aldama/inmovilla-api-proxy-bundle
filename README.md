
# Inmovilla API Proxy Bundle

[![Latest Version](https://img.shields.io/badge/version-1.0.0-blue)]()
[![PHP](https://img.shields.io/badge/php-%5E7.4%20%7C%7C%20%5E8.0-blue)]()
[![Symfony](https://img.shields.io/badge/symfony-%5E5.4%20%7C%7C%20%5E6.0-green)]()
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)

The `inmovilla-api-proxy-bundle` is a Symfony bundle designed to act as a proxy for Inmovilla API requests, addressing IP-based access restrictions. It simplifies the setup and configuration for integrating the [`inmovilla-api-proxy`](https://github.com/inigo-aldama/inmovilla-api-proxy) and [`inmovilla-api-client`](https://github.com/inigo-aldama/inmovilla-api-client-bundle) libraries in Symfony applications.

---

## Features

- Seamless integration with `inmovilla-api-proxy`.
- Handles IP-based access restrictions for Inmovilla API.
- Pre-configured Symfony services for easier implementation.
- Compatible with Symfony 5.4 and 6.x.

---

## Requirements

- **PHP**: 7.4 or higher.
- **Symfony**: 5.4 or higher.
- **Composer**: For dependency management.

---

## Installation

Install the bundle using Composer:
```bash
composer require inigo-aldama/inmovilla-api-proxy-bundle
```

---

## Configuration
This bundle don't require extra configuration.  
Follow instructions of [inmovilla-api-client-bundle](https://github.com/inigo-aldama/inmovilla-api-client-bundle) to configure the api client. 
This configuration will automatically create a service for the proxy that can be injected into your Symfony controllers or services.

---

## Usage

### Injecting the Proxy Service
You can inject the proxy service directly into your controllers or services:
```php
namespace App\Controller;

use Inmovilla\ApiProxyBundle\Service\ProxyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProxyController extends AbstractController
{
    private ProxyService $proxyService;

    public function __construct(ProxyService $proxyService)
    {
        $this->proxyService = $proxyService;
    }

    public function fetchProperties()
    {
        $response = $this->proxyService->handleRequest([
            'endpoint' => '/properties',
            'method' => 'GET',
            'parameters' => [],
        ]);

        return $this->json($response);
    }
}
```

---

## Testing

Run PHPUnit tests to validate the functionality:
```bash
./vendor/bin/phpunit --testdox
```

---

## Contribution

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/new-feature`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to your branch (`git push origin feature/new-feature`).
5. Open a pull request.

---

## License

This project is licensed under the [MIT License](LICENSE).

---

## Credits

- **Author**: Iñigo Aldama Gómez
- **GitHub Repository**: [inmovilla-api-proxy-bundle](https://github.com/inigo-aldama/inmovilla-api-proxy-bundle)
