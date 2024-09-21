# Swagger\Client\TftLeagueV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tftLeagueV1GetChallengerLeague**](TftLeagueV1Api.md#tftLeagueV1GetChallengerLeague) | **GET** /tft/league/v1/challenger | Get the challenger league.
[**tftLeagueV1GetGrandmasterLeague**](TftLeagueV1Api.md#tftLeagueV1GetGrandmasterLeague) | **GET** /tft/league/v1/grandmaster | Get the grandmaster league.
[**tftLeagueV1GetLeagueById**](TftLeagueV1Api.md#tftLeagueV1GetLeagueById) | **GET** /tft/league/v1/leagues/{leagueId} | Get league with given ID, including inactive entries.
[**tftLeagueV1GetLeagueEntries**](TftLeagueV1Api.md#tftLeagueV1GetLeagueEntries) | **GET** /tft/league/v1/entries/{tier}/{division} | Get all the league entries.
[**tftLeagueV1GetLeagueEntriesForSummoner**](TftLeagueV1Api.md#tftLeagueV1GetLeagueEntriesForSummoner) | **GET** /tft/league/v1/entries/by-summoner/{summonerId} | Get league entries for a given summoner ID.
[**tftLeagueV1GetMasterLeague**](TftLeagueV1Api.md#tftLeagueV1GetMasterLeague) | **GET** /tft/league/v1/master | Get the master league.
[**tftLeagueV1GetTopRatedLadder**](TftLeagueV1Api.md#tftLeagueV1GetTopRatedLadder) | **GET** /tft/league/v1/rated-ladders/{queue}/top | Get the top rated ladder for given queue


# **tftLeagueV1GetChallengerLeague**
> \Swagger\Client\Model\TftLeagueV1LeagueListDTO tftLeagueV1GetChallengerLeague($queue)

Get the challenger league.

Get the challenger league.

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

$apiInstance = new Swagger\Client\Api\TftLeagueV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | Defaults to RANKED_TFT.

try {
    $result = $apiInstance->tftLeagueV1GetChallengerLeague($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftLeagueV1Api->tftLeagueV1GetChallengerLeague: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**| Defaults to RANKED_TFT. | [optional]

### Return type

[**\Swagger\Client\Model\TftLeagueV1LeagueListDTO**](../Model/TftLeagueV1LeagueListDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftLeagueV1GetGrandmasterLeague**
> \Swagger\Client\Model\TftLeagueV1LeagueListDTO tftLeagueV1GetGrandmasterLeague($queue)

Get the grandmaster league.

Get the grandmaster league.

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

$apiInstance = new Swagger\Client\Api\TftLeagueV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | Defaults to RANKED_TFT.

try {
    $result = $apiInstance->tftLeagueV1GetGrandmasterLeague($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftLeagueV1Api->tftLeagueV1GetGrandmasterLeague: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**| Defaults to RANKED_TFT. | [optional]

### Return type

[**\Swagger\Client\Model\TftLeagueV1LeagueListDTO**](../Model/TftLeagueV1LeagueListDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftLeagueV1GetLeagueById**
> \Swagger\Client\Model\TftLeagueV1LeagueListDTO tftLeagueV1GetLeagueById($league_id)

Get league with given ID, including inactive entries.

Get league with given ID, including inactive entries.

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

$apiInstance = new Swagger\Client\Api\TftLeagueV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$league_id = "league_id_example"; // string | The UUID of the league.

try {
    $result = $apiInstance->tftLeagueV1GetLeagueById($league_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftLeagueV1Api->tftLeagueV1GetLeagueById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **league_id** | **string**| The UUID of the league. |

### Return type

[**\Swagger\Client\Model\TftLeagueV1LeagueListDTO**](../Model/TftLeagueV1LeagueListDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftLeagueV1GetLeagueEntries**
> \Swagger\Client\Model\TftLeagueV1LeagueEntryDTO[] tftLeagueV1GetLeagueEntries($tier, $division, $queue, $page)

Get all the league entries.

Get all the league entries.

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

$apiInstance = new Swagger\Client\Api\TftLeagueV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tier = "tier_example"; // string | 
$division = "division_example"; // string | 
$queue = "queue_example"; // string | Defaults to RANKED_TFT.
$page = 56; // int | Defaults to 1. Starts with page 1.

try {
    $result = $apiInstance->tftLeagueV1GetLeagueEntries($tier, $division, $queue, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftLeagueV1Api->tftLeagueV1GetLeagueEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tier** | **string**|  |
 **division** | **string**|  |
 **queue** | **string**| Defaults to RANKED_TFT. | [optional]
 **page** | **int**| Defaults to 1. Starts with page 1. | [optional]

### Return type

[**\Swagger\Client\Model\TftLeagueV1LeagueEntryDTO[]**](../Model/TftLeagueV1LeagueEntryDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftLeagueV1GetLeagueEntriesForSummoner**
> \Swagger\Client\Model\TftLeagueV1LeagueEntryDTO[] tftLeagueV1GetLeagueEntriesForSummoner($summoner_id)

Get league entries for a given summoner ID.

Get league entries for a given summoner ID.

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

$apiInstance = new Swagger\Client\Api\TftLeagueV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$summoner_id = "summoner_id_example"; // string | 

try {
    $result = $apiInstance->tftLeagueV1GetLeagueEntriesForSummoner($summoner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftLeagueV1Api->tftLeagueV1GetLeagueEntriesForSummoner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **summoner_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TftLeagueV1LeagueEntryDTO[]**](../Model/TftLeagueV1LeagueEntryDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftLeagueV1GetMasterLeague**
> \Swagger\Client\Model\TftLeagueV1LeagueListDTO tftLeagueV1GetMasterLeague($queue)

Get the master league.

Get the master league.

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

$apiInstance = new Swagger\Client\Api\TftLeagueV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | Defaults to RANKED_TFT.

try {
    $result = $apiInstance->tftLeagueV1GetMasterLeague($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftLeagueV1Api->tftLeagueV1GetMasterLeague: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**| Defaults to RANKED_TFT. | [optional]

### Return type

[**\Swagger\Client\Model\TftLeagueV1LeagueListDTO**](../Model/TftLeagueV1LeagueListDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftLeagueV1GetTopRatedLadder**
> \Swagger\Client\Model\TftLeagueV1TopRatedLadderEntryDto[] tftLeagueV1GetTopRatedLadder($queue)

Get the top rated ladder for given queue

Get the top rated ladder for given queue

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

$apiInstance = new Swagger\Client\Api\TftLeagueV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | 

try {
    $result = $apiInstance->tftLeagueV1GetTopRatedLadder($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftLeagueV1Api->tftLeagueV1GetTopRatedLadder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**|  |

### Return type

[**\Swagger\Client\Model\TftLeagueV1TopRatedLadderEntryDto[]**](../Model/TftLeagueV1TopRatedLadderEntryDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

