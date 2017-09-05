<?php
namespace ConfrariaWeb\CwSiteLaravel\Controllers\Auth;

use App\Http\Controllers\Controller;
use ConfrariaWeb\CwSiteLaravel\Models\PostCategory;

class CwSiteLaravelPostCategoryController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    
    public function index()
    {
        $data['columns'] = ['id' => 'ID', 'title' => 'Title', 'created_at' => 'Created At'];
        $data['data'] = PostCategory::all();
        return view('cwsitelaravel::eliteadmin.layouts.data-table', $data);
    }
}
