<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webquest extends Model
{
    protected $table = "webquests";
    protected $fillable = array("thema");
}
