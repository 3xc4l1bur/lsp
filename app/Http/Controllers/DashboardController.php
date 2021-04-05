<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // $product = Product::all();
        // $report = Report::all();
        // $income = IncomeItemReport::all();
        // $outgoing = OutgoingItemReport::all();
        // dd(count($product));
        return view("dashboard");
    }

    public function check(Request $req){
        if($req->session()->has('user')){
            $data = $req->session()->get('user');
            $level =  $data['level'];
            if($level == 'Admin'){
                return redirect("dashboard");
            }elseif($level == 'user'){
                return redirect("home");
            }elseif($level == 'Kurir'){
                return redirect("home_kurir");
            }
        }else{
            echo 'Tidak ada user';
        }
    }
}

