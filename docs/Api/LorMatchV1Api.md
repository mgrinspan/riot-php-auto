# Swagger\Client\LorMatchV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lorMatchV1GetMatch**](LorMatchV1Api.md#lorMatchV1GetMatch) | **GET** /lor/match/v1/matches/{matchId} | Get match by id
[**lorMatchV1GetMatchIdsByPUUID**](LorMatchV1Api.md#lorMatchV1GetMatchIdsByPUUID) | **GET** /lor/match/v1/matches/by-puuid/{puuid}/ids | Get a list of match ids by PUUID


# **lorMatchV1GetMatch**
> \Swagger\Client\Model\LorMatchV1MatchDto lorMatchV1GetMatch($match_id)

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

$apiInstance = new Swagger\Client\Api\LorMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_id = "match_id_example"; // string | 

try {
    $result = $apiInstance->lorMatchV1GetMatch($match_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LorMatchV1Api->lorMatchV1GetMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\LorMatchV1MatchDto**](../Model/LorMatchV1MatchDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lorMatchV1GetMatchIdsByPUUID**
> string[] lorMatchV1GetMatchIdsByPUUID($puuid)

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

$apiInstance = new Swagger\Client\Api\LorMatchV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$puuid = "puuid_example"; // string | 

try {
    $result = $apiInstance->lorMatchV1GetMatchIdsByPUUID($puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LorMatchV1Api->lorMatchV1GetMatchIdsByPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **puuid** | **string**|  |

### Return type

**string[]**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

