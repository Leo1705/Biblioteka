<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookSubmit;
use App\Models\Books;
use App\Models\Users;
class Iznajmi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookSubmit = new BookSubmit();
    $bookSubmit->feename = request('email');
    
    $selectedBooks = request('selected_book'); 
    
    if ($selectedBooks) {
        $selectedBookNames = [];
        foreach ($selectedBooks as $selectedBookId) {
            $selectedBook = Books::find($selectedBookId);
            if ($selectedBook) {
                $selectedBookNames[] = $selectedBook->name;
            }
        }
        
        // Convert the array of book names to a comma-separated string and store it in the FeePrice attribute
        $bookSubmit->FeePrice = implode(', ', $selectedBookNames);
    } else {
        $bookSubmit->FeePrice = '';
    }

    $bookSubmit->save();
    return redirect('/iznajmuvanjekorisnici');
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
