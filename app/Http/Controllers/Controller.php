<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $avaible_pages = ['main_page', 'about_us', 'portfolio', 'contacts', 'form'];


    use AuthorizesRequests, ValidatesRequests;

    public function getPage($pagename = '')
    {
        $user = null;
        if (in_array($pagename, $this->avaible_pages)) {
            return view($pagename, ['user' => $user, 'reviews' => json_decode(file_get_contents(storage_path('app/reviews.json')), true)]);
        } elseif ($pagename == '') {
            return view('main_page', ['user' => $user]);
        } else {
            return view('error', ['user' => $user]);
        }
    }

    public function findUser($userid = 0)
    {
        $user = User::find($userid);
        if ($user) {
            return view('user_page', ['user' => $user]);
        } else {
            return view('error', ['user' => $user]);
        }
    }

    public function findRole($roleid = 0)
    {
        $user = null;
        $role = Role::find($roleid);
        if ($role) {
            return view('role_page', ['user' => $user, 'role'=> $role]);
        } else {
            return view('error', ['user' => $user]);
        }
    }
}
