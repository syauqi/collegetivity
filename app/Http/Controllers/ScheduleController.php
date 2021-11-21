<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Schedules;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Schedules::where('user_id', Auth::user()->email)->get();

        return view('pages.backend.schedules.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_matkul' => 'required|max:42',
            'nama_dosen' => 'required|max:56',
            'hari' => 'required|max:14',
            'kelas' => 'required|max:24',
            'sks' => 'required|max:12',
            'waktu_mulai' => 'required|max:56',
            'waktu_selesai' => 'required|max:56',

        ]);

        $input = $request->all();

        $schedules = Schedules::create($input);

        return redirect('/dashboard/jadwal-pelajaran');
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
        $item = Schedules::findOrFail($id);

        return view('pages.backend.schedules.edit', [
            'item' => $item
        ]);
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

        $validated = $request->validate([
            'nama_matkul' => 'required|max:42',
            'nama_dosen' => 'required|max:56',
            'hari' => 'required|max:14',
            'kelas' => 'required|max:24',
            'sks' => 'required|max:12',
            'waktu_mulai' => 'required|max:56',
            'waktu_selesai' => 'required|max:56',

        ]);

        $schedules = Schedules::find($id)->update($request->all());

        return redirect('/dashboard/jadwal-pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Schedules::findOrFail($id);
        $item->delete();

        return redirect('/dashboard/jadwal-pelajaran');
    }
}
