<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() //카테고리에 보이는 카테고리 값들을 보여주는 코드
    {
        $categories = Category::orderby('title', 'asc')->get();
        return view('category.index')
        ->with('categories',$categories);
    }
    public function view($id)  //카테고리에서 각 카테고리를 선택하면 주소값에 선택한 카테고리 어떤 id 인지 확인하는 코드  ex)category/$id/view
    {
        $category = Category::find($id);
        return view('category.view')
            ->with('category',$category);
    }
    public function store(Request $request) //web.php에서 Route::post('/category/store', [CategoryController::class, 'store']); 로 값이 오면 DB에 저장할 값 보내기
    {
        $category = new Category();
        $category ->title = $request->title;
        $category ->save();

        return redirect('/category');

    }

    public function delete($id)  //카테고리에서 각 카테고리를 선택하면 주소값에 선택한 카테고리 어떤 id 인지 확인하는 코드  ex)category/$id/view
    {
        $category = Category::find($id); // 받아온 아이디로 카테고리를 찾으면 (id는 글 번호)
        $category -> delete(); // 그 카테고리를 del 해라

        return redirect('/category');

    }

    public function update(Request $request, $id) //web.php에서 Route::post('/category/store', [CategoryController::class, 'store']); 로 값이 오면 DB에 저장할 값 보내기
    {
        $category = Category::find($id); // 받아온 아이디로 카테고리를 찾으면 (id는 글 번호)
        $category ->title = $request->title; //update하고
        $category ->save();//저장해서

        return redirect('/category'); //카테고리로 redirect해라

    }

}
