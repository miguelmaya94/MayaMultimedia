var form = document.querySelector('form')

var names = document.getElementById("fname")
var lnames = document.getElementById("lname")
var emails = document.getElementById("email")



let phones = document.querySelector('#phone');



form.onsubmit = function (e) {
    e.preventDefault()

    document.cookie = names.value
    document.cookie = lnames.value
    document.cookie = emails.value


    names.textContent = names.value + " "
    localStorage.setItem('first', names.value)

    lnames.textContent = lnames.value + " "
    localStorage.setItem('second', lnames.value)




    names.textContent
    console.log(names.value)

    lnames.textContent
    console.log(lnames.value)

    emails.textContent
    console.log(emails.value)


    console.log(phones.value)

    var parElement = document.getElementById("myPar");
    var textToAdd = document.createTextNode("Thank you " + names.value + " " + lnames.value + " we will contact your email shortly");
    parElement.appendChild(textToAdd);


}
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

