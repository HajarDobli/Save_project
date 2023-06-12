
// Header Scroll 

let nav = document.querySelector(".navbar");
window.onscroll = function() {
    if(document.documentElement.scrollTop > 100){
        nav.classList.add("header-scrolled");
    }else{
        nav.classList.remove("header-scrolled");
    }
}

// nav hide  
let navBar = document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function(a){
    a.addEventListener("click", function(){
        navCollapse.classList.remove("show");
    })
})



//login 

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.BtnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const navIcon = document.querySelector('.icon');
const navLink = document.querySelector('.navigation');


registerLink.addEventListener('click', ()=> {

    wrapper.classList.add('active');
});



loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
  });


navIcon.addEventListener('click', ()=> {

    navLink.classList.toggle('mobile-menu');
});

/*Donation*/
function toggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var dpopup = document.getElementById('dpopup');
    dpopup.classList.toggle('active');
  }
  