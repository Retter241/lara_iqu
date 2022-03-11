<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Filters\PartFilter;
use App\Models\Category;
use App\Models\Manufacturer;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(PartFilter $filters)
    {
          $categories = Category::all();
          $manufacturers = Manufacturer::all();


          $parts = Part::with('category')->with('manufacturer')->filter($filters)->paginate(6);


          $filters_range = [
            'min_price' => !empty(Part::min('price')) ? Part::min('price') : 0,
            'max_price' => !empty(Part::max('price')) ? Part::max('price') : 0,
            'min_weight' => !empty(Part::min('weight')) ? Part::min('weight') : 0,
            'max_weight' => !empty(Part::max('weight')) ? Part::max('weight') : 0,
          ];

          $filter_current_values = [
            'categories' => [],
            'manufacturers' =>  isset(request()->manufacturer) && !is_array(request()->manufacturer) ? request()->manufacturer->to_array() : request()->manufacturer,
          ];

        return view('products' , compact('parts', 'categories' , 'manufacturers' , 'filters_range', 'filter_current_values'));
    }
}
