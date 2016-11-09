<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webquest;

class MainController extends Controller {
  public function home() {

    return view('home');
  }

  public function webquests() {
    $scope = array();
    $Webquest = new Webquest();
    // $Webquest->thema = "Einführung Distributionen";
    // $Webquest->save();

    // $Webquest::create(['thema' => "Open-Source Anwendungen"]);

    $scope["webquests"] = $Webquest::all();

    return view('webquests', $scope);
  }

  public function lehrplan_integration() {

    return view('lehrplan_integration');
  }

  public function impressum() {

    return view('impressum');
  }
}
