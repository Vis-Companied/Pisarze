var i = 0;

function swapStyleSheet(sheet) {
    document.getElementById("pagestyle").setAttribute("href", sheet);
}

function initate() {
    let style = document.getElementsByName("switch");
    i++;
    style.onclick = swapStyleSheet(style[i % 2]['id']);
}
