let iconMenu,popupMenu,navbar,closeModalHome,containerModal,btnOpenPopUP;
popupMenu = document.querySelector('.menu-navbar-mobile');
iconMenu = document.querySelector('.icon-open-menu');
navbar = document.querySelector('.navbar-container');
closeModalHome = document.querySelector('.close-modal-register');
containerModal = document.getElementById('popup');
btnOpenPopUP = document.querySelectorAll('.openpopup');

// Open Modal menu
iconMenu.addEventListener('click',function(){
    popupMenu.classList.toggle("menu-actived")
});


// Open modal register of modal
btnOpenPopUP.forEach(element => {
    element.addEventListener('click', function(e){
        e.preventDefault();
        containerModal.classList.remove('hidden-popup')
    });
});

// Close modal register of modal
containerModal.classList.add("hidden-popup")
closeModalHome.addEventListener('click',function(){
    containerModal.classList.add("hidden-popup")
});

// Add class a navbar
document.addEventListener('scroll',function(){
    if(window.scrollY <= 900 && window.scrollY > 50){
        navbar.classList.add('bg-navbar');
        navbar.classList.remove('bg-navbar-secundary');
    }else if(window.scrollY >= 1200){
        navbar.classList.remove('bg-navbar');
        navbar.classList.add('bg-navbar-secundary');
    }else if(window.scrollY <= 0){
        navbar.classList.remove('bg-navbar');
        navbar.classList.remove('bg-navbar-secundary');  
    }
});



// console.log(window.innerWidth)