import "../../sass/Student/main.scss";
import "./home";
import "./profile";

const Route = window.location.pathname;

if (Route === "/student/home") {
    $("#home_link").addClass("active");
} else if (Route === "/student/profile") {
    $("#profile_link").addClass("active");
}

$("#logout").on("click", function () {
    $("#logout-form").submit();
});
