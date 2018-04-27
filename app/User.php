<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User  extends \Jenssegers\Mongodb\Eloquent\Model
{
    protected $collection = 'users';     
}
    ?>