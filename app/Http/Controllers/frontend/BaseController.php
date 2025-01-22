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
        //politics news only
        // $society = Category::where('slug', 'society-rule')
        // ->first()
        // // ->article()
        // ->orderBy('created_at', 'desc')
        // ->first();
        $sport=Category::where('slug','=','sports')->OrderBy('created_at', 'desc')->get();
    //return $category->article;
    //for company information
        $company =Company::first();
        View::share([
            'categories'=>$category,
            //'society'=>$society,
            'sport'=>$sport,
            'companies'=>$company
        ]);
        
    }
}
