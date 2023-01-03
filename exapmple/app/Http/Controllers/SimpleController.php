<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function view(){
        return view('secondView');
        }


     public function viewData(){
        $variable = '3 Hello World!'; //premena a nazov premenej
        return view('thirdView')->with('variable', $variable);
        }

    // novy nazov metody data2 ($array je definovane pole)
    public function viewData2(){
            $variable = '4 Hello World!';
            $array = [0 => 'zero', 1 => 'first', 2 => 'second', 3 => 'third', 4 => 'fourth'];
            return view('fourthView')->with('variable', $variable)->with('array', $array);
            }

    public function viewParameter ($parameter){
            $result = $parameter*2;
            return view('fifthView')->with('parameter', $parameter)->with('result', $result);
            }
    // objekt request to co pride z formularu, aby sme ju vytiahli pouzijeme tento zapis
    public function sendData(Request $request){
            $email = $request->email;
            dd($email);
            return redirect()->route('six', ['parameter' => $email]);
            }
}
