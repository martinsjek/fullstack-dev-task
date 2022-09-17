import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import {createSvgIconsPlugin} from 'vite-plugin-svg-icons';
// import basicSsl from '@vitejs/plugin-basic-ssl';
// @ts-ignore
import path from "path";

export default defineConfig({
    base: '/app/',
    server: {
        host: '0.0.0.0',
        strictPort: true
    },
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    includeAbsolute: false
                }
            }
        }),
        // basicSsl(),
        createSvgIconsPlugin({
            iconDirs: [path.resolve(process.cwd(), 'resources/svg-sprites')],
            symbolId: 'icon-[name]'
        }),
        laravel({
            input: [
                'resources/js/app.ts'
            ],
            refresh: true
        }),
    ]
});
