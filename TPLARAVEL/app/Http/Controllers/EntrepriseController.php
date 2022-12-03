<?php
namespace App\Http\Controllers;
use App\Models\entreprise;
use Illuminate\Http\Request;
class EntrepriseController extends Controller
{
 /**
 * Affiche la liste des entreprises
 */
 public function index()
 {
    $entreprises = Entreprise::latest()->paginate(4);
    
    return view('entreprises.index',compact('entreprises'))
        ->with('i', (request()->input('page', 1) - 1) * 4);
 }
 /**
 * return le formulaire de création d'un formulaire
 */
 public function create()
 {
 return view('entreprises.create');
 }
 /**
 * Enregistre une nouvelle entreprise dans la base de données
 */
 public function store(Request $request)
 {
 $request->validate([
 'nom_Entreprise'=>'required',
 'description_entreprise'=> 'required',
 
 ]);
 Entreprise::create($request->all());
     
        return redirect()->route('entreprises.index')
                        ->with('success','Entreprise créé avec succès.');
    }
 /**
 * Affiche les détails d'une entreprise spécifique
 */
 public function show($id)
 {
    return view('entreprises.show',compact('entreprise'));
}
 /**
 * Return le formulaire de modification
 */
 public function edit($id)
 {
    return view('entreprises.show',compact('entreprise'));
 }
 /**
 * Enregistre la modification dans la base de données
 */
 public function update(Request $request, $id)
 {
 $request->validate([
 'nom'=>'required',
 'description'=> 'required',
 
 ]);
 $entreprise->update($request->all());
    
 return redirect()->route('entreprises.index')
                 ->with('success','entreprise mis à jour avec succès');
 }
 /**
 * Supprime l'entreprise dans la base de données
 */
 public function destroy($id)
 {
    $entreprise->delete();
    
    return redirect()->route('entreprises.index')
                    ->with('success','Entreprise supprimé avec succès');
}
}
