<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CollectModel extends Model
{
    protected $table="shop_collect";
    protected $primaryKey="col_id";
    public $timestamps=false;
}
