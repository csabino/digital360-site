<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function home(): View
    {
        $page = Page::where('slug', 'home')->firstOrFail();
        $services = Service::where('is_active', true)->orderBy('order')->take(3)->get();

        return view('site.home', compact('page', 'services'));
    }

    public function about(): View
    {
        $page = Page::where('slug', 'sobre')->firstOrFail();

        return view('site.about', compact('page'));
    }

    public function services(): View
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();

        return view('site.services.index', compact('services'));
    }

    public function serviceShow(string $slug): View
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();

        return view('site.services.show', compact('service'));
    }

    public function products(): View
    {
        $products = Product::where('is_active', true)->orderBy('order')->get();

        return view('site.products.index', compact('products'));
    }

    public function productShow(string $slug): View
    {
        $product = Product::where('slug', $slug)->where('is_active', true)->firstOrFail();

        return view('site.products.show', compact('product'));
    }
}
