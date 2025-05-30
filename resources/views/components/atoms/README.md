# Atomic Components Documentation

## Atoms

### Button Component
```blade
<x-atoms.button>Click me</x-atoms.button>
<x-atoms.button variant="secondary">Secondary Action</x-atoms.button>
<x-atoms.button variant="ghost">Ghost Button</x-atoms.button>
```

### Heading Component
```blade
<x-atoms.heading level="1">Heading 1</x-atoms.heading>
<x-atoms.heading level="2">Heading 2</x-atoms.heading>
<x-atoms.heading level="3">Heading 3</x-atoms.heading>
```

### Text Component
```blade
<x-atoms.text>Regular paragraph text</x-atoms.text>
<x-atoms.text size="sm">Small paragraph text</x-atoms.text>
```

### Link Component
```blade
<x-atoms.link href="/about">About Us</x-atoms.link>
```

### Input Component
```blade
<x-atoms.input type="text" placeholder="Enter your name" />
<x-atoms.input type="email" placeholder="Enter your email" />
```

## Usage Guidelines

1. Always use semantic HTML within components
2. Maintain consistent spacing using Tailwind classes
3. Follow accessibility best practices
4. Use responsive classes where appropriate
5. Keep components focused and single-responsibility

## Styling

All components use the Àlá Premium Charcoal color palette:
- Primary: Charcoal (`charcoal-700`)
- Accent: Palm Green (`palm-500`)
- Highlight: Ember Orange (`ember-400`)
- Background: Clay White (`clay-50`)
- UI Elements: Ash Gray (`ash-300`)

## Typography

- Headings: Nohemi font (`font-nohemi`)
- Body Text: Poppins font (`font-poppins`)

## Accessibility

All components are built with accessibility in mind:
- Proper ARIA attributes where needed
- Keyboard navigation support
- Sufficient color contrast
- Focus states for interactive elements 