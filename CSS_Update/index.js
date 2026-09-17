const update = document.getElementById("update-css");

update.addEventListener("click", UpdateCSS);

function UpdateCSS() {
    var borderR = document.getElementById("border-r").value;
    var borderG = document.getElementById("border-g").value;
    var borderB = document.getElementById("border-b").value;
    var borderWidth = document.getElementById("border-width").value;

    var backgroundR = document.getElementById("background-r").value;
    var backgroundG = document.getElementById("background-g").value;
    var backgroundB = document.getElementById("background-b").value;

    var fontSize = document.getElementById("font-size").value;

    var alteredParagraph = document.getElementById("altered-paragraph");

    var borderColor = `rgb(${borderR}, ${borderG}, ${borderB})`;
    var backgroundColor = `rgb(${backgroundR}, ${backgroundG}, ${backgroundB})`;

    alteredParagraph.style.borderStyle = "solid";
    alteredParagraph.style.borderColor = borderColor;
    alteredParagraph.style.borderWidth = `${borderWidth}px`;
    alteredParagraph.style.backgroundColor = backgroundColor;
    alteredParagraph.style.fontSize = `${fontSize}px`;
}
