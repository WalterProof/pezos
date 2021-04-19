# Pezos 🌮

![tests](https://github.com/catsoap/pezos/workflows/tests/badge.svg)

PHP lib for Tezos

Lib structure heavily inspired by https://github.com/goat-systems/go-tezos

## Features

At this time, this lib can only do basic operations with Ed25519 keys.

## Usage

`composer require bzzhh/pezos`

```php
$key = new Pezos\Keys\PubKey(
  'edskRkGanpJ2fEBdV5xjhFS6DaB5CUsGwZPuTD73VoioQYTTJJKcxJPXXa5FrjA2e8y2LKqwdXNqB9WB4yAQG3gaQTnp15LwDu',
  new Pezos\Keys\Ed25519(),
);
$key->getPublicKey();
// "edpkvCdu6RSSe379P2ACo8rGoqNRzQRRwNmHfj1dBr4DnSTKwCNxi5"
$key->getAddress();
// "tz1PAeuxsMA76x5cnKPkWKof2iGneN3Mb1eQ"
```

### RPC

RPC clients generated with [jane](https://jane.readthedocs.io/en/latest/documentation/OpenAPI.html) are available.

The open api files are taken from [the official Tezos repo](https://gitlab.com/tezos/tezos/-/tree/master/docs/api).

### Symfony

#### Enable the Bundle

enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
  // ...
  Bzzhh\Pezos\Bridge\Symfony\BzzhhPezosBundle::class => ['all' => true],
];
```

#### Configuration

Configure your host:

```yaml
# config/packages/bzzhh_pezos.yaml
bzzhh_pezos:
  rpc_host: https://edonet.duckdns.org
```
