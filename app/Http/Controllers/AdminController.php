<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Contact;
use App\Models\Formations;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
{
    $contacts = Contact::all();
    $formations = Formations::all();
    $stages = Stage::all();
    $actualites = Actualite::all(); // Récupérer les actualités

    return view('Admin.dashboard', compact('contacts', 'stages', 'formations', 'actualites'));
}

    public function actualite(Request $request) 
       
        {
            $request->validate([
                'titre' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        
            $imagePath = null;
        
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('uploads/actualites', 'public');
            }
        
            Actualite::create([
                'titre' => $request->titre,
                'description' => $request->description,
                'image' => $imagePath,
            ]);
        
            return redirect()->route('dashboard-admin')->with('success', 'Actualité ajoutée avec succès.');
        }
    public function destroycontact($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('dashboard-admin')->with('success', 'Contact supprimé avec succès.');
}
public function replycontact(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    $email = $request->email;
    $messageContent = $request->message;

    Mail::raw($messageContent, function ($message) use ($email) {
        $message->to($email)->subject('Réponse à votre message');
    });

    return response()->json(['success' => true, 'message' => 'Réponse envoyée avec succès.']);
}
public function replystage(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::raw($request->message, function ($message) use ($request) {
        $message->to($request->email)->subject('Réponse à votre candidature');
    });

    return response()->json(['success' => true, 'message' => 'Réponse envoyée avec succès.']);
}
public function destroystage($id)
{
    $stage = Stage::findOrFail($id);
    $stage->delete();

    return redirect()->route('dashboard-admin')->with('success', 'Candidature supprimée avec succès.');
}
public function replyformation(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::raw($request->message, function ($message) use ($request) {
        $message->to($request->email)->subject('Réponse à votre demande de formation');
    });

    return response()->json(['success' => true, 'message' => 'Réponse envoyée avec succès.']);
}
public function destroyformation($id)
{
    $formation = Formations::findOrFail($id);
    $formation->delete();

    return redirect()->route('dashboard-admin')->with('success', 'Demande supprimée avec succès.');
}
public function destroyactu($id)
{
    $actualite = Actualite::findOrFail($id);

    // Supprimer l'image associée si elle existe
    if ($actualite->image && Storage::exists('public/' . $actualite->image)) {
        Storage::delete('public/' . $actualite->image);
    }

    $actualite->delete();

    return redirect()->route('dashboard-admin')->with('success', 'Actualité supprimée avec succès.');
}

public function editactu($id)
{
    $actualite = Actualite::findOrFail($id);
    return view('Admin.editactu', compact('actualite'));
}

public function updateactu(Request $request, $id)
{
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $actualite = Actualite::findOrFail($id);

    // Mise à jour des champs
    $actualite->titre = $request->titre;
    $actualite->description = $request->description;

    if ($request->hasFile('image')) {
        // Supprimer l'ancienne image si elle existe
        if ($actualite->image && Storage::exists('public/' . $actualite->image)) {
            Storage::delete('public/' . $actualite->image);
        }
        // Enregistrer la nouvelle image
        $imagePath = $request->file('image')->store('uploads/actualites', 'public');
        $actualite->image = $imagePath;
    }

    $actualite->save();

    return redirect()->route('dashboard-admin')->with('success', 'Actualité mise à jour avec succès.');
}

}
