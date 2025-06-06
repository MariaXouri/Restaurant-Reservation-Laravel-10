import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue2';
//import vue from '@vitejs/plugin-vue';
//import vue from "@vitejs/plugin-vue"; //add this line
//import { createVuePlugin as vue } from "vite-plugin-vue2";


export default defineConfig({
    
    plugins: [
      
        
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    
   
    // resolve: {
    //     alias: {
    //         vue: 'vue/dist/vue.esm-bundler.js',
    //     },
    // },
    // build: {     
    //     commonjsOptions: {
    //        esmExternals: true 
    //     },
    //  },
   

    });
