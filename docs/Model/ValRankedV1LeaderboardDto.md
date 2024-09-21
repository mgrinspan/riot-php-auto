# ValRankedV1LeaderboardDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shard** | **string** | The shard for the given leaderboard. | 
**act_id** | **string** | The act id for the given leaderboard. Act ids can be found using the val-content API. | 
**total_players** | **int** | The total number of players in the leaderboard. | 
**players** | [**\Swagger\Client\Model\ValRankedV1PlayerDto[]**](ValRankedV1PlayerDto.md) |  | 
**immortal_starting_page** | **int** |  | [optional] 
**immortal_starting_index** | **int** |  | [optional] 
**top_tier_rr_threshold** | **int** |  | [optional] 
**tier_details** | [**map[string,\Swagger\Client\Model\ValRankedV1TierDetailDto]**](ValRankedV1TierDetailDto.md) |  | [optional] 
**start_index** | **int** |  | [optional] 
**query** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


