<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Careers;
use App\Models\EcoSystem;
use App\Models\MilesStone;
use App\Models\Music;
use App\Models\Partner;
use App\Models\Stream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
  /**
   * Display homepage.
   */
  public function index()
  {
    $blogs = Blog::getLatest(Blog::NUMBER_OF_BLOG_IN_HOME);
    $ecosystemsByCategory = EcoSystem::allByCategory();
    $partnersByGroup = Partner::pin2WebByGroup();
    return view('web.pages.index.index', compact('ecosystemsByCategory', 'partnersByGroup', 'blogs'));
  }

  /**
   * Display stream.
   */
  public function stream()
  {
    $streams = Stream::all();
    return view('web.pages.stream.index', compact('streams'));
  }

  /**
   * Display music
   */
  public function music()
  {
    $musics = Music::allActive();
    return view('web.pages.music.index', compact('musics'));
  }

  /**
   * Display aboutUs
   */
  public function aboutUs()
  {
    $milestones = MilesStone::all();
    return view('web.pages.about-us.index', compact('milestones'));
  }

  /**
   * Display let's talk
   */
  public function letsTalk()
  {
    return view('web.pages.lets-talk.index');
  }

  /**
   * Display blogs
   */
  public function blog()
  {
    $blogByCategory = Blog::allByCategory();
    return view('web.pages.blog.index', compact('blogByCategory'));
  }

  /**
   * Display blogs
   */
  public function career()
  {
    $careers = Careers::allActive();
    return view('web.pages.career.index', compact('careers'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Switch language
   */
  public function switchLanguage(string $language)
  {
    App::setLocale($language);
    session()->put('locale', $language);
    return redirect()->back();
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function switchMode(string $mode)
  {
    session()->put('mode', $mode);
    return redirect()->back();
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}