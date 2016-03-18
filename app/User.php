<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    public function profile(){
        return $this->HasOne('App\Profile');
    }
    public function isAdmin()
    {
        return $this->admin; // this looks for an admin column in your users table
    }
}
