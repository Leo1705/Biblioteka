 
@extends('_layout.cork')

@section('content')
<br/>
<img alt="avatar" src="https://0.gravatar.com/avatar/{{ md5($korisnici->email) }}" class="" width="300" height="300">
<main style="display:inline-block; padding-left:10px;">
<h1>Име: {{$korisnici->korisniciIMe}}</h1>
<p>Eмаил адреса: {{$korisnici->email}}</p>
<p>Телефон: {{$korisnici->tel}}</p>
<p>Адреса на живеење: {{$korisnici->adresaZivenje}}</p>
 
<br/>
<button id="myButton">
          Изнајми книга
      </button>
    <div id="myPopup" class="popup">
        <div class="popup-content">
            <h1 style="color:green;">
                Име: {{$korisnici->korisniciIMe}}
              </h1>
              <h3>Избери која книга ја изнајмува</h3>
              <form id="mainForm" method="post" action="{{ route('iznajmi') }}">
                @csrf
                <input type="hidden" name="korisnikId" value="{{$korisnici->id}}" />           
                {{ $korisnici->korisniciIMe }} Ја изнајмува</input>
                @foreach ($books as $book)
                            <div>

        <img src="{{$book->srcKnigja}}" alt="Book Image" width="100px" height="100px"/>
        <input type="checkbox" id="book_{{$book->id}}" name="selected_book[]" value="{{$book->id}}">
        <p>Има уште: {{$book->kolicina}} достапни книги </p>
        <label for="book_{{$book->id}}">{{$book->name}}</label>
       
    </div>
                            @endforeach
                            <br/>
                            <button type="submit">Готово</button>
              </form>
            <button id="closePopup">
                  Close
              </button>
        </div>
    </div>
 
    <script>
        myButton.addEventListener("click", function () {
            myPopup.classList.add("show");
        });
        closePopup.addEventListener("click", function () {
            myPopup.classList.remove("show");
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup) {
                myPopup.classList.remove("show");
            }
        });
    </script>
    <section id="firstTable">
    <table>
    <thead>
        <h2>Сите позајмени книги</h2>
        <tr>
            <th>Book's Name</th>
            <th>Return Book</th>
            <th>Return Book Date</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($submissions as $submission)
    @if ($submission->return_at === null)
        <tr>
            <td>{{ $books[$submission->knigja_id - 1]->name }}</td>
            <form method="post" action="{{ route('vrati') }}">
                @csrf
                <td>
                    <button type="submit">Врати книга</button>
                    <input type="hidden" name="knigjaId" value="{{ $submission->knigja_id }}" />
                </td>
            </form>
            <td>{{ $submission->return_at }}</td>
        </tr>
    @endif
@endforeach
    </tbody>
</table>

    </section>
    <section id="secondTable">
<table style="display:inline-block">
    <thead>
        <h2>Сите Вратени Книги</h2>
        <tr>
            <th>Book's Name</th>
            <th>Returned Date</th>

        </tr>
    </thead>
    <tbody>

        
    @foreach ($submissions as $submission)
    @if ($submission->return_at !== null)
        <tr>
            <td>{{ $books[$submission->knigja_id - 1]->name }}</td> <!-- Empty cell for book name -->
            <td>{{ $submission->return_at }}</td> <!-- Display return_at column -->
        </tr>
    @endif
@endforeach
    </tbody>
</table>
    </section>
<style>
    #firstTable , #secondTable{
        display:inline-block;
        margin:10px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
       
    }
    
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    
    th {
        background-color: #f2f2f2;
    }
    td{
        border-color:white !important;
    }
    .popup {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            display: none;
        }
        .popup-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888888;
            width: 30%;
            font-weight: bolder;
        }
        .popup-content button {
            display: block;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
</style>
</main>
@endsection
