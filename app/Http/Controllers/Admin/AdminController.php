<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Inquiry;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Show the admin dashboard.
     */
    public function dashboard()
    {
        $stats = [
            'products' => Product::count(),
            'pages' => Page::count(),
            'inquiries' => Inquiry::count(),
            'unread_messages' => ContactMessage::where('is_read', false)->count(),
        ];

        $recent_inquiries = Inquiry::with('product')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $recent_messages = ContactMessage::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_inquiries', 'recent_messages'));
    }
}
