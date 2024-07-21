# Bypass DDos-Guard.net

This PHP package provides functionality for sending HTTP requests to servers protected by DDos-Guard.net. The package allows bypassing DDos-Guard protection and accessing the necessary resources.

[![License](https://img.shields.io/github/license/laxity7/ddos-guard-bypass.svg)](https://github.com/laxity7/ddos-guard-bypass/blob/master/LICENSE)
[![Latest Stable Version](https://img.shields.io/packagist/v/laxity7/ddos-guard-bypass.svg)](https://packagist.org/packages/laxity7/ddos-guard-bypass)
[![Total Downloads](https://img.shields.io/packagist/dt/laxity7/ddos-guard-bypass.svg)](https://packagist.org/packages/laxity7/ddos-guard-bypass)

Features:
* Sending GET, POST and other requests to protected servers
* Bypassing DDos-Guard protection mechanisms only for legitimate requests
* Support for working with cookies and sessions

> **Note:** This package does not allow DDoS attacks on the service, but allows you to send requests with a 2-second wait and receive legitimate data.

## Install

Install via composer 

```shell
composer require laxity7/ddos-guard-bypass
```

## How to use

```php
require 'vendor/autoload.php';

use Laxity7\DdosGuardBypass\DdosGuardBypass;
use Laxity7\DdosGuardBypass\BypassConfig;

$config = new BypassConfig();
$config->cookiesFile = __DIR__ . '/cookies.json';
$config->headers = ['Authorization' => 'Bearer secret-token'];

$client = new DdosGuardBypass($config);
$result = $client->get('https://example.com/protected-resource');

if ($result->isSuccess()) {
    echo $result->getResponse()->getBody()->getContents();
}
```

## License
This project is distributed under the MIT license.
