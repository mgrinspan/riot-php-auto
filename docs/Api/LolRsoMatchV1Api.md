# Swagger\Client\LolRsoMatchV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lolRsoMatchV1GetMatch**](LolRsoMatchV1Api.md#lolRsoMatchV1GetMatch) | **GET** /lol/rso-match/v1/matches/{matchId} | Get a match by match id
[**lolRsoMatchV1GetMatchIds**](LolRsoMatchV1Api.md#lolRsoMatchV1GetMatchIds) | **GET** /lol/rso-match/v1/matches/ids | Get a list of match ids by player access token - Includes custom matches
[**lolRsoMatchV1GetTimeline**](LolRsoMatchV1Api.md#lolRsoMatchV1GetTimeline) | **GET** /lol/rso-match/v1/matches/{matchId}/timeline | Get a match timeline by match id


# **lolRsoMatchV1GetMatch**
> \Swagger\Client\Model\LolRsoMatchV1MatchDto lolRsoMatchV1GetMatch($match_id)

Get a match by match id

Get a match by match id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: rso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LolRsoMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_id = "match_id_example"; // string | 

try {
    $result = $apiInstance->lolRsoMatchV1GetMatch($match_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LolRsoMatchV1Api->lolRsoMatchV1GetMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\LolRsoMatchV1MatchDto**](../Model/LolRsoMatchV1MatchDto.md)

### Authorization

[rso](../../README.md#rso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lolRsoMatchV1GetMatchIds**
> string[] lolRsoMatchV1GetMatchIds($count, $start, $type, $queue, $end_time, $start_time)

Get a list of match ids by player access token - Includes custom matches

Get a list of match ids by player access token - Includes custom matches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: rso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LolRsoMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | Defaults to 20. Valid values: 0 to 100. Number of match ids to return.
$start = 56; // int | Defaults to 0. Start index.
$type = "type_example"; // string | Filter the list of match ids by the type of match. This filter is mutually inclusive of the queue filter meaning any match ids returned must match both the queue and type filters.
$queue = 56; // int | Filter the list of match ids by a specific queue id. This filter is mutually inclusive of the type filter meaning any match ids returned must match both the queue and type filters.
$end_time = 789; // int | Epoch timestamp in seconds.
$start_time = 789; // int | Epoch timestamp in seconds. The matchlist started storing timestamps on June 16th, 2021. Any matches played before June 16th, 2021 won't be included in the results if the startTime filter is set.

try {
    $result = $apiInstance->lolRsoMatchV1GetMatchIds($count, $start, $type, $queue, $end_time, $start_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LolRsoMatchV1Api->lolRsoMatchV1GetMatchIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Defaults to 20. Valid values: 0 to 100. Number of match ids to return. | [optional]
 **start** | **int**| Defaults to 0. Start index. | [optional]
 **type** | **string**| Filter the list of match ids by the type of match. This filter is mutually inclusive of the queue filter meaning any match ids returned must match both the queue and type filters. | [optional]
 **queue** | **int**| Filter the list of match ids by a specific queue id. This filter is mutually inclusive of the type filter meaning any match ids returned must match both the queue and type filters. | [optional]
 **end_time** | **int**| Epoch timestamp in seconds. | [optional]
 **start_time** | **int**| Epoch timestamp in seconds. The matchlist started storing timestamps on June 16th, 2021. Any matches played before June 16th, 2021 won&#39;t be included in the results if the startTime filter is set. | [optional]

### Return type

**string[]**

### Authorization

[rso](../../README.md#rso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lolRsoMatchV1GetTimeline**
> \Swagger\Client\Model\LolRsoMatchV1TimelineDto lolRsoMatchV1GetTimeline($match_id)

Get a match timeline by match id

Get a match timeline by match id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: rso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\LolRsoMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_id = "match_id_example"; // string | 

try {
    $result = $apiInstance->lolRsoMatchV1GetTimeline($match_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LolRsoMatchV1Api->lolRsoMatchV1GetTimeline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\LolRsoMatchV1TimelineDto**](../Model/LolRsoMatchV1TimelineDto.md)

### Authorization

[rso](../../README.md#rso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

