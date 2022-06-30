<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCollegeRequest;

class CollegeController extends Controller
{
    public function index() {

        $colleges = College::where('status','=',true)->where('name','!=','None')->get();
        return view('college.index')->with('colleges', $colleges);
    }

    public function create() {
        return view('college.create');
    }

    public function store(StoreCollegeRequest $request) {

        College::create($request->validated());
        return redirect()->route(route:'college.index');

    }

    public function edit(College $college) {
        return view('college.edit')->with('college',$college);
    }

    public function update(StoreCollegeRequest $request, College $college) {

        $college->update($request->validated());
        return redirect()->route(route:'college.index');

    }

    public function destroy(College $college) {

        $college->delete();
        return redirect()->route(route:'college.index');

    }
}
