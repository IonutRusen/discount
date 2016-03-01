<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'company_name',
        'company_address',
        'company_city',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
