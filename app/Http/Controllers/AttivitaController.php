<?php

namespace App\Http\Controllers;

use App\Models\attivita;
use App\Http\Requests\StoreattivitaRequest;
use App\Http\Requests\UpdateattivitaRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\progetti;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;



class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $progetto = progetti   :: with('attivita') ->where('user_id', '=', Auth::user()->id) ->get(); // ritorna tutti i progetti
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('webapp.newattivita', ['userID' => Auth::user()->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreattivitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(attivita $attivita)
    {
         return $attivita ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(attivita $attivita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateattivitaRequest $request, attivita $attivita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {  
        DB::table('attivitas')->where('id', $id)->delete();
        return Redirect::back();
        
    }
}