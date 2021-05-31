// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }


  // ZMIANA LOGINU NA REJESTRACJE I ODWROTNIE W LOGOWANIU
}
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('account-container');

signUpButton.addEventListener('click', () => {
  console.log('klik 1');
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  console.log('klik 2');
	container.classList.remove("right-panel-active");
});


var nav = document.getElementsByTagName("nav")[0];
var burger = document.getElementsByClassName("burger")[0];

burger.addEventListener("click", clicked);
var j = 0;
function clicked() {
  if (j === 0) {
    nav.style = "left:0";
    j++;
  } else {
    nav.style = "left:-250px";
    j--;
  }
}