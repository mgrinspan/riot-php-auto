# Swagger\Client\LolChallengesV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lolChallengesV1GetAllChallengeConfigs**](LolChallengesV1Api.md#lolChallengesV1GetAllChallengeConfigs) | **GET** /lol/challenges/v1/challenges/config | List of all basic challenge configuration information (includes all translations for names and descriptions)
[**lolChallengesV1GetAllChallengePercentiles**](LolChallengesV1Api.md#lolChallengesV1GetAllChallengePercentiles) | **GET** /lol/challenges/v1/challenges/percentiles | Map of level to percentile of players who have achieved it - keys: ChallengeId -&gt; Season -&gt; Level -&gt; percentile of players who achieved it
[**lolChallengesV1GetChallengeConfigs**](LolChallengesV1Api.md#lolChallengesV1GetChallengeConfigs) | **GET** /lol/challenges/v1/challenges/{challengeId}/config | Get challenge configuration (REST)
[**lolChallengesV1GetChallengeLeaderboards**](LolChallengesV1Api.md#lolChallengesV1GetChallengeLeaderboards) | **GET** /lol/challenges/v1/challenges/{challengeId}/leaderboards/by-level/{level} | Return top players for each level. Level must be MASTER, GRANDMASTER or CHALLENGER.
[**lolChallengesV1GetChallengePercentiles**](LolChallengesV1Api.md#lolChallengesV1GetChallengePercentiles) | **GET** /lol/challenges/v1/challenges/{challengeId}/percentiles | Map of level to percentile of players who have achieved it
[**lolChallengesV1GetPlayerData**](LolChallengesV1Api.md#lolChallengesV1GetPlayerData) | **GET** /lol/challenges/v1/player-data/{puuid} | Returns player information with list of all progressed challenges (REST)


# **lolChallengesV1GetAllChallengeConfigs**
> \Swagger\Client\Model\LolChallengesV1ChallengeConfigInfoDto[] lolChallengesV1GetAllChallengeConfigs()

List of all basic challenge configuration information (includes all translations for names and descriptions)

List of all basic challenge configuration information (includes all translations for names and descriptions)

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

$apiInstance = new Swagger\Client\Api\LolChallengesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->lolChallengesV1GetAllChallengeConfigs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LolChallengesV1Api->lolChallengesV1GetAllChallengeConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LolChallengesV1ChallengeConfigInfoDto[]**](../Model/LolChallengesV1ChallengeConfigInfoDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lolChallengesV1GetAllChallengePercentiles**
> map[string,map[string,double]] lolChallengesV1GetAllChallengePercentiles()

Map of level to percentile of players who have achieved it - keys: ChallengeId -> Season -> Level -> percentile of players who achieved it

Map of level to percentile of players who have achieved it - keys: ChallengeId -> Season -> Level -> percentile of players who achieved it

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

$apiInstance = new Swagger\Client\Api\LolChallengesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->lolChallengesV1GetAllChallengePercentiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LolChallengesV1Api->lolChallengesV1GetAllChallengePercentiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**map[string,map[string,double]]**](../Model/map.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lolChallengesV1GetChallengeConfigs**
> \Swagger\Client\Model\LolChallengesV1ChallengeConfigInfoDto lolChallengesV1GetChallengeConfigs($challenge_id)

Get challenge configuration (REST)

Get challenge configuration (REST)

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

$apiInstance = new Swagger\Client\Api\LolChallengesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$challenge_id = 789; // int | 

try {
    $result = $apiInstance->lolChallengesV1GetChallengeConfigs($challenge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LolChallengesV1Api->lolChallengesV1GetChallengeConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\LolChallengesV1ChallengeConfigInfoDto**](../Model/LolChallengesV1ChallengeConfigInfoDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lolChallengesV1GetChallengeLeaderboards**
> \Swagger\Client\Model\LolChallengesV1ApexPlayerInfoDto[] lolChallengesV1GetChallengeLeaderboards($level, $challenge_id, $limit)

Return top players for each level. Level must be MASTER, GRANDMASTER or CHALLENGER.

Return top players for each level. Level must be MASTER, GRANDMASTER or CHALLENGER.

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

$apiInstance = new Swagger\Client\Api\LolChallengesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level = "level_example"; // string | 
$challenge_id = 789; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->lolChallengesV1GetChallengeLeaderboards($level, $challenge_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LolChallengesV1Api->lolChallengesV1GetChallengeLeaderboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | **string**|  |
 **challenge_id** | **int**|  |
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\LolChallengesV1ApexPlayerInfoDto[]**](../Model/LolChallengesV1ApexPlayerInfoDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lolChallengesV1GetChallengePercentiles**
> map[string,double] lolChallengesV1GetChallengePercentiles($challenge_id)

Map of level to percentile of players who have achieved it

Map of level to percentile of players who have achieved it

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

$apiInstance = new Swagger\Client\Api\LolChallengesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$challenge_id = 789; // int | 

try {
    $result = $apiInstance->lolChallengesV1GetChallengePercentiles($challenge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LolChallengesV1Api->lolChallengesV1GetChallengePercentiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_id** | **int**|  |

### Return type

**map[string,double]**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lolChallengesV1GetPlayerData**
> \Swagger\Client\Model\LolChallengesV1PlayerInfoDto lolChallengesV1GetPlayerData($puuid)

Returns player information with list of all progressed challenges (REST)

Returns player information with list of all progressed challenges (REST)

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

$apiInstance = new Swagger\Client\Api\LolChallengesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$puuid = "puuid_example"; // string | 

try {
    $result = $apiInstance->lolChallengesV1GetPlayerData($puuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LolChallengesV1Api->lolChallengesV1GetPlayerData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **puuid** | **string**|  |

### Return type

[**\Swagger\Client\Model\LolChallengesV1PlayerInfoDto**](../Model/LolChallengesV1PlayerInfoDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

