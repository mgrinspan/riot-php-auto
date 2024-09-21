# Swagger\Client\SpectatorTftV5Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spectatorTftV5GetCurrentGameInfoByPuuid**](SpectatorTftV5Api.md#spectatorTftV5GetCurrentGameInfoByPuuid) | **GET** /lol/spectator/tft/v5/active-games/by-puuid/{encryptedPUUID} | Get current game information for the given puuid.
[**spectatorTftV5GetFeaturedGames**](SpectatorTftV5Api.md#spectatorTftV5GetFeaturedGames) | **GET** /lol/spectator/tft/v5/featured-games | Get list of featured games.


# **spectatorTftV5GetCurrentGameInfoByPuuid**
> \Swagger\Client\Model\SpectatorTftV5CurrentGameInfo spectatorTftV5GetCurrentGameInfoByPuuid($encrypted_puuid)

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

$apiInstance = new Swagger\Client\Api\SpectatorTftV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_puuid = "encrypted_puuid_example"; // string | The puuid of the summoner.

try {
    $result = $apiInstance->spectatorTftV5GetCurrentGameInfoByPuuid($encrypted_puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpectatorTftV5Api->spectatorTftV5GetCurrentGameInfoByPuuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_puuid** | **string**| The puuid of the summoner. |

### Return type

[**\Swagger\Client\Model\SpectatorTftV5CurrentGameInfo**](../Model/SpectatorTftV5CurrentGameInfo.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spectatorTftV5GetFeaturedGames**
> \Swagger\Client\Model\SpectatorTftV5FeaturedGames spectatorTftV5GetFeaturedGames()

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

$apiInstance = new Swagger\Client\Api\SpectatorTftV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->spectatorTftV5GetFeaturedGames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpectatorTftV5Api->spectatorTftV5GetFeaturedGames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SpectatorTftV5FeaturedGames**](../Model/SpectatorTftV5FeaturedGames.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

