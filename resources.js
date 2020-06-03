// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function validateForm() {

    var x, y, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("pass").value;
    y = document.getElementById("uname").value;

    // If x is Not a Number or less than one or greater than 10
    if (x != "2020" && y != "2020") {
        text = "Input not valid";
    } else {
        text = "Hi Cyber Geek you entered the correct username and password ;)";
    }
    document.getElementById("valid").innerHTML = text;

}

window.onclick = function (e) {
    var id = e.target.id;
    if (id === 'sent') {
        var txt = document.getElementById('example').value
        $("#para").empty().append(txt);
    }
}