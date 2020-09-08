<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatBot extends Model
{
    protected $fillable = [
        'label', 'answer', 'next_action'
       ];
}
