<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Logbook;
use App\Models\Student;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Logbook $logbook)
    {
        return view('absences.create', compact('logbook'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Student $student, Logbook $logbook)
    {
        $absence = new Absence();
        $absence->student_id = $student->id;
        $absence->logbook_id = $logbook->id;
        $absence->save();
        return redirect('absences/create/'.$logbook->id);
    }

    public function unstore(Student $student, Logbook $logbook)
    {
        $absence = Absence::where(['student_id'=>$student->id, 'logbook_id'=>$logbook->id])->first();
        $absence->delete();
        return redirect('absences/create/'.$logbook->id);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function show(Absence $absence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function edit(Absence $absence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absence $absence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absence $absence)
    {
        //
    }
}
