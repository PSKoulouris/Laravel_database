<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;



class JoinController extends Controller
{
    public function saveJoin (Request $request) {
        Log::info(json_encode($request->all()))

        try {
            //Begin transaction:
            DB::beginTransaction();

            //Save data to databse:
            DB::commit();
            //Stay on page:
            return redirect("/savemgt");

        } catch (Exception $e){

            //Cancel transaction:
            DB::rollBack();
            //Log error
            Log::error("Transaction rolledback due to an error: " . $e->getMessage());
            //redirect to page error message:
            return back()->withErrors("An error occured during transaction saveJoin");

        }
    }
}
