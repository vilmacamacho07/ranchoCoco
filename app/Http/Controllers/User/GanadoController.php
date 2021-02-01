<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User\Ganado;
class GanadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = DB::table('animals')->select('id','peso', 'sexo', 'fecha_ingreso','edad','tipo','raza','categoria','gestacion')->orderBy('id')->get();
       
        return view('user.ganado.indexG',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sexo = ['Hembra' => 'hembra', 'Macho' => 'macho'];
        $tipo = ['Torete' => 'torete', 'Novillona' => 'novillona', 'Vacas' => 'vacas'];
        $categoria = ['Crianza' => 'crianza', 'Engorda' => 'engorda'];
        $gestacion = ['Embarazo' => 'embarazo', 'Soltera' => 'soltera'];
        return view('user.ganado.createG',compact('sexo','tipo','categoria','gestacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Ganado::create($request->all());
        return redirect('user/ganado')->with('menssage','Ganado insertado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $sexo = ['Hembra' => 'hembra', 'Macho' => 'macho'];
        $tipo = ['Torete' => 'torete', 'Novillona' => 'novillona', 'Vacas' => 'vacas'];
        $categoria = ['Crianza' => 'crianza', 'Engorda' => 'engorda'];
        $gestacion = ['Embarazo' => 'embarazo', 'Soltera' => 'soltera'];
        $data = Ganado::findOrFail($id);

        return view('user.ganado.editG', compact('data','sexo','tipo','categoria','gestacion'));
        
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
        //
        Ganado::findOrFail($id)->update($request->all());
        return redirect('user/ganado')->with('menssage','Ganado actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //

        if ($request->ajax()) {
            if (Ganado::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
