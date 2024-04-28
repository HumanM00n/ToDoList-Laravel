<?php 

// CE FICHIER PERMET DE DEFINIR TOUTES LES ACTIONS QUE PEUT EFFECTUER L'UTILISATEUR

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use App\Notifications\ActivateEmailLink;

class UserController extends Controller {
    // Fonction qui retourne le formulaire d'inscription

    public function Auth() {
        return view('auth/register');
    }

    // Fonction qui va retourner les informations de l'utilisateur dans la base de données 

    public function registerUser(Request $request) {
        // Validation des données 

        $insertData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',

        ]);
        
        // Enregistrer l'utilisateur 
        $user = User::create([
            'nom' => $insertData['nom'],
            'prenom' => $insertData['nom'],
            'email' => $insertData['nom'],
            'password' => $insertData['nom']

        ]);

        // Notification de mail pour valider 
        $user->notify(new ActivateEmailLink);

        // Ajout d'un message de succès à la créaion du compte
        session()->flash('success', 'Votre compte a été créé avec succès !');

        // Redirigez l'utilisateur vers une page appropriée
        return redirect()->route('/login');
        
    }
}

