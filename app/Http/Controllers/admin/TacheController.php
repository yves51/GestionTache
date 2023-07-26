<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * retourne toutes les tâches.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taches = Tache::all();
        return view('test.index', compact('taches'));
    }

    /**
     * affiche le formulaire de creation de tache.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * permet de stocker les données dans la base de donnée.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'etat' => 'required',
        ]);

        $tache = Tache::create($validatedData);
        return redirect('/')->with('success', 'Tâche créer avec succèss');
    }


    /**
     * permet d'afficher une tâche a travers son id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $tache = Tache::findOrFail($id);
        return view('test.edit', compact('tache'));
    }

    /**
     * permet de faire une modification d'une tâche.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'etat' => 'required',
        ]);
    
        Tache::whereId($id)->update($validatedData);
    
        return redirect('/')->with('success', 'Tâche mise à jour avec succèss');
    }

    /**
     * permet de supprimer une tâche.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tache = Tache::findOrFail($id);
        $tache->delete();
        return redirect('/')->with('success', 'Tâche supprimer avec succèss');
    }

}
