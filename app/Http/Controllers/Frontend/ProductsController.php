<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // For now, we'll return static data
        // In a real application, this would come from your database
        $product = [
            'title' => 'Premium Hardwood Charcoal',
            'badge' => 'Best Seller',
            'badge_color' => 'savanna',
            'description' => 'Our flagship premium hardwood charcoal, perfect for restaurants, grills, and industrial applications. Made from sustainably sourced Nigerian hardwood.',
            'mainImage' => '/img/products/premium-charcoal-main.jpg',
            'thumbnails' => [
                ['url' => '/img/products/premium-charcoal-thumb-1.jpg'],
                ['url' => '/img/products/premium-charcoal-thumb-2.jpg'],
                ['url' => '/img/products/premium-charcoal-thumb-3.jpg'],
                ['url' => '/img/products/premium-charcoal-thumb-4.jpg']
            ],
            'specifications' => [
                [
                    'label' => 'Heat Output',
                    'value' => '7,500 kcal/kg',
                    'notes' => 'Tested according to ISO standards'
                ],
                [
                    'label' => 'Ash Content',
                    'value' => '<3% by weight',
                    'notes' => 'Industry-leading low ash'
                ],
                [
                    'label' => 'Fixed Carbon',
                    'value' => '>80%',
                    'notes' => 'Premium quality indicator'
                ],
                [
                    'label' => 'Burn Time',
                    'value' => '3-4 hours',
                    'notes' => 'At medium heat settings'
                ],
                [
                    'label' => 'Volatile Matter',
                    'value' => '<15%',
                    'notes' => 'Low smoke production'
                ]
            ],
            'features' => [
                'Long-lasting burn time of 3-4 hours',
                'High heat output of 7,500 kcal/kg',
                'Low ash content (<3%)',
                'Minimal smoke production',
                'Made from sustainable hardwood',
                'FSC certified source materials',
                'Ideal for commercial and industrial use'
            ],
            'pricing' => [
                'text' => 'Contact for Wholesale Pricing',
                'subtext' => 'Minimum order: 1 container (20ft)'
            ]
        ];

        return view('pages.products', compact('product'));
    }
} 