# Swagger\Client\SummonerV4Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**summonerV4GetByAccessToken**](SummonerV4Api.md#summonerV4GetByAccessToken) | **GET** /lol/summoner/v4/summoners/me | Get a summoner by access token.
[**summonerV4GetByAccountId**](SummonerV4Api.md#summonerV4GetByAccountId) | **GET** /lol/summoner/v4/summoners/by-account/{encryptedAccountId} | Get a summoner by account ID.
[**summonerV4GetByPUUID**](SummonerV4Api.md#summonerV4GetByPUUID) | **GET** /lol/summoner/v4/summoners/by-puuid/{encryptedPUUID} | Get a summoner by PUUID.
[**summonerV4GetByRSOPUUID**](SummonerV4Api.md#summonerV4GetByRSOPUUID) | **GET** /fulfillment/v1/summoners/by-puuid/{rsoPUUID} | Get a summoner by its RSO encrypted PUUID.
[**summonerV4GetBySummonerId**](SummonerV4Api.md#summonerV4GetBySummonerId) | **GET** /lol/summoner/v4/summoners/{encryptedSummonerId} | Get a summoner by summoner ID.


# **summonerV4GetByAccessToken**
> \Swagger\Client\Model\SummonerV4SummonerDTO summonerV4GetByAccessToken()

Get a summoner by access token.

Get a summoner by access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: rso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SummonerV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->summonerV4GetByAccessToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummonerV4Api->summonerV4GetByAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SummonerV4SummonerDTO**](../Model/SummonerV4SummonerDTO.md)

### Authorization

[rso](../../README.md#rso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **summonerV4GetByAccountId**
> \Swagger\Client\Model\SummonerV4SummonerDTO summonerV4GetByAccountId($encrypted_account_id)

Get a summoner by account ID.

Get a summoner by account ID.

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

$apiInstance = new Swagger\Client\Api\SummonerV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_account_id = "encrypted_account_id_example"; // string | 

try {
    $result = $apiInstance->summonerV4GetByAccountId($encrypted_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummonerV4Api->summonerV4GetByAccountId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_account_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SummonerV4SummonerDTO**](../Model/SummonerV4SummonerDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **summonerV4GetByPUUID**
> \Swagger\Client\Model\SummonerV4SummonerDTO summonerV4GetByPUUID($encrypted_puuid)

Get a summoner by PUUID.

Get a summoner by PUUID.

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

$apiInstance = new Swagger\Client\Api\SummonerV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_puuid = "encrypted_puuid_example"; // string | Summoner ID

try {
    $result = $apiInstance->summonerV4GetByPUUID($encrypted_puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummonerV4Api->summonerV4GetByPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_puuid** | **string**| Summoner ID |

### Return type

[**\Swagger\Client\Model\SummonerV4SummonerDTO**](../Model/SummonerV4SummonerDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **summonerV4GetByRSOPUUID**
> \Swagger\Client\Model\SummonerV4SummonerDTO summonerV4GetByRSOPUUID($rso_puuid)

Get a summoner by its RSO encrypted PUUID.

Get a summoner by its RSO encrypted PUUID.

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

$apiInstance = new Swagger\Client\Api\SummonerV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rso_puuid = "rso_puuid_example"; // string | Summoner ID

try {
    $result = $apiInstance->summonerV4GetByRSOPUUID($rso_puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummonerV4Api->summonerV4GetByRSOPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rso_puuid** | **string**| Summoner ID |

### Return type

[**\Swagger\Client\Model\SummonerV4SummonerDTO**](../Model/SummonerV4SummonerDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **summonerV4GetBySummonerId**
> \Swagger\Client\Model\SummonerV4SummonerDTO summonerV4GetBySummonerId($encrypted_summoner_id)

Get a summoner by summoner ID.

Get a summoner by summoner ID.

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

$apiInstance = new Swagger\Client\Api\SummonerV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_summoner_id = "encrypted_summoner_id_example"; // string | Summoner ID

try {
    $result = $apiInstance->summonerV4GetBySummonerId($encrypted_summoner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummonerV4Api->summonerV4GetBySummonerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_summoner_id** | **string**| Summoner ID |

### Return type

[**\Swagger\Client\Model\SummonerV4SummonerDTO**](../Model/SummonerV4SummonerDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

