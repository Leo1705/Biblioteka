@extends('_layout.log')

@section('content')
<div class="container">
<script>
function showForm() {
    document.getElementById('bookSelection').style.display = 'block';
}
 function handleCheckboxClick(checkbox) {
  // Get a list of all checkboxes with the same name
  const checkboxes = document.querySelectorAll(`input[name="${checkbox.name}"]`);
  
  // Uncheck all checkboxes except the one that was clicked
  checkboxes.forEach(cb => {
    if (cb !== checkbox) {
      cb.checked = false;
    }
  });
}
</script>

<div>‎ ‎  ‎  ‎  ‎  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Добредојде во систем за изнајмување !') }}
                    <form id="mainForm" method="POST" action="http://localhost/Biblioteka-main/public/iznajmuvanje">
                        @csrf
                        <h1>Избери корисник кој изнајмува книга</h1>
                        <br/>
                        <select name="email" onchange="showForm()">
                            <option value="" selected disabled>Избери корисник</option>
                            @foreach ($emails as $email)
                                <option value="{{$email}}">{{$email}}</option>
                            @endforeach
                        </select>
                        <div id="bookSelection" style="display: none;">
                            <h1>Избери која книга ја изнајмува</h1>
                            @foreach ($books as $book)
                            <div>
        <img src="{{$book->srcKnigja}}" alt="Book Image" />
        <input type="checkbox"   onclick="handleCheckboxClick(this)" id="book_{{$book->id}}" name="selected_book[]" value="{{$book->id}}">
        <label for="book_{{$book->id}}">{{$book->name}}</label>
    </div>
                            @endforeach
                            <br/>
                            <button type="submit">Готово</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
