<?php

namespace App\Http\Controllers\admin;


use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnnonceAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        //apeller mon model nnonce avec la requete all 
        //jenvoie les données de ma varaible dans ma vue 
       $annonces = Annonce::all();
        return view('admin.annonce.lister' , compact('annonces'));

        
    
        
        
        
        
    
    
    
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        //return view('admin.annonce.ajouter'); 

        return view('admin.annonce.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        
        
        // Vérification des données du formulaire
        /**
         * Titre obligatoire
         */
        $request->validate(['titre' => 'required|min:6']);
        // création d'une instance de class (model News) pour enregistrer en base .
        $newAnnonce = new Annonce;
        
        
        // Traitement de l'upload de 'image
         
        if ($request->file()) {
            $fileName = $request->image->store('public/images');
            $newAnnonce->image = $fileName;
        }


        
       

        $newAnnonce->name = $request->titre;
        $newAnnonce->description = $request->description;
        $newAnnonce->price = $request->prix;
         
        $newAnnonce->categorie_id = 1;
        $newAnnonce->user_id = Auth::user()->id;
        
        // dd($newAnnonce);
        // Enregistrement des données
        $newAnnonce->save();


        
        return redirect(route('admin.annonce.create'));

        
        
}








    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id = 0)
    {
         /**
     * Supression
     */
        
     $annonce = annonce::findOrFail($id);

        if ($annonce->image != '') { //Vérifie si l'image existe en db

            Storage::delete($annonce->image);
        }

        $annonce->delete();

        return redirect(route('admin.annonce'));

    }

    
    



}
