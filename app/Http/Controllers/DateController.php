<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Http\Resources\Date as DateResource;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index()
    {
        $dates = Date::withTrashed()->orderBy('date')->get();
        
        return view('pages.dates.list', compact('dates'));
    }

    public function create()
    {
        return view('pages.dates.create');
    }
    public function lastPublic()
    {
        return DateResource::collection(Date::all()->sortBy('date')->take(5));
        
    }
    public function indexPublic()
    {
        return DateResource::collection(Date::all()->sortBy('date'));
    }
    public function store(Request $request)
    {
        $new_date = Date::create($request->all());
        return redirect()->route('dates.index')->with('info', 'La date a bien été ajouté');
    }

    public function show(Date $date)
    {
        // $contacts = $client->contacts;
        // $missions = $client->missions;
        // $count_days = $this->missions->getCountDays($client->missions->id);

        // $total = $client->missions->sum('total_amount');
        //  //dd($total);       
        // return view('admin.clients.show', compact('client', 'contacts', 'missions', 'total', 'temps_total'));
    }
    public function showPublic(Date $date)
    {
        return new DateResource($date);
    }
    public function edit(Date $date)
    {
        return view('pages.dates.edit', compact('date'));
    }

    public function update(Request $request, Date $date)
    {
        $date->update($request->all());
        return redirect()->route('dates.index')->with('info', 'Le date a bien été modifié');
    }

    public function destroy(Date $date)
    {
        $date->delete();
        // return back()->with('info', 'La date a bien été supprimé.');
        return back()->with('info', 'La Date a bien été mis dans la corbeille.');
    }
    public function forceDestroy($id)
    {
        Date::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'La Date a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Date::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'La Date a bien été restauré.');
    }
}
