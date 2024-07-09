// make a function which will run after the page is loaded using js
document.addEventListener("DOMContentLoaded", function () {
    const close_button = document.getElementById("mobile_sidebar_close");
    const sidebar = document.getElementById("mobile_sidebar");
    const open_button = document.getElementById("mobile_sidebar_open");

    close_button.addEventListener("click", function () {
        sidebar.style.display = "none";
    });

    open_button.addEventListener("click", function () {
        sidebar.style.display = "flex";
    });

    
});
