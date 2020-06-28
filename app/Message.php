<?php

// can perform sql queries
// can store business logic
namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // To allow mass assignment of table rows
    protected $guarded = [];

}
