<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',

        'user_id_db_1',
        'user_id_db_2',
        'user_id_db_3',

        'item_id_db_1',
        'item_id_db_2',
        'item_id_db_3',
    ];

    protected $primaryKey = 'uuid';

    ############################     user relation    ######################
    public function user_db_1()
    {
        return $this->belongsTo('App\Models\User','user_id_db_1');
    }

    public function user_db_2()
    {
        return $this->belongsTo('App\Models\User','user_id_db_2');
    }

    public function user_db_3()
    {
        return $this->belongsTo('App\Models\User','user_id_db_3');
    }



    public function item_db_1()
    {
        return $this->belongsTo('App\Models\Item','item_id_db_1');
    }

    public function item_db_2()
    {
        return $this->belongsTo('App\Models\Item','item_id_db_2');
    }

    public function item_db_3()
    {
        return $this->belongsTo('App\Models\Item','item_id_db_3');
    }
}
