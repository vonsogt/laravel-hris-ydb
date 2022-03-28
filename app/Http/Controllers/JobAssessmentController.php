<?php

namespace App\Http\Controllers;

use App\Models\JobAssessment;
use App\Http\Requests\StoreJobAssessmentRequest;
use App\Http\Requests\UpdateJobAssessmentRequest;

class JobAssessmentController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobAssessmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobAssessmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobAssessment  $jobAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(JobAssessment $jobAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobAssessment  $jobAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit(JobAssessment $jobAssessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobAssessmentRequest  $request
     * @param  \App\Models\JobAssessment  $jobAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobAssessmentRequest $request, JobAssessment $jobAssessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobAssessment  $jobAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobAssessment $jobAssessment)
    {
        //
    }
}
