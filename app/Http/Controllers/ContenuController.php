<?php

namespace App\Http\Controllers;

use App\Models\Contenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContenuController extends Controller
{
    public function insert(Request $request)
    {

        try {
        $titre = $request->input('titre');
        $file = $request->file('photo');

        if(!$file){
            return redirect()->back()->with('error', 'Il y a une erreur');
        }

        $content = file_get_contents($file->getRealPath());
        $base64 = base64_encode($content);
        $description = $request->input('description');
        $date = Carbon::now();
        $dateString = $date->format('d-m-Y');

        DB::table('contenu')->insert([
            'titre' => $titre,
            'description' => $description,
            'date' => $dateString,
            'photo' => $base64,
        ]);

        return redirect()->back()->with('success', 'Contenu inséré avec succès.');

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Il y a une erreur : '.$e->getMessage());
    }
}

    public function delete(Request $request)
    {
        $idcontenu = $request->input('idcontenu');

        DB::table('contenu')->where('idcontenu', '=', $idcontenu)->delete();

        return redirect()->back();
    }

    public function single(Request $request)
    {
        $idcontenu = $request->input('idcontenu');

        $contenu = DB::table('contenu')->where('idcontenu', '=', $idcontenu)->first();

        return view('singleContenu', ['contenu' => $contenu]);
    }
}
