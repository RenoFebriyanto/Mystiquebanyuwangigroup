import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { fileURLToPath } from 'url';
import path from 'path';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

export default defineConfig({
    plugins: [
        laravel({
            input: [
                path.resolve(__dirname, '../resources/css/app.css'),
                path.resolve(__dirname, '../resources/js/app.js'),
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, '../resources/js'),
        },
    },
    server: {
        hmr: {
            host: 'localhost',
        },
    },
});
