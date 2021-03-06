<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();
class CategoryController extends Controller
{
    public function index()
    {
    	return view ('admin.add_category');
    }
    public function all_category()
    {
    	$all_category_info=DB::table('tbl_category')->get();
    	$manage_category=view('admin.all_category')
    		->with('all_category_info',$all_category_info);
    	return view('admin_layout')
    		->with('admin.all_category',$manage_category);
    	//return view('admin.all_category');
    }
    public function save_category(Request $request)
    {
    	$data=array();
    	$data['category_id']=$request->category_id;
    	$data['category_name']=$request->category_name;
    	$data['category_description']=$request->category_description;
    	$data['publication_status']=$request->publication_status;

    	DB::table('tbl_category')->insert($data);
    	Session::put('message','category adddes successfully !!');
    	 return redirect('/add-category');
    }
}
