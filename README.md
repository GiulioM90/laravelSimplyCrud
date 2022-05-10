<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

#lista azioni
<p>npm install</p>
<p>npm install bootstrap</p>
<p>npm install @popperjs/core</p>
<p>creata folder components con dentro layout.blade con inizializzazione doc html {{$slot}} e link per css e script    {{asset('css/app.css')}}    </p>
<p>in app CSS  @import '~bootstrap/dist/css/bootstrap'; </p>
<p>in app JS require('bootstrap');</p>
<p>lanciare o npm run dev o npm run watch per il building degli assets</p>
<p>creata view nav e navbar </p>
<p>inserito nel layout il componente </p>
<p>Per la creazione del database  </p>
<p>winpty mysql -u root -p  </p>
<p>create database simplycrud;  </p>
<p>nel file .env impostare il database  </p>
<p>DB_DATABASE=simplycrud
DB_USERNAME=root
DB_PASSWORD=root </p>
<p> Creare controller  </p>
<p>php artisan make:controller PublicController</p>
<p> nel controller   public function welcome(){
        return view("welcome");
    }
}</p>
<p> nel web.php settare </p>
<p>Route::get('/', [PublicController::class, "welcome"] )->name("welcome");</p>
<p>importare la classe </p>
<p> andare nella vista welcome cancellare cosa c''è e inserire <x-layout></x-layout></p>
<p> INSTALLAZIONE FORTIFY PER AUTENTICAZIONE </p>
<p>composer require laravel/fortify</p>
<p> php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"</p>
<p>php artisan migrate</p>
<p>in config\app.php  all'interno dei providers inserire App\Providers\FortifyServiceProvider::class, </p>
<p> in App\Providers\FortifyServiceProvider</p>
<p> inserire le viste richieste per il login e il register nella funzione di boot()</p>
<p> Fortify::loginView(function (){return view('auth.login');});</p>
<p> importare la classe FORTIFY se necessario </p>
<p> Fortify::registerView(function (){
            return view('auth.register');
        });</p>
<p> Creare folder nelle views auth e le viste login e register con il layout importato dentro</p>
<p> Modificare la navbar con le rotte che servono </p>
<p> <a class="navbar-brand" href="{{route('welcome')}}">Home</a></p>
<p>        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        @endguest</p>
<p> inserire nelle viste di register e login il display di errori</p>
<p> @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif</p>
<p> inserire form nel register e nel login </p>
<p> gli attributi sono name="name" name="email" name="password"  name="password_confirmation"</p>
<p> settare il form </p>
<p>  PER IL REGISTER:   <form method="POST" action="{{route('register')}}">
        @csrf</p>
<p>  PER IL LOGIN  <form method="POST" action="{{route('login')}}">
        @csrf</p>
<p> INSEIRE NELLA NAV UTENTE IN SESSIONE E TASTO LOGOUT CON JAVASCRIPT </p>
<p> Ricorda di inserire il tutto tra @else e la fine del @endguest per non far scattare errori </p>
<p> 

  @else
        <li class="nav-item">
          <a class="nav-link" href="">Benvenuto {{Auth::user()->name}}</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
        </li>

        @endguest
</p>
<p>IN RouteServiceProvider </p>
<p>    public const HOME = '/';</p>
<p> Creazione modello brewery </p>
<p>php artisan make:model Brewery -mcr</p>
<p> fa migrazione, controller e nel controller crea le funzione necessarie per il crud </p>
<p>SETTARE IL DATABASE</p>
<p> 

            $table->id();
            $table->string("name");
            $table->string("address");
            $table->text("description");
            $table->string("owner");
            $table->string("img");
            $table->string("site")->nullable();
            $table->timestamps();


</p>
<p> Ora settare il modello </p>
<p>
    protected $fillable = [
        'name',
        'address',
        'description',
        'owner',
        'img',
        'site',
    ];
</p>
<p> lanciare migrazione</p>
<p> php artisan migrate</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
