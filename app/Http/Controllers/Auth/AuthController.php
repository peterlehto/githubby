<?php namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;

class AuthController extends Controller
{


    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Get the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {

        try {
            $user = Socialite::driver('github')->user();
        } catch (Exception $e) {
            return Redirect::to('auth/github');
        }

        session()->put('user', $user);
        session()->flash('flash_message_header', 'Welcome to GitHubby!');
        session()->flash('flash_message', 'This app selects a random GitHub repository that you have access to and displays the last 3 commit messages');

        return redirect('dashboard');
    }

}
