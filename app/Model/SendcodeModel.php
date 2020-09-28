<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SendcodeModel extends Model
{
    protected $table="shop_tel_verify";
    protected $primaryKey="id";
    public $timestamps=false;
}
