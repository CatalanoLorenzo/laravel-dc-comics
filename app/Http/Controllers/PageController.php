<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;


class PageController extends Controller
{
   /*  public function home()
    {
        $voices = config('voice_navbar.voices');
        $about_nav = config('about_nav_menu.about_nav');
        $footericon = config('footer_icon.foote_icon');
        $shops = config('shop_menu.shop_menu');
        return view('home', compact('voices', 'about_nav', 'footericon', 'shops'));
    } */
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
       return view('home',compact('comics','voices', 'about_nav', 'footericon', 'shops'));
    }
    
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {$voices = config('voice_navbar.voices');
        $about_nav = config('about_nav_menu.about_nav');
        $footericon = config('footer_icon.foote_icon');
        $shops = config('shop_menu.shop_menu');
        return view('user.single_comic' ,compact('comic','voices', 'about_nav', 'footericon', 'shops'));
    }
}
