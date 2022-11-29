// accessing the html search symbol
let clickSearchBtn = document.getElementById('search-btn');
// accessing the search input form
let showSearchForm = document.querySelector('.search-form');

// a function that display the search input form and the menu
function showSearchField(){
    showSearchForm.classList.toggle('active');
}
// adding even listener to the html search symbol
clickSearchBtn.addEventListener('click', showSearchField);