<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('pages.admin.transactions.order', compact('transactions'));
    }
    
    public function destroy(string $order_id)
    {
    $transaction = Transaction::where('order_id', $order_id)->firstOrFail();
    $transaction->delete();
    return redirect()->route('admin.transactions.index')->with('success', 'Transaction deleted successfully!');
    }

}
