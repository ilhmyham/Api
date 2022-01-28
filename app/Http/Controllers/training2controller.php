<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class training2controller extends Controller
{
    function post()
    {
        return response()->json([
            'message' => 'post Api'
        ]);
    }

    function get()
    {
        return response()->json([
            'message' => 'get Api'
        ]);
    }

    function put($id)
    {
        return response()->json([
            'message' => 'put Api' . $id
        ]);
    }

    function delete($id)
    {
        return response()->json([
            'message' => 'delete Api' . $id
        ]);
    }
}
