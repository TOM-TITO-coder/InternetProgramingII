import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

// Exporting the Tailwind CSS configuration object
export default {
    // Paths to scan for classes to extract
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    // Theme customization
    theme: {
        extend: {
            // Extending the font family with a custom font named 'Figtree'
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    // Plugins to enable
    plugins: [forms],
};
