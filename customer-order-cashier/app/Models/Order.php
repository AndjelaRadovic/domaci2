<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['food','price','customer_name'];
    public function cashier(){

        return $this->belongsTo(Cashier::class); 
      }
      
      public function customer(){
  
          return $this->belongsTo(Customer::class); 
      }
}
