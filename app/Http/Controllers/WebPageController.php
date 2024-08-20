<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Modules\CMS\Entities\CmsSection;
use Modules\Onlineshop\Entities\OnliItem;
use Modules\Academic\Entities\AcaCourse;
use Modules\Academic\Entities\AcaCategoryCourse;
use Modules\Onlineshop\Entities\OnliSale;
use Modules\Onlineshop\Entities\OnliSaleDetail;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Client\Payment\PaymentClient;
use Illuminate\Support\Facades\Validator;
use App\Mail\StudentRegistrationMailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmPurchaseMail;
use Carbon\Carbon;

class WebPageController extends Controller
{
    protected $listcard;

    public function __construct()
    {

        $this->listcard = CmsSection::where('component_id', 'cursos_area_5')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();
    }

    public function index()
    {
        return view('pages.home', [
            'listcard' => $this->listcard
        ]);
    }

    public function nosotros()
    {

        $banner = CmsSection::where('component_id', 'nosotros_banner_area_11')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();


        $visions = CmsSection::where('component_id', 'nosotros_vision_area_12')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $lider = CmsSection::where('component_id', 'nosotros_lider_area_13')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.nosotros', [
            'banner' => $banner,
            'visions' => $visions,
            'lider' => $lider
        ]);
    }

    public function cursos()
    {
        $courses = OnliItem::with('course')->get();
        $courses = $courses->shuffle();
        $categories = AcaCategoryCourse::all();

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.cursos', [
            'courses' => $courses,
            'categories' => $categories,
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function servicios()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();
        
        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.servicios',[
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function capacitacion()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();
        
        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.capacitacion',[
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function suscripcion()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();
        
        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.suscripcion',[
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function automatizacion()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();
        
        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.automatizacion',[
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function agencia()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();
        
        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.agencia',[
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function imagenprofesional()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();
        
        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.imagen-profesional',[
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function cursodescripcion($id)
    {
        $item = OnliItem::find($id);

        $course = AcaCourse::with('category')
            ->with('modality')
            ->with('modules')
            ->with('teachers.teacher.person.resumes')
            ->with('brochure')
            ->with('agreements')
            ->where('id', $item->item_id)
            ->first();

        $latest_courses = OnliItem::with('course')
            ->orderBy('id', 'desc')
            ->where('id', '!=', $id)
            ->take(10)
            ->get()
            ->shuffle()
            ->take(3);

        return view('pages.curso-descripcion', [
            'course' => $course,
            'item' => $item,
            'latest_courses' => $latest_courses
        ]);
    }

    public function contacto()
    {
        $banner = CmsSection::where('component_id', 'nosotros_banner_area_11')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'header_area_1')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();


        return view('pages.contacto', [
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function carrito()
    {

        return view('pages.carrito');
    }

    public function pagar(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'names' => 'required|string|max:255',
            'app' => 'required|string|max:255',
            'apm' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'dni' => 'required|numeric|unique:people,number',
            'phone' => 'required|string|max:255',
            'email' => 'required|unique:people,email',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $productids = $request->get('item_id');

        $comprador_nombre = $request->get('names');
        $comprador_telefono = $request->get('phone');
        $comprador_email = $request->get('email');

        $preference_id = null;
        try {
            MercadoPagoConfig::setAccessToken(env('MERCADOPAGO_TOKEN'));
            $client = new PreferenceClient();
            $items = [];
            $products = [];
            $total = 0;

            $person = Person::create([
                'document_type_id' => $request->get('type'),
                'short_name' => $comprador_nombre,
                'full_name' => $comprador_nombre . ' ' . $request->get('app') . ' ' . $request->get('apm'),
                'number' => $request->get('dni'),
                'telephone' => $comprador_telefono,
                'email' => $comprador_email,
                'is_provider' => false,
                'is_client' => true,
                'names' => $comprador_nombre,
                'father_lastname' => $request->get('app'),
                'mother_lastname' => $request->get('apm'),
                'gender' => 'M',
                'status' => true
            ]);

            $sale = OnliSale::create([
                'module_name'                   => 'Onlineshop',
                'person_id'                     => $person->id,
                'clie_full_name'                => $comprador_nombre,
                'phone'                         => $comprador_telefono,
                'email'                         => $comprador_email,
                'response_status'               => 'pendiente',
            ]);

            $productquantity = 1;

            foreach ($productids as $key => $id) {

                $product = OnliItem::find($id);

                array_push($items, [
                    'id' => $id,
                    'title' => $product->name,
                    'quantity'      => floatval($productquantity),
                    'currency_id'   => 'PEN',
                    'unit_price'    => floatval($product->price)
                ]);

                array_push($products, [
                    'image' => $product->image,
                    'name' => $product->name,
                    'price' => floatval($product->price),
                    'quantity'      => floatval($productquantity),
                    'total' => (floatval($productquantity) * floatval($product->price))
                ]);

                $total = $total + (floatval($productquantity) * floatval($product->price));

                OnliSaleDetail::create([
                    'sale_id'       => $sale->id,
                    'item_id'       => $product->item_id,
                    'entitie'       => $product->entitie,
                    'price'         => $product->price,
                    'quantity'      => floatval($productquantity),
                    'onli_item_id'  => $id
                ]);
            }

            $preference = $client->create([
                "items" => $items,
            ]);

            // $preference->back_urls = array(
            //     "success" => route('web_gracias_por_comprar_tu_entrada', $sale->id),
            //     // "failure" => "http://www.tu-sitio/failure",
            //     // "pending" => "http://www.tu-sitio/pending"
            // );

            $preference_id =  $preference->id;
        } catch (\MercadoPago\Exceptions\MPApiException $e) {
            // Manejar la excepción
            $response = $e->getApiResponse();
            dd($response); // Mostrar la respuesta para obtener más detalles
        }

        return view('pages.pagar', [
            'preference' => $preference_id,
            'products' => $products,
            'person_name' => $person->full_name,
            'total' => $total,
            'sale_id' => $sale->id
        ]);
    }

    public function privacidad()
    {

        $banner = CmsSection::where('component_id', 'nosotros_banner_area_11')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        return view('pages.politicas-de-privacidad', [
            'banner' => $banner
        ]);
    }

    public function construction()
    {
        return view('pages.construction');
    }

    public function processPayment(Request $request, $id)
    {
        MercadoPagoConfig::setAccessToken(env('MERCADOPAGO_TOKEN'));

        $client = new PaymentClient();
        $sale = OnliSale::find($id);

        if ($sale->response_status == 'approved') {
            return response()->json(['error' => 'el pedido ya fue procesado, ya no puede volver a pagar'], 412);
        } else {
            try {

                $payment = $client->create([
                    "token" => $request->get('token'),
                    "issuer_id" => $request->get('issuer_id'),
                    "payment_method_id" => $request->get('payment_method_id'),
                    "transaction_amount" => (float) $request->get('transaction_amount'),
                    "installments" => $request->get('installments'),
                    "payer" => $request->get('payer')
                ]);

                if ($payment->status == 'approved') {

                    $sale->email = $request->get('payer')['email'];
                    $sale->total = $request->get('transaction_amount');
                    $sale->identification_type = $request->get('payer')['identification']['type'];
                    $sale->identification_number = $request->get('payer')['identification']['number'];
                    $sale->response_status = $payment->status;
                    $sale->response_id = $request->get('collection_id');
                    $sale->response_date_approved = Carbon::now()->format('Y-m-d');
                    $sale->response_payer = json_encode($request->all());
                    $sale->response_payment_method_id = $request->get('payment_type');
                    $sale->mercado_payment_id = $payment->id;
                    $sale->mercado_payment = json_encode($payment);

                    ///enviar correo
                    Mail::to($sale->email)
                        ->send(new ConfirmPurchaseMail(OnliSale::with('details.item')->where('id', $id)->first()));

                    $sale->save();

                    return response()->json([
                        'status' => $payment->status,
                        'message' => $payment->status_detail,
                        'url' => route('web_gracias_por_comprar_tu_entrada', $sale->id)
                    ]);
                } else {

                    return response()->json([
                        'status' => $payment->status,
                        'message' => $payment->status_detail,
                        'url' => route('web_pagar')
                    ]);

                    $sale->delete();
                }
            } catch (\MercadoPago\Exceptions\MPApiException $e) {
                // Manejar la excepción
                $response = $e->getApiResponse();
                $content  = $response->getContent();

                $message = $content['message'];
                return response()->json(['error' => 'Error al procesar el pago: ' . $message], 412);
            }
        }
    }

    public function graciasCompra($id)
    {
        $products[0] = null;
        $sale = OnliSale::where('id', $id)->with('details.item')->first();
        return view('pages/gracias-compra', [
            'products' => $products,
            'sale' => $sale
        ]);
    }
}
