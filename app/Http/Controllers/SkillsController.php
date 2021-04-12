<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Skills\createSkillRequest;
use App\Services\candidateService;
use App\Services\skillService;
use Exception;
use Session;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $candidates = ( new candidateService )->all();
        return view('skills.list')->with('candidates',$candidates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createSkillRequest $request)
    {
        try {
            
            $candidate = new candidateService();
            $newCandidateId = $candidate->save( $request->name, $request->age, $request->gender);

            $skill = new skillService();
            $skill->save( $newCandidateId, $request->languages );

            Session::put('msg_s','Candidate details have been saved!');
            return redirect( route('skills.index') );

        } catch (Exception $e) {
            return abort(404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
