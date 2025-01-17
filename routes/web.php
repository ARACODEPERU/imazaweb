<?php

use App\Http\Controllers\AuthWebController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\LocalSaleController;
use App\Http\Controllers\ParametersController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\WebPageController;
use App\Mail\StudentRegistrationMailable;
use App\Models\District;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Modules\Blog\Http\Controllers\BlogController;


// pagina web con otra base
Route::get('/home', [WebPageController::class, 'index'])
    ->name('index_main');

// Route::get('/', [WebPageController::class, 'construction'])->name('construction');
Route::get('/', [WebPageController::class, 'index'])->name('index_main');
Route::get('/nosotros', [WebPageController::class, 'nosotros'])->name('web_nosotros');
Route::get('/despega-chat-empresarial', [WebPageController::class, 'despegachatempresarial'])->name('web_despegachatempresarial');
Route::get('/despega-chat-pyme', [WebPageController::class, 'despegachatpyme'])->name('web_despegachatpyme');
Route::get('/despega-chat-vendedores', [WebPageController::class, 'despegachatvendedores'])->name('web_despegachatvendedores');
Route::get('/cursos', [WebPageController::class, 'cursos'])->name('web_cursos');
Route::get('/servicios', [WebPageController::class, 'servicios'])->name('web_servicios');
Route::get('/capacitacion', [WebPageController::class, 'capacitacion'])->name('web_capacitacion');
Route::get('/suscripcion', [WebPageController::class, 'suscripcion'])->name('web_suscripcion');
Route::get('/automatizacion', [WebPageController::class, 'automatizacion'])->name('web_automatizacion');
Route::get('/agencia', [WebPageController::class, 'agencia'])->name('web_agencia');
Route::get('/imagen-profesional', [WebPageController::class, 'imagenprofesional'])->name('web_imagen_profesional');
Route::get('/curso-descripcion/{id}', [WebPageController::class, 'cursodescripcion'])->name('web_curso_descripcion');
Route::get('/contacto', [WebPageController::class, 'contacto'])->name('web_contacto');
Route::get('/carrito', [WebPageController::class, 'carrito'])->name('web_carrito');
Route::get('/gracias', [WebPageController::class, 'gracias'])->name('web_gracias');
Route::get('/politicas-de-privacidad', [WebPageController::class, 'privacidad'])->name('web_privacidad');
Route::get('/condiciones-del-servicio', [WebPageController::class, 'condiciones'])->name('web_condiciones');
Route::put('/process_payment/{id}', [WebPageController::class, 'processPayment'])->name('web_process_payment');
Route::get('/computer/store', [LandingController::class, 'computerStore'])->name('index_computer_store');
Route::get('/gracias-compra/{id}', [WebPageController::class, 'graciasCompra'])->name('web_gracias_por_comprar_tu_entrada');
//////mensajes de whatsapp///////
Route::get('/ask/product/{id}', [LandingController::class, 'redirectToWhatsApp'])->name('whatsapp_send');

////////////iniciar session desde la pagina web """""""""""""!!!!!!!!

Route::post('/web/login', [AuthWebController::class, 'login'])->name('web_login');
Route::post('/web/register', [AuthWebController::class, 'register'])->name('web_register');


Route::get('/blog/home', [BlogController::class, 'index'])->name('blog_principal');
Route::get('/article/{url}', [BlogController::class, 'article'])->name('blog_article_by_url');
Route::get('/category/{id}', [BlogController::class, 'category'])->name('blog_category');
Route::get('/policies', [BlogController::class, 'policies'])->name('blog_policies');
Route::get('/contact-us', [BlogController::class, 'contactUs'])->name('blog_contact_us');

Route::get('/stories/article/{url}', [BlogController::class, 'storiesArticle'])->name('blog_stories_article_by_url');
Route::get('/stories/policies', [BlogController::class, 'storiesPolicies'])->name('blog_stories_policies');
Route::get('/stories/contact-us', [BlogController::class, 'storiesContactUs'])->name('blog_stories_contact_us');


Route::get('/mipais', function () {
    $ip = $_SERVER['REMOTE_ADDR']; // Esto contendrá la ip de la solicitud.

    // Puedes usar un método más sofisticado para recuperar el contenido de una página web con PHP usando una biblioteca o algo así
    // Vamos a recuperar los datos rápidamente con file_get_contents
    $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

    //var_dump($dataArray);

    dd($dataArray);
});

Route::get('/email', function () {
    Mail::to('elrodriguez2423@gmail.com')
        ->send(new StudentRegistrationMailable('data'));
    return 'mensaje enviado';
});



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::post('/pagar', [WebPageController::class, 'pagar'])->name('web_pagar');
    Route::resource('clients', ClientController::class);
    Route::resource('users', UserController::class);
    Route::resource('establishments', LocalSaleController::class);

    Route::delete('establishments/destroies/{id}', [LocalSaleController::class, 'destroy'])->name('establishment_destroies');
    Route::post('establishments/updated', [LocalSaleController::class, 'update'])->name('establishment_updated');

    Route::get(
        'inventory/product/establishment',
        [KardexController::class, 'index']
    )->name('kardex_index');

    Route::post(
        'inventory/product/sizes',
        [KardexController::class, 'kardexDeailsSises']
    )->name('kardex_sizes');

    Route::post(
        'search/person/number',
        [PersonController::class, 'searchByNumberType']
    )->name('search_person_number');

    Route::post(
        'save/person/update/create',
        [PersonController::class, 'saveUpdateOrCreate']
    )->name('save_person_update_create');

    Route::post(
        'search/person/full_name/number',
        [PersonController::class, 'searchByNameOrNumber']
    )->name('search_person_fullname_number');

    Route::get(
        'general/stock',
        [KardexController::class, 'generalStock']
    )->name('generalstock');



    Route::get(
        'company/show',
        [CompanyController::class, 'show']
    )->name('company_show');

    Route::post(
        'company/update_create',
        [CompanyController::class, 'updateCreate']
    )->name('company_update_create');

    Route::get(
        'company/getdata',
        [CompanyController::class, 'getdata']
    )->middleware(['auth', 'verified'])->name('datosempresa');

    Route::get('parameters/list', [ParametersController::class, 'index'])->name('parameters');
    Route::get('parameters/create', [ParametersController::class, 'create'])->name('parameters_create');
    Route::post('parameters/store', [ParametersController::class, 'store'])->name('parameters_store');
    Route::get('parameters/{id}/edit', [ParametersController::class, 'edit'])->name('parameters_edit');
    Route::put('parameters/update/{id}', [ParametersController::class, 'update'])->name('parameters_update');
    Route::get('parameters/{id}/{val}/default', [ParametersController::class, 'updateDefaultValue'])->name('parameters_update_default_value');

    ////////////////actualizar informacion de personas
    Route::get('person/update_information', function () {
        $person = Person::find(Auth::user()->person_id);
        $identityDocumentTypes = DB::table('identity_document_type')->get();

        $ubigeo = District::join('provinces', 'province_id', 'provinces.id')
            ->join('departments', 'provinces.department_id', 'departments.id')
            ->select(
                'districts.id AS district_id',
                'districts.name AS district_name',
                'provinces.name AS province_name',
                'departments.name AS department_name'
            )
            ->get();

        if (Auth::user()->hasRole('Alumno')) {
            return Inertia::render('Person/UpdateInformation', [
                'person' => $person,
                'identityDocumentTypes' => $identityDocumentTypes,
                'ubigeo' => $ubigeo
            ]);
        } else {
            return back();
        }
    })->name('user-update-profile');

    Route::post(
        'person/update_information/store',
        [PersonController::class, 'updateInformationPerson']
    )->name('user-update-profile-store');

    Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar');

    ///////////////META FACEBOOK WHATSAPP/////////////////

    Route::post('meta/whatsapp/message/send', [MetaController::class, 'sendMessageWhatsapp'])->name('meta_whatsapp_message_send');
});

require __DIR__ . '/auth.php';
