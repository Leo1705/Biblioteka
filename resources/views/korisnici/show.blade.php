 
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
              <form id="mainForm" method="POST" action="http://localhost/Biblioteka-main/public/iznajmuvanje/{{$korisnici->id}}">
                @csrf           
                <input value="{{$korisnici->email}}" name="email" disabled>Ја изнајмува</input>
                @foreach ($books as $book)
                            <div>
        <img src="{{$book->srcKnigja}}" alt="Book Image" width="100px" height="100px"/>
        <input type="checkbox"   onclick="handleCheckboxClick(this)" id="book_{{$book->id}}" name="selected_book[]" value="{{$book->id}}">
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
            <th>Borowed At</th>
            <th>Return Book</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($submissions as $submission)
            <tr>
  
                <td>{{ $submission->feePrice }}</td>
                <td>{{ $submission->created_at }}</td>
                <td><a href="{{}}">Врати книга</a>
            </tr>
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
            <th> </th>
            <th> </th>
        </tr>
    </thead>
    <tbody>

        
            <tr>
  
                <td></td>
                <td></td>
                <td><a href=""> </a>
            </tr>
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
