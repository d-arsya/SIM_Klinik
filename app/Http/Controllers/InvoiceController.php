<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Menampilkan daftar semua invoice.
     */
    public function list()
    {
        return view('invoice.list_invoice');
    }

    /**
     * Menampilkan detail dari satu invoice.
     */
    public function detail(string $id)
    {
        return view('invoice.cetak_invoice');
    }

    /**
     * Menampilkan halaman untuk mencetak atau melihat invoice tertentu.
     */
    public function cetak(string $id)
    {
        return view('invoice.cetak_invoice', compact('id'));
    }
}
