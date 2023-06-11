<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function index(Request $request) {
      $userId = Auth::id();
      $user = User::with('invoices')->find($userId);
      $invoices = $user->invoices;
      return view('invoice.index', compact('invoices'));
    }


    public  function create(Request $request) {
        $invoiceNumber = $request->input('invoiceNumber');
        $invoiceDate = $request->input('invoiceDate');
        $invoiceDueDate = $request->input('invoiceDueDate');
        $invoiceStatus = $request->input('invoiceStatus');

        $invoice = new Invoice();
        $user = Auth::user();
        $invoice->invoice_number = $invoiceNumber;
        $invoice->invoice_date = $invoiceDate;
        $invoice->invoice_due_date = $invoiceDueDate;
        $invoice->invoice_status = $invoiceStatus;
        $invoice->save();
        return redirect()->route('index');
    }
    public function   update() {

    }
    public  function  edit() {

    }
    public  function delete() {

    }
}
