<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\trainingResource;
use Illuminate\Support\Facades\Validator;
use App\Models\Training;
use Illuminate\Http\Request;

class trainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Training::latest()->get();
        return response()->json([trainingResource::collection($data), 'program fatched.']);
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'mentor_id' => 'required',
            'harga' => 'required|integer',
            'tanggal' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $training = Training::create($request->all());

        return response()->json(['Training created successfylly.', new trainingResource($training)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::find($id);
        if (is_null($training)) {
            return response()->json('Data Not Found', 404);
        }

        return response()->json([new trainingResource($training)]);
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'mentor_id' => 'required',
            'harga' => 'required|integer',
            'tanggal' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $training = Training::find($id)->update($request->all());

        return response()->json(['data berhasil di update', new trainingResource($training)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Training::where('id', '$id')->delete();

        return response()->json(['data berhasil dihapus', new trainingResource($training)]);
    }
}
