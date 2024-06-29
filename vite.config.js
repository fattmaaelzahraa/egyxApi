import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                'app/Http/Livewire/**',
            ],
        }),
    ],
    build: {
        outDir: '../build', // Output directory relative to `htdocs`
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
            },
        },
    },
});
