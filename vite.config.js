import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    // server: {
    //     host: "0.0.0.0",
    // },
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/js/welcome.js",
                "resources/js/Auth/main.js",
                "resources/js/Admin/main.js",
                "resources/js/Teacher/main.js",
                "resources/js/Student/main.js",
            ],
            refresh: true,
        }),
    ],
});
