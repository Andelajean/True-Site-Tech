<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\FormationMail;
use App\Mail\StageMail;
use App\Models\Contact;
use App\Models\Formations;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
    public function contact(Request $request)
{
    $request->validate([
        'nom' => 'required|string',
        'email' => 'required|string|email',
        'telephone' => 'required|string',
        'message' => 'required|string',
    ]);

    $contact = new Contact();
    $contact->nom = $request->nom;
    $contact->email = $request->email;
    $contact->telephone = $request->telephone;
    $contact->message = $request->message;
    $contact->save();

    if ($contact) {
        // Envoi de l'email à l'utilisateur
        $details = [
            'nom' => $contact->nom,
            'email' => $contact->email,
            'telephone' => $contact->telephone,
            'message' => $contact->message,
        ];

        Mail::to($contact->email)->send(new ContactMail($details));

        return redirect()->back()->with('success', 'Votre message a été enregistré avec succès. Notre équipe vous contactera dans les prochaines minutes.');
    }
}
    public function stage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'certificat' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'message' => 'nullable|string',
        ]);

        // Gérer les fichiers téléchargés
        $cvPath = $request->file('cv')->store('uploads/cvs', 'public');
        $certificatPath = $request->file('certificat')->store('uploads/certificats', 'public');

        // Insérer les données dans la base
        $application = Stage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cv' => $cvPath,
            'certificat' => $certificatPath,
            'message' => $request->message,
        ]);

        // Envoyer un email de confirmation
        Mail::to($application->email)->send(new StageMail($application));

        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès. Un email de confirmation vous a été envoyé.');
    }
    public function formation(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'nom_formation' => 'nullable|string',
        ]);
        // Gérer les fichiers téléchargés
      //  $cvPath = $request->file('cv')->store('uploads/cvs', 'public');
      //  $certificatPath = $request->file('certificat')->store('uploads/certificats', 'public');
        // Insérer les données dans la base
        $application = Formations::create([
            'nom' => $request->name,
            'email' => $request->email,
            'telephone' => $request->phone,
            'nom_formation' => $request->nom_formation,
        ]);
        // Envoyer un email de confirmation
        Mail::to($application->email)->send(new FormationMail($application));

        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès. Un email de confirmation vous a été envoyé.');
    }
}





