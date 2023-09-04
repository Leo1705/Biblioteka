<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookSubmit;
use App\Models\Books;
use App\Models\Users;
class IznajmiKorisnik extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $korisnici = Users::find(request('korisnikId'));
    
    $bookSubmit = new BookSubmit();
    $bookSubmit->users_id = $korisnici->id;
    $selectedBooks = request('selected_book'); 

    $errorMessages = [];

    if ($selectedBooks) {
        $selectedBookNames = [];
        
        foreach ( (array) $selectedBooks as $selectedBookId) {
            $selectedBook = Books::find($selectedBookId);
            
            if ($selectedBook) {
                // Check if kolicina is greater than 0 before decrementing
                if ($selectedBook->kolicina > 0) {
                    $selectedBook->decrement('kolicina', 1);
                    $selectedBookNames[] = $selectedBook->id;
                } else {
                    // Add an error message
                    $errorMessages[] = "Book {$selectedBook->title} is out of stock.";
                }
            }
        }
        
        // Convert the array of book names to a comma-separated string and store it in the FeePrice attribute
        $bookSubmit->knigja_id = implode(', ', $selectedBookNames);
    } else {
        $bookSubmit->knigja_id = '';
    }
    
    $bookSubmit->save();
    $data = [];
    if (request()->has('korisnici')) {
        return redirect(route('korisnici.show', [request('korisnikId')]));
    }
    
    if (request()->has('book')) {
        return redirect(route('book.show',[request('selected_book')]));
    }
    
        // else{
        //     return redirect(route('korisnici.show', [request('korisnikId')])); 
        // }
    // if (!empty($errorMessages)) {
    //     // Redirect back with error messages
    //     return redirect(route('korisnici.show', [request('korisnikId')]))->withErrors($errorMessages);
    // } else {
    //     // Redirect without errors
    //     return redirect(route('korisnici.show', [request('korisnikId')]));
    // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
