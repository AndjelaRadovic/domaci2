<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Cashier;
use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();
        Cashier::truncate();
        Order::truncate();


        $cashier1=Cashier::create(['name'=>'Marko','cash_register_number'=>'5']);
        $cashier2=Cashier::create(['name'=>'Katarina','cash_register_number'=>'3']);

        $customer1=Customer::create(['name'=>'Maja','contact'=>'0655467888']);
        $customer2=Customer::create(['name'=>'Pavle','contact'=>'0634422333']);
        $customer3=Customer::create(['name'=>'Ana','contact'=>'0619900111']);

        $order1=Order::create([
        'food'=>'burger',
        'price'=>'159.99',
        'customer_id'=>$customer1->id,
        'cashier_id'=>$cashier2->id
        ]);
        
        $order2=Order::create([
        'food'=>'pizza',
        'price'=>'199.99',
        'customer_id'=>$customer2->id,
        'cashier_id'=>$cashier2->id
        ]);
        
        $order3=Order::create([
        'food'=>'fries',
        'price'=>'189.99',
        'customer_id'=>$customer3->id,
        'cashier_id'=>$cashier1->id
        ]);
        
        $order4=Order::create([
        'food'=>'pasta',
        'price'=>'219.99',
        'customer_id'=>$customer2->id,
        'cashier_id'=>$cashier2->id
        ]);
        
       





    }
}
