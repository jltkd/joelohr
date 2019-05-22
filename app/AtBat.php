<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtBat extends Model
{
    const SINGLE = 'Single';
    const DOUBLE = 'Double';
    const TRIPLE = 'Triple';
    const HOMERUN = 'Home Run';
    const WALK = 'Walk';
    const STRIKEOUT = 'Strikeout';
    const HITBYPITCH = 'Hit by Pitch';

    public static function getOutcome()
    {
        return [
            self::SINGLE => self::SINGLE,
            self::DOUBLE => self::DOUBLE,
            self::TRIPLE => self::TRIPLE,
            self::HOMERUN => self::HOMERUN,
            self::WALK => self::WALK,
            self::STRIKEOUT => self::STRIKEOUT,
            self::HITBYPITCH => self::HITBYPITCH,
        ];
    }

    protected $dates = [
        'date',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
