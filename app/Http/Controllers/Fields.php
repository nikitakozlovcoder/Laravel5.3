<?php

namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Fields extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index()
    {
        $field = Field::all();
        if (!count($field))
        {
            $field = array(['body' => '', 'title'=> '']);
        }

        return view('Field.index', ['field' => $field]);
    }
    public function Update(Request $request)
    {
        $field = Field::all()->first();
        if ($field === null)
        {
            $newField = new Field();
            $newField->body = $request->input('body');
            $newField->title = $request->input('title');
            $newField->save();
            return redirect()->back();
        }

        $field->body = $request->input('body');
        $field->title = $request->input('title');

        $field->save();
        return redirect()->back();

    }
}
