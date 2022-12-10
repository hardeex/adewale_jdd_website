// DECLARING THE VARIABLES

// accessing the nav navigation bar
let navbar = document.querySelector('.navbar');
// accessing thr search form
let searchForm = document.querySelector('.search-form');
// accessing the cart item
let cartItem = document.querySelector('.cart-items-container');

//accessing the research work and report from the index page
let researchWork = document.getElementById('research-work');

//THE MENU FUNCTION 
document.querySelector('#menu-btn').onclick = () =>{
    // show th navigation bars
    navbar.classList.toggle('active');
    // remove the search bar/form
    searchForm.classList.remove('active');
    // remove the cart item list
    cartItem.classList.remove('active');
}


//THE SEARCH BAR or FORM FUNCTION
document.querySelector('#search-btn').onclick = () =>{
    // show the search form/bar
    searchForm.classList.toggle('active');
    // hide the navigation menu
    navbar.classList.remove('active');
    // hide the cart item list
    cartItem.classList.remove('active');
}


//THE CART FUNCTION
document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

// THE SCROLLING OF THE WINDOW FUNCION --- whenever the user scrolls
window.onscroll = () =>{
    // hide the navigation bars
    navbar.classList.remove('active');
    // hide the search form
    searchForm.classList.remove('active');
    // hide the cart items
    cartItem.classList.remove('active');
}

// document.getElementById('research-work').onclick = () =>{
//     alert("We can help you on your project");
// }

// researchWork.onclick = () =>{
//     alert("We can help you on your project");
// }

function researchProject(){
    alert("Let's help make your research or project work a success. We help build better and error-free research work. You can contact us via the support page or call/chat our customer care, on 08180299378");
}

researchWork.addEventListener('click', researchProject);
