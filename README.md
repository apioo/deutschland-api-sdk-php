
# DeutschlandAPI SDK

This SDK helps to access the [DeutschlandAPI](https://deutschland-api.dev)

## Usage

The following example shows how you initialize the client:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \DeutschlandAPI\SDK\Client::buildAnonymous();

foreach ($client->city()->getAll() as $city) {
    echo $city->getState() . "\n";
}

```

More information about the complete API at:
https://app.typehub.cloud/d/deutschland-api/sdk
