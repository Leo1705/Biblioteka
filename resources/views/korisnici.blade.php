<html>
    <body>
        <h1>Site najaveni korisnici: </h1>
        @foreach($korisnici as $korisnik)
        <br/>
        <li>Ime: {{$korisnik->korisniciIMe}}</li>
        <li>Email: {{$korisnik->email}}</li>
        <li>Telefonski Broj:{{$korisnik->tel}}</li>
        <li>Adresa na Ziveenje:{{$korisnik->adresaZivenje}}</li>
        <br/>
        @endforeach
        <br />
        <button><a href="http://localhost/biblioteka-app/public/">Vrati se na Home</a></button>
    </body>
    </html>