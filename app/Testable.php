<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Testable extends Model
{
    //
    use Notifiable;

    protected $fillable = ['id', 'articles_id', 'con', 'created_at', 'updated_at'];
}
