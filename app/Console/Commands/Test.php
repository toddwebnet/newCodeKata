<?php

namespace App\Console\Commands;

use App\Models\CustomerDemographic;
use App\Models\Employee;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Test extends Command
{
    protected $signature = 'test';

    public function handle()
    {
        dd(

DB::select('select * from CustomerCustomerDemo')
//        DB::select("
//        SELECT
//    name
//FROM
//    sqlite_master
//WHERE
//    type ='table' AND
//    name NOT LIKE 'sqlite_%';
//        ")
        );
    }

}
/**
 * array:13 [
 * 0 => {#535
 * +"name": "Employee"
 * }
 * 1 => {#537
 * +"name": "Category"
 * }
 * 2 => {#538
 * +"name": "Customer"
 * }
 * 3 => {#539
 * +"name": "Shipper"
 * }
 * 4 => {#540
 * +"name": "Supplier"
 * }
 * 5 => {#541
 * +"name": "Order"
 * }
 * 6 => {#542
 * +"name": "Product"
 * }
 * 7 => {#543
 * +"name": "OrderDetail"
 * }
 * 8 => {#544
 * +"name": "CustomerCustomerDemo"
 * }
 * 9 => {#545
 * +"name": "CustomerDemographic"
 * }
 * 10 => {#546
 * +"name": "Region"
 * }
 * 11 => {#547
 * +"name": "Territory"
 * }
 * 12 => {#548
 * +"name": "EmployeeTerritory"
 * }
 * ]
 */