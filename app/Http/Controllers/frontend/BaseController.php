<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct() {
        $category=Category::all();
        $sport=Category::where('slug','=','sports')->OrderBy('created_at', 'desc')->get();
        $company =Company::first();
        View::share([
            'categories'=>$category,
            'sport'=>$sport,
            'companies'=>$company
        ]);
        
    }
}
