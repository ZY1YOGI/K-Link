import "../../sass/Admin/main.scss";
import "./dashboard";
import "./teachers";

const Route = window.location.pathname;

if (Route === "/admin/dashboard") {
    $("#home_link").addClass("active");
} else if (Route === "/admin/teachers") {
    $("#teachers_link").addClass("active");
} else if (Route === "/admin/students") {
    $("#students_link").addClass("active");
}
$("#logout").on("click", function () {
    $("#logout-form").submit();
});
