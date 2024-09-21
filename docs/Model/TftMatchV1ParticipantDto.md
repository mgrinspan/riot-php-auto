# TftMatchV1ParticipantDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**companion** | [**\Swagger\Client\Model\TftMatchV1CompanionDto**](TftMatchV1CompanionDto.md) | Participant&#39;s companion. | 
**gold_left** | **int** | Gold left after participant was eliminated. | 
**last_round** | **int** | The round the participant was eliminated in. Note: If the player was eliminated in stage 2-1 their last_round would be 5. | 
**level** | **int** | Participant Little Legend level. Note: This is not the number of active units. | 
**placement** | **int** | Participant placement upon elimination. | 
**players_eliminated** | **int** | Number of players the participant eliminated. | 
**puuid** | **string** |  | 
**time_eliminated** | **float** | The number of seconds before the participant was eliminated. | 
**total_damage_to_players** | **int** | Damage the participant dealt to other players. | 
**traits** | [**\Swagger\Client\Model\TftMatchV1TraitDto[]**](TftMatchV1TraitDto.md) | A complete list of traits for the participant&#39;s active units. | 
**units** | [**\Swagger\Client\Model\TftMatchV1UnitDto[]**](TftMatchV1UnitDto.md) | A list of active units for the participant. | 
**augments** | **string[]** |  | [optional] 
**partner_group_id** | **int** |  | [optional] 
**missions** | [**\Swagger\Client\Model\TftMatchV1ParticipantMissionsDto**](TftMatchV1ParticipantMissionsDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


