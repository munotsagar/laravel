<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Eloquent;

class Statement extends Eloquent
{
    protected $collection = 'statements';
    protected $hidden = ['_id', 'created_at', 'updated_at'];
    protected $fillable = ['statement', 'active', 'voided', 'refs', 'lrs_id', 'timestamp', 'stored'];
}
