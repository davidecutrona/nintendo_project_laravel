<?php

namespace App\Http\Controllers;

use App\Http\Requests\NintendoRequest;
use App\Mail\ContactMail;
use App\Models\Nintendo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NintendoController extends Controller
{   
    /*Middleware*/
    public function __construct(){
        $this->middleware('auth')->except('index', 'show', 'home', 'contact', 'submit');
    }

    /*Funzione Home*/
    public function home(){
        return view('welcome');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nintendos = Nintendo::all();
        return view('nintendo.index', compact('nintendos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nintendo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NintendoRequest $request)
    {
        $nintendo = Nintendo::create([
            'title' => $request->title,
            'gender' => $request->gender,
            'description' => $request->description,
            'img' => $request->file('img') ? $request->file('img')->store('public/media') : '/media/default.jpeg',
            'price' => $request->price,
        ]);

        return redirect(route('nintendo_create'))->with('status', 'Videogioco correttamente caricato');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nintendo $nintendo)
    {
        return view('nintendo.show', compact('nintendo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nintendo $nintendo)
    {
        return view('nintendo.edit', compact('nintendo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NintendoRequest $request, Nintendo $nintendo,)
    {
        $nintendo->update([
            $nintendo->title = $request->title,
            $nintendo->gender = $request->gender,
            $nintendo->description = $request->description,
            $nintendo->price = $request->price,
        ]);
        if($request->img){
            $nintendo->update([
                $nintendo->img = $request->file('img')->store('public/media')
            ]);
        }
        return redirect(route('nintendo_edit', compact('nintendo')))->with('status', 'Videogioco correttamente modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nintendo $nintendo)
    {
        $nintendo->delete();
        return redirect(route('nintendos', compact('nintendo')))->with('status', 'Videogioco correttamente eliminato');
    }

    /*Funzione Invio Mail*/
    public function contact () {
        return view('contact-us');
    }
    public function submit (Request $request) {
        $nomeutente = $request->nomeutente;
        $mail = $request->mail;
        $body = $request->body;

        $contactMail = new ContactMail($nomeutente, $mail, $body);


        Mail::to('info@noreplay.it')->send($contactMail);


        return redirect(route('contact.us'))->
        with('status', 'Mail inviata correttamente!');
    }
}
