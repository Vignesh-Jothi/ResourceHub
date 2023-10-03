<?php
namespace App\Http\Controllers\ResController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResModel\ResModel;


class ResController extends Controller
{
    public function links(){
        $links = ResModel::where('category','Web Developement')->get();
        return view('dashboard',compact('links'));
    }
}
