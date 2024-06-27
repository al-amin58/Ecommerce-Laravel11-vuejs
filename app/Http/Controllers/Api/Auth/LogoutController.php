<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{


    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        auth()->user()->tokens()->delete();

        return response()->json([
           'message' => 'Tokens Removed'
        ], 200);
    }




}
