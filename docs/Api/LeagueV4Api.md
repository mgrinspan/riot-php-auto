# Swagger\Client\LeagueV4Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leagueV4GetChallengerLeague**](LeagueV4Api.md#leagueV4GetChallengerLeague) | **GET** /lol/league/v4/challengerleagues/by-queue/{queue} | Get the challenger league for given queue.
[**leagueV4GetGrandmasterLeague**](LeagueV4Api.md#leagueV4GetGrandmasterLeague) | **GET** /lol/league/v4/grandmasterleagues/by-queue/{queue} | Get the grandmaster league of a specific queue.
[**leagueV4GetLeagueById**](LeagueV4Api.md#leagueV4GetLeagueById) | **GET** /lol/league/v4/leagues/{leagueId} | Get league with given ID, including inactive entries.
[**leagueV4GetLeagueEntries**](LeagueV4Api.md#leagueV4GetLeagueEntries) | **GET** /lol/league/v4/entries/{queue}/{tier}/{division} | Get all the league entries.
[**leagueV4GetLeagueEntriesForSummoner**](LeagueV4Api.md#leagueV4GetLeagueEntriesForSummoner) | **GET** /lol/league/v4/entries/by-summoner/{encryptedSummonerId} | Get league entries in all queues for a given summoner ID.
[**leagueV4GetMasterLeague**](LeagueV4Api.md#leagueV4GetMasterLeague) | **GET** /lol/league/v4/masterleagues/by-queue/{queue} | Get the master league for given queue.


# **leagueV4GetChallengerLeague**
> \Swagger\Client\Model\LeagueV4LeagueListDTO leagueV4GetChallengerLeague($queue)

Get the challenger league for given queue.

Get the challenger league for given queue.

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

$apiInstance = new Swagger\Client\Api\LeagueV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | 

try {
    $result = $apiInstance->leagueV4GetChallengerLeague($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeagueV4Api->leagueV4GetChallengerLeague: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**|  |

### Return type

[**\Swagger\Client\Model\LeagueV4LeagueListDTO**](../Model/LeagueV4LeagueListDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leagueV4GetGrandmasterLeague**
> \Swagger\Client\Model\LeagueV4LeagueListDTO leagueV4GetGrandmasterLeague($queue)

Get the grandmaster league of a specific queue.

Get the grandmaster league of a specific queue.

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

$apiInstance = new Swagger\Client\Api\LeagueV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | 

try {
    $result = $apiInstance->leagueV4GetGrandmasterLeague($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeagueV4Api->leagueV4GetGrandmasterLeague: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**|  |

### Return type

[**\Swagger\Client\Model\LeagueV4LeagueListDTO**](../Model/LeagueV4LeagueListDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leagueV4GetLeagueById**
> \Swagger\Client\Model\LeagueV4LeagueListDTO leagueV4GetLeagueById($league_id)

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

$apiInstance = new Swagger\Client\Api\LeagueV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$league_id = "league_id_example"; // string | The UUID of the league.

try {
    $result = $apiInstance->leagueV4GetLeagueById($league_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeagueV4Api->leagueV4GetLeagueById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **league_id** | **string**| The UUID of the league. |

### Return type

[**\Swagger\Client\Model\LeagueV4LeagueListDTO**](../Model/LeagueV4LeagueListDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leagueV4GetLeagueEntries**
> \Swagger\Client\Model\LeagueV4LeagueEntryDTO[] leagueV4GetLeagueEntries($division, $tier, $queue, $page)

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

$apiInstance = new Swagger\Client\Api\LeagueV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$division = "division_example"; // string | 
$tier = "tier_example"; // string | 
$queue = "queue_example"; // string | Note that the queue value must be a valid ranked queue.
$page = 56; // int | Defaults to 1. Starts with page 1.

try {
    $result = $apiInstance->leagueV4GetLeagueEntries($division, $tier, $queue, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeagueV4Api->leagueV4GetLeagueEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **division** | **string**|  |
 **tier** | **string**|  |
 **queue** | **string**| Note that the queue value must be a valid ranked queue. |
 **page** | **int**| Defaults to 1. Starts with page 1. | [optional]

### Return type

[**\Swagger\Client\Model\LeagueV4LeagueEntryDTO[]**](../Model/LeagueV4LeagueEntryDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leagueV4GetLeagueEntriesForSummoner**
> \Swagger\Client\Model\LeagueV4LeagueEntryDTO[] leagueV4GetLeagueEntriesForSummoner($encrypted_summoner_id)

Get league entries in all queues for a given summoner ID.

Get league entries in all queues for a given summoner ID.

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

$apiInstance = new Swagger\Client\Api\LeagueV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_summoner_id = "encrypted_summoner_id_example"; // string | 

try {
    $result = $apiInstance->leagueV4GetLeagueEntriesForSummoner($encrypted_summoner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeagueV4Api->leagueV4GetLeagueEntriesForSummoner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_summoner_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\LeagueV4LeagueEntryDTO[]**](../Model/LeagueV4LeagueEntryDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leagueV4GetMasterLeague**
> \Swagger\Client\Model\LeagueV4LeagueListDTO leagueV4GetMasterLeague($queue)

Get the master league for given queue.

Get the master league for given queue.

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

$apiInstance = new Swagger\Client\Api\LeagueV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | 

try {
    $result = $apiInstance->leagueV4GetMasterLeague($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeagueV4Api->leagueV4GetMasterLeague: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**|  |

### Return type

[**\Swagger\Client\Model\LeagueV4LeagueListDTO**](../Model/LeagueV4LeagueListDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

