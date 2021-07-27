<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function get(Request $request, $id)
    {
        $product = Transaction::with('details.product')->find($id);

        if($product)
            return ResponseFromatter::success($product, 'Data Transaksi berhasil diambil');
        else
            return ResponseFromatter::error(null, 'Data Transaksi tidak ada', 404);
    }
}
