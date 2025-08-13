import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0',    // ให้ Vite ฟังทุก interface ของ container
        port: 5173,          // port default
        hmr: {
            host: 'localhost',   // ให้ browser เชื่อม HMR ผ่าน localhost
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
