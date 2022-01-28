<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class training3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training = Training::get();
        return response()->json([
            'status' => [
                'code'    => 200,
                'message' => 'coba get resource',
            ],
            'data' => $training,
        ]);
        $this->middleware('auth.apikey');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $training = Training::create($request->all());

        return response()->json([
            'message' => 'coba post resource',
            'data' => $training
        ]);

        $this->middleware('auth.apikey');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::where('id', $id)->get();

        return response()->json([
            'id' => $id,
            'data' => $training
        ]);

        $this->middleware('auth.apikey');
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

        // $training = Training::where('id', $id)->update([
        //     'nama' => $request->nama,
        //     'mentor_id' => $request->mentor_id,
        //     'harga' => $request->harga,
        //     'tanggal' => $request->tanggal,
        //     'deskripsi' => $request->deskripsi
        // ]);
        $training = Training::where('id', $id)->first();
        if ($training) {
            $training->update($request->all());
            return response()->json([
                'message' => 'coba put resource' . $id,
                'data' => $training

            ]);
        }
        return response()->json([
            'message' => 'coba put gagal' . $training
        ], 400);

        $this->middleware('auth.apikey');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Training::where('id', $id)->first();
        if ($training) {
            $training->delete();
            return response()->json([
                'message' => 'id ' . $id . ' berhasil di hapus'
            ]);
        }
        return response()->json([
            'message' => 'id ' . $id . ' tidak ditemukan'
        ], 400);

        $this->middleware('auth.apikey');
    }
}
