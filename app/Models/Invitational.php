<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitational extends Model
{
    use HasFactory;

    // Ang pangalan ng table sa database
    protected $table = 'invitational';

    // Kung nais mong hayaan ang mass assignment para sa mga fields
    protected $fillable = [
        'cluster',
        'logo',
        'best_in_parade',
        'banner_pulling',
        'cheerdance',
        'tag_of_war_men',
        'tag_of_war_women',
        'sack_race_men',
        'sack_race_women',
        'bakya_men',
        'bakya_women',
        'basketball_men',
        'basketball_women',
        'dance_sports',
        'badminton_men',
        'badminton_women',
        'badminton_mixed',
        'chess_men',
        'chess_women',
        'dart_men',
        'dart_women',
        'dart_mixed',
        'mr_civil_service',
        'miss_civil_service',
        'table_tennis_men',
        'table_tennis_women',
        'table_tennis_mixed',
        'volleyball_men',
        'volleyball_women',
        'additional_points',
    ];
}
