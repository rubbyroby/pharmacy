<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Http\Requests\StorememberRequest;
use App\Http\Requests\UpdatememberRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addMember(Request $req)
    {
        $member = new member;
        $member->first_name= $req->first_name;
        $member->last_name= $req->last_name;
        $member->email= $req->email;
        $member->tel= $req->tel;
        $member->pass= Hash::make($req->pass);
        $imageName=time().'.'.$req->pic->extension();
        $member->pic=$imageName; 
        $req->pic->move(public_path('import/images'), $imageName);
        $member->save();
        return redirect()->route('Home');
        
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
    public function store(StorememberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatememberRequest $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(member $member)
    {
        //
    }
}
