<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FileUserInput;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    //

    public function index() {
        return view('file.index');
    }

    public function store(Request $request) {
        if($request->has(key:'files')) {


            $path = public_path('files/'). '/'.Auth::user()->id;
            $pathDir = 'files/'. '/'.Auth::user()->id;
            if(!File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            foreach($request->file('files') as $file) {
                $fileName = time().rand(1,1000).'.'.$file->extension();
                $file->move($path, $fileName);

                $file1 = $file->getClientOriginalName();
                $filename1 = pathinfo($file1, PATHINFO_FILENAME);
                $extension = pathinfo($file1, PATHINFO_EXTENSION);

                FileUserInput::create([
                    'user_id' => Auth::user()->id,
                    'name' => $fileName,
                    'location' => $pathDir,
                    'truename' => $filename1,
                    'extension'=> $extension
                ]);
            }

            return redirect()->route(route:'file.index')->with('success','File Uploaded Succesfully');
        }
    }

    public function show($id) {
        $files = FileUserInput::where('user_id','=',$id)->get();
        return view('file.show')->with('files', $files);
    }

    public function destroy($id) {

        $file = FileUserInput::findorfail($id);
        $destinationPath = public_path('files/').$file->user_id;
        File::delete($destinationPath.'/'.$file->name);

        $file->delete();

        return redirect()->route(route:'file.show',parameters:$file->user_id);
    }
}
