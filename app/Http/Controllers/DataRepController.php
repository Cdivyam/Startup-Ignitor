<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\DataRepository;
use DB;

class DataRepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DataRepository::orderBy('created_at', 'desc')->paginate(10);
        return view('dataRep.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataRep.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'domain' => 'required',
            'sector' => 'required',
            'link' => 'required'
        ]);

        if($request->hasFile('link')){
            //Get File name with ext
            $filenameWithExt = $request->file('link')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('link')->getClientOriginalExtension();
            //FileName to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->File('link')->storeAs('public/files', $fileNameToStore);
        } 
        $data = new DataRepository;
        $data->name = $request->input('name');
        $data->domain = $request->input('domain');
        $data->sector = $request->input('sector');
        $data->link = $fileNameToStore;
        $data->save();
        return redirect('/data_repository')->with('success', 'Post Created'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = DataRepository::find($id);
        return view('dataRep.show')->with('datas',$datas);
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
        //
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
    }

    public function download( $id )
    {
        /*
        // Check if file exists in app/storage/file folder
        $file_path = storage_path('/public/files').$filename;
        $headers = array(
            'Content-Type => csv',
            'Content-Disposition => attachment; filename=' . $filename,
        );
        if ( file_exists( $file_path ) ) {
            // Send Download
            return Response::download( $file_path, $filename, $headers );
        } else {
            // Error
            exit( 'Requested file does not exist on our server!' );
        }
        */

        $dl = DataRepository::find($id);
        return Storage::download('public/files/'.$dl->link);
    }
}
