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

    //
    document
        .getElementById("image")
        .addEventListener("change", function (event) {
            // Check if a file is selected
            if (event.target.files && event.target.files[0]) {
                // Create a new FileReader to read the selected image
                const reader = new FileReader();

                reader.onload = function (e) {
                    // Create the new div element
                    const newDiv = document.createElement("div");
                    newDiv.className = "h-48 w-auto rounded-md relative";

                    // Create the image element
                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.alt = "Selected image";
                    img.className =
                        "h-full w-full object-cover object-center rounded-md";

                    // add a cancel button to the image which will remove the image from the container
                    const cancelButton = document.createElement("button");
                    cancelButton.innerText = "Cancel";
                    cancelButton.style.backgroundColor = "red";
                    cancelButton.style.color = "white";
                    cancelButton.style.padding = "2px 5px";
                    cancelButton.style.borderRadius = "5px";
                    cancelButton.style.position = "absolute";
                    cancelButton.style.bottom = "10px";
                    cancelButton.style.right = "70px";
                    cancelButton.style.fontSize = "14px";
                    cancelButton.style.fontWeight = "bold";
                    cancelButton.addEventListener("click", function () {
                        newDiv.remove();
                        document.getElementById("image_input").style.display = "flex";
                    });
                    newDiv.appendChild(cancelButton);


                    // Create the save button
                    const saveButton = document.createElement("a");
                    saveButton.href = "#";
                    saveButton.type = "button";
                    saveButton.innerText = "Save";

                    saveButton.style.backgroundColor = "green";
                    saveButton.style.color = "white";
                    saveButton.style.padding = "2px 5px";
                    saveButton.style.borderRadius = "5px";
                    saveButton.style.position = "absolute";
                    saveButton.style.bottom = "10px";
                    saveButton.style.right = "10px";
                    saveButton.style.fontSize = "14px";
                    saveButton.style.fontWeight = "bold";





                    // Append image and save button to the new div
                    newDiv.appendChild(img);
                    newDiv.appendChild(saveButton);

                    // Append the new div to the container
                    document
                        .getElementById("images_holder")
                        .appendChild(newDiv);

                    // Clear the input value to allow the same image to be selected again if needed
                    event.target.value = "";

                    document.getElementById("image_input").style.display = "none";
                };

                // Read the image file as a data URL
                reader.readAsDataURL(event.target.files[0]);
            }
        });
});
