<?php 

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