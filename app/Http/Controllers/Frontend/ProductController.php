<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'title' => 'Premium Lump Charcoal',
                'badge' => 'Best Seller',
                'badge_color' => 'savanna',
                'description' => 'Our flagship Premium Lump Charcoal is made from carefully selected hardwood, ensuring the perfect balance of heat, low ash content, and extended burn time. This professional-grade charcoal is ideal for restaurants, catering services, and serious grilling enthusiasts.',
                'mainImage' => 'https://images.unsplash.com/photo-1623619360289-cded4c979af1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'thumbnails' => [
                    ['url' => 'https://images.unsplash.com/photo-1623619360289-cded4c979af1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80'],
                    ['url' => 'https://images.unsplash.com/photo-1603204706569-a38c1c37643c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80'],
                    ['url' => 'https://images.unsplash.com/photo-1610835359062-e2f0a6413282?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80'],
                    ['url' => 'https://images.unsplash.com/photo-1543164905-c338c40731f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80']
                ],
                'specifications' => [
                    ['label' => 'Heat Output', 'value' => '7,500 kcal/kg'],
                    ['label' => 'Ash Content', 'value' => '<3%'],
                    ['label' => 'Moisture', 'value' => '<4%'],
                    ['label' => 'Fixed Carbon', 'value' => '>80%'],
                    ['label' => 'Burn Time', 'value' => '2-3 hours']
                ],
                'features' => [
                    'Made from premium hardwood',
                    'Low ash content for cleaner grilling',
                    'Extended burn time for consistent heat',
                    'Ideal for professional use',
                    'Sustainably sourced materials'
                ],
                'pricing' => [
                    'text' => 'Request Pricing',
                    'subtext' => 'Available in 5kg, 10kg, and 20kg packaging'
                ]
            ],
            [
                'title' => 'Restaurant Grade Charcoal',
                'badge' => 'New',
                'badge_color' => 'ember',
                'description' => 'Specially formulated for commercial kitchens, our Restaurant Grade Charcoal provides consistent heat and long burn times needed for professional cooking environments. Perfect for restaurants, hotels, and large-scale catering operations.',
                'mainImage' => 'https://images.unsplash.com/photo-1606830733744-0ad778449672?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'thumbnails' => [
                    ['url' => 'https://images.unsplash.com/photo-1606830733744-0ad778449672?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80'],
                    ['url' => 'https://images.unsplash.com/photo-1603204706569-a38c1c37643c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80'],
                    ['url' => 'https://images.unsplash.com/photo-1610835359062-e2f0a6413282?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80'],
                    ['url' => 'https://images.unsplash.com/photo-1543164905-c338c40731f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80']
                ],
                'specifications' => [
                    ['label' => 'Heat Output', 'value' => '8,000 kcal/kg'],
                    ['label' => 'Ash Content', 'value' => '<2%'],
                    ['label' => 'Moisture', 'value' => '<3%'],
                    ['label' => 'Fixed Carbon', 'value' => '>85%'],
                    ['label' => 'Burn Time', 'value' => '3-4 hours']
                ],
                'features' => [
                    'Optimized for commercial kitchens',
                    'Extra-long burn time',
                    'Minimal ash production',
                    'Consistent piece size',
                    'Bulk packaging available'
                ],
                'pricing' => [
                    'text' => 'Request Pricing',
                    'subtext' => 'Available in 20kg and 50kg commercial packaging'
                ]
            ],
            [
                'title' => 'Premium BBQ Briquettes',
                'badge' => 'Popular',
                'badge_color' => 'savanna',
                'description' => 'Our Premium BBQ Briquettes are engineered for consistent heat and extended burn time, making them perfect for both professional and home grilling. Each briquette is densely compressed and shaped for optimal airflow and heat distribution.',
                'mainImage' => 'https://images.unsplash.com/photo-1563841631058-b143058b91e3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'thumbnails' => [
                    ['url' => 'https://images.unsplash.com/photo-1563841631058-b143058b91e3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80'],
                    ['url' => 'https://images.unsplash.com/photo-1603204706569-a38c1c37643c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80'],
                    ['url' => 'https://images.unsplash.com/photo-1610835359062-e2f0a6413282?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80'],
                    ['url' => 'https://images.unsplash.com/photo-1543164905-c338c40731f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80']
                ],
                'specifications' => [
                    ['label' => 'Heat Output', 'value' => '7,000 kcal/kg'],
                    ['label' => 'Ash Content', 'value' => '<5%'],
                    ['label' => 'Moisture', 'value' => '<5%'],
                    ['label' => 'Fixed Carbon', 'value' => '>75%'],
                    ['label' => 'Burn Time', 'value' => '2-3 hours']
                ],
                'features' => [
                    'Uniform size and shape',
                    'Consistent heat output',
                    'Easy to light and control',
                    'Ideal for home grilling',
                    'Eco-friendly composition'
                ],
                'pricing' => [
                    'text' => 'Request Pricing',
                    'subtext' => 'Available in 2kg, 5kg, and 10kg packages'
                ]
            ]
        ];

        return view('pages.products', compact('products'));
    }
} 