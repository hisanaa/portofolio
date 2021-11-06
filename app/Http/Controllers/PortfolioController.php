<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'active' => Portfolio::where(['status' => 1])->get(),
            'not_active' => Portfolio::where(['status' => 0])->get()
        ];

        return view('portfolio.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->file('thumbnail')->store('thumbnail'));
        $rules = [
            'project_on' => 'required',
            'tools' => 'required',
            'url' => 'required',
            'status' => 'required',
            'featured' => 'required',
            'thumbnail' => 'required',
        ];

        $validator = validator($request->all(), $rules);

        if($validator->fails()){
            return redirect()->to('portfolio/create');
        }

        $data = [
            'project_on' => $request->project_on,
            'tools' => $request->tools,
            'url' => $request->url,
            'status' => $request->status,
            'featured' => $request->featured,
            'thumbnail' => $request->file('thumbnail')->store('thumbnail'),
        ];
        // $request->file('thumbnail')->store('thumbnail')
        // $request->file('thumbnail')->store('thumbnail');
        Portfolio::create($data);
        return redirect()->to('portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
