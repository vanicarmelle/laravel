<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentInfo;

class studentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //echo "Test";
       $studentinfo = studentInfo::all();
       return view('students.index',compact('studentinfo'));
        // ADDING
        // echo "TEST";
        // $studentinfo = new studentinfo();

        // $studentinfo ->idNo = "C19-0210";
        // $studentinfo ->firstName = "test222";
        // $studentinfo ->middleName = "test2222";
        // $studentinfo ->lastName = "test3222";
        // $studentinfo ->suffix = "";
        // $studentinfo ->course = "BSIT";
        // $studentinfo ->year = "3";
        // $studentinfo ->birthday = "2000-12-21";
        // $studentinfo ->gender = "Female";

        // $studentinfo->save();

        // echo "Student Information Successfully saved in the database";
// --------------------------------------------------------------------------
        //Delete 
        // find() -- using the field name 'id' (default)
        // where() -- using another field name
        // SELECT * FROM studenInfo WHERER sNO = 2
        // --------------------------------
        // $studentinfo = studentinfo::where('sNO', 2);
        // $studentinfo->delete();
        // echo "Student Information Successfully delete in the database";

// -----------------------------------------------------------------------
        // //UPDATE RECORD ON DATABASE
        // $studentinfo = studentinfo::where('sNo',1)->update(['firstName'=> 'Carms Caps']);
        // // $studentinfo->save();
        // echo "Student Information Successfully update in the database";

        //RETRIEVE RECORDS
        // $studentinfo = studentinfo::all();
        // return $studentinfo;
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
        //
        $validatedData = $request->validate([
            'xidNo' => ['required', 'max:8'],
            'xfirstName' => ['required', 'max:20'],
            'middleName' => ['max:15'],
            'xlastName' => ['required', 'max:15'],
            'xsuffix' => ['nullable', 'max:5'],
            'xcourse' => ['required', 'max:15'],
            'xyear' => ['required', 'max:8'],
            'xbirthDate' => ['required', 'date'],
            'xgender' => ['required'],
        ]);
        

   

        $studentinfo= new studentinfo();
        $studentinfo->idNo = $request->xidNo;
        $studentinfo->firstName = $request->xfirstName;
        $studentinfo->middleName = $request->xmiddleName;
        $studentinfo->lastName = $request->xlastName;
        $studentinfo->suffix = $request->xsuffix;
        $studentinfo->course = $request->xcourse;
        $studentinfo->year = $request->xyear;
        $studentinfo->birthDate = $request->xbirthDate;
        $studentinfo->gender = $request->xgender;
        $studentinfo->save();
        return redirect()->route('students');

        echo $request->xidNo;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //echo "Test";
        $studentInfo = studentInfo::where('sNo', $id)->get();
        return view('students.show', compact('studentInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
