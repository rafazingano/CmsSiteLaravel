<?php
namespace ConfrariaWeb\CwSiteLaravel\Controllers\Auth;

use App\Http\Controllers\Controller;
use ConfrariaWeb\CwSiteLaravel\Models\Category;

class CwSiteLaravelCategoryController extends Controller
{
    
    public function index()
    {
        $data['columns'] = ['id' => 'ID', 'title' => 'Title', 'created_at' => 'Created At'];
        $data['data'] = Category::all();
        return view('cwsitelaravel::eliteadmin.layouts.data-table', $data);
    }
}
