<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
  
    public function export_invoice()
    {
        return view('admin.invoices.export');
    }
    public function invoice_list()
    {
        return view('admin.invoices.invoice_list');
    }
    public function announcements_list()
    {
        return view('admin.announcements');
    }
}
