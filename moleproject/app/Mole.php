<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mole extends Model
{
    protected $table = 'mole';
        protected $fillable = [
        'name', 'age', 'mother','mobile','ident','time_arrive','play_num','game_sellect',
    ];
}
