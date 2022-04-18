<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Skill;

class handleAnggota extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $lists = Anggota::latest()->get();
        return view('children.listHero', compact('lists'));
    }
    
    public function index()
    {
        return view('children.tambahAnggota');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $anggota = new Anggota;
        $anggota->name = 'Asep';
        $anggota->jkelamin = 'perempuan';

        $anggota->save();
        $skill = Skill::find([1,2]);
        $anggota->skills()->attach($skill);
        return 'succes';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:254',
            'jkelamin' => 'required'
        ]);

        $anggota = new Anggota;
        $anggota->name = $request->name;
        $anggota->jkelamin = $request->jkelamin;

        $anggota->save();

        $skill = Skill::find([1,2]);
        $anggota->skills()->attach($skill);
        // Anggota::create($validate);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Anggota::where('id', $id)->first();
        return view('children.detailAnggota',['detail' => $detail]);
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
        $rules = [
            'name' => 'required',
            'jkelamin' => 'required',
        ];
        $validated = $request->validate($rules);
        Anggota::find($id)->update($validated);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = Anggota::findOrFail($id);
        $list->delete();
        return redirect('/');
    }
}
