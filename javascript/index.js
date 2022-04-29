var forms = document.querySelector('formss')

var names = document.getElementById("txtName")
var email = document.getElementById("txtEmail")
var phone = document.getElementById("txtPhone")
var mssg = document.getElementById("txtMessage")




//forms.onsubmit = function (e) {
  //  e.preventDefault()
//document.cookie = names.value
  //  document.cookie = email.value
  //  document.cookie = phone.value
  //      document.cookie = mssg.value
 //   names.textContent = names.value + " "
 //   localStorage.setItem('first', names.value)
// email.textContent = email.value + " "
  //  localStorage.setItem('second', email.value)
  //  localStorage.clear()
//}


function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

