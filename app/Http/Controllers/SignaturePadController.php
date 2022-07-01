<?php

namespace App\Http\Controllers;

use App\Models\Signage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignaturePadController extends Controller
{
    public function index(){
        return view('signature.index');
    }

    public function store(Request $request){

        $folderPath = public_path('signature/');
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $unique = uniqid();
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . $unique . '.'.$image_type;
        file_put_contents($file, $image_base64);

        Signage::create([
            'user_id' => Auth::user()->id,
            'signature_name' =>  $unique. '.'.$image_type,
        ]);
        return back()->with('success', 'success Full upload signature');
    }
}
