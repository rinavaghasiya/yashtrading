<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class SubCategory extends Authenticatable
{
    use Notifiable;

    public $table = 'subcategory';
   
   protected $guard = 'table';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'cid','subcname',
    ];


    public function product() {
        return $this->hasMany('App\Product','scid','id');
    } 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
