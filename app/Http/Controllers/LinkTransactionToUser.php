<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkTransactionToUser extends Controller
{
    /**
     * Link the transaction to the user account who is logged in
     */
    public function __invoke(Request $request)
    {
        $transaction = Transaction::findByUuid($request->uuid);
        $transaction->created_by = Auth::user()->id;
        $transaction->save();

        // clear the session cookie

        return redirect("/dashboard")->with("status", "Transaction successfully linked to your account");
    }
}