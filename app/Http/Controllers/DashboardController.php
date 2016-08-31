<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Github\Client;

class DashboardController extends Controller
{
    /**
     * Create a new dashboard controller instance.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->user   = session()->get('user');
    }

    /**
     * Display the dashboard with a random repo
     * Display the last 3 commit messages
     * @return mixed
     */
    public function index()
    {
        if (empty($this->user)) {
            return redirect('/');
        }

        // Get and choose a random repo
        $repos = $this->client->api('user')->repositories($this->user->nickname);

        if (empty($repos)) {
            return view('pages.empty');
        }

        $randomRepo = $repos[array_rand($repos, 1)];
        $randomRepo = (object)$randomRepo;

        // Get the commits for the repo
        try {
            $commits = $this->client->api('repo')->commits()->all($this->user->nickname, $randomRepo->name, array ('sha' => 'master', 'per_page' => 3));
        } catch (\RuntimeException $e) {
            return view('pages.empty');
        }

        return view('pages.dashboard', compact('randomRepo', 'commits'));
    }

    /**
     * Logout the user
     * Remove the session
     * @return mixed
     */
    public function logout()
    {
        session()->forget('user');

        return redirect('/');
    }
}
