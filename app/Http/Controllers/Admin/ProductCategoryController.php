<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ProductCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ProductCategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View {
        $listCategory = ProductCategory::all();
        return view('admin.product_category.index', compact('listCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View {
        return view('admin.product_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse {
        try {
            $category = new ProductCategory();
            $category->setAttribute('name', $request->get('name'));
            $category->save();

            return redirect()->route('admin.category.index')->with('success', 'Thêm thành công');
        }catch (\Exception $exception){
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse {
        try {
            $category = ProductCategory::find($id);
            $category->delete();

            return redirect()->back()->with('success', 'Xóa thành công');
        }catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
