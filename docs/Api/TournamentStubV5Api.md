# Swagger\Client\TournamentStubV5Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tournamentStubV5CreateTournamentCode**](TournamentStubV5Api.md#tournamentStubV5CreateTournamentCode) | **POST** /lol/tournament-stub/v5/codes | Create a tournament code for the given tournament - Stub method
[**tournamentStubV5GetLobbyEventsByCode**](TournamentStubV5Api.md#tournamentStubV5GetLobbyEventsByCode) | **GET** /lol/tournament-stub/v5/lobby-events/by-code/{tournamentCode} | Gets a list of lobby events by tournament code - Stub method
[**tournamentStubV5GetTournamentCode**](TournamentStubV5Api.md#tournamentStubV5GetTournamentCode) | **GET** /lol/tournament-stub/v5/codes/{tournamentCode} | Returns the tournament code DTO associated with a tournament code string - Stub Method
[**tournamentStubV5RegisterProviderData**](TournamentStubV5Api.md#tournamentStubV5RegisterProviderData) | **POST** /lol/tournament-stub/v5/providers | Creates a tournament provider and returns its ID - Stub method
[**tournamentStubV5RegisterTournament**](TournamentStubV5Api.md#tournamentStubV5RegisterTournament) | **POST** /lol/tournament-stub/v5/tournaments | Creates a tournament and returns its ID - Stub method


# **tournamentStubV5CreateTournamentCode**
> string[] tournamentStubV5CreateTournamentCode($tournament_id, $tournament_code_parameters_v5, $count)

Create a tournament code for the given tournament - Stub method

Create a tournament code for the given tournament - Stub method

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

$apiInstance = new Swagger\Client\Api\TournamentStubV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_id = 789; // int | The tournament ID
$tournament_code_parameters_v5 = new \Swagger\Client\Model\TournamentStubV5TournamentCodeParametersV5(); // \Swagger\Client\Model\TournamentStubV5TournamentCodeParametersV5 | Metadata for the generated code
$count = 56; // int | The number of codes to create (max 1000)

try {
    $result = $apiInstance->tournamentStubV5CreateTournamentCode($tournament_id, $tournament_code_parameters_v5, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentStubV5Api->tournamentStubV5CreateTournamentCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_id** | **int**| The tournament ID |
 **tournament_code_parameters_v5** | [**\Swagger\Client\Model\TournamentStubV5TournamentCodeParametersV5**](../Model/TournamentStubV5TournamentCodeParametersV5.md)| Metadata for the generated code |
 **count** | **int**| The number of codes to create (max 1000) | [optional]

### Return type

**string[]**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentStubV5GetLobbyEventsByCode**
> \Swagger\Client\Model\TournamentStubV5LobbyEventV5DTOWrapper tournamentStubV5GetLobbyEventsByCode($tournament_code)

Gets a list of lobby events by tournament code - Stub method

Gets a list of lobby events by tournament code - Stub method

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

$apiInstance = new Swagger\Client\Api\TournamentStubV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_code = "tournament_code_example"; // string | The short code to look up lobby events for

try {
    $result = $apiInstance->tournamentStubV5GetLobbyEventsByCode($tournament_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentStubV5Api->tournamentStubV5GetLobbyEventsByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_code** | **string**| The short code to look up lobby events for |

### Return type

[**\Swagger\Client\Model\TournamentStubV5LobbyEventV5DTOWrapper**](../Model/TournamentStubV5LobbyEventV5DTOWrapper.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentStubV5GetTournamentCode**
> \Swagger\Client\Model\TournamentStubV5TournamentCodeV5DTO tournamentStubV5GetTournamentCode($tournament_code)

Returns the tournament code DTO associated with a tournament code string - Stub Method

Returns the tournament code DTO associated with a tournament code string - Stub Method

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

$apiInstance = new Swagger\Client\Api\TournamentStubV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_code = "tournament_code_example"; // string | The tournament code string.

try {
    $result = $apiInstance->tournamentStubV5GetTournamentCode($tournament_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentStubV5Api->tournamentStubV5GetTournamentCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_code** | **string**| The tournament code string. |

### Return type

[**\Swagger\Client\Model\TournamentStubV5TournamentCodeV5DTO**](../Model/TournamentStubV5TournamentCodeV5DTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentStubV5RegisterProviderData**
> int tournamentStubV5RegisterProviderData($provider_registration_parameters_v5)

Creates a tournament provider and returns its ID - Stub method

Creates a tournament provider and returns its ID - Stub method ## Implementation Notes Providers will need to call this endpoint first to register their callback URL and their API key with the tournament system before any other tournament provider endpoints will work.

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

$apiInstance = new Swagger\Client\Api\TournamentStubV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_registration_parameters_v5 = new \Swagger\Client\Model\TournamentStubV5ProviderRegistrationParametersV5(); // \Swagger\Client\Model\TournamentStubV5ProviderRegistrationParametersV5 | The provider definition.

try {
    $result = $apiInstance->tournamentStubV5RegisterProviderData($provider_registration_parameters_v5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentStubV5Api->tournamentStubV5RegisterProviderData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_registration_parameters_v5** | [**\Swagger\Client\Model\TournamentStubV5ProviderRegistrationParametersV5**](../Model/TournamentStubV5ProviderRegistrationParametersV5.md)| The provider definition. |

### Return type

**int**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tournamentStubV5RegisterTournament**
> int tournamentStubV5RegisterTournament($tournament_registration_parameters_v5)

Creates a tournament and returns its ID - Stub method

Creates a tournament and returns its ID - Stub method

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

$apiInstance = new Swagger\Client\Api\TournamentStubV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tournament_registration_parameters_v5 = new \Swagger\Client\Model\TournamentStubV5TournamentRegistrationParametersV5(); // \Swagger\Client\Model\TournamentStubV5TournamentRegistrationParametersV5 | The tournament definition.

try {
    $result = $apiInstance->tournamentStubV5RegisterTournament($tournament_registration_parameters_v5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TournamentStubV5Api->tournamentStubV5RegisterTournament: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tournament_registration_parameters_v5** | [**\Swagger\Client\Model\TournamentStubV5TournamentRegistrationParametersV5**](../Model/TournamentStubV5TournamentRegistrationParametersV5.md)| The tournament definition. |

### Return type

**int**

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

