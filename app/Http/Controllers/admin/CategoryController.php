<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Requests\CreateCategoryPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){

        $model = Category::paginate(3);

        return view('admin.category.index',['model' => $model]);


    }

     public function create(){

         $model  = new Category();

         return view('admin.category.create',[
             'model' => $model
         ]);
     }

     public function store(CreateCategoryPost $request){
         $model = null;
         if($id = $request->get('id')){
             $model = Category::find(['id'=>$id])->first();
         }
         else {
             $model = new Category();
         }

         $model->name = $request->input('name');

         if($model->save()){
             $request->session()->flash('alert-success','Category has successfully created');
         }

         return redirect('admin/category');
     }

     public function update($id){

         $model = Category::find(['id' => $id])->first();

         return view("admin.category.update",['model' => $model]);
     }

     public function delete($id){

         Category::destroy($id);
         return redirect("admin/category");
     }

}
