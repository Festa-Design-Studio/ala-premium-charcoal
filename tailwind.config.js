import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
          colors: {
            charcoal: {
              50: '#f7f7f7',
              100: '#e3e3e3',
              200: '#c8c8c8',
              300: '#a4a4a4',
              400: '#818181',
              500: '#666666',
              600: '#515151',
              700: '#2B2B2B', // Brand Primary
              800: '#1a1a1a',
              900: '#0a0a0a',
              950: '#050505',
            },
            palm: {
              50: '#f5f7f5',
              100: '#e1e7df',
              200: '#c3d0bf',
              300: '#9ab494',
              400: '#769470',
              500: '#4C6042', // Accent Primary
              600: '#3d4d35',
              700: '#2e3a28',
              800: '#1f261b',
              900: '#10130e',
              950: '#080a07',
            },
            ember: {
              50: '#fef4ed',
              100: '#fde4d2',
              200: '#fbc5a5',
              300: '#f9a678',
              400: '#F37324', // Fire Highlight
              500: '#e85c0c',
              600: '#c44a09',
              700: '#933707',
              800: '#622405',
              900: '#311202',
              950: '#180901',
            },
            clay: {
              50: '#F7F4F0', // Background
              100: '#efe9e1',
              200: '#dfd3c3',
              300: '#cfbda5',
              400: '#bfa787',
              500: '#af9169',
              600: '#8c7454',
              700: '#69573f',
              800: '#463a2a',
              900: '#231d15',
              950: '#120f0a',
            },
            ash: {
              50: '#f7f7f7',
              100: '#ebebeb',
              200: '#d6d6d6',
              300: '#c2c2c2',
              400: '#adadad',
              500: '#9A9A9A', // Soft Text
              600: '#7b7b7b',
              700: '#5c5c5c',
              800: '#3d3d3d',
              900: '#1f1f1f',
              950: '#0f0f0f',
            },
            kola: {
              50: '#f5f3f3',
              100: '#e6e0e0',
              200: '#cdbcbb',
              300: '#b39896',
              400: '#997471',
              500: '#805956',
              600: '#4B2E2B', // Deep Accent
              700: '#382322',
              800: '#251716',
              900: '#130c0b',
              950: '#090605',
            },
            savanna: {
              50: '#fbf7ed',
              100: '#f5ebcc',
              200: '#e9d599',
              300: '#D4A947', // Highlight Contrast
              400: '#c79427',
              500: '#a57b20',
              600: '#84621a',
              700: '#634913',
              800: '#42310d',
              900: '#211806',
              950: '#110c03',
            }
          },
          fontFamily: {
            'nohemi': ['Nohemi Serif', 'serif'],
            'poppins': ['Poppins', 'sans-serif'],
          },
          fontSize: {
            // Desktop
            'h1-desktop': ['48px', { lineHeight: '56px', letterSpacing: '-0.02em' }],
            'h2-desktop': ['36px', { lineHeight: '44px', letterSpacing: '-0.02em' }],
            'h3-desktop': ['24px', { lineHeight: '32px', letterSpacing: '-0.02em' }],
            'h4-desktop': ['20px', { lineHeight: '28px', letterSpacing: '-0.02em' }],
            
            // Tablet
            'h1-tablet': ['40px', { lineHeight: '48px', letterSpacing: '-0.02em' }],
            'h2-tablet': ['32px', { lineHeight: '40px', letterSpacing: '-0.02em' }],
            'h3-tablet': ['22px', { lineHeight: '30px', letterSpacing: '-0.02em' }],
            'h4-tablet': ['18px', { lineHeight: '26px', letterSpacing: '-0.02em' }],
            
            // Mobile
            'h1-mobile': ['32px', { lineHeight: '40px', letterSpacing: '-0.02em' }],
            'h2-mobile': ['28px', { lineHeight: '36px', letterSpacing: '-0.02em' }],
            'h3-mobile': ['20px', { lineHeight: '28px', letterSpacing: '-0.02em' }],
            'h4-mobile': ['18px', { lineHeight: '24px', letterSpacing: '-0.02em' }],
            
            // Body text
            'body': ['16px', { lineHeight: '24px', letterSpacing: '0' }],
            'small': ['14px', { lineHeight: '20px', letterSpacing: '0' }],
            'caption': ['12px', { lineHeight: '16px', letterSpacing: '0' }],
          },
          fontWeight: {
            light: 300,
            regular: 400,
            medium: 500,
            bold: 700,
          },
        },
      },

    plugins: [forms],
};
