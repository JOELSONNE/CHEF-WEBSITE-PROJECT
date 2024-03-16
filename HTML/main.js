const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
var searchBox = document.getElementById("searchbox");

var searchIcon = document.getElementById('Search-icon');



searchIcon.addEventListener('click', function () {

    if (searchBox.style.display === 'none' || searchBox.style.display === '') {
        searchBox.style.display = 'block';
        searchBox.style.top = '70px';
        searchBox.style.pointerEvents = 'auto';
    } else {
        searchBox.style.display = 'none';
        searchBox.style.top = '24px';
        searchBox.style.pointerEvents = 'none';
    }
});

