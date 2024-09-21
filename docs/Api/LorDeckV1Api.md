# Swagger\Client\LorDeckV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lorDeckV1CreateDeck**](LorDeckV1Api.md#lorDeckV1CreateDeck) | **POST** /lor/deck/v1/decks/me | Create a new deck for the calling user.
[**lorDeckV1GetDecks**](LorDeckV1Api.md#lorDeckV1GetDecks) | **GET** /lor/deck/v1/decks/me | Get a list of the calling user&#39;s decks.


# **lorDeckV1CreateDeck**
> string lorDeckV1CreateDeck($new_deck_dto)

Create a new deck for the calling user.

Create a new deck for the calling user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: rso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LorDeckV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_deck_dto = new \Swagger\Client\Model\LorDeckV1NewDeckDto(); // \Swagger\Client\Model\LorDeckV1NewDeckDto | 

try {
    $result = $apiInstance->lorDeckV1CreateDeck($new_deck_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LorDeckV1Api->lorDeckV1CreateDeck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_deck_dto** | [**\Swagger\Client\Model\LorDeckV1NewDeckDto**](../Model/LorDeckV1NewDeckDto.md)|  |

### Return type

**string**

### Authorization

[rso](../../README.md#rso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lorDeckV1GetDecks**
> \Swagger\Client\Model\LorDeckV1DeckDto[] lorDeckV1GetDecks()

Get a list of the calling user's decks.

Get a list of the calling user's decks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: rso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LorDeckV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->lorDeckV1GetDecks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LorDeckV1Api->lorDeckV1GetDecks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LorDeckV1DeckDto[]**](../Model/LorDeckV1DeckDto.md)

### Authorization

[rso](../../README.md#rso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

