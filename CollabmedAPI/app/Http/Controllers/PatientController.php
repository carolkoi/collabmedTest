<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::get();

        return response()->json(['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {
        $patient =  Patient::create([
            'name' => $data['fullname'],
            'phone' => $data['phone'],
            'referred_by' => $data['checked_in_by'],
            'referred_to' => $data['referred_department'],
        ]);
        // dd($user);
        return response()
            ->json(['patient' => $patient]);
    }
     public  function fetchPatientById($id)
    {
        
        $patient = Patient::find($id);
        

        return response()->json(['patient' => $patient]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data)
    {
        $patient = Patient::find($data['patient_id']);
        $patient->treated_by = $data['treated_by'];
        $patient->diagnosis_notes = $data['diagnosis_notes'];
        $patient->treatment_notes = $data['treatment_notes'];
        $patient->save();

        return response()
            ->json(['patient' => $patient]);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function referral(Request $data)
    {
        $patient = Patient::find($data['patient_id']);
        $patient->isReferred = 1;
        $patient->save();
        return response()
        ->json(['patient' => $patient]);


    }
}
