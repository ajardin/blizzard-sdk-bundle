# Blizzard SDK Bundle
This non-official bundle provides Symfony services to consume Blizzard APIs as simple as possible.

## :rocket: How to use it
There is a dedicated service for each supported Blizzard API endpoints.

These services will be automatically autowired when type-hinting with the appropriate class. They return a
`\Symfony\Contracts\HttpClient\ResponseInterface` object that can be processed **asynchronously**
([details](https://symfony.com/doc/current/http_client.html#making-requests)).

## :books: Documentation
If you want to discover how to install or use this bundle, and which regions or endpoints are currently supported,
please take a look at the [documentation](/docs/index.md). Feel free to open an issue if you can't find an answer to
your questions.

## :pencil: License
This package is an open-sourced software licensed under the [MIT License](/LICENSE).

## :balance_scale: Copyright notices
Battle.net, Diablo III, Hearthstone, StarCraft II, World of Warcraft and Blizzard Entertainment are trademarks or
registered trademarks of Blizzard Entertainment, Inc. in the U.S. and/or other countries.
