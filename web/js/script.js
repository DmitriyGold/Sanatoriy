function setElement(id) {
    document.getElementById("reset_profil_" + id).style.display = "block";
    document.getElementById("profil_" + id).style.display = "block";
    document.getElementById("set_profil_" + id).style.display = "none";
}

function resetElement(id) {
    document.getElementById("reset_profil_" + id).style.display = "none";
    document.getElementById("profil_" + id).style.display = "none";
    document.getElementById("set_profil_" + id).style.display = "block";
}

function showMessage(id) {
    message1 = "reset_profil_" + id; 
    message2 = "profil_" + id;
    message3 = "set_profil_" + id;
    document.getElementById(message1).style.display = "block";
    document.getElementById(message2).style.display = "block";
    document.getElementById(message3).style.display = "none";
    alert(message1);

}
