<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogRequest;
use App\Models\Blog;
use App\Repositories\Blog\BlogInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogRepository;

    public function __construct(BlogInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $datatableRoute= route('cms.blog.datatable');
        return view('cms.pages.blog.index', compact('datatableRoute'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    public function create(BlogRequest $request)
    {
        $data = $request->all();
        $result = $this->blogRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.blog.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(BlogRequest $request)
    {
        $data = $request->all();
        $result =  $this->blogRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.blog.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    /**
     *
     */
    public function form($id = null)
    {
        if ($id) {
            $blog = Blog::find($id);
            $category = Blog::CATEGORY_NAMES;
            return view('cms.pages.blog.form', compact('blog','category'));
        }
        $category = Blog::CATEGORY_NAMES;
        return view('cms.pages.blog.form', compact('category')); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->blogRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.blog.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->blogRepository->datatable();
    }
}
