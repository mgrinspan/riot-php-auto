# TournamentV5TournamentCodeUpdateParametersV5

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed_participants** | **string[]** | Optional list of encrypted puuids in order to validate the players eligible to join the lobby. NOTE: We currently do not enforce participants at the team level, but rather the aggregate of teamOne and teamTwo. We may add the ability to enforce at the team level in the future. | [optional] 
**pick_type** | **string** | The pick type              (Legal values:  BLIND_PICK,  DRAFT_MODE,  ALL_RANDOM,  TOURNAMENT_DRAFT) | 
**map_type** | **string** | The map type              (Legal values:  SUMMONERS_RIFT,  HOWLING_ABYSS) | 
**spectator_type** | **string** | The spectator type              (Legal values:  NONE,  LOBBYONLY,  ALL) | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


