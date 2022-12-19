import "./bootstrap";
import "../sass/app.scss";
import.meta.glob([
    "../img/**",
    // '../fonts/**',
]);

window.onload = () => {
    $("#splash").hide();
    localStorage.getItem("mood") ?? localStorage.setItem("mood", "light");

    if (localStorage.getItem("mood") === "dark") {
        $("body").addClass("dark");
        $("#switch-mode").html("Light");
    }
};

$("#switch-mode").click(function () {
    $("body").toggleClass("dark");
    if ($("body").hasClass("dark")) {
        this.innerText = "Light";
        return localStorage.setItem("mood", "dark");
    }
    this.innerText = "Dark";
    localStorage.setItem("mood", "light");
});

if (window.location.pathname === "/home" || window.location.pathname === "/admin") {
    $("#home_link").addClass("active");
} else if (window.location.pathname === "/profile") {
    $("#profile_link").addClass("active");
}

$("#logout").on("click", function () {
    $("#logout-form").submit();
});
