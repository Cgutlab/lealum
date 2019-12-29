<?php
/*SOLICITUD DE PRESUPUESTO
  routes\web.php
    Route::get('presupuesto', ['uses' => 'page\PresupuestoController@index', 'as' => 'presupuesto']);
    Route::post('presupuesto/enviar', ['uses' => 'page\PresupuestoController@enviarMail', 'as' => 'presupuesto.enviar']);
  
  app\Mail\Presupuesto.php
* app\Http\Controllers\page\PresupuestoController.php
  resources\views\page\presupuesto.blade.php
  resources\views\page\solicitud.blade.php
*/
namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Requests\PresupuestoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Mail\Presupuesto;
use App\Dato;
use App\Correo;
use App\Categoria;
use App\Producto;

class PresupuestoController extends Controller
{
  public function index(Request $request){
    $activo='presupuesto';
    $mensaje = '';
    
    if(!is_null($request->producto)){
        $producto = Producto::find($request->producto);
        $categoria = Categoria::find($producto->categoria_id);
        $mensaje = 'Estoy interesado en el producto '.$producto->nombre.' que pertenece a la categoria '.$categoria->nombre;
    }
    return view('pages.presupuesto', compact('activo', 'mensaje'));
  }
  
  public function enviarMail(Request $request) {
      $activo='presupuesto';
      $datos = Dato::where('tipo', 'email')->first();
      $nombre = $request->input('nombre');
      $localidad = $request->input('localidad');
      $telefono = $request->input('telefono');
      $email = $request->input('email');
      $mensaje  = $request->mensaje;
        $newid = 'pres_';
        if ($request->hasFile('archivo')) {
            if ($request->file('archivo')->isValid()) {
                $file = $request->file('archivo');
                $path = public_path('img/archivos/');
                $request->file('archivo')->move($path, $newid.'_'.$file->getClientOriginalName());
                $archivo = 'img/archivos/' . $newid.'_'.$file->getClientOriginalName();
                
            }
        }
      
      Mail::send('pages.solicitud', ['datos' => $datos, 'nombre' => $nombre, 'localidad' => $localidad, 'telefono' => $telefono, 'email' => $email, 'mensaje' => $mensaje], function ($message) use ($archivo){

/*    $file_save = Helpers::saveImage($request->file('imagen'), 'solicitud_presupuesto');
      $file_save ? $datos['imagen'] = $file_save : false
      ;*/

      $dato = Dato::where('tipo', 'email')->first();
            $message->from('info@aberturastolosa.com.ar', 'Aberturas General Paz');

            //Attach file
            $message->attach($archivo);

            $message->to($dato->descripcion);

            //Add a subject
            $message->subject('Solicitud de presupuesto');

        });
        if (Mail::failures()) {
            return view('pages.presupuesto', compact('activo'));
        }
        return view('pages.presupuesto', compact('activo'));

    }
}
