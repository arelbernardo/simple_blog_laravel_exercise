<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Helpers\Helpers;

class ProfileController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $articles = $this->getPostListByProfileId();
        $userInfo = $this->getUserInfoByProfileId();
        return view('profile.index', compact('articles', 'userInfo'));
    }

    public function createPost(Request $req)
    {
        $this->validate($req, [
            'content' => 'required|max:1000']);
        $user = User::find(Helpers::getUserIdBySession());
        $post = new Post();
        $post->content = $req->input('content');
        $post->user()->associate($user);
        $post->save();

        return redirect()->back();
    }

    private function getPostListByProfileId()
    {
        return Post::where(
            'user_id',
            Helpers::getUserIdBySession()
        )->orderBy('updated_at', 'desc')->get();
    }

    private function getUserInfoByProfileId()
    {
        $user = User::find(Helpers::getUserIdBySession());
        $user->profileName = Helpers::formatName($user->firstname, $user->lastname);
        return $user;
    }
}
