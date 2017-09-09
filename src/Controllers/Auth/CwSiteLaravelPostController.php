<?php
namespace ConfrariaWeb\CwSiteLaravel\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ConfrariaWeb\CwSiteLaravel\Models\Post;
use Illuminate\Support\Facades\Auth;

class CwSiteLaravelPostController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['columns'] = ['id' => 'ID', 'title' => 'Title', 'created_at' => 'Created At'];
        $data['data'] = Post::all();
        return view('cwsitelaravel::eliteadmin.layouts.data-table', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cwsitelaravel::eliteadmin.posts.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = $request->all();
        $p['user_id'] = Auth::user()->id;
        $post = Post::create($p);
        return redirect()->route('posts.edit', $post);
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
