# Swagger\Client\TftSummonerV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tftSummonerV1GetByAccessToken**](TftSummonerV1Api.md#tftSummonerV1GetByAccessToken) | **GET** /tft/summoner/v1/summoners/me | Get a summoner by access token.
[**tftSummonerV1GetByAccountId**](TftSummonerV1Api.md#tftSummonerV1GetByAccountId) | **GET** /tft/summoner/v1/summoners/by-account/{encryptedAccountId} | Get a summoner by account ID.
[**tftSummonerV1GetByPUUID**](TftSummonerV1Api.md#tftSummonerV1GetByPUUID) | **GET** /tft/summoner/v1/summoners/by-puuid/{encryptedPUUID} | Get a summoner by PUUID.
[**tftSummonerV1GetBySummonerId**](TftSummonerV1Api.md#tftSummonerV1GetBySummonerId) | **GET** /tft/summoner/v1/summoners/{encryptedSummonerId} | Get a summoner by summoner ID.


# **tftSummonerV1GetByAccessToken**
> \Swagger\Client\Model\TftSummonerV1SummonerDTO tftSummonerV1GetByAccessToken()

Get a summoner by access token.

Get a summoner by access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: rso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TftSummonerV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tftSummonerV1GetByAccessToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftSummonerV1Api->tftSummonerV1GetByAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TftSummonerV1SummonerDTO**](../Model/TftSummonerV1SummonerDTO.md)

### Authorization

[rso](../../README.md#rso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftSummonerV1GetByAccountId**
> \Swagger\Client\Model\TftSummonerV1SummonerDTO tftSummonerV1GetByAccountId($encrypted_account_id)

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

$apiInstance = new Swagger\Client\Api\TftSummonerV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_account_id = "encrypted_account_id_example"; // string | 

try {
    $result = $apiInstance->tftSummonerV1GetByAccountId($encrypted_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftSummonerV1Api->tftSummonerV1GetByAccountId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_account_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TftSummonerV1SummonerDTO**](../Model/TftSummonerV1SummonerDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftSummonerV1GetByPUUID**
> \Swagger\Client\Model\TftSummonerV1SummonerDTO tftSummonerV1GetByPUUID($encrypted_puuid)

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

$apiInstance = new Swagger\Client\Api\TftSummonerV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_puuid = "encrypted_puuid_example"; // string | Summoner ID

try {
    $result = $apiInstance->tftSummonerV1GetByPUUID($encrypted_puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftSummonerV1Api->tftSummonerV1GetByPUUID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_puuid** | **string**| Summoner ID |

### Return type

[**\Swagger\Client\Model\TftSummonerV1SummonerDTO**](../Model/TftSummonerV1SummonerDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tftSummonerV1GetBySummonerId**
> \Swagger\Client\Model\TftSummonerV1SummonerDTO tftSummonerV1GetBySummonerId($encrypted_summoner_id)

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

$apiInstance = new Swagger\Client\Api\TftSummonerV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_summoner_id = "encrypted_summoner_id_example"; // string | Summoner ID

try {
    $result = $apiInstance->tftSummonerV1GetBySummonerId($encrypted_summoner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TftSummonerV1Api->tftSummonerV1GetBySummonerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_summoner_id** | **string**| Summoner ID |

### Return type

[**\Swagger\Client\Model\TftSummonerV1SummonerDTO**](../Model/TftSummonerV1SummonerDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

