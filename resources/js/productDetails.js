// make a function which will run after the page is loaded using js
document.addEventListener("DOMContentLoaded", function () {
    const image_selectors = document.querySelectorAll(".image_selector");

    image_selectors.forEach((thumbnail) => {
        thumbnail.addEventListener("click", function () {
            document.getElementById("current_image").src = thumbnail.getAttribute("src");
            image_selectors.forEach((thumbnail) => {
                thumbnail.classList.remove("selected");
            });        });
    });
});
