# Swagger\Client\TftMatchV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tftMatchV1GetMatch**](TftMatchV1Api.md#tftMatchV1GetMatch) | **GET** /tft/match/v1/matches/{matchId} | Get a match by match id
[**tftMatchV1GetMatchIdsByPUUID**](TftMatchV1Api.md#tftMatchV1GetMatchIdsByPUUID) | **GET** /tft/match/v1/matches/by-puuid/{puuid}/ids | Get a list of match ids by PUUID


# **tftMatchV1GetMatch**
> \Swagger\Client\Model\TftMatchV1MatchDto tftMatchV1GetMatch($match_id)

Get a match by match id

Get a match by match id

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

$apiInstance = new Swagger\Client\Api\TftMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_id = "match_id_example"; // string | 

try {
    $result = $apiInstance->tftMatchV1GetMatch($match_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftMatchV1Api->tftMatchV1GetMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TftMatchV1MatchDto**](../Model/TftMatchV1MatchDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftMatchV1GetMatchIdsByPUUID**
> string[] tftMatchV1GetMatchIdsByPUUID($puuid, $start, $end_time, $start_time, $count)

Get a list of match ids by PUUID

Get a list of match ids by PUUID

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

$apiInstance = new Swagger\Client\Api\TftMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$puuid = "puuid_example"; // string | 
$start = 56; // int | Defaults to 0. Start index.
$end_time = 789; // int | Epoch timestamp in seconds.
$start_time = 789; // int | Epoch timestamp in seconds. The matchlist started storing timestamps on June 16th, 2021. Any matches played before June 16th, 2021 won't be included in the results if the startTime filter is set.
$count = 56; // int | Defaults to 20. Number of match ids to return.

try {
    $result = $apiInstance->tftMatchV1GetMatchIdsByPUUID($puuid, $start, $end_time, $start_time, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftMatchV1Api->tftMatchV1GetMatchIdsByPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **puuid** | **string**|  |
 **start** | **int**| Defaults to 0. Start index. | [optional]
 **end_time** | **int**| Epoch timestamp in seconds. | [optional]
 **start_time** | **int**| Epoch timestamp in seconds. The matchlist started storing timestamps on June 16th, 2021. Any matches played before June 16th, 2021 won&#39;t be included in the results if the startTime filter is set. | [optional]
 **count** | **int**| Defaults to 20. Number of match ids to return. | [optional]

### Return type

**string[]**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

