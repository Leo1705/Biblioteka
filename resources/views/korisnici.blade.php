@extends('_layout.cork')
@section('content')
<br/>
<div class="table-responsive">
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
                <th class="text-center" scope="col">Број на телефон</th>
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
                <td class="text-center">{{$korisnici[0]->tel}}</td>
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
                <td class="text-center">{{$korisnici[1]->tel}}</td>
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
                <td class="text-center">{{$korisnici[2]->tel}}</td>
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
    <!-- <table>
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>

        </tr>
    </thead>
    <tbody>
        @foreach($viewData as $row)
            <tr>
                <td>{{ $row->knigja_id }}</td>
                <td>{{ $row->users_id }}</td>

            </tr>
        @endforeach
    </tbody>
</table> -->
</div>
    @endsection