import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/copy/css',
                    dest: 'assets',
                },
                {
                    src: 'resources/copy/fonts',
                    dest: 'assets',
                },
                {
                    src: 'resources/copy/img',
                    dest: 'assets',
                },
                {
                    src: 'resources/copy/js',
                    dest: 'assets',
                },
            ],
        }),
        tailwindcss(),
    ],
});
