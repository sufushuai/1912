<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AddressModel extends Model
{
    protected $table="shop_user_address";
    protected $primaryKey="add_id";
    public $timestamps=false;
}
