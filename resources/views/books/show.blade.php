@extends('_layout.cork')
@section('content')
<html>
    <body>
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
        <h1>Детали за книгата</h1>
        <img src="{{$book->srcKnigja}}" alt="Book Image" width="400px" height="400px"/>
        <h3>Име: {{$book->name}}</h3>
       @foreach($book->avtor as $avtor)
       <h3>Автор: <a href="{{ route('author.show', ['id' => $book->id]) }}">{{$avtor->avtorName}}</a></h3>
     @endforeach
             <button><a href="http://localhost/biblioteka-app/public/">Врати се во библиотеката</a></button>
          <br/><br/><br/>
          <h1>Сите корисници</h1>
             <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                
                <th class="checkbox-area" scope="col">
                    <div class="form-check form-check-primary">
                        <input class="form-check-input" id="mixed_parent_all" type="checkbox">
                    </div>
                </th>
               
                <th class="" scope="col">Име и презиме</th>
                <th scope="col">Емаил-адреса</th>
                <th class="text-center" scope="col">Изнајми ја книгата</th>
                <th class="text-center" scope="col">слика</th>
                
            </tr>
            
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="form-check form-check-primary">
                        <input class="form-check-input mixed_child" type="checkbox">
                    </div>
                </td>
         
                <td class=""><a href="{{ route('korisnici.show', ['id' => $korisnici[0]->id]) }}">
    {{ $korisnici[0]->korisniciIMe }}
</a>
</td>
             
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="table-inner-text">{{$korisnici[0]->email}}</span>
                </td>
                <td class="text-center">

                <form id="mainForm" method="post" action="{{ route('iznajmi') }}">
                @csrf
                <input type="hidden" name="korisnikId" value="{{$korisnici[0]->id}}" />
                <input type="hidden" id="book_{{$book->id}}" name="selected_book[]" value="{{$book->id}}">
                <button type="submit">Изнајми книга</button>

</form>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-success"><img alt="avatar" src="https://0.gravatar.com/avatar/{{ md5($korisnici[0]->email) }}" class="rounded-circle"></span>
                </td>
            </tr>
           
            <tr>
                <td>
                    <div class="form-check form-check-primary">
                        <input class="form-check-input mixed_child" type="checkbox">
                    </div>
                </td>
                <td class=""><a href="{{ route('korisnici.show', ['id' => $korisnici[1]->id]) }}">{{$korisnici[1]->korisniciIMe}}</a></td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="table-inner-text">{{$korisnici[1]->email}}</span>
                </td>
                <td class="text-center">

                <form id="mainForm" method="post" action="{{ route('iznajmi') }}">
                @csrf
                <input type="hidden" name="korisnikId" value="{{$korisnici[1]->id}}" />
                <input type="hidden" id="book_{{$book->id}}" name="selected_book[]" value="{{$book->id}}">
                <button type="submit">Изнајми книга</button>

</form>



                </td>
                <td class="text-center">
                    <span class="badge badge-light-secondary"><img alt="avatar" src="https://0.gravatar.com/avatar/{{ md5($korisnici[1]->email) }}" class="rounded-circle"></span>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check form-check-primary">
                        <input class="form-check-input mixed_child" type="checkbox">
                    </div>
                </td>
                <td class=""><a href="{{ route('korisnici.show', ['id' => $korisnici[2]->id]) }}">{{$korisnici[2]->korisniciIMe}}</a></td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="table-inner-text">{{$korisnici[2]->email}}</span>
                </td>
                <td class="text-center">

                <form id="mainForm" method="post" action="{{ route('iznajmi') }}">
                @csrf
                <input type="hidden" name="korisnikId" value="{{$korisnici[2]->id}}" />
                <input type="hidden" id="book_{{$book->id}}" name="selected_book[]" value="{{$book->id}}">
                <button type="submit">Изнајми книга</button>

</form>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-danger"><img alt="avatar" src="https://0.gravatar.com/avatar/{{ md5($korisnici[2]->email) }}" class="rounded-circle"></span>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check form-check-primary">
                        <input class="form-check-input mixed_child" type="checkbox">
                    </div>
                </td>
                <td class=""></td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="table-inner-text">18 May</span>
                </td>
                <td class="text-center">784</td>
                <td class="text-center">
                    <span class="badge badge-light-info">In Progress</span>
                </td>
            </tr>
        </tbody>
       
    </table>
    <table>
    <thead>
        <tr>
            <th>Име на корисник</th>
            <th>Емаил на корисник</th>
            <th>Дали е вратена</th>
            <th>Опција за враќање</th>
        </tr>
    </thead>
    <tbody>
        <h1>Корисници кои ја изнајмиле оваа книга</h1>
        @foreach ($iznajmuvanjeViewData as $submission)
            <tr>
                <td>{{ $korisnici[$submission->users_id-1]->korisniciIMe }}</td>
                <td>{{ $korisnici[$submission->users_id-1]->email }}</td>
                @if ($submission->return_at === null)
                    <td>No</td>
                    <td>
                        <form method="post" action="{{ route('vrati') }}">
                            @csrf
                            <input type="hidden" name="knigjaId" value="{{ $submission->knigja_id }}" />
                            <button type="submit">Врати книга</button>
                        </form>
                    </td>
                @else
                    <td>Yes</td>
                    <td>N/A</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>




            </body>
    </html>
    @endsection