var form = document.querySelector('form')

var names = document.getElementById("txtName")
var lnames = document.getElementById("txtEmail")
var phone = document.getElementById("txtPhone")
var emails = document.getElementById("txtMessage")




form.onsubmit = function (e) {
    e.preventDefault()

    document.cookie = names.value
    document.cookie = lnames.value
    document.cookie = phone.value
    document.cookie = emails.value


    names.textContent = names.value + " "
    localStorage.setItem('first', names.value)

    lnames.textContent = lnames.value + " "
    localStorage.setItem('second', lnames.value)





    var parElement = document.getElementById("myPar");
    var textToAdd = document.createTextNode("Thank you " + names.value + " " + lnames.value + " we will contact your email shortly");
    parElement.appendChild(textToAdd);
    localStorage.clear()


}
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

