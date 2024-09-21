# Swagger\Client\LorInventoryV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lorInventoryV1GetCards**](LorInventoryV1Api.md#lorInventoryV1GetCards) | **GET** /lor/inventory/v1/cards/me | Return a list of cards owned by the calling user.


# **lorInventoryV1GetCards**
> \Swagger\Client\Model\LorInventoryV1CardDto[] lorInventoryV1GetCards()

Return a list of cards owned by the calling user.

Return a list of cards owned by the calling user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: rso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LorInventoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->lorInventoryV1GetCards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LorInventoryV1Api->lorInventoryV1GetCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LorInventoryV1CardDto[]**](../Model/LorInventoryV1CardDto.md)

### Authorization

[rso](../../README.md#rso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

