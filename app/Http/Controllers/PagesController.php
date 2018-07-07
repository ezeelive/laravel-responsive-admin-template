<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
        //
		$pages = Pages::all();
        return view('pages.index', ['pages' => $pages]);
		
		
    }
	
	
	public function showpages()
    {
        //
		return view('pages/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
		return view('pages/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'page_name' => 'required',
        //     'page_title' => 'required',
		// 	'meta_title' => 'required',
        // ]);
        Pages::create($request->all());
        return redirect()->route('pages.index')
                        ->with('success','Pages created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit($page_id)
    {
        $pages= Pages::find($page_id);
        return view('pages.edit',compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $page_id)
    {
    //    $this->validate($request, [
    //         'page_name' => 'required',
    //         'page_title' => 'required',
	// 		'meta_title' => 'required',
    //     ]);
        Pages::find($page_id)->update($request->all());
        return redirect()->route('pages.index')->with('success','Pages updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy($page_id)
    {
        Pages::find($page_id)->delete();
        return redirect()->route('pages.index')
                        ->with('success','Pages deleted successfully');
    }
}
