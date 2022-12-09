// JavaScript Document

$(document).ready(function (e) {
  $("#logout1,#logout2").click(function (e) {
    e.preventDefault();
    window.location = "logout.php";
  });
});
