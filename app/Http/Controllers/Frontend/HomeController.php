<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\{Airline, Brochure, Product, Category, Promo, Slider};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){

        $active = TRUE;

        $sliders = Slider::get();

        $airlines = Airline::get();
        $categories = Category::get();
        $brochures = Brochure::get();
        $promos = Promo::where('is_active', $active)->get();
        $products = Product::where('is_open', $active)->get();

        return view('frontend.home', compact('airlines', 'promos', 'brochures','sliders', 'categories', 'categories', 'products', 'products'));
    }
}
