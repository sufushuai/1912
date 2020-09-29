<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SkuAttrValModel extends Model
{
    protected $table="sku_attr_val";
    protected $primaryKey="attr_val_id";
    public $timestamps=false;
    protected $guarded=[];
    protected $fillable = ['*'];
}
