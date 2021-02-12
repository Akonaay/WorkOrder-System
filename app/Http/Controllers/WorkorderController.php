<?php

namespace App\Http\Controllers;

use App\Workorder;
use Illuminate\Http\Request;
use PDF;

class WorkorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::orderBy('created_at', 'desc', ['LIMIT BY' => '3'])->get();
        $workorders = Workorder::orderBy('wdate', 'desc')->paginate(15);
        return view('workorders.index')->with('workorders', $workorders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workorders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $this->validate($request, [
            'client' => 'required',
            'address1' => 'required',
            'wono' => 'required',
            'fiber' => 'required',
            'prewire' => 'required',
            'wtype' => 'required',
            'team' => 'required',
            'wdate' => 'required'
        ]);
        
        if ($request->hasFile('imgfile')) {

            foreach ($request->imgfile as $file) {
                
                $filename = $file->getClientOriginalName();

                $file->storeAs('public/imgfiles', $filename);
            }

            // Create workorder instance
            $workorder = new Workorder;
            $workorder->wdate = $request->input('wdate');
            $workorder->client = $request->input('client');
            $workorder->address1 = $request->input('address1');
            $workorder->wono = $request->input('wono');
            $workorder->acno = $request->input('acno');
            $workorder->fat = $request->input('fat');
            $workorder->tag = $request->input('tag');
            $workorder->pon = $request->input('pon');
            $workorder->signalo = $request->input('signalo');
            $workorder->decoder = $request->input('decoder');
            $workorder->fiber = $request->input('fiber');
            $workorder->utp = $request->input('utp');
            $workorder->prewire = $request->input('prewire');
            $workorder->wtype = $request->input('wtype');
            $workorder->comment = $request->input('comment');
            $workorder->team = $request->input('team');
            $workorder->imgfile = $filename;
            $workorder->save();
        }      

        return redirect('/workorders')->with('success', 'Workorder created');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workorder = Workorder::find($id);
        return view('workorders.show')->with('workorder', $workorder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workorder = Workorder::find($id);
        return view('workorders.edit')->with('workorder', $workorder);
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
        //Validation
        $this->validate($request, [
            'client' => 'required',
            'address1' => 'required',
            'wono' => 'required',
            'acno' => 'required',
            'fat' => 'required',
            'tag' => 'required',
            'pon' => 'required',
            'signalo' => 'required',
            'decoder' => 'required',
            'fiber' => 'required',
            'utp' => 'required',
            'prewire' => 'required',
            'wtype' => 'required',
            'comment' => 'required',
            'team' => 'required',
        ]);

        // Create workorder instance
        $workorder = Workorder::find($id);
        $workorder->client = $request->input('client');
        $workorder->address1 = $request->input('address1');
        $workorder->wono = $request->input('wono');
        $workorder->acno = $request->input('acno');
        $workorder->fat = $request->input('fat');
        $workorder->tag = $request->input('tag');
        $workorder->pon = $request->input('pon');
        $workorder->signalo = $request->input('signalo');
        $workorder->decoder = $request->input('decoder');
        $workorder->fiber = $request->input('fiber');
        $workorder->utp = $request->input('utp');
        $workorder->prewire = $request->input('prewire');
        $workorder->wtype = $request->input('wtype');
        $workorder->comment = $request->input('comment');
        $workorder->team = $request->input('team');
        $workorder->save();

        return redirect('/workorders')->with('success', 'Workorder Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workorder = Workorder::find($id);
        $workorder->delete();

        return redirect('/workorders')->with('success', 'Workorder Deleted');

    }

    public function monthWorkorderChart()
    {
        // $workorder = Workorder::find($id);
        // $workorder->delete();

        // return redirect('/workorders')->with('success', 'Workorder Deleted');

    }

    public function exportPDF()
    {
        $workorder = ['title' => 'Workorder'];
        $pdf = PDF::loadView('myPDF', $workorder);
  
        return $pdf->download('itsolutionstuff.pdf');

    }
}
