# Àlá Premium Charcoal Atomic Design System

![Àlá Premium Charcoal Logo](img/logo-ala-horizontal.svg)

## Overview

The Àlá Premium Charcoal Atomic Design System is a comprehensive component library built using the principles of Atomic Design methodology. This design system provides a consistent and scalable UI framework for building digital touchpoints that maintain Àlá Premium Charcoal's premium brand identity.

The atomic design system follows the methodology created by Brad Frost, breaking down interfaces into their basic components (atoms) which can be combined to form more complex structures (molecules, organisms, and templates).

This approach ensures consistency, maintainability, and scalability across all brand touchpoints.

## Table of Contents

-   [Design Principles](#design-principles)
-   [Color System](#color-system)
-   [Typography](#typography)
-   [Component Library](#component-library)
-   [Templates and Pages](#templates-and-pages)
-   [Getting Started](#getting-started)
-   [Development](#development)
-   [Usage Guidelines](#usage-guidelines)

## Design Principles

The Àlá Premium Charcoal design system is built on the following principles:

-   **Premium Quality**: Reflecting the high-quality nature of our charcoal products
-   **Sustainability**: Emphasizing our commitment to sustainable production methods
-   **African Heritage**: Honoring the rich cultural heritage of our production regions
-   **Usability**: Creating intuitive and accessible user interfaces

## Color System

Our color palette draws inspiration from natural elements associated with charcoal production:

-   **Charcoal**: Deep blacks and grays (primary brand colors)
-   **Palm**: Vibrant greens representing palm trees (accent color)
-   **Clay**: Neutral beige tones (background color)
-   **Ember**: Warm oranges and reds (call-to-action color)
-   **Ash**: Light grays (subtle UI elements)
-   **Kola**: Earthy browns (complementary color)
-   **Savanna**: Soft yellows (highlight color)

Each color includes multiple tints and shades (50-900) for versatile application across interfaces.

View the complete color system with all tints, shades, and gradient examples in the [Color System Component](components/atoms/color-system/color-system.html).

## Typography

The design system employs a dual typeface approach:

-   **Headings**: Nohemi - A strong, distinctive sans-serif for impactful headlines
-   **Body**: Poppins - A clean, highly legible sans-serif for body text and UI elements

The typography system includes responsive sizing, appropriate line heights, and letter spacing for optimal readability across devices.

## Component Library

The component library follows the Atomic Design methodology:

### 1. Atoms (Base Components)

-   **Buttons**: Primary, Secondary, and Ghost variants
-   **Typography**: Various text styles for headings, body text, and links
-   **Form Elements**: Input fields, checkboxes, radio buttons, etc.
-   **Color System**: Complete color palette with tints, shades, and gradients

### 2. Molecules (Compound Components)

-   **Product Cards**: Standard and simple product card variants
-   **Specification Lists**: Multiple variants including standard, expandable (accordion), card-based grid, visual comparison, and tabular formats
-   **Breadcrumbs**: Standard and compact slash-separated variants

### 3. Organisms (Complex Components)

-   **Navigation Header**: Site navigation and branding
-   **Footer**: Site information, links, and contact details
-   **Hero Section**: Multiple variants including standard, split with image gallery, feature highlight, testimonial, and video background
-   **Contact Forms**: Various form layouts for customer inquiries
-   **Product Detail**: Comprehensive product information display
-   **Testimonials**: Customer review displays

### 4. Templates (Page Layouts)

-   **Product Detail Template**: Layout for product pages
-   **Contact Form Template**: Layout for contact pages
-   **Home Page Template**: Complete home page layout
-   **About Us Template**: Company information and story
-   **Sustainability Template**: Environmental commitment showcase
-   **Layouts**: Reusable page layout structures including single-column, two-column, asymmetric two-column, and grid layouts

## Templates and Pages

Our design system includes complete templates for key pages:

### Home Page

The homepage template features a hero section, product categories, featured products, testimonials, and sustainability highlights. Different hero section variants can be used based on campaign needs.

### Product Detail Page

Comprehensive product display with image gallery, specifications, reviews, and related products. Includes tabbed content for organized information display.

### About Us Page

Showcases company history, values, team members, and production process with a visually engaging layout that emphasizes our heritage and commitment to quality.

### Contact Page

Features contact form, company information, location map, and FAQ section, designed for easy customer communication.

### Sustainability Page

Highlights our environmental initiatives, sustainable practices, certifications, and impact metrics with compelling visuals and clear information architecture.

## Getting Started

To get started with the Àlá Premium Charcoal Atomic Design System:

1. Clone this repository
2. Install dependencies:
    ```
    npm install
    ```
3. Build the CSS:
    ```
    npm run build
    ```
4. View component examples by opening the HTML files in the components directory

## Development

This design system is built with:

-   HTML5
-   Tailwind CSS
-   PostCSS

To contribute to the development:

1. Make changes to component HTML files
2. Run the development server:
    ```
    npm run dev
    ```
3. Build production CSS:
    ```
    npm run build
    ```

## Usage Guidelines

-   Use the appropriate component hierarchy based on complexity
-   Maintain consistent spacing using the defined spacing system
-   Apply transitions and animations according to the defined effects system
-   Follow accessibility best practices in all implementations
-   Refer to individual component documentation for specific implementation details

## License

© 2025 Àlá Premium Charcoal. All rights reserved.
