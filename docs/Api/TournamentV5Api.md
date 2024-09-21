# Swagger\Client\TournamentV5Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tournamentV5CreateTournamentCode**](TournamentV5Api.md#tournamentV5CreateTournamentCode) | **POST** /lol/tournament/v5/codes | Create a tournament code for the given tournament.
[**tournamentV5GetGames**](TournamentV5Api.md#tournamentV5GetGames) | **GET** /lol/tournament/v5/games/by-code/{tournamentCode} | Get games details
[**tournamentV5GetLobbyEventsByCode**](TournamentV5Api.md#tournamentV5GetLobbyEventsByCode) | **GET** /lol/tournament/v5/lobby-events/by-code/{tournamentCode} | Gets a list of lobby events by tournament code.
[**tournamentV5GetTournamentCode**](TournamentV5Api.md#tournamentV5GetTournamentCode) | **GET** /lol/tournament/v5/codes/{tournamentCode} | Returns the tournament code DTO associated with a tournament code string.
[**tournamentV5RegisterProviderData**](TournamentV5Api.md#tournamentV5RegisterProviderData) | **POST** /lol/tournament/v5/providers | Creates a tournament provider and returns its ID.
[**tournamentV5RegisterTournament**](TournamentV5Api.md#tournamentV5RegisterTournament) | **POST** /lol/tournament/v5/tournaments | Creates a tournament and returns its ID.
[**tournamentV5UpdateCode**](TournamentV5Api.md#tournamentV5UpdateCode) | **PUT** /lol/tournament/v5/codes/{tournamentCode} | Update the pick type, map, spectator type, or allowed puuids for a code.


# **tournamentV5CreateTournamentCode**
> string[] tournamentV5CreateTournamentCode($tournament_id, $tournament_code_parameters_v5, $count)

Create a tournament code for the given tournament.

Create a tournament code for the given tournament.

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

$apiInstance = new Swagger\Client\Api\TournamentV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_id = 789; // int | The tournament ID
$tournament_code_parameters_v5 = new \Swagger\Client\Model\TournamentV5TournamentCodeParametersV5(); // \Swagger\Client\Model\TournamentV5TournamentCodeParametersV5 | Metadata for the generated code
$count = 56; // int | The number of codes to create (max 1000)

try {
    $result = $apiInstance->tournamentV5CreateTournamentCode($tournament_id, $tournament_code_parameters_v5, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentV5Api->tournamentV5CreateTournamentCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_id** | **int**| The tournament ID |
 **tournament_code_parameters_v5** | [**\Swagger\Client\Model\TournamentV5TournamentCodeParametersV5**](../Model/TournamentV5TournamentCodeParametersV5.md)| Metadata for the generated code |
 **count** | **int**| The number of codes to create (max 1000) | [optional]

### Return type

**string[]**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentV5GetGames**
> \Swagger\Client\Model\TournamentV5TournamentGamesV5[] tournamentV5GetGames($tournament_code)

Get games details

Get games details ## Implementation Notes Additional endpoint to get tournament games. From this endpoint, you are able to get participants PUUID (the callback doesn't contain this info).  You can also use it to check if the game was recorded and validate callbacks. If the endpoint returns the game, it means a callback was attempted.  This will only work for tournament codes created after November 10, 2023.

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

$apiInstance = new Swagger\Client\Api\TournamentV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_code = "tournament_code_example"; // string | 

try {
    $result = $apiInstance->tournamentV5GetGames($tournament_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentV5Api->tournamentV5GetGames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\TournamentV5TournamentGamesV5[]**](../Model/TournamentV5TournamentGamesV5.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentV5GetLobbyEventsByCode**
> \Swagger\Client\Model\TournamentV5LobbyEventV5DTOWrapper tournamentV5GetLobbyEventsByCode($tournament_code)

Gets a list of lobby events by tournament code.

Gets a list of lobby events by tournament code.

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

$apiInstance = new Swagger\Client\Api\TournamentV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_code = "tournament_code_example"; // string | The short code to look up lobby events for

try {
    $result = $apiInstance->tournamentV5GetLobbyEventsByCode($tournament_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentV5Api->tournamentV5GetLobbyEventsByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_code** | **string**| The short code to look up lobby events for |

### Return type

[**\Swagger\Client\Model\TournamentV5LobbyEventV5DTOWrapper**](../Model/TournamentV5LobbyEventV5DTOWrapper.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentV5GetTournamentCode**
> \Swagger\Client\Model\TournamentV5TournamentCodeV5DTO tournamentV5GetTournamentCode($tournament_code)

Returns the tournament code DTO associated with a tournament code string.

Returns the tournament code DTO associated with a tournament code string.

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

$apiInstance = new Swagger\Client\Api\TournamentV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_code = "tournament_code_example"; // string | The tournament code string.

try {
    $result = $apiInstance->tournamentV5GetTournamentCode($tournament_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentV5Api->tournamentV5GetTournamentCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_code** | **string**| The tournament code string. |

### Return type

[**\Swagger\Client\Model\TournamentV5TournamentCodeV5DTO**](../Model/TournamentV5TournamentCodeV5DTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentV5RegisterProviderData**
> int tournamentV5RegisterProviderData($provider_registration_parameters_v5)

Creates a tournament provider and returns its ID.

Creates a tournament provider and returns its ID. ## Implementation Notes Providers will need to call this endpoint first to register their callback URL and their API key with the tournament system before any other tournament provider endpoints will work.

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

$apiInstance = new Swagger\Client\Api\TournamentV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_registration_parameters_v5 = new \Swagger\Client\Model\TournamentV5ProviderRegistrationParametersV5(); // \Swagger\Client\Model\TournamentV5ProviderRegistrationParametersV5 | The provider definition.

try {
    $result = $apiInstance->tournamentV5RegisterProviderData($provider_registration_parameters_v5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentV5Api->tournamentV5RegisterProviderData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_registration_parameters_v5** | [**\Swagger\Client\Model\TournamentV5ProviderRegistrationParametersV5**](../Model/TournamentV5ProviderRegistrationParametersV5.md)| The provider definition. |

### Return type

**int**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentV5RegisterTournament**
> int tournamentV5RegisterTournament($tournament_registration_parameters_v5)

Creates a tournament and returns its ID.

Creates a tournament and returns its ID.

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

$apiInstance = new Swagger\Client\Api\TournamentV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_registration_parameters_v5 = new \Swagger\Client\Model\TournamentV5TournamentRegistrationParametersV5(); // \Swagger\Client\Model\TournamentV5TournamentRegistrationParametersV5 | The tournament definition.

try {
    $result = $apiInstance->tournamentV5RegisterTournament($tournament_registration_parameters_v5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentV5Api->tournamentV5RegisterTournament: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_registration_parameters_v5** | [**\Swagger\Client\Model\TournamentV5TournamentRegistrationParametersV5**](../Model/TournamentV5TournamentRegistrationParametersV5.md)| The tournament definition. |

### Return type

**int**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentV5UpdateCode**
> tournamentV5UpdateCode($tournament_code, $tournament_code_update_parameters_v5)

Update the pick type, map, spectator type, or allowed puuids for a code.

Update the pick type, map, spectator type, or allowed puuids for a code.

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

$apiInstance = new Swagger\Client\Api\TournamentV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_code = "tournament_code_example"; // string | The tournament code to update
$tournament_code_update_parameters_v5 = new \Swagger\Client\Model\TournamentV5TournamentCodeUpdateParametersV5(); // \Swagger\Client\Model\TournamentV5TournamentCodeUpdateParametersV5 | The fields to update

try {
    $apiInstance->tournamentV5UpdateCode($tournament_code, $tournament_code_update_parameters_v5);
} catch (Exception $e) {
    echo 'Exception when calling TournamentV5Api->tournamentV5UpdateCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_code** | **string**| The tournament code to update |
 **tournament_code_update_parameters_v5** | [**\Swagger\Client\Model\TournamentV5TournamentCodeUpdateParametersV5**](../Model/TournamentV5TournamentCodeUpdateParametersV5.md)| The fields to update | [optional]

### Return type

void (empty response body)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

