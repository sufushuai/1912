<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderGoodsModel extends Model
{
    protected $table="shop_order_goods";
    protected $primaryKey="order_goods_id";
    public $timestamps=false;
    protected $fillable = ['*'];
}
