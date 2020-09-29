<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PerinfoModel extends Model
{
    protected $table="shop_user_info";
    protected $primaryKey="info_id";
    public $timestamps=false;
}
