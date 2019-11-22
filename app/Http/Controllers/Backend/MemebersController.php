<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Memeber;
use App\Http\Requests\Backend\Members\MemberRequest;
use App\Helpers\SamirzImage;
use App\Http\Requests\Backend\Members\MemberRequestPUT;

class MemebersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Memeber::all();

        return view('backend.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        Memeber::create($request->all());
        
        session()->flash('success', 'The Member Added Successfully!');
        return back();
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
        $member = Memeber::findOrFail($id);

        return view('backend.members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequestPUT $request, $id)
    {
        $member = Memeber::findOrFail($id);

        $member->update($request->all());
        $member->save();

        session()->flash('success', 'Member Updated Successfully!');
        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Memeber::findOrFail($id);
        
        $image = $member->image;
        $resume = $member->resume;
        SamirzImage::removeFile($image);
        SamirzImage::removeFile($resume);
        $member->delete();

        session()->flash('success', 'Member Deleted Successfully!');
        return back();
    }
}
