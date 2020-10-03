<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SkuAttrModel extends Model
{
    protected $table="sku_attr";
    protected $primaryKey="attr_id";
    public $timestamps=false;
    protected $guarded=[];
    protected $fillable = ['*'];
}
