
# starwars-php

This [SDK](https://github.com/sdk-fabric/starwars-php) is managed by the [SDK Fabric](https://sdk-fabric.org/) project, a global infrastructure to
automatically generate SDKs for every API.

You can find more information about this SDK at [TypeHub](https://typehub.cloud/):
https://app.typehub.cloud/d/sdkfabric/starwars

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \SdkFabric\Starwars\Client::build('[access_token]');

// Get all the people.
$response = $client->people()->getall('search');

// Get a specific people.
$response = $client->people()->get('id');

// Get all the films.
$response = $client->film()->getall('search');

// Get a specific film.
$response = $client->film()->get('id');

// Get all the starships.
$response = $client->starship()->getall('search');

// Get a specific starship.
$response = $client->starship()->get('id');

// Get all the species.
$response = $client->species()->getall('search');

// Get a specific species.
$response = $client->species()->get('id');

// Get all the vehicles.
$response = $client->vehicle()->getall('search');

// Get a specific vehicle.
$response = $client->vehicle()->get('id');

// Get all the planets.
$response = $client->planet()->getall('search');

// Get a specific planet.
$response = $client->planet()->get('id');
```
