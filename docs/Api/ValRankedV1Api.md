# Swagger\Client\ValRankedV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**valRankedV1GetLeaderboard**](ValRankedV1Api.md#valRankedV1GetLeaderboard) | **GET** /val/ranked/v1/leaderboards/by-act/{actId} | Get leaderboard for the competitive queue


# **valRankedV1GetLeaderboard**
> \Swagger\Client\Model\ValRankedV1LeaderboardDto valRankedV1GetLeaderboard($act_id, $size, $start_index)

Get leaderboard for the competitive queue

Get leaderboard for the competitive queue

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

$apiInstance = new Swagger\Client\Api\ValRankedV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$act_id = "act_id_example"; // string | Act ids can be found using the val-content API.
$size = 56; // int | Defaults to 200. Valid values: 1 to 200.
$start_index = 56; // int | Defaults to 0.

try {
    $result = $apiInstance->valRankedV1GetLeaderboard($act_id, $size, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValRankedV1Api->valRankedV1GetLeaderboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **act_id** | **string**| Act ids can be found using the val-content API. |
 **size** | **int**| Defaults to 200. Valid values: 1 to 200. | [optional]
 **start_index** | **int**| Defaults to 0. | [optional]

### Return type

[**\Swagger\Client\Model\ValRankedV1LeaderboardDto**](../Model/ValRankedV1LeaderboardDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

