<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Appointments extends Authenticatable
{
    use Notifiable;
    protected $table = 'appointments';
}
