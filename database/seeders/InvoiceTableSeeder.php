<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoice;
class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Logic
        $invoices = [
            [
             'user_id' => 1,
           
                'invoice_number' => 'INV-2021-0001',
                'invoice_date' => '2021-06-10',
                'invoice_due_date' => '2021-01-20',
                'invoice_status' => 'unpaid',
            ],
            [
                'user_id' => 1,
                   'invoice_number' => 'INV-2021-0002',
                   'invoice_date' => '2021-06-10',
                   'invoice_due_date' => '2021-02-20',
                   'invoice_status' => 'unpaid',
            ],
            [
                'user_id' => 1,
               
                   'invoice_number' => 'INV-2021-0003',
                   'invoice_date' => '2021-06-10',
                   'invoice_due_date' => '2021-06-10',
                   'invoice_status' => 'unpaid',
               ]
            ];

        foreach ($invoices as $invoice) {
            Invoice::create($invoice);
        }
    }
}
