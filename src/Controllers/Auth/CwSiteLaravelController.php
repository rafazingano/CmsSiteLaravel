<?php
namespace ConfrariaWeb\CwSiteLaravel\Controllers;

use App\Http\Controllers\Controller;
//use ConfrariaWeb\Site\Models\Site;

class CwSiteLaravelController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function index()
    {
        return view('cwsitelaravel::eliteadmin.dashboard.index');
    }
}
