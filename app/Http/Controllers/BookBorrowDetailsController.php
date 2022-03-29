<?php

namespace App\Http\Controllers;

use App\Models\BookBorrowDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class BookBorrowDetailsController extends Controller
{

    public function detail($id){
        $detail = BookBorrowDetails::where('book_borrow_id', $id)->with(['book'])->get();
        if($detail){
            return Response()->json($detail);
        }else {
            return Response()->json(['message'=>'Couldnt find the data']);
        }
    }
    //read data end
}
