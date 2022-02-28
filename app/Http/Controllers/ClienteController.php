<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
// para la consultas de la dba se usa el DB
// use DB;
use Illuminate\Support\Facades\DB;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    // -----------version con busquedsa
         $text=trim($request->get('busqueda'));
        $cliente=DB::table('cliente')
        ->select('id','nombre','edad')
        ->where('nombre','LIKE','%'.$text.'%')
        ->orWhere('edad','LIKE','%'.$text.'%')
        ->orderBy('nombre','asc')
        ->paginate(10);
        // return view('contact');
        return view('contact',compact('cliente','text'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function crear(){
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

// todo los datos this formulario in function store
         // return view('cliente.create');
    // return $request;
    $cliente  = new cliente;

    $cliente->nombre=$request->input('name');
    $cliente->edad=$request->input('edad');
    $cliente->save();
    // redireccionar una ves funcionadao
    return  redirect()->route('create.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $text=trim($request->get('text'));
        // $cliente=DB::table('cliente')
        // ->select('id','nombre','edad')
        // ->where('nombre','LIKE','%'.$text.'%')
        // ->orWhere('edad','LIKE','%'.$text.'%')
        // ->orderBy('nombre','asc')
        // ->paginate(10);
        // return view('contact');
        // return view('contact',compact('cliente','text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente=cliente::findOrFail($id);
        $cliente->nombre=$request->input('name');
        $cliente->edad=$request->input('edad');
        // $cliente->el nombre de campo=$request->input('name del campo');
        $cliente->save();
        // cuando usamos view this para el nombre del archivo .blade
        // cuando usamos rout es la ruta del web
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // findOrFail para madar el id
           $cliente=cliente::findOrFail($id);
           $cliente->delete();
           // return redirect()->action([ClienteController::class, 'index']);
        //    return back()->whith('succes','Usuario eliminado correctamente'); // espar que retorne a la view anterior con el back()

        return back();
    }

public function editar($id){
    $cliente=cliente::findOrFail($id); // this para delete y update

    return view('edit',compact('cliente')); // el compact es para enviar un objeto clienete
    // return $cliente;
    // return view('edit',['key'=>$id]);

}
}
