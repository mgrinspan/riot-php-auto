# Swagger\Client\AccountV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountV1GetActiveShard**](AccountV1Api.md#accountV1GetActiveShard) | **GET** /riot/account/v1/active-shards/by-game/{game}/by-puuid/{puuid} | Get active shard for a player
[**accountV1GetByAccessToken**](AccountV1Api.md#accountV1GetByAccessToken) | **GET** /riot/account/v1/accounts/me | Get account by access token
[**accountV1GetByPuuid**](AccountV1Api.md#accountV1GetByPuuid) | **GET** /riot/account/v1/accounts/by-puuid/{puuid} | Get account by puuid
[**accountV1GetByRiotId**](AccountV1Api.md#accountV1GetByRiotId) | **GET** /riot/account/v1/accounts/by-riot-id/{gameName}/{tagLine} | Get account by riot id


# **accountV1GetActiveShard**
> \Swagger\Client\Model\AccountV1ActiveShardDto accountV1GetActiveShard($game, $puuid)

Get active shard for a player

Get active shard for a player

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

$apiInstance = new Swagger\Client\Api\AccountV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$game = "game_example"; // string | 
$puuid = "puuid_example"; // string | 

try {
    $result = $apiInstance->accountV1GetActiveShard($game, $puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountV1Api->accountV1GetActiveShard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **game** | **string**|  |
 **puuid** | **string**|  |

### Return type

[**\Swagger\Client\Model\AccountV1ActiveShardDto**](../Model/AccountV1ActiveShardDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountV1GetByAccessToken**
> \Swagger\Client\Model\AccountV1AccountDto accountV1GetByAccessToken()

Get account by access token

Get account by access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: rso
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountV1GetByAccessToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountV1Api->accountV1GetByAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AccountV1AccountDto**](../Model/AccountV1AccountDto.md)

### Authorization

[rso](../../README.md#rso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountV1GetByPuuid**
> \Swagger\Client\Model\AccountV1AccountDto accountV1GetByPuuid($puuid)

Get account by puuid

Get account by puuid

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

$apiInstance = new Swagger\Client\Api\AccountV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$puuid = "puuid_example"; // string | 

try {
    $result = $apiInstance->accountV1GetByPuuid($puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountV1Api->accountV1GetByPuuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **puuid** | **string**|  |

### Return type

[**\Swagger\Client\Model\AccountV1AccountDto**](../Model/AccountV1AccountDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountV1GetByRiotId**
> \Swagger\Client\Model\AccountV1AccountDto accountV1GetByRiotId($tag_line, $game_name)

Get account by riot id

Get account by riot id

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

$apiInstance = new Swagger\Client\Api\AccountV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_line = "tag_line_example"; // string | When querying for a player by their riot id, the gameName and tagLine query params are required.
$game_name = "game_name_example"; // string | When querying for a player by their riot id, the gameName and tagLine query params are required.

try {
    $result = $apiInstance->accountV1GetByRiotId($tag_line, $game_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountV1Api->accountV1GetByRiotId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_line** | **string**| When querying for a player by their riot id, the gameName and tagLine query params are required. |
 **game_name** | **string**| When querying for a player by their riot id, the gameName and tagLine query params are required. |

### Return type

[**\Swagger\Client\Model\AccountV1AccountDto**](../Model/AccountV1AccountDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

