let divs = document.getElementsByClassName("gallery-image")[0];

// Iterar sobre cada botón y añadir un listener
divs.forEach(function(div) {
    div.addEventListener("mouseover", selectedImage);
});


function selectedImage(event) {
    let div_selected = document.getElementById("selected");

    div_selected.id = null;
}
