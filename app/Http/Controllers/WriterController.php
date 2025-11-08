<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function index(){
        $writers = Writer::with('articles')->get();
        return view('pages.writers', compact('writers'));
    }

    public function show($id){
        $writer = Writer::findOrFail($id);
        $articles = $writer->articles;
        return view('pages.writer-article', compact('writer','articles'));
    }
}
