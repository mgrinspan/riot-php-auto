# LolChallengesV1ChallengeConfigInfoDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**localized_names** | [**map[string,map[string,string]]**](map.md) |  | 
**state** | **string** | DISABLED - not visible and not calculated, HIDDEN - not visible, but calculated, ENABLED - visible and calculated, ARCHIVED - visible, but not calculated | 
**tracking** | **string** | LIFETIME - stats are incremented without reset, SEASON - stats are accumulated by season and reset at the beginning of new season | [optional] 
**start_timestamp** | **int** |  | [optional] 
**end_timestamp** | **int** |  | [optional] 
**leaderboard** | **bool** |  | 
**thresholds** | **map[string,double]** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


