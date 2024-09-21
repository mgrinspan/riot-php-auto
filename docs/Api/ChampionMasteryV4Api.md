# Swagger\Client\ChampionMasteryV4Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**championMasteryV4GetAllChampionMasteriesByPUUID**](ChampionMasteryV4Api.md#championMasteryV4GetAllChampionMasteriesByPUUID) | **GET** /lol/champion-mastery/v4/champion-masteries/by-puuid/{encryptedPUUID} | Get all champion mastery entries sorted by number of champion points descending.
[**championMasteryV4GetChampionMasteryByPUUID**](ChampionMasteryV4Api.md#championMasteryV4GetChampionMasteryByPUUID) | **GET** /lol/champion-mastery/v4/champion-masteries/by-puuid/{encryptedPUUID}/by-champion/{championId} | Get a champion mastery by puuid and champion ID.
[**championMasteryV4GetChampionMasteryScoreByPUUID**](ChampionMasteryV4Api.md#championMasteryV4GetChampionMasteryScoreByPUUID) | **GET** /lol/champion-mastery/v4/scores/by-puuid/{encryptedPUUID} | Get a player&#39;s total champion mastery score, which is the sum of individual champion mastery levels.
[**championMasteryV4GetTopChampionMasteriesByPUUID**](ChampionMasteryV4Api.md#championMasteryV4GetTopChampionMasteriesByPUUID) | **GET** /lol/champion-mastery/v4/champion-masteries/by-puuid/{encryptedPUUID}/top | Get specified number of top champion mastery entries sorted by number of champion points descending.


# **championMasteryV4GetAllChampionMasteriesByPUUID**
> \Swagger\Client\Model\ChampionMasteryV4ChampionMasteryDto[] championMasteryV4GetAllChampionMasteriesByPUUID($encrypted_puuid)

Get all champion mastery entries sorted by number of champion points descending.

Get all champion mastery entries sorted by number of champion points descending.

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

$apiInstance = new Swagger\Client\Api\ChampionMasteryV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_puuid = "encrypted_puuid_example"; // string | 

try {
    $result = $apiInstance->championMasteryV4GetAllChampionMasteriesByPUUID($encrypted_puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChampionMasteryV4Api->championMasteryV4GetAllChampionMasteriesByPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_puuid** | **string**|  |

### Return type

[**\Swagger\Client\Model\ChampionMasteryV4ChampionMasteryDto[]**](../Model/ChampionMasteryV4ChampionMasteryDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **championMasteryV4GetChampionMasteryByPUUID**
> \Swagger\Client\Model\ChampionMasteryV4ChampionMasteryDto championMasteryV4GetChampionMasteryByPUUID($encrypted_puuid, $champion_id)

Get a champion mastery by puuid and champion ID.

Get a champion mastery by puuid and champion ID.

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

$apiInstance = new Swagger\Client\Api\ChampionMasteryV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_puuid = "encrypted_puuid_example"; // string | 
$champion_id = 56; // int | Champion ID to retrieve Champion Mastery.

try {
    $result = $apiInstance->championMasteryV4GetChampionMasteryByPUUID($encrypted_puuid, $champion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChampionMasteryV4Api->championMasteryV4GetChampionMasteryByPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_puuid** | **string**|  |
 **champion_id** | **int**| Champion ID to retrieve Champion Mastery. |

### Return type

[**\Swagger\Client\Model\ChampionMasteryV4ChampionMasteryDto**](../Model/ChampionMasteryV4ChampionMasteryDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **championMasteryV4GetChampionMasteryScoreByPUUID**
> int championMasteryV4GetChampionMasteryScoreByPUUID($encrypted_puuid)

Get a player's total champion mastery score, which is the sum of individual champion mastery levels.

Get a player's total champion mastery score, which is the sum of individual champion mastery levels.

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

$apiInstance = new Swagger\Client\Api\ChampionMasteryV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_puuid = "encrypted_puuid_example"; // string | 

try {
    $result = $apiInstance->championMasteryV4GetChampionMasteryScoreByPUUID($encrypted_puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChampionMasteryV4Api->championMasteryV4GetChampionMasteryScoreByPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_puuid** | **string**|  |

### Return type

**int**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **championMasteryV4GetTopChampionMasteriesByPUUID**
> \Swagger\Client\Model\ChampionMasteryV4ChampionMasteryDto[] championMasteryV4GetTopChampionMasteriesByPUUID($encrypted_puuid, $count)

Get specified number of top champion mastery entries sorted by number of champion points descending.

Get specified number of top champion mastery entries sorted by number of champion points descending.

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

$apiInstance = new Swagger\Client\Api\ChampionMasteryV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_puuid = "encrypted_puuid_example"; // string | 
$count = 56; // int | Number of entries to retrieve, defaults to 3.

try {
    $result = $apiInstance->championMasteryV4GetTopChampionMasteriesByPUUID($encrypted_puuid, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChampionMasteryV4Api->championMasteryV4GetTopChampionMasteriesByPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_puuid** | **string**|  |
 **count** | **int**| Number of entries to retrieve, defaults to 3. | [optional]

### Return type

[**\Swagger\Client\Model\ChampionMasteryV4ChampionMasteryDto[]**](../Model/ChampionMasteryV4ChampionMasteryDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

