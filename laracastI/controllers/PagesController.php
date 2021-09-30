<?php 
// Daft Punk => Eletro => Get Lucky

namespace App\Controllers;

class PagesController {
  public function home() {
    view('index');
  }

  public function about() {
    $company = 'Langgeng';
    view('about', ['company' => $company]);
  }

  public function contact() {
    view('contact');
  }


}