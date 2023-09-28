<?php


namespace App\Http\Controllers;

use App\Mail\ContactanosController as MailContactanosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view("contactanos.index");
    }
    public function store(Request $request){

        $request->validate([
            "name"=>"required",
            "correo"=>"required|email",
            "mensaje"=>"required",
        ]);
        //mejor colocar controlleer Email a la proxima, para poder diferenciar quien es quien
        $correo=new MailContactanosController($request->all());
        Mail::to('jose@prueba.com')->send($correo);
        //mensaje con sesion
        return redirect()->route("contactanos.index")->with("info","mensaje enviado"); //No es necesario especificar la ruta con solo escribir controller se va
    }
}
