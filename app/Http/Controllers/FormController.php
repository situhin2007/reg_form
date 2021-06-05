<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use Illuminate\Http\Request;

class FormController extends Controller
{
   public function formStore(Request $request)
   {

    $formData = new FormModel();
    $formData->name = $request->name;
    $formData->email = $request->email;
    $formData->save();

    return back()->with('success', 'Form Data successfully saved.');

   }

   public function generatereport()
   {
    $reports = FormModel::all();
    return view('report', compact('reports'));
   }
}
