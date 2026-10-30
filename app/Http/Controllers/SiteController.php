<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

    public function contact(): View
    {
        return view('site.contact');
    }

    public function contactStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'company' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        ContactMessage::create($data);

        return back()->with('success', 'Mensagem enviada com sucesso! Em breve retornaremos o contato.');
    }
}
