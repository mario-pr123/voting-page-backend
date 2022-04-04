<?php

namespace App\Http\Controllers;

use App\Models\Votes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VotesController extends Controller
{
    public function store(Request $request)
    {
        $vote = new Votes();
        $var = Votes::select("id_category")->where("id_category", "=", $request->id_category)->count();
        $var1 = Votes::select("email")->where("email", "=", $request->email)->count();
        $var2 = Votes::select("date")->where("email", "=", $request->email)->where("id_category", "=", $request->id_category)->where("date", "=", $request->date)->count();
        $date = Carbon::today()->toDateString();
        if ($var >= 5 && $var1 >= 5 && $var2 >= 5) {
            return response()->json("Has acabado con tus votos :(", 404);
        } else {
            $vote->date = $request->date;
            $vote->email = $request->email;
            $vote->id_category = $request->id_category;
            $vote->id_nominee = $request->id_nominee;
            $vote->save();
            return response()->json("Has votado exitosamente", 201);
        }
    }
}