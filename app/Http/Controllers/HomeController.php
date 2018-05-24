<?php

namespace App\Http\Controllers;

use App\Mail\Phone;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');

        echo 'Hello World';
    }

    public function gallery()
    {
        $images = glob('images/gallery/*.{jpg}', GLOB_BRACE);

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($images);

        $perPage = 6;

        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        $paginatedItems->setPath(\request()->url());


        return view('home.gallery', compact('paginatedItems'));
    }

    public function schedule()
    {
        return view('home.schedule');
    }

    public function team()
    {
        $teams = Team::all();
        return view('home.team', compact('teams'));
    }

    public function workshop()
    {
        return view('home.workshop');
    }

    public function child()
    {
        return view('home.child');
    }

    public function mail(Request $request)
    {
        $this->validate($request, [
           'phone' => 'required|numeric'
        ]);

        Mail::to('47112ed51c-adddce@inbox.mailtrap.io')->send(new Phone($request->get('phone')));

        return back();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
