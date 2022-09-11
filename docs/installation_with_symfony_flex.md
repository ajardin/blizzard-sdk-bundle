# Installation with Symfony Flex

## Prerequisites
| Dependency               |     Version      |
|--------------------------|:----------------:|
| php                      |     `>=8.0`      |
| symfony/framework-bundle | `^5.3` or `^6.0` |
| symfony/http-client      | `^5.3` or `^6.0` |

You also need a pair of client credentials that you can generate through the
[Blizzard Developer Portal](https://develop.battle.net/access/clients).

## Installation

```shell
composer require ajardin/blizzard-sdk-bundle
```

The bundle is automatically downloaded, registered, and the configuration file is created.

## Credentials management
You have to provide your own credentials (`BLIZZARD_CLIENT_ID` and `BLIZZARD_SECRET`) in dotenv files.
