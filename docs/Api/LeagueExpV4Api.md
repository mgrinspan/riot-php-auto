# Swagger\Client\LeagueExpV4Api

All URIs are relative to *https://na1.api.riotgames.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leagueExpV4GetLeagueEntries**](LeagueExpV4Api.md#leagueExpV4GetLeagueEntries) | **GET** /lol/league-exp/v4/entries/{queue}/{tier}/{division} | Get all the league entries.


# **leagueExpV4GetLeagueEntries**
> \Swagger\Client\Model\LeagueExpV4LeagueEntryDTO[] leagueExpV4GetLeagueEntries($queue, $tier, $division, $page)

Get all the league entries.

Get all the league entries.

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

$apiInstance = new Swagger\Client\Api\LeagueExpV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | Note that the queue value must be a valid ranked queue.
$tier = "tier_example"; // string | 
$division = "division_example"; // string | 
$page = 56; // int | Defaults to 1. Starts with page 1.

try {
    $result = $apiInstance->leagueExpV4GetLeagueEntries($queue, $tier, $division, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeagueExpV4Api->leagueExpV4GetLeagueEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**| Note that the queue value must be a valid ranked queue. |
 **tier** | **string**|  |
 **division** | **string**|  |
 **page** | **int**| Defaults to 1. Starts with page 1. | [optional]

### Return type

[**\Swagger\Client\Model\LeagueExpV4LeagueEntryDTO[]**](../Model/LeagueExpV4LeagueEntryDTO.md)

### Authorization

[X-Riot-Token](../../README.md#X-Riot-Token), [api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

