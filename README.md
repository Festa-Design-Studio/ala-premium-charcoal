# Àlá Premium Charcoal Website

![Àlá Premium Charcoal Logo](public/img/logo-ala-horizontal.svg)

## Project Overview

Àlá Premium Charcoal is Nigeria's premier export-grade hardwood charcoal supplier, specializing in wholesale distribution. This repository contains the Laravel implementation of the Àlá Premium Charcoal website, built using the established atomic design system.

## Project Implementation Rules

### 1. Project Reference
- All implementation must reference the design system and components from `@ala-premium-charcoal-working-doc`
- This is the source of truth for:
  - UI Components
  - Design System
  - Brand Assets
  - Content Structure
  - Typography
  - Color Palette

### 2. Technology Stack
- Backend: Laravel (Latest LTS version)
- Template Engine: Blade
- CSS Framework: Tailwind CSS
- No Frontend Frameworks (Vue.js, React, etc.)
- Component Architecture: Laravel Blade Components + Tailwind CSS
- Database: MySQL/PostgreSQL
- Asset Compilation: Vite

### 3. Development Guidelines
- All development must follow Atomic Design Methodology
- Components must be implemented as Blade components with Tailwind CSS
- Reference original HTML/CSS from working doc for component styling
- Maintain folder structure that mirrors atomic design system
- Always work in the project root directory
- Update documentation with each significant change
- Use Blade Components with Tailwind props for reusability

### 4. Repository Structure

```bash
ala-premium-charcoal/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   └── Frontend/
│   │   └── Middleware/
│   ├── Models/
│   └── View/
│       └── Components/
│           ├── Atoms/
│           ├── Molecules/
│           ├── Organisms/
│           └── Templates/
├── resources/
│   ├── views/
│   │   ├── components/
│   │   │   ├── atoms/
│   │   │   ├── molecules/
│   │   │   ├── organisms/
│   │   │   └── templates/
│   │   ├── layouts/
│   │   ├── pages/
│   │   └── admin/
│   ├── css/
│   └── js/
└── public/
    └── img/
```

### 5. Implementation Process
1. Always check working doc before implementing features
2. Follow atomic design hierarchy for component development
3. Update documentation with all significant changes
4. Maintain documentation of implemented components
5. Test components in isolation before integration
6. Follow Laravel and Tailwind best practices

### 6. Current Project Status
- [x] Initial project setup
- [x] Basic folder structure
- [x] Tailwind configuration
- [x] Base components implementation
- [x] Page templates
- [x] Admin CRUD system
- [x] Content management system
- [ ] Testing implementation
- [ ] Deployment preparation

## Design System Implementation

### 1. Atomic Components
- **Atoms**: Base components (buttons, typography, form elements)
- **Molecules**: Compound components (cards, breadcrumbs)
- **Organisms**: Complex components (navigation, footer)
- **Templates**: Page layouts and structures

### 2. Color System
Implemented through Tailwind CSS custom colors:
- Charcoal (Primary)
- Palm (Accent)
- Ember (CTA)
- Clay (Background)
- Ash (UI Elements)
- Kola (Complementary)
- Savanna (Highlight)

### 3. Typography
- Headings: Nohemi (font-nohemi)
- Body: Poppins (font-poppins)

## Getting Started

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

### Installation
```bash
# Clone the repository
git clone https://github.com/Festa-Design-Studio/ala-premium-charcoal.git

# Navigate to project directory
cd ala-premium-charcoal

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Set up database and run migrations
php artisan migrate

# Build assets
npm run dev
```

### Development
```bash
# Start the development server
php artisan serve

# Watch for asset changes
npm run dev
```

## Project Progress Updates

### Implementation Checklist
1. [x] Project initialization
   - [x] Repository setup
   - [x] Development environment configuration
   - [x] Dependencies installation
2. [x] Component library setup
   - [x] Atomic design structure
   - [x] Base components
   - [x] Component documentation
3. [x] Database schema design
   - [x] Migrations
   - [x] Models
   - [x] Relationships
4. [x] Authentication system
   - [x] User management
   - [x] Role-based access
5. [x] Admin dashboard
   - [x] CRUD operations
   - [x] Content management
   - [x] Analytics and reporting
6. [x] Frontend pages
   - [x] Templates
   - [x] Layouts
   - [x] Components integration
7. [ ] Testing
   - [ ] Unit tests
   - [ ] Feature tests
   - [ ] Browser tests
8. [ ] Deployment preparation
   - [ ] Environment configuration
   - [ ] Performance optimization
   - [ ] Security measures

### Latest Updates
- Completed initial project setup and configuration
- Implemented navigation header with mobile responsiveness
- Set up atomic design component structure
- Integrated Tailwind CSS with custom configuration
- Added Alpine.js for interactive components
- Implemented mobile menu toggle functionality
- Created base layout with header and footer
- Set up route structure for main pages

## License

© 2025 Àlá Premium Charcoal. All rights reserved.
