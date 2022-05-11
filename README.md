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
<p> NEl controller brewery </p>
<p>
 public function create()
    {
        return view("brewery.create");
    }
</p>
<p> creare nelle viste la fold brewery e la vista create.blade.php</p>
<p>nella vista inserire x-layout </p>
<p>inserire un nuovo form </p>
<p>
 <form method="POST" action="{{route('breweryStore')}}"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Proprietario </label>
            <input type="text" class="form-control" name="owner">
        </div>
        <div class="mb-3">
            <label  class="form-label">Nome del tuo locale </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Indirizzo </label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="mb-3">
            <label  class="form-label">Descrizione </label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
            <label  class="form-label">Sito Web </label>
            <input type="text" class="form-control" name="site">
        </div>
        <div class="mb-3">
            <label  class="form-label">Immagine </label>
            <input type="file" class="form-control" name="img">
        </div>


        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</p>
<p> Settare le rotte per il form di creazione </p>
<p>Route::get("/brewery/create" , [BreweryController::class, "create"])->name("breweryCreate");</p>
<p>Route::post("/brewery/store", [BreweryController::class, "store"])->name("breweryStore");</p>
<p> nella nav nella vista autorizzata </p>
<p> <li class="nav-item">
          <a class="nav-link" href="{{route('breweryCreate')}}">Inserisci birreria</a>
        </li>
        
</p>
<p> nella funzione store del  BreweryController inserire un dd per testare il funzionamento</p>
<p> 
  public function store(Request $request)
    {
        dd($request -> all());
    }
</p>
<p> se funziona usare il mass assignment per creare istanze </p>
<p>
  public function store(Request $request)
    {
        // dd($request -> all());

        Brewery::create([
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'owner' => $request->owner,
            'site' => $request->site,
            'img' => $request->file('img')->store("public/img"),
        ]);
    return redirect(route("breweryIndex"));
    }
</p>
<p>php artisan storage:link    per collegare le immagini presenti nel public nella cartella storage </p>
<p>Settare ora funzione index nel modello brewery</p>
<p>
   public function index()
    {
        return view("brewery.index");
    }
</p>
<p>creare vista index.blade.php  nella folder delle viste delle brewery e inserire l'x-layout dentro </p>
<p>creare la rotta per l'index delle breweries</p>
<p>Route::get("/brewery/index" , [BreweryController::class, "index"])->name("breweryIndex");</p>
<p> nella navbar fuori dal guest e auth </p>
<p>
  <li class="nav-item">
          <a class="nav-link" href="{{route('breweryIndex')}}">Birrerie</a>
        </li>
</p>
<p>
    nella funzione index della brewery 
</p>
<p>
public function index()
    {
        // $breweries = Brewery::all();
        $breweries = Brewery::orderBy("created_at", "DESC")->paginate(2);
        return view("brewery.index", compact("breweries"));
    }

</p>
<p> Nella vista dell'index </p>
<p>
   @foreach ($breweries as $brewery)
                 <div class="col-12">
                 <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($brewery->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$brewery->name}}</h5>
                        <h5 class="card-title">Proprietario: {{$brewery->owner}}</h5>
                        <p class="card-title">Sito: {{$brewery->site}}</p>
                        <p class="card-title">Indirizzo: {{$brewery->address}}</p>
                        <p class="card-text">{{$brewery->description}}</p>
                        <a href="href="{{route('breweryShow', compact('brewery'))}}"" class="btn btn-primary">Dettaglio</a>
                    </div>
                    </div>
                 </div>
                @endforeach

 {{$breweries->links()}}   questa è la paginazione di laravel 


</p>
<p> con la paginazione potrebbe visualizzarsi male l'icona della freccia perché di default laravel usa TailwindCSS ma ora noi in questo progetto stiamo usando bootstrap.
Quindi in AppServiceProvider.php nella funzione di boot() 
 public function boot()
    {
        Paginator::useBootstrap();
    }
    
    
    
    di questa classe per l'import  use Illuminate\Pagination\Paginator;
    
</p>
<p> creare rotta parametrica per il tasto detail </p>
<p>Route::get("/brewery/show/{brewery}", [BreweryController::class,"show"])->name("breweryShow");</p>
<p> Nel brewery controller </p>
<p> public function show(Brewery $brewery)
    {
        return view("brewery.show",compact("brewery"));
    }</p>
<p>creare la vista blade show.blade.php e inserire l'x-layout</p>
<p> rifare una card dentro con i valori e proprietà degli oggetti </p>
<p> Creare relazione tra birrerie e utenti che registrano </p>
<p> php artisan make:migration add_user_id_to_breweries</p>
<p> sostituire l'owner per associarlo all'utente registrato in sessione</p>
<p> NELLA MIGRAZIONE APPENA CREATA
   public function up()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->dropColumn('owner');
            $table->unsignedBigInteger('user_id')->after('description')->nullable();
            //vincolo di integrità referenziale (la chiave esterna)
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


</p>
<p>
 public function down()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->string('owner')->after('description')->default('no_name');
        });
    }


</p>
<p> NEL MODELLO USER SETTARE RELAZIONI </p>
<p>     public function breweries(){
        return $this->hasMany(Brewery::class);
    }</p>
<p> RICORDA DI IMPORTARE LA CLASSE BREWERY</p>
<p>SETTARE IL MODELLO BREWERY</p>
<p>

   public function user(){
        return $this->belongsTo(User::class);
    }

</p>
<p> Ora modificare la funzione di store per associare questi collegamenti </p>
<p>
   $brewery = Auth::user()->breweries()->create([
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'owner' => $request->owner,
            'site' => $request->site,
            'img' => $request->file('img')->store("public/img"),
        ]);


</p>
<p> Ora creare il middleware per proteggere tutto il funzionamento </p>
<p>nel brewery controller </p>
<p>
  public function __construct(){
        $this->middleware('auth')->except('index');
    } 

</p>
<p> ora settarci la manytomany</p>
<p>e quindi creare le birre</p>
<p>php artisan make:model Beer -m</p>
<p>inserite deirettamente tramite seeder </p>
<p>Nel modello beer </p>
<p>


    protected $fillable = ['name'];
    
    public function breweries(){
        return $this->belongsToMany(Brewery::class);
    }
</p>
<p> 
NEL MODELLO BREWERY
</p>
<p>
Nella migrazione 

   public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }
</p>
<p>
    public function beers(){
        return $this->belongsToMany(Beer::class);
    }

</p>
<p> RICORDA DI IMPORTARE LE CLASSI </p>
<p> NEL SEEDER </p>
<p>
    public function run()
    {
        $beers = ['arrugant', 'Peroni' , 'Nastro azzurro', 'dreher','Menabrea','Heiniken','Guinness'];
        foreach($beers as $beer){
            DB::table('beers')->insert([
                'name'=> $beer,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }


</p>
<p> IMPORTA SEMPRE LE CLASSI </p>
<p> FARE migrazione e popolazione seeder </p>
<p>php artisan migrate:rollback</p>
<p> php artisan migrate --seed</p>
<p> Verificare in mysql</p>
<p> ORA SETTARE LA TABELLA PIVOT TRA DUE RELAZIONI </p>
<p>NB: devono essere nome due tabelle al singolare e in ordine alfabetico </p>
<p>php artisan make:migration create_beer_brewery_table</p>
<p> nella migrazione </p>
<p>
    public function up()
    {
        Schema::create('beer_brewery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beer_id');
            $table->foreign('beer_id')->references('id')->on('beers');
            $table->unsignedBigInteger('brewery_id');
            $table->foreign('brewery_id')->references('id')->on('breweries');
            $table->timestamps();
        });
    }
</p>
<p> lanciare la migrazione </p>
<p>php artisan migrate</p>
<p> AGGANCIIO DELLE BIRRE AL MODELLO </p>
<p> nella funzione creazione nel BREWERYCONTROLLER </p>
<p>   public function create()
    {   
        $beers = Beer::all();
        return view("brewery.create", compact("beers"));
    }

</p>
<p> inserire menù a tendina con le birre </p>
<p> nella vista create.blade.php</p>
<p>
     <div class="mb-3">
            <select name="beers[]" multiple>
                @foreach ($beers as $beer)
                    <option value="{{$beer->id}}">
                        {{$beer->name}}
                    </option>
                @endforeach
            </select>
        </div>

</p>
<p>mettiamo l'id perché nella option  passiamo l'id che poi andiamo a relazionare con l'attach ad agganciare questi modelli n-n</p>
<p> NElla funzione store del brewerycontroller </p>
<p>    $brewery->beers()->attach($request->beers);</p>
<p> Mostrare birrerie inserite nella birrerie nella vista show.blade </p>
<p>
   <ul>
                            @foreach ($brewery->beers as $beer)
                                <li>
                                    {{$beer->name}}
                                </li>
                            @endforeach
                        </ul>


</p>
<p></p>
<p></p>
