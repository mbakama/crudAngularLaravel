<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Employees::all();

        if ($all) {
            return response()->json(
                
            [
                "data"=>$all
            ]);
        } else {
            return response()->json(
                [
                    "status"=>"il ny a rien"
                ]
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required'
        ]);

        // $insert = Employees::create($request->all());

        $data = new Employees([
            'nom'=>$request->input("nom"),
            'prenom'=>$request->input("prenom")
        ]);

        $data->save(); 
        return response()->json("data stored");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $find = Employees::find($id);
        
        return response()->json([
            "data"=>$find
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required'
        ]);
        Employees::find($id)->update($request->all());
        return response()->json("data updated");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($employee)
    {
        $delete = Employees::find($employee);
        $delete->delete();

        return [
            "donnees efface avec success"
        ];
    }
}
