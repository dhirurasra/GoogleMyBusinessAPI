# PHP Client library for Google My Business
The Google My Business API client libraries wraps the functionality of the Google My Business API, and provide functionality common to all Google APIs, for example HTTP transport, error handling, authentication, JSON parsing, and support for protocol buffers.

This package contains the Service definition for MyBusiness and it depends on Google API PHP Client

You are welcome to contribute and ask for maintenance rights.

# BIG NOTICE
Google is updating My Business API and exposing the new Service definitions in this library.
https://github.com/googleapis/google-api-php-client-services. After the udpate is compleate this repository will be marked as DEPRECATED.

## Requirements:

Google API PHP Client
URL: https://github.com/google/google-api-php-client/releases

## How to install 

The easiest way to install is with composer.

`composer require googlemybusiness/google-my-business-api`


## Authentication script examples 

### Service Account 

Get and include the Google_Client as described above.

```php 
# src/index.php
require dirname(__DIR__) . '/vendor/autoload.php';

$client = new \Google_Client();
$client->useApplicationDefaultCredentials();
// set the service account json file location manually
$client->setAuthConfig(__DIR__ . '/Data/service_account.json');
$client->setApplicationName("_Your_app_name_here_");
// set the scope to access GMBs
$client->setScopes([
    "https://www.googleapis.com/auth/business.manage"
]);
// if you have not enabled/ have access to GMB API you need to request it directly with Google and enable it through the project's API explorer; search for "Google My Business API" 
```