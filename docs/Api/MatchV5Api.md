# Swagger\Client\MatchV5Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**matchV5GetMatch**](MatchV5Api.md#matchV5GetMatch) | **GET** /lol/match/v5/matches/{matchId} | Get a match by match id
[**matchV5GetMatchIdsByPUUID**](MatchV5Api.md#matchV5GetMatchIdsByPUUID) | **GET** /lol/match/v5/matches/by-puuid/{puuid}/ids | Get a list of match ids by puuid
[**matchV5GetTimeline**](MatchV5Api.md#matchV5GetTimeline) | **GET** /lol/match/v5/matches/{matchId}/timeline | Get a match timeline by match id


# **matchV5GetMatch**
> \Swagger\Client\Model\MatchV5MatchDto matchV5GetMatch($match_id)

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

$apiInstance = new Swagger\Client\Api\MatchV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_id = "match_id_example"; // string | 

try {
    $result = $apiInstance->matchV5GetMatch($match_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchV5Api->matchV5GetMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\MatchV5MatchDto**](../Model/MatchV5MatchDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **matchV5GetMatchIdsByPUUID**
> string[] matchV5GetMatchIdsByPUUID($puuid, $start_time, $end_time, $queue, $type, $start, $count)

Get a list of match ids by puuid

Get a list of match ids by puuid

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

$apiInstance = new Swagger\Client\Api\MatchV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$puuid = "puuid_example"; // string | 
$start_time = 789; // int | Epoch timestamp in seconds. The matchlist started storing timestamps on June 16th, 2021. Any matches played before June 16th, 2021 won't be included in the results if the startTime filter is set.
$end_time = 789; // int | Epoch timestamp in seconds.
$queue = 56; // int | Filter the list of match ids by a specific queue id. This filter is mutually inclusive of the type filter meaning any match ids returned must match both the queue and type filters.
$type = "type_example"; // string | Filter the list of match ids by the type of match. This filter is mutually inclusive of the queue filter meaning any match ids returned must match both the queue and type filters.
$start = 56; // int | Defaults to 0. Start index.
$count = 56; // int | Defaults to 20. Valid values: 0 to 100. Number of match ids to return.

try {
    $result = $apiInstance->matchV5GetMatchIdsByPUUID($puuid, $start_time, $end_time, $queue, $type, $start, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchV5Api->matchV5GetMatchIdsByPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **puuid** | **string**|  |
 **start_time** | **int**| Epoch timestamp in seconds. The matchlist started storing timestamps on June 16th, 2021. Any matches played before June 16th, 2021 won&#39;t be included in the results if the startTime filter is set. | [optional]
 **end_time** | **int**| Epoch timestamp in seconds. | [optional]
 **queue** | **int**| Filter the list of match ids by a specific queue id. This filter is mutually inclusive of the type filter meaning any match ids returned must match both the queue and type filters. | [optional]
 **type** | **string**| Filter the list of match ids by the type of match. This filter is mutually inclusive of the queue filter meaning any match ids returned must match both the queue and type filters. | [optional]
 **start** | **int**| Defaults to 0. Start index. | [optional]
 **count** | **int**| Defaults to 20. Valid values: 0 to 100. Number of match ids to return. | [optional]

### Return type

**string[]**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **matchV5GetTimeline**
> \Swagger\Client\Model\MatchV5TimelineDto matchV5GetTimeline($match_id)

Get a match timeline by match id

Get a match timeline by match id

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

$apiInstance = new Swagger\Client\Api\MatchV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_id = "match_id_example"; // string | 

try {
    $result = $apiInstance->matchV5GetTimeline($match_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchV5Api->matchV5GetTimeline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\MatchV5TimelineDto**](../Model/MatchV5TimelineDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

