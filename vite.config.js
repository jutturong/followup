    // vite.config.js
    import { defineConfig } from 'vite';
    import laravel from 'laravel-vite-plugin';
    import path from 'path'; // Import the path module

    export default defineConfig({
        plugins: [
            laravel({
                input: ['resources/scss/app.scss', 'resources/js/app.js'],
                refresh: true,
            }),
        ],
        resolve: {
            alias: {
                '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            }
        },
        server: {
        host: '0.0.0.0',
        port: 5174, // เปลี่ยนพอร์ตตรงนี้
        strictPort: true
    }
    });