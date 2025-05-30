import './bootstrap';

import Alpine from 'alpinejs';

// Initialize Alpine.js
window.Alpine = Alpine;

// Register any Alpine.js components or stores here
document.addEventListener('alpine:init', () => {
    Alpine.store('navigation', {
        isOpen: false,
        toggle() {
            this.isOpen = !this.isOpen;
            if (this.isOpen) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        },
        close() {
            this.isOpen = false;
            document.body.style.overflow = '';
        }
    });
});

Alpine.start();
