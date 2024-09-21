# ChampionMasteryV4ChampionMasteryDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**puuid** | **string** | Player Universal Unique Identifier. Exact length of 78 characters. (Encrypted) | 
**champion_points_until_next_level** | **int** | Number of points needed to achieve next level. Zero if player reached maximum champion level for this champion. | 
**chest_granted** | **bool** | Is chest granted for this champion or not in current season. | [optional] 
**champion_id** | **int** | Champion ID for this entry. | 
**last_play_time** | **int** | Last time this champion was played by this player - in Unix milliseconds time format. | 
**champion_level** | **int** | Champion level for specified player and champion combination. | 
**champion_points** | **int** | Total number of champion points for this player and champion combination - they are used to determine championLevel. | 
**champion_points_since_last_level** | **int** | Number of points earned since current level has been achieved. | 
**mark_required_for_next_level** | **int** |  | 
**champion_season_milestone** | **int** |  | 
**next_season_milestone** | [**\Swagger\Client\Model\ChampionMasteryV4NextSeasonMilestonesDto**](ChampionMasteryV4NextSeasonMilestonesDto.md) |  | 
**tokens_earned** | **int** | The token earned for this champion at the current championLevel. When the championLevel is advanced the tokensEarned resets to 0. | 
**milestone_grades** | **string[]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


