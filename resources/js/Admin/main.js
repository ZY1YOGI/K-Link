import "../../sass/Admin/main.scss";
import "./dashboard";

const Route = window.location.pathname;

if (Route === "/admin/dashboard") {
    $("#home_link").addClass("active");
} else if (Route === "/admin/profile") {
    $("#profile_link").addClass("active");
}
$("#logout").on("click", function () {
    $("#logout-form").submit();
});
