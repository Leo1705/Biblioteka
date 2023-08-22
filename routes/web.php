<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IznajmuvanjeController;
use App\Models\BookSubmit;
use App\Models\Books;
use App\Models\Users;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
  
// });
Route::get("/books", [BooksController::class,'index'])->name('book.show');
Route::get("/korisnici", [UsersController::class,'index']);
Route::get('/biblioteka/book/{id}', [BooksController::class, 'show'])->name('book.show');
Route::get("/biblioteka/avtor/{id}", [AuthorController::class, 'show'])->name('author.show');
Route::get("/korisnici/{id}",[UsersController::class, 'show'])->name('korisnici.show');
Route::get("/", function(){
    return view('welcome');
});
Route::get("/authors", [BooksController::class,'index'])->name('author');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['2fa'])->group(function () {
    // HomeController
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/2fa', function () {
        return redirect(route('home'));
    })->name('2fa');
});
Route::get('/complete-registration', [App\Http\Controllers\Auth\RegisterController::class, 'completeRegistration'])->name('complete.registration');
Route::get('/iznajmuvanje', [App\Http\Controllers\IznajmuvanjeController::class, 'index'])->name('proces.iznajmuvanje');
Route::post("/iznajmuvanje", function () {
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
});
Route::post("/iznajmuvanje/{id}", function ($id) {
    // Assuming you have already fetched $korisnici using the provided $id
    $korisnici = Users::find($id);

    $bookSubmit = new BookSubmit();

    // Use the email from the $korisnici object
    $bookSubmit->feename = $korisnici->email;

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
    return redirect('/korisnici');
});

Route::get('/iznajmuvanjekorisnici',[App\Http\Controllers\KorisnikIznajmuvanje::class, 'index'])->name("korisnik.iznajmuvanje");

