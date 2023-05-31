<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Http\Controllers\Controller;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       # dd(Comic::all());
       $voices = config('voice_navbar.voices');
        $about_nav = config('about_nav_menu.about_nav');
        $footericon = config('footer_icon.foote_icon');
        $shops = config('shop_menu.shop_menu');
        $comics = Comic::orderByDesc('id')->get();
       return view('admin.comics.index',compact('comics','voices', 'about_nav', 'footericon', 'shops'));
    }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $voices = config('voice_navbar.voices');
        $about_nav = config('about_nav_menu.about_nav');
        $footericon = config('footer_icon.foote_icon');
        $shops = config('shop_menu.shop_menu');
        return view('admin.comics.create',compact('voices', 'about_nav', 'footericon', 'shops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $dataform = [
            #chiave del db 'title'
            #$request->title, chiave del form (name)
            'title' => $request->title,
            'thumb' => $request->thumb,
            'type' => $request->type,
            'description' => $request->description,
            'sale_date' => $request->sale_date,
            'price' => '$'.$request->price,
        ];
        Comic::create($dataform);
        return to_route('comics.index')->with('message','comics add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $voices = config('voice_navbar.voices');
        $about_nav = config('about_nav_menu.about_nav');
        $footericon = config('footer_icon.foote_icon');
        $shops = config('shop_menu.shop_menu');
        return view('admin.comics.show',compact('comic','voices', 'about_nav', 'footericon', 'shops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $voices = config('voice_navbar.voices');
        $about_nav = config('about_nav_menu.about_nav');
        $footericon = config('footer_icon.foote_icon');
        $shops = config('shop_menu.shop_menu');
        return view('admin.comics.edit',compact('comic','voices', 'about_nav', 'footericon', 'shops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $dataform = [
            #chiave del db 'title'
            #$request->title, chiave del form (name)
            'title' => $request->title,
            'thumb' => $request->thumb,
            'type' => $request->type,
            'description' => $request->description,
            'sale_date' => $request->sale_date,
            'price' => '$'.$request->price,
        ];
        $comic->update($dataform);
        return to_route('comics.index')->with('message','comics update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
       $comic->delete();
       return to_route('comics.index')->with('message','comics is delete');
    }
}
