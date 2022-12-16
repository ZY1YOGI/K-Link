import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        host: "0.0.0.0",
    },
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/js/Home/Home.js",
                "resources/js/Profile/Profile.js",
                "resources/js/Welcome/Welcome.js",
                "resources/js/Auth/auth.js",
            ],
            refresh: true,
        }),
    ],
});
