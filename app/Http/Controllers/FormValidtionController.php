<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Form;


class FormValidtionController extends Controller
{
// Create Form
public function createUserForm(Request $request) {
    return view('form');
  }

  // Store Form data in database
  public function UserForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'Nombre' => 'required',
          'Descripcion' => 'required',
          'Imagen' => 'required'
       ]);

      //  Store data in database
      Form::create($request->all());
      return back()->with('¡Exito!', 'Tu formulario ha sido enviado.');
  }

}
