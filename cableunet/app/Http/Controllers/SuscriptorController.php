<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscriptor;

class SuscriptorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suscriptors=Suscriptor::orderBy('id','DESC')->paginate(3);
        return view('suscriptor.index',compact('suscriptors')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('suscriptor.create');
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
        $this->validate($request,[ 'cedula'=>'required', 'nombres'=>'required', 'paquete'=>'required', 'minutos'=>'required', 'internet'=>'required', 'cable'=>'required', 'total'=>'required']);
        Suscriptor::create($request->all());
        return redirect()->route('suscriptor.index')->with('success','Suscriptor creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suscriptors=Suscriptor::find($id);
        return  view('suscriptor.show',compact('suscriptors'));
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
        $suscriptors=Suscriptor::find($id);
        return view('suscriptor.edit',compact('suscriptors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'cedula'=>'required', 'nombres'=>'required', 'paquete'=>'required', 'minutos'=>'required', 'internet'=>'required', 'cable'=>'required', 'total'=>'required']);

        Suscriptor::find($id)->update($request->all());
        return redirect()->route('suscriptor.index')->with('success','Suscriptor actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Suscriptor::find($id)->delete();
        return redirect()->route('suscriptor.index')->with('success','Suscriptor eliminado satisfactoriamente');
    }
}