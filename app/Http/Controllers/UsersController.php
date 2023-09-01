<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\BookSubmit;
use App\Models\Books;
use App\Models\ReturnBook;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showViewData()
    {   
    }
    public function index()
    {
        $viewData = DB::table('iznajmuvanjeview')->get();

// Using Eloquent (if you've set up a model)
        $data['korisnici'] =   Users::all();
        return view('korisnici',  ['viewData' => $viewData] + $data);
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
    public function getCurrentUserId()
    {
        $user = Auth::user();
        if ($user) {
            return $user->id;
        }
        
        return null; // Handle the case when the user is not authenticated
    }
     public function show($id)
    {
        $user = Users::find($id);
    
        $idUser = $user->id;
    
        // Step 2: Use the email in the where clause to filter BookSubmit records
        $submissions = ReturnBook::select('knigja_id', 'users_id', 'return_at')
 // Use the retrieved email here
            ->get();
    
        // Retrieve all books (not sure how you want to use this)
        $books = Books::all();
    
        // Pass the data to the view
        $data = [
            'korisnici' => $user,
            'submissions' => $submissions,
            'books' => $books,
        ];
    
        return view('korisnici.show', $data);
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
