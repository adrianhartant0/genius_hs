<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListrikMeter extends Model
{
    protected $table = 'mst_unit_apart';
    protected $primaryKey = 'id_unit_apart';
    public $timestamps = false;
}
