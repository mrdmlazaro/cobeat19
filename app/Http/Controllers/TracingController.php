<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Tracing;
use Illuminate\Http\Request;
use App\Http\Controllers\PDF;

class TracingController extends Controller
{
    public function index(Tracing $tracing){
        $tracings = Tracing::latest()->paginate(20);
        
        return view('tracing.index',compact('tracings'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function home(Tracing $tracing){
        return view('tracing.home');
    }
    public function chart(Tracing $tracing){
        return view('tracing.charts');
    }
    public function barChart(){
        $users = Tracing::select(DB::raw("COUNT(*) as count"))
                 ->whereYear('created_at', date('Y'))
                 ->groupby(DB::raw("Month(created_at)"))
                 ->pluck('count');
        $months = Tracing::select(DB::raw("Month(created_at) as month"))
                 ->whereYear('created_at', date('Y'))
                 ->groupby(DB::raw("Month(created_at)"))
                 ->pluck('month');
        
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){
            $datas[$month] = $users[$index];
        }

        return view('tracing.bar-chart', compact('datas'));
    }

    public function pieChart(){
        $users = Tracing::select(DB::raw("COUNT(*) as count"))
                 ->whereYear('created_at', date('Y'))
                 ->groupby(DB::raw("Month(created_at)"))
                 ->pluck('count');
        $months = Tracing::select(DB::raw("Month(created_at) as month"))
                 ->whereYear('created_at', date('Y'))
                 ->groupby(DB::raw("Month(created_at)"))
                 ->pluck('month');
        
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){
            $datas[$month] = $users[$index];
        }

        return view('tracing.pie-chart', compact('datas'));
    }

    public function LineChart(){
        $users = Tracing::select(DB::raw("COUNT(*) as count"))
                 ->whereYear('created_at', date('Y'))
                 ->groupby(DB::raw("Month(created_at)"))
                 ->pluck('count');
        $months = Tracing::select(DB::raw("Month(created_at) as month"))
                 ->whereYear('created_at', date('Y'))
                 ->groupby(DB::raw("Month(created_at)"))
                 ->pluck('month');
        
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){
            $datas[$month] = $users[$index];
        }

        return view('tracing.line-chart', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tracing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'days_monitored'=>'required',
            'address'=>'required',

        ]);

        Tracing::create($request->all());   
        
        return redirect()->route('tracing.index')->with('success','Contact tracing information updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tracing $tracing)
    {
        return view('tracing.show',compact('tracing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracing $tracing)
    {
        return view('tracing.edit',compact('tracing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracing $tracing)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'days_monitored'=>'required',
            'address'=>'required',
        ]);

        $tracing->update($request->all());

        return redirect()->route('tracing.index')
                         ->with('success','Contact tracing information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracing $tracing)
    {
        $tracing->delete();
        return redirect()->route('tracing.index')
                        ->with('success','Contact tracing information updated successfully');
    }

    public function charts(Tracing $tracing)
    {
        return view('chart',compact('tracing'));
    }

}
