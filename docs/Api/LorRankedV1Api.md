# Swagger\Client\LorRankedV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lorRankedV1GetLeaderboards**](LorRankedV1Api.md#lorRankedV1GetLeaderboards) | **GET** /lor/ranked/v1/leaderboards | Get the players in Master tier.


# **lorRankedV1GetLeaderboards**
> \Swagger\Client\Model\LorRankedV1LeaderboardDto lorRankedV1GetLeaderboards()

Get the players in Master tier.

Get the players in Master tier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Riot-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Riot-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Riot-Token', 'Bearer');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LorRankedV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->lorRankedV1GetLeaderboards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LorRankedV1Api->lorRankedV1GetLeaderboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LorRankedV1LeaderboardDto**](../Model/LorRankedV1LeaderboardDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

