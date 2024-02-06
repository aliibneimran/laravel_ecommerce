<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['order_number','user_id','sub_total','shipping_id','total_amount','quantity','first_name','email','phone','address1'];
}

// Full texts
// id	
// order_number	
// user_id	
// sub_total	
// shipping_id	
// coupon	
// total_amount	
// quantity	
// payment_method	
// payment_status	
// status	
// first_name	
// last_name	
// email	
// phone	
// country	
// post_code	
// address1	
// address2	
// created_at	
// updated_at