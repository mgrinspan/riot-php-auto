# Swagger\Client\SpectatorV5Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spectatorV5GetCurrentGameInfoByPuuid**](SpectatorV5Api.md#spectatorV5GetCurrentGameInfoByPuuid) | **GET** /lol/spectator/v5/active-games/by-summoner/{encryptedPUUID} | Get current game information for the given puuid.
[**spectatorV5GetFeaturedGames**](SpectatorV5Api.md#spectatorV5GetFeaturedGames) | **GET** /lol/spectator/v5/featured-games | Get list of featured games.


# **spectatorV5GetCurrentGameInfoByPuuid**
> \Swagger\Client\Model\SpectatorV5CurrentGameInfo spectatorV5GetCurrentGameInfoByPuuid($encrypted_puuid)

Get current game information for the given puuid.

Get current game information for the given puuid.

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

$apiInstance = new Swagger\Client\Api\SpectatorV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_puuid = "encrypted_puuid_example"; // string | The puuid of the summoner.

try {
    $result = $apiInstance->spectatorV5GetCurrentGameInfoByPuuid($encrypted_puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpectatorV5Api->spectatorV5GetCurrentGameInfoByPuuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_puuid** | **string**| The puuid of the summoner. |

### Return type

[**\Swagger\Client\Model\SpectatorV5CurrentGameInfo**](../Model/SpectatorV5CurrentGameInfo.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spectatorV5GetFeaturedGames**
> \Swagger\Client\Model\SpectatorV5FeaturedGames spectatorV5GetFeaturedGames()

Get list of featured games.

Get list of featured games.

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

$apiInstance = new Swagger\Client\Api\SpectatorV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->spectatorV5GetFeaturedGames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpectatorV5Api->spectatorV5GetFeaturedGames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SpectatorV5FeaturedGames**](../Model/SpectatorV5FeaturedGames.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

