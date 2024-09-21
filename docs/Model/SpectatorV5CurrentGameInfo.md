# SpectatorV5CurrentGameInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**game_id** | **int** | The ID of the game | 
**game_type** | **string** | The game type | 
**game_start_time** | **int** | The game start time represented in epoch milliseconds | 
**map_id** | **int** | The ID of the map | 
**game_length** | **int** | The amount of time in seconds that has passed since the game started | 
**platform_id** | **string** | The ID of the platform on which the game is being played | 
**game_mode** | **string** | The game mode | 
**banned_champions** | [**\Swagger\Client\Model\SpectatorV5BannedChampion[]**](SpectatorV5BannedChampion.md) | Banned champion information | 
**game_queue_config_id** | **int** | The queue type (queue types are documented on the Game Constants page) | [optional] 
**observers** | [**\Swagger\Client\Model\SpectatorV5Observer**](SpectatorV5Observer.md) | The observer information | 
**participants** | [**\Swagger\Client\Model\SpectatorV5CurrentGameParticipant[]**](SpectatorV5CurrentGameParticipant.md) | The participant information | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


