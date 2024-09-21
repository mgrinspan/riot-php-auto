# Swagger\Client\ClashV1Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clashV1GetPlayersBySummoner**](ClashV1Api.md#clashV1GetPlayersBySummoner) | **GET** /lol/clash/v1/players/by-summoner/{summonerId} | Get players by summoner ID.
[**clashV1GetTeamById**](ClashV1Api.md#clashV1GetTeamById) | **GET** /lol/clash/v1/teams/{teamId} | Get team by ID.
[**clashV1GetTournamentById**](ClashV1Api.md#clashV1GetTournamentById) | **GET** /lol/clash/v1/tournaments/{tournamentId} | Get tournament by ID.
[**clashV1GetTournamentByTeam**](ClashV1Api.md#clashV1GetTournamentByTeam) | **GET** /lol/clash/v1/tournaments/by-team/{teamId} | Get tournament by team ID.
[**clashV1GetTournaments**](ClashV1Api.md#clashV1GetTournaments) | **GET** /lol/clash/v1/tournaments | Get all active or upcoming tournaments.


# **clashV1GetPlayersBySummoner**
> \Swagger\Client\Model\ClashV1PlayerDto[] clashV1GetPlayersBySummoner($summoner_id)

Get players by summoner ID.

Get players by summoner ID. ## Implementation Notes This endpoint returns a list of active Clash players for a given summoner ID. If a summoner registers for multiple tournaments at the same time (e.g., Saturday and Sunday) then both registrations would appear in this list.

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

$apiInstance = new Swagger\Client\Api\ClashV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$summoner_id = "summoner_id_example"; // string | 

try {
    $result = $apiInstance->clashV1GetPlayersBySummoner($summoner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClashV1Api->clashV1GetPlayersBySummoner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **summoner_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ClashV1PlayerDto[]**](../Model/ClashV1PlayerDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clashV1GetTeamById**
> \Swagger\Client\Model\ClashV1TeamDto clashV1GetTeamById($team_id)

Get team by ID.

Get team by ID.

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

$apiInstance = new Swagger\Client\Api\ClashV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = "team_id_example"; // string | 

try {
    $result = $apiInstance->clashV1GetTeamById($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClashV1Api->clashV1GetTeamById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ClashV1TeamDto**](../Model/ClashV1TeamDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clashV1GetTournamentById**
> \Swagger\Client\Model\ClashV1TournamentDto clashV1GetTournamentById($tournament_id)

Get tournament by ID.

Get tournament by ID.

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

$apiInstance = new Swagger\Client\Api\ClashV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_id = 56; // int | 

try {
    $result = $apiInstance->clashV1GetTournamentById($tournament_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClashV1Api->clashV1GetTournamentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ClashV1TournamentDto**](../Model/ClashV1TournamentDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clashV1GetTournamentByTeam**
> \Swagger\Client\Model\ClashV1TournamentDto clashV1GetTournamentByTeam($team_id)

Get tournament by team ID.

Get tournament by team ID.

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

$apiInstance = new Swagger\Client\Api\ClashV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = "team_id_example"; // string | 

try {
    $result = $apiInstance->clashV1GetTournamentByTeam($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClashV1Api->clashV1GetTournamentByTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ClashV1TournamentDto**](../Model/ClashV1TournamentDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clashV1GetTournaments**
> \Swagger\Client\Model\ClashV1TournamentDto[] clashV1GetTournaments()

Get all active or upcoming tournaments.

Get all active or upcoming tournaments.

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

$apiInstance = new Swagger\Client\Api\ClashV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clashV1GetTournaments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClashV1Api->clashV1GetTournaments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ClashV1TournamentDto[]**](../Model/ClashV1TournamentDto.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

