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
                "resources/js/Welcome/welcome.js",
                "resources/js/Auth/auth.js",
                "resources/js/Home/home.js",
                "resources/js/Profile/profile.js",
                "resources/js/Admin/admin.js",
            ],
            refresh: true,
        }),
    ],
});
