<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTenant extends Model
{
    protected $table = 'mst_menu';
    protected $primaryKey = 'id_menu';
    public $timestamps = false;
}
