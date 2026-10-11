
# deutschland-api-sdk-php

This [SDK](https://github.com/apioo/deutschland-api-sdk-php) is managed by the [SDK Fabric](https://sdk-fabric.org/) project, a global infrastructure to
automatically generate SDKs for every API.

You can find more information about this SDK at [TypeHub](https://typehub.cloud/):
https://app.typehub.cloud/d/deutschland-api/sdk

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \DeutschlandAPI\SDK\Client::build('[access_token]');

// Returns user data of the current authenticated user.
$response = $client->authorization()->getWhoami();

// Revoke the access token of the current authenticated user.
$response = $client->authorization()->revoke();

// Returns available charging stations for a specific autobahn.
$response = $client->autobahn()->charging_station()->getAll('autobahn_id');

// Returns available closures for a specific autobahn.
$response = $client->autobahn()->closure()->getAll('autobahn_id');

// Returns all available autobahns.
$response = $client->autobahn()->getAll();

// Returns available parking lorries for a specific autobahn.
$response = $client->autobahn()->parking_lorry()->getAll('autobahn_id');

// Returns available warnings for a specific autobahn.
$response = $client->autobahn()->warning()->getAll('autobahn_id');

// Returns expense for the provided year.
$response = $client->budget()->expense()->getAll('year');

// Returns income for the provided year.
$response = $client->budget()->income()->getAll('year');

// Returns all current members of the Bundesrat.
$response = $client->bundesrat()->member()->getAll();

// Returns a specific member of the Bundestag.
$response = $client->bundestag()->member()->get('member_id');

// Returns all current members of the Bundestag.
$response = $client->bundestag()->member()->getAll();

// Returns a specific city.
$response = $client->city()->get('city_id');

// Returns all available cities.
$response = $client->city()->getAll(1, 'state', 'district', 'name', 'zipCode');

// Returns a specific district.
$response = $client->district()->get('district_id');

// Returns all available districts.
$response = $client->district()->getAll(1, 'state', 'name');

// Returns all available hospitals.
$response = $client->hospital()->getAll(1, 'search');

// Returns all available jobs.
$response = $client->job()->getAll(1, 'search', 'location', 'employer');

// Returns meta information and links about the current installed Fusio version.
$response = $client->meta()->getAbout();

// Returns all Tagesschau news.
$response = $client->news()->getAll(1);

// Returns a specific state.
$response = $client->state()->get('state_id');

// Returns all available states.
$response = $client->state()->getAll(1, 'name');

// Returns all available warnings from the modular warning system (MoWaS).
$response = $client->warning()->getAll();
```
