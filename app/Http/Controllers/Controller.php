<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use App\Models\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $avaible_pages = ['main_page', 'about_us', 'portfolio', 'contacts'];


    use AuthorizesRequests, ValidatesRequests;

    public function getPage($pagename = '')
    {
        $user = auth()->user();
        if (in_array($pagename, $this->avaible_pages)) {
            return view($pagename, ['user' => $user, 'reviews' => json_decode(file_get_contents(storage_path('app/reviews.json')), true)]);
        } elseif ($pagename == '') {
            return view('main_page', ['user' => $user]);
        } else {
            return view('error', ['user' => $user]);
        }
    }

    public function loginPage()
    {
        $user = auth()->user();
        if ($user) {
            return redirect("/dashboard");
        }
        return view('login', ['user' => $user]);
    }

    public function registrationPage()
    {
        $user = auth()->user();
        if ($user) {
            return redirect("/dashboard");
        }
        return view('registration', ['user' => $user]);
    }

    public function pricePage()
    {
        $user = auth()->user();
        $pricelist = Service::all();
        return view('pricelist_page', ['user' => $user, 'pricelist' => $pricelist]);
    }

    public function dashboard()
    {
        $user = auth()->user();
        return view('dashboard', ['user' => $user]);
    }

    public function archive()
    {
        $user = auth()->user();
        return view('archive', ['user' => $user]);
    }

    public function findUser($userid = 0)
    {
        $user = auth()->user();
        $view_user = User::find($userid);
        if ($view_user == $user) {
            return redirect("/dashboard");
        }
        if ($view_user) {
            return view('user_page', ['user' => $user, 'view_user' => $view_user]);
        } else {
            return view('error', ['user' => $user]);
        }
    }

    public function findRole($roleid = 0)
    {
        $user = auth()->user();
        $role = Role::find($roleid);
        if ($role) {
            return view('role_page', ['user' => $user, 'role' => $role]);
        } else {
            return view('error', ['user' => $user]);
        }
    }

    public function available_roles_page()
    {
        $user = auth()->user();

        $roles = Role::whereDoesntHave('users', function ($query) use ($user) {
            $query->where('id', $user->id);
        })->get();
        return view('chooserole', ['user' => $user, 'available_roles' => $roles]);
    }

    public function add_order_page()
    {
        $user = auth()->user();
        $services = Service::all();
        return view('add_order', ['user' => $user, 'services' => $services]);
    }
}

