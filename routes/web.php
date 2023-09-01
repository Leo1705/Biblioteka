<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IznajmuvanjeController;
use App\Models\BookSubmit;
use App\Models\ReturnBook;
use App\Models\Books;
use App\Models\Users;
use Carbon\Carbon;
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
Route::get("/books", [BooksController::class,'index'])->name('book');
Route::get("/korisnici", [UsersController::class,'index'])->name('korisnici');
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
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/2fa', function () {
        return redirect(route('home'));
    })->name('2fa');
});
Route::get('/complete-registration', [App\Http\Controllers\Auth\RegisterController::class, 'completeRegistration'])->name('complete.registration');
Route::get('/iznajmuvanje', [App\Http\Controllers\IznajmuvanjeController::class, 'index'])->name('proces.iznajmuvanje');
Route::post("/iznajmuvanje", [App\Http\Controllers\Iznajmi::class, 'index']);
Route::post("/iznajmi",[App\Http\Controllers\IznajmiKorisnik::class, 'index'])->name('iznajmi');

Route::post("/vrati", function (Request $request) {
    $knigjaId = $request->input('knigjaId');

    if ($knigjaId) {
        $currentDateTime = Carbon::now();
        BookSubmit::where('knigja_id', $knigjaId)
            ->update(['return_at' => $currentDateTime]);

        return redirect()->back()->with('success', 'Book returned successfully.');
    }
    else{
        return redirect()->back()->with('error', 'Something went wrong.');
    }
})->name('vrati');
// Route::get('/iznajmuvanjekorisnici',[App\Http\Controllers\KorisnikIznajmuvanje::class, 'index'])->name("korisnik.iznajmuvanje");

