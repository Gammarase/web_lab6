<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FunctionalityController extends Controller
{
    public function add_role(){
        $user = auth()->user();
        $user->roles()->attach(request()->only('role_id'));
        return redirect('/dashboard');
    }
    public function remove_role(){
        $user = auth()->user();
        $user->roles()->detach(request()->only('role_id'));
        return redirect('/dashboard');
    }

    public function add_order(){
        validator(\request()->all(), ['name'=>['required'], 'description'=>['required'], 'deadline'=>['required']])
            ->validate();
        $count = Service::all()->count();
        $service_array = array();
        for ($i = 0; $i <= $count; $i++){
            if(request()->only($i)){
                $service_array[] = $i;
            }
        }
        if (empty($service_array)){
            return  redirect()->back()->withErrors(['services'=>'Оберіть хоча б одну послугу']);
        }
        $data = \request()->only(['name','description', 'deadline']);
        $data['user_id'] = auth()->user()->id;
        $order = Order::create($data);
        $order->services()->attach($service_array);
        return redirect('/dashboard');
    }
}
