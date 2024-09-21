# MatchV5InfoDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_of_game_result** | **string** | Refer to indicate if the game ended in termination. | [optional] 
**game_creation** | **int** | Unix timestamp for when the game is created on the game server (i.e., the loading screen). | 
**game_duration** | **int** | Prior to patch 11.20, this field returns the game length in milliseconds calculated from gameEndTimestamp - gameStartTimestamp. Post patch 11.20, this field returns the max timePlayed of any participant in the game in seconds, which makes the behavior of this field consistent with that of match-v4. The best way to handling the change in this field is to treat the value as milliseconds if the gameEndTimestamp field isn&#39;t in the response and to treat the value as seconds if gameEndTimestamp is in the response. | 
**game_end_timestamp** | **int** | Unix timestamp for when match ends on the game server. This timestamp can occasionally be significantly longer than when the match \&quot;ends\&quot;. The most reliable way of determining the timestamp for the end of the match would be to add the max time played of any participant to the gameStartTimestamp. This field was added to match-v5 in patch 11.20 on Oct 5th, 2021. | [optional] 
**game_id** | **int** |  | 
**game_mode** | **string** | Refer to the Game Constants documentation. | 
**game_name** | **string** |  | 
**game_start_timestamp** | **int** | Unix timestamp for when match starts on the game server. | 
**game_type** | **string** |  | 
**game_version** | **string** | The first two parts can be used to determine the patch a game was played on. | 
**map_id** | **int** | Refer to the Game Constants documentation. | 
**participants** | [**\Swagger\Client\Model\MatchV5ParticipantDto[]**](MatchV5ParticipantDto.md) |  | 
**platform_id** | **string** | Platform where the match was played. | 
**queue_id** | **int** | Refer to the Game Constants documentation. | 
**teams** | [**\Swagger\Client\Model\MatchV5TeamDto[]**](MatchV5TeamDto.md) |  | 
**tournament_code** | **string** | Tournament code used to generate the match. This field was added to match-v5 in patch 11.13 on June 23rd, 2021. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


