# Swagger\Client\ValMatchV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**valMatchV1GetMatch**](ValMatchV1Api.md#valMatchV1GetMatch) | **GET** /val/match/v1/matches/{matchId} | Get match by id
[**valMatchV1GetMatchlist**](ValMatchV1Api.md#valMatchV1GetMatchlist) | **GET** /val/match/v1/matchlists/by-puuid/{puuid} | Get matchlist for games played by puuid
[**valMatchV1GetRecent**](ValMatchV1Api.md#valMatchV1GetRecent) | **GET** /val/match/v1/recent-matches/by-queue/{queue} | Get recent matches


# **valMatchV1GetMatch**
> \Swagger\Client\Model\ValMatchV1MatchDto valMatchV1GetMatch($match_id)

Get match by id

Get match by id

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

$apiInstance = new Swagger\Client\Api\ValMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_id = "match_id_example"; // string | 

try {
    $result = $apiInstance->valMatchV1GetMatch($match_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValMatchV1Api->valMatchV1GetMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ValMatchV1MatchDto**](../Model/ValMatchV1MatchDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **valMatchV1GetMatchlist**
> \Swagger\Client\Model\ValMatchV1MatchlistDto valMatchV1GetMatchlist($puuid)

Get matchlist for games played by puuid

Get matchlist for games played by puuid

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

$apiInstance = new Swagger\Client\Api\ValMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$puuid = "puuid_example"; // string | 

try {
    $result = $apiInstance->valMatchV1GetMatchlist($puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValMatchV1Api->valMatchV1GetMatchlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **puuid** | **string**|  |

### Return type

[**\Swagger\Client\Model\ValMatchV1MatchlistDto**](../Model/ValMatchV1MatchlistDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **valMatchV1GetRecent**
> \Swagger\Client\Model\ValMatchV1RecentMatchesDto valMatchV1GetRecent($queue)

Get recent matches

Get recent matches ## Implementation Notes Returns a list of match ids that have completed in the last 10 minutes for live regions and 12 hours for the esports routing value. NA/LATAM/BR share a match history deployment. As such, recent matches will return a combined list of matches from those three regions. Requests are load balanced so you may see some inconsistencies as matches are added/removed from the list.

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

$apiInstance = new Swagger\Client\Api\ValMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | 

try {
    $result = $apiInstance->valMatchV1GetRecent($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValMatchV1Api->valMatchV1GetRecent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**|  |

### Return type

[**\Swagger\Client\Model\ValMatchV1RecentMatchesDto**](../Model/ValMatchV1RecentMatchesDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

