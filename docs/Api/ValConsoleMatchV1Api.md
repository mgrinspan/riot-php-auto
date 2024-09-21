# Swagger\Client\ValConsoleMatchV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**valConsoleMatchV1GetMatch**](ValConsoleMatchV1Api.md#valConsoleMatchV1GetMatch) | **GET** /val/match/console/v1/matches/{matchId} | Get match by id
[**valConsoleMatchV1GetMatchlist**](ValConsoleMatchV1Api.md#valConsoleMatchV1GetMatchlist) | **GET** /val/match/console/v1/matchlists/by-puuid/{puuid} | Get matchlist for games played by puuid and platform type
[**valConsoleMatchV1GetRecent**](ValConsoleMatchV1Api.md#valConsoleMatchV1GetRecent) | **GET** /val/match/console/v1/recent-matches/by-queue/{queue} | Get recent matches


# **valConsoleMatchV1GetMatch**
> \Swagger\Client\Model\ValConsoleMatchV1MatchDto valConsoleMatchV1GetMatch($match_id)

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

$apiInstance = new Swagger\Client\Api\ValConsoleMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_id = "match_id_example"; // string | 

try {
    $result = $apiInstance->valConsoleMatchV1GetMatch($match_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValConsoleMatchV1Api->valConsoleMatchV1GetMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ValConsoleMatchV1MatchDto**](../Model/ValConsoleMatchV1MatchDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **valConsoleMatchV1GetMatchlist**
> \Swagger\Client\Model\ValConsoleMatchV1MatchlistDto valConsoleMatchV1GetMatchlist($puuid, $platform_type)

Get matchlist for games played by puuid and platform type

Get matchlist for games played by puuid and platform type

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

$apiInstance = new Swagger\Client\Api\ValConsoleMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$puuid = "puuid_example"; // string | 
$platform_type = "platform_type_example"; // string | 

try {
    $result = $apiInstance->valConsoleMatchV1GetMatchlist($puuid, $platform_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValConsoleMatchV1Api->valConsoleMatchV1GetMatchlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **puuid** | **string**|  |
 **platform_type** | **string**|  |

### Return type

[**\Swagger\Client\Model\ValConsoleMatchV1MatchlistDto**](../Model/ValConsoleMatchV1MatchlistDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **valConsoleMatchV1GetRecent**
> \Swagger\Client\Model\ValConsoleMatchV1RecentMatchesDto valConsoleMatchV1GetRecent($queue)

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

$apiInstance = new Swagger\Client\Api\ValConsoleMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | 

try {
    $result = $apiInstance->valConsoleMatchV1GetRecent($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValConsoleMatchV1Api->valConsoleMatchV1GetRecent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**|  |

### Return type

[**\Swagger\Client\Model\ValConsoleMatchV1RecentMatchesDto**](../Model/ValConsoleMatchV1RecentMatchesDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

