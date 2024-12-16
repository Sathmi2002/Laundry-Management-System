


/*---------------------------------------------------------------harshamal-------------------------------------------------------------------------------------------- */

let logo = document.getElementById('log1');
let up2 = document.getElementById('up2');
let up3 = document.getElementById('up3');
let up4 = document.getElementById('up4');
let up5 = document.getElementById('up5');
let up6 = document.getElementById('up6');

window.addEventListener('scroll', () => {
	let value = window.scrollY;
	
	logo.style.marginTop = value * 2.5 + 'px';
	up2.style.top = value * 0.5 + 'px';
	up3.style.top = value * -3.5 + 'px';
	up3.style.left = value * 3.5 + 'px';
	up4.style.top = value * -1 + 'px';
	up4.style.left = value * -3.5 + 'px';
	up5.style.top = value * 3.5 + 'px';
	up5.style.left = value * -3 + 'px';
	up6.style.top = value * 3 + 'px';
	up6.style.left = value * 1 + 'px';
});

const toggleBtn = document.querySelector('.toggle_btn')
const toggleBtnIcon = document.querySelector('.toggle_btn i')
const dropDownMenu = document.querySelector('.dropdown_menu')

toggleBtn.onclick = function() {
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    toggleBtnIcon.classList = isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'
}


/*image slider*/
var slides = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.imgbtn');
let currentSlide = 1;

var manualNav = function (manual) {
	slides.forEach((slide) => {
		slide.classList.remove('active');
		
		btns.forEach((btn) => {
			btn.classList.remove('active');
		});
	});
	
	
	slides[manual].classList.add('active');
	btns[manual].classList.add('active');
};

btns.forEach((btn, i) => {
	btn.addEventListener("click", () => {
		manualNav(i);
		currentSlide = i;
	});
});

var repeat = function(activeClass){
	let active = document.getElementsByClassName('active');
	let i = 1;
	
	var repeater = () => {
		setTimeout(function(){
			[...active].forEach((activeSlide) => {
				activeSlide.classList.remove('active');
			});
			
			slides[i].classList.add('active');
			btns[i].classList.add('active');
			i++;
			
			if(slides.length == i){
				i = 0;
			}
			if(i >= slides.length){
				return;
			}
			repeater();
		},10000);
	}
	repeater();
}
repeat();





const wrapperl = document.querySelector('.wrapper_lin');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.action-btn');
const iconClose = document.querySelector('.icon-close');
const btnNext = document.querySelector('.btn-next');
const btnBack = document.querySelector('.btn-back');

registerLink.addEventListener('click', () => {
	wrapperl.classList.add('active-reg');
});

loginLink.addEventListener('click', () => {
	wrapperl.classList.remove('active-reg');
});

btnPopup.addEventListener('click', () => {
	wrapperl.classList.add('active-popup');
});

iconClose.addEventListener('click', () => {
	wrapperl.classList.remove('active-popup');
});

/*btnNext.addEventListener('click', () => {
	wrapperl.classList.add('active-details');
});*/

btnNext.addEventListener('click', (event) => {
  event.preventDefault(); // Prevent form submission

  var requiredFields = document.querySelectorAll('.register [required]');
  var isFormValid = true;

  // Check if all required fields are filled
  for (var i = 0; i < requiredFields.length; i++) {
    if (requiredFields[i].value.trim() === '') {
      isFormValid = false;
      break;
    }
  }

  if (isFormValid) {
    // All required fields have been filled
    wrapperl.classList.add('active-details');
  } else {
    // Display an error message or perform validation logic
    alert('Please fill in all the required fields.');
  }
});

btnBack.addEventListener('click', () => {
	wrapperl.classList.remove('active-details');
});


/*stiky header*/
window.onscroll = function() {myFunction()};

var header = document.getElementById("wrap_header");


function myFunction() {
  if(window.pageYOffset>0)
  {
    header.classList.add("sticky");
  }
  else{
    header.classList.remove("sticky");
  }
  
}

/*--------------------------------------------------------------------------------- */




  /*------------------------------------------------------------------------ */

  






 