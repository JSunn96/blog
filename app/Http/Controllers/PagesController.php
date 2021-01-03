<?php 
//namespace: Ez a fájl ebbe a mappába tartozik
namespace App\Http\Controllers;

//Kiterjesszük ezt a logikát a fő kontrollerre (vagy valami ilyesmi xD)
class PagesController extends Controller {

//Hozzáadunk egy függvényt és úgy nevezzük el, hogy tartalmazza a http request típusát.
//Minden request egy action és minden action egy function 
   
//Függvény a routernek a Főoldalhoz
    public function getIndex() {
        return view('pages/welcome');
    }
//Függvény a routernek a Rólamhoz
    public function getAbout() {
        return view('pages/about');
    }      
//Függvény a routernek a Kapcsolathoz
    public function getContact() {
        return view('pages/contact');
    }
//Bootstrap 4 template próba
    public function getTemplateIndex() {
        return view('main');
    }

}