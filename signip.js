

function validate() {
    var name1 = document.getElementsByName('name').value;
    if (name1 == "") {
        alert("name");
    }
    else {
        // document.getElementsByName('name')[0].style.background = "red";
        alert("else");
        return false;
    }
}
