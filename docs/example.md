# Example

Let's say we want the list of World of Warcraft realms for a specific region.

### :one: Inject the `RealmApi` service in one of your classes
```php
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RealmApi;

class RealmLoader
{
    public function __construct(private RealmApi $realmApi)
    {
    }
}
```

### :two: Trigger the HTTP request to the Blizzard API
```php
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RealmApi;

class RealmLoader
{
    // ...

    public function getRealms(string $region): array
    {
        $response = $this->realmApi->realmIndex($region);
        // The HTTP request is sent asynchronously,
        // you can send other requests or retrieve the response content immediately.
    }
}
```

### :three: Consume the response when you need it
```php
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RealmApi;

class RealmLoader
{
    // ...

    public function getRealms(string $region): array
    {
        $response = $this->realmApi->realmIndex($region);
        $content = $response->toArray();

        return $content['realms'] ?? [];
    }
}
```
