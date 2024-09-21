# TournamentStubV5TournamentCodeParametersV5

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed_participants** | **string[]** | Optional list of encrypted puuids in order to validate the players eligible to join the lobby. NOTE: We currently do not enforce participants at the team level, but rather the aggregate of teamOne and teamTwo. We may add the ability to enforce at the team level in the future. | [optional] 
**metadata** | **string** | Optional string that may contain any data in any format, if specified at all. Used to denote any custom information about the game. | [optional] 
**team_size** | **int** | The team size of the game. Valid values are 1-5. | 
**pick_type** | **string** | The pick type of the game.              (Legal values:  BLIND_PICK,  DRAFT_MODE,  ALL_RANDOM,  TOURNAMENT_DRAFT) | 
**map_type** | **string** | The map type of the game.              (Legal values:  SUMMONERS_RIFT,  HOWLING_ABYSS) | 
**spectator_type** | **string** | The spectator type of the game.              (Legal values:  NONE,  LOBBYONLY,  ALL) | 
**enough_players** | **bool** | Checks if allowed participants are enough to make full teams. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


