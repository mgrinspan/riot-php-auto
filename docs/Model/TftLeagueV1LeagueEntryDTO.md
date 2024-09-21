# TftLeagueV1LeagueEntryDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**puuid** | **string** | Player Universal Unique Identifier. Exact length of 78 characters. (Encrypted) | [optional] 
**league_id** | **string** | Not included for the RANKED_TFT_TURBO queueType. | [optional] 
**summoner_id** | **string** | Player&#39;s encrypted summonerId. | 
**queue_type** | **string** |  | 
**rated_tier** | **string** | Only included for the RANKED_TFT_TURBO queueType.              (Legal values:  ORANGE,  PURPLE,  BLUE,  GREEN,  GRAY) | [optional] 
**rated_rating** | **int** | Only included for the RANKED_TFT_TURBO queueType. | [optional] 
**tier** | **string** | Not included for the RANKED_TFT_TURBO queueType. | [optional] 
**rank** | **string** | The player&#39;s division within a tier. Not included for the RANKED_TFT_TURBO queueType. | [optional] 
**league_points** | **int** | Not included for the RANKED_TFT_TURBO queueType. | [optional] 
**wins** | **int** | First placement. | 
**losses** | **int** | Second through eighth placement. | 
**hot_streak** | **bool** | Not included for the RANKED_TFT_TURBO queueType. | [optional] 
**veteran** | **bool** | Not included for the RANKED_TFT_TURBO queueType. | [optional] 
**fresh_blood** | **bool** | Not included for the RANKED_TFT_TURBO queueType. | [optional] 
**inactive** | **bool** | Not included for the RANKED_TFT_TURBO queueType. | [optional] 
**mini_series** | [**\Swagger\Client\Model\TftLeagueV1MiniSeriesDTO**](TftLeagueV1MiniSeriesDTO.md) | Not included for the RANKED_TFT_TURBO queueType. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


