<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use Illuminate\Validation\Rule;

class DivisionController extends Controller
{

    //Creates new Division//
    public function addDivision(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255', 'unique:divisions'],
            'head' => ['required', 'string'],
            'duty' => ['required', 'string'],
        ]);
        
        $division = new Division();
        $division->name = $request->input('name');
        $division->code = $request->input('code');
        $division->head = $request->input('head');
        $division->duty = $request->input('duty');
        $division->save();
        return redirect()->route('admin.divtable')->with('success','Division has been created!');
        
    }

    //Prints all table in the html
    public function index(){
        $divisions = Division::all();
        return view('admin.divtable', ['divisions' => $divisions]);   
    }

    //Updates Division//
    public function updateDivision(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['sometimes', 'nullable', 'string', 'max:255', Rule::unique('divisions')->ignore($request->input('id')),],
            'head' => ['required', 'string'],
            'duty' => ['required', 'string'],
        ]);
        
        $division = Division::FindOrFail($request->input('id'));
        $division->name = $request->input('name');
        $division->code = $request->input('code');
        $division->head = $request->input('head');
        $division->duty = $request->input('duty');
        $division->save();
        return redirect()->route('admin.divtable')->with('success','Division has been updated!');
    }

    //Deletes Division//
    public function destroyDivision(Request $request){
        
        $divisionId = $request->input('id');
        Division::destroy($divisionId);
        return redirect()->route('admin.divtable')->with('success','Division has been deleted!');
    }

}
