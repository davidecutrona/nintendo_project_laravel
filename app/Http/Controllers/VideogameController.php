<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideogameRequest;
use App\Mail\ContactMail;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VideogameController extends Controller
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
        $videogames = Videogame::all();
        return view('videogame.index', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videogame.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideogameRequest $request)
    {
        $videogame = Videogame::create([
            'title' => $request->title,
            'gender' => $request->gender,
            'description' => $request->description,
            'img' => $request->file('img') ? $request->file('img')->store('public/media') : '/media/default.jpeg',
            'price' => $request->price,
        ]);

        return redirect(route('videogame_create'))->with('status', 'Videogioco correttamente caricato');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        return view('videogame.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        return view('videogame.edit', compact('videogame'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VideogameRequest $request, Videogame $videogame,)
    {
        $videogame->update([
            $videogame->title = $request->title,
            $videogame->gender = $request->gender,
            $videogame->description = $request->description,
            $videogame->price = $request->price,
        ]);
        if($request->img){
            $videogame->update([
                $videogame->img = $request->file('img')->store('public/media')
            ]);
        }
        return redirect(route('videogame_edit', compact('videogame')))->with('status', 'Videogioco correttamente modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();
        return redirect(route('videogames', compact('videogame')))->with('status', 'Videogioco correttamente eliminato');
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
