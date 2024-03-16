const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchBox = document.getElementById("searchbox");
const searchIcon = document.getElementById("Search-icon");

searchIcon.addEventListener('click', function(){
    if(searchBox.style.top == '70px') {
        searchBox.style.top = '24px';
        searchBox.style.pointerEvents = 'none';
    } else {
        searchBox.style.top ='70px';
        searchBox.style.pointerEvents = 'auto';
    }
});