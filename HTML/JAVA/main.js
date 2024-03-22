// Get references to the search icon and search box elements


var searchIcon = document.getElementById('Search-icon');
var searchBox = document.getElementById('searchbox');

// Add a click event listener to the search icon
searchIcon.addEventListener('click', function() {
    // Toggle the visibility of the search box
    if (searchBox.offsetHeight === 0) {
        searchBox.style.display = 'block';
        searchBox.style.top = '70px';
        searchBox.style.pointerEvents = 'auto';
    } else {
        searchBox.style.display = 'none';
        searchBox.style.top = '24px';
        searchBox.style.pointerEvents = 'none';
    }
});

// Get references to the menu icon and slideout menu elements
var menuIcon = document.getElementById("menu-icon");
var slideoutMenu = document.getElementById("slideout-menu");

// Add a click event listener to the menu icon
menuIcon.addEventListener('click', function() {
    // Toggle the visibility of the slideout menu
    if (slideoutMenu.style.display === 'none' || slideoutMenu.style.display === '') {
        slideoutMenu.style.display = 'block';
    } else {
        slideoutMenu.style.display = 'none';
    }
});
