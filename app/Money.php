<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
	protected $table = 'money';
    protected $fillable = [
        'user_id' ,'money', 'content',
    ];
}
