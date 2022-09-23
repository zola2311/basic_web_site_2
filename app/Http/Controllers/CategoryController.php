<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function AllCat(){
        // $categories = DB::table('categories')
        //         ->join('users','categories.user_id','users.id')
        //         ->select('categories.*','users.name')
        //         ->latest()->paginate(5);


//        $categories = Category::latest()->paginate(5);
//        $trachCat = Category::onlyTrashed()->latest()->paginate(3);

        // $categories = DB::table('categories')->latest()->paginate(5);
        return view('admin.category.index');
//        return view('admin.category.index', compact('categories','trachCat'));
    }

}
