# MatchV5ParticipantDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**all_in_pings** | **int** | Yellow crossed swords | [optional] 
**assist_me_pings** | **int** | Green flag | [optional] 
**assists** | **int** |  | 
**baron_kills** | **int** |  | 
**bounty_level** | **int** |  | 
**champ_experience** | **int** |  | 
**champ_level** | **int** |  | 
**champion_id** | **int** | Prior to patch 11.4, on Feb 18th, 2021, this field returned invalid championIds. We recommend determining the champion based on the championName field for matches played prior to patch 11.4. | 
**champion_name** | **string** |  | 
**command_pings** | **int** | Blue generic ping (ALT+click) | [optional] 
**champion_transform** | **int** | This field is currently only utilized for Kayn&#39;s transformations. (Legal values: 0 - None, 1 - Slayer, 2 - Assassin) | 
**consumables_purchased** | **int** |  | 
**challenges** | [**\Swagger\Client\Model\MatchV5ChallengesDto**](MatchV5ChallengesDto.md) |  | [optional] 
**damage_dealt_to_buildings** | **int** |  | [optional] 
**damage_dealt_to_objectives** | **int** |  | 
**damage_dealt_to_turrets** | **int** |  | 
**damage_self_mitigated** | **int** |  | 
**deaths** | **int** |  | 
**detector_wards_placed** | **int** |  | 
**double_kills** | **int** |  | 
**dragon_kills** | **int** |  | 
**eligible_for_progression** | **bool** |  | [optional] 
**enemy_missing_pings** | **int** | Yellow questionmark | [optional] 
**enemy_vision_pings** | **int** | Red eyeball | [optional] 
**first_blood_assist** | **bool** |  | 
**first_blood_kill** | **bool** |  | 
**first_tower_assist** | **bool** |  | 
**first_tower_kill** | **bool** |  | 
**game_ended_in_early_surrender** | **bool** | This is an offshoot of the OneStone challenge. The code checks if a spell with the same instance ID does the final point of damage to at least 2 Champions. It doesn&#39;t matter if they&#39;re enemies, but you cannot hurt your friends. | 
**game_ended_in_surrender** | **bool** |  | 
**hold_pings** | **int** |  | [optional] 
**get_back_pings** | **int** | Yellow circle with horizontal line | [optional] 
**gold_earned** | **int** |  | 
**gold_spent** | **int** |  | 
**individual_position** | **string** | Both individualPosition and teamPosition are computed by the game server and are different versions of the most likely position played by a player. The individualPosition is the best guess for which position the player actually played in isolation of anything else. The teamPosition is the best guess for which position the player actually played if we add the constraint that each team must have one top player, one jungle, one middle, etc. Generally the recommendation is to use the teamPosition field over the individualPosition field. | 
**inhibitor_kills** | **int** |  | 
**inhibitor_takedowns** | **int** |  | [optional] 
**inhibitors_lost** | **int** |  | [optional] 
**item0** | **int** |  | 
**item1** | **int** |  | 
**item2** | **int** |  | 
**item3** | **int** |  | 
**item4** | **int** |  | 
**item5** | **int** |  | 
**item6** | **int** |  | 
**items_purchased** | **int** |  | 
**killing_sprees** | **int** |  | 
**kills** | **int** |  | 
**lane** | **string** |  | 
**largest_critical_strike** | **int** |  | 
**largest_killing_spree** | **int** |  | 
**largest_multi_kill** | **int** |  | 
**longest_time_spent_living** | **int** |  | 
**magic_damage_dealt** | **int** |  | 
**magic_damage_dealt_to_champions** | **int** |  | 
**magic_damage_taken** | **int** |  | 
**missions** | [**\Swagger\Client\Model\MatchV5MissionsDto**](MatchV5MissionsDto.md) |  | [optional] 
**neutral_minions_killed** | **int** | neutralMinionsKilled &#x3D; mNeutralMinionsKilled, which is incremented on kills of kPet and kJungleMonster | 
**need_vision_pings** | **int** | Green ward | [optional] 
**nexus_kills** | **int** |  | 
**nexus_takedowns** | **int** |  | [optional] 
**nexus_lost** | **int** |  | [optional] 
**objectives_stolen** | **int** |  | 
**objectives_stolen_assists** | **int** |  | 
**on_my_way_pings** | **int** | Blue arrow pointing at ground | [optional] 
**participant_id** | **int** |  | 
**player_score0** | **int** |  | [optional] 
**player_score1** | **int** |  | [optional] 
**player_score2** | **int** |  | [optional] 
**player_score3** | **int** |  | [optional] 
**player_score4** | **int** |  | [optional] 
**player_score5** | **int** |  | [optional] 
**player_score6** | **int** |  | [optional] 
**player_score7** | **int** |  | [optional] 
**player_score8** | **int** |  | [optional] 
**player_score9** | **int** |  | [optional] 
**player_score10** | **int** |  | [optional] 
**player_score11** | **int** |  | [optional] 
**penta_kills** | **int** |  | 
**perks** | [**\Swagger\Client\Model\MatchV5PerksDto**](MatchV5PerksDto.md) |  | 
**physical_damage_dealt** | **int** |  | 
**physical_damage_dealt_to_champions** | **int** |  | 
**physical_damage_taken** | **int** |  | 
**placement** | **int** |  | [optional] 
**player_augment1** | **int** |  | [optional] 
**player_augment2** | **int** |  | [optional] 
**player_augment3** | **int** |  | [optional] 
**player_augment4** | **int** |  | [optional] 
**player_subteam_id** | **int** |  | [optional] 
**push_pings** | **int** | Green minion | [optional] 
**profile_icon** | **int** |  | 
**puuid** | **string** |  | 
**quadra_kills** | **int** |  | 
**riot_id_game_name** | **string** |  | [optional] 
**riot_id_name** | **string** |  | [optional] 
**riot_id_tagline** | **string** |  | 
**role** | **string** |  | 
**sight_wards_bought_in_game** | **int** |  | 
**spell1_casts** | **int** |  | 
**spell2_casts** | **int** |  | 
**spell3_casts** | **int** |  | 
**spell4_casts** | **int** |  | 
**subteam_placement** | **int** |  | [optional] 
**summoner1_casts** | **int** |  | 
**summoner1_id** | **int** |  | 
**summoner2_casts** | **int** |  | 
**summoner2_id** | **int** |  | 
**summoner_id** | **string** |  | 
**summoner_level** | **int** |  | 
**summoner_name** | **string** |  | 
**team_early_surrendered** | **bool** |  | 
**team_id** | **int** |  | 
**team_position** | **string** | Both individualPosition and teamPosition are computed by the game server and are different versions of the most likely position played by a player. The individualPosition is the best guess for which position the player actually played in isolation of anything else. The teamPosition is the best guess for which position the player actually played if we add the constraint that each team must have one top player, one jungle, one middle, etc. Generally the recommendation is to use the teamPosition field over the individualPosition field. | 
**time_c_cing_others** | **int** |  | 
**time_played** | **int** |  | 
**total_ally_jungle_minions_killed** | **int** |  | [optional] 
**total_damage_dealt** | **int** |  | 
**total_damage_dealt_to_champions** | **int** |  | 
**total_damage_shielded_on_teammates** | **int** |  | 
**total_damage_taken** | **int** |  | 
**total_enemy_jungle_minions_killed** | **int** |  | [optional] 
**total_heal** | **int** | Whenever positive health is applied (which translates to all heals in the game but not things like regeneration), totalHeal is incremented by the amount of health received. This includes healing enemies, jungle monsters, yourself, etc | 
**total_heals_on_teammates** | **int** | Whenever positive health is applied (which translates to all heals in the game but not things like regeneration), totalHealsOnTeammates is incremented by the amount of health received.  This is post modified, so if you heal someone missing 5 health for 100 you will get +5 totalHealsOnTeammates | 
**total_minions_killed** | **int** | totalMillionsKilled &#x3D; mMinionsKilled, which is only incremented on kills of kTeamMinion, kMeleeLaneMinion, kSuperLaneMinion, kRangedLaneMinion and kSiegeLaneMinion | 
**total_time_cc_dealt** | **int** |  | 
**total_time_spent_dead** | **int** |  | 
**total_units_healed** | **int** |  | 
**triple_kills** | **int** |  | 
**true_damage_dealt** | **int** |  | 
**true_damage_dealt_to_champions** | **int** |  | 
**true_damage_taken** | **int** |  | 
**turret_kills** | **int** |  | 
**turret_takedowns** | **int** |  | [optional] 
**turrets_lost** | **int** |  | [optional] 
**unreal_kills** | **int** |  | 
**vision_score** | **int** |  | 
**vision_cleared_pings** | **int** |  | [optional] 
**vision_wards_bought_in_game** | **int** |  | 
**wards_killed** | **int** |  | 
**wards_placed** | **int** |  | 
**win** | **bool** |  | 
**bait_pings** | **int** |  | [optional] 
**danger_pings** | **int** | https://github.com/RiotGames/developer-relations/issues/870 | [optional] 
**basic_pings** | **int** | https://github.com/RiotGames/developer-relations/issues/814 | [optional] 
**player_augment5** | **int** |  | [optional] 
**player_augment6** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


