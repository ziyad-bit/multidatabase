<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends \Eloquent
{
    use HasFactory ;
    use Uuid;

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'db',
    ];

    protected $primaryKey = 'uuid';

    ############################   comment relation db 1 ######################
    public function comments_db_1_eco1()
    {
        return $this->setConnection('mysql1')->hasMany('App\Models\Comment', "item_id_db_1");
    }

    public function comments_db_2_eco1()
    {
        return $this->setConnection('mysql1')->hasMany('App\Models\Comment', "item_id_db_2");
    }

    public function comments_db_3_eco1()
    {
        return $this->setConnection('mysql1')->hasMany('App\Models\Comment', "item_id_db_3");
    }

    ############################   comment relation db 2 ######################
    public function comments_db_1_eco2()
    {
        return $this->setConnection('mysql2')->hasMany('App\Models\Comment', "item_id_db_1");
    }

    public function comments_db_2_eco2()
    {
        return $this->setConnection('mysql2')->hasMany('App\Models\Comment', "item_id_db_2");
    }

    public function comments_db_3_eco2()
    {
        return $this->setConnection('mysql2')->hasMany('App\Models\Comment', "item_id_db_3");
    }

    ############################   comment relation db 3 ######################
    public function comments_db_1_eco3()
    {
        return $this->setConnection('mysql3')->hasMany('App\Models\Comment', "item_id_db_1");
    }

    public function comments_db_2_eco3()
    {
        return $this->setConnection('mysql3')->hasMany('App\Models\Comment', "item_id_db_2");
    }

    public function comments_db_3_eco3()
    {
        return $this->setConnection('mysql3')->hasMany('App\Models\Comment', "item_id_db_3");
    }
    ############################     user relation    ######################
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
