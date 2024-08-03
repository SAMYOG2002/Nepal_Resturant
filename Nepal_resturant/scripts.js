var modal = document.getElementById("reservationModal");
var btn = document.getElementById("reserveButton");
var span = document.getElementsByClassName("close-button")[0];

btn.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
