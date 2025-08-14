import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import webfontDownload from 'vite-plugin-webfont-dl';

export default defineConfig({
    server: {
        host: '0.0.0.0', // ให้ Vite ฟังทุก interface
        port: 5173,
        hmr: {
            host: 'localhost', // ให้ browser เชื่อม HMR ผ่าน localhost
            protocol: 'ws',
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        webfontDownload([
            'https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700;800;900&display=swap',
        ]),
    ],
});
