<?php

namespace App\Http\Controllers;
// require_once __DIR__.'\vendor\autoload.php';
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Auth;


class UserController extends Controller
{
    public function register(Request $request){
        $factory = (new Factory)->withServiceAccount('/firebase-credentials.json');

        $auth = $factory->createAuth();

        try {
            $userProperties = [
                'email' => $request->userEmail,
                'password' => $request->userPassword
            ];
            $createdUser = $auth->createUserWithEmailAndPassword($userProperties['email'], $userProperties['password']);
            printf('User was created with email: %s and UID: %s', $createdUser->email, $createdUser->uid);
            return response(view('home'));
            
        } catch (\Kreait\Firebase\Auth\CreateUserWithEmailAndPasswordError $e) {
            printf('An error occurred: %s', $e->getMessage());
        }

    }
    public function login(Request $request)
    {
        $factory = (new Factory)->withServiceAccount('/firebase-credentials.json');

        $auth = $factory->createAuth();

        try {
            $email = $request-> email;
            $password = $request-> pass;
            $loggedInUser = $auth->signInWithEmailAndPassword($email, $password);
            printf('User was logged in with email: %s and UID: %s', $loggedInUser->email, $loggedInUser->uid);

            return response(view('home'));

        } catch (\Kreait\Firebase\Auth\SignInWithEmailAndPasswordError $e) {
            printf('An error occurred: %s', $e->getMessage());
        }
    }
}
