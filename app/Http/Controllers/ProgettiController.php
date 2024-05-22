<?php

namespace App\Http\Controllers;

use App\Models\progetti;
use App\Http\Requests\StoreprogettiRequest;
use App\Http\Requests\UpdateprogettiRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\attivita;
use Carbon\Carbon;

class ProgettiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progetto = progetti  :: with('attivita') ->where('user_id', '=', Auth::user()->id) ->get(); // ritorna tutti i progetti
        //return Auth::user(); // legge l'utente loggato
       // $progetto = Progetto::with('attivita')->where('user_id', '=', Auth::user()->id)->get(); // 
        
        return view('webapp.homepage', ['progetto' =>  $progetto]);}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('webapp.newProgetto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprogettiRequest $request)
    {
        $data = $request->only(['nome', 'descrizione', 'tipologia', 'linguaggioSviluppo', 'stato']);
       
        $data['user_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        //dd($data);
        Progetti::create($data);
        return redirect()->action([ProgettiController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(progetti $progetti)
    {   //return $progetti->load('attivita');
        return view('webapp.detailpage', ['progetto' => $progetti->load('attivita')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(progetti $progetti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprogettiRequest $request, progetti $progetti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(progetti $progetti)
    {
        $progetti->delete();
        return redirect('/progetti');
    }
}