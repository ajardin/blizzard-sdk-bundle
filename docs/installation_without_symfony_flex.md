# Installation without Symfony Flex

## Prerequisites
| Dependency               |     Version      |
|--------------------------|:----------------:|
| php                      |     `>=8.0`      |
| symfony/framework-bundle | `^5.3` or `^6.0` |
| symfony/http-client      | `^5.3` or `^6.0` |

You also need a pair of client credentials that you can generate through the
[Blizzard Developer Portal](https://develop.battle.net/access/clients).

## Installation

### :one: Require the bundle

```shell
composer require ajardin/blizzard-sdk-bundle
```

### :two: Enable the bundle
You have to register the bundle in your `config/bundles.php` file.

```php
return [
    # ...
    Ajardin\BlizzardSdkBundle\AjardinBlizzardSdkBundle::class => ['all' => true],
    # ...
];
```

### :three: Declare the configuration
You have to add the following lines to a new `config/packages/ajardin_blizzard_sdk.yaml` file.

```yaml
ajardin_blizzard_sdk:
    blizzard:
        client_id: '%env(BLIZZARD_CLIENT_ID)%'
        client_secret: '%env(BLIZZARD_SECRET)%'
```

## Credentials management
You have to provide your own credentials (`BLIZZARD_CLIENT_ID` and `BLIZZARD_SECRET`) in dotenv files.
