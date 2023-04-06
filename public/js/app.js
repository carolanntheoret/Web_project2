// Used for the burger menu in the navigation
const burgerMenu = document.querySelector(".burgerMenu");
const dropdownMenu = document.querySelector(".headLinks");

burgerMenu.addEventListener('click', function () {
    dropdownMenu.classList.toggle('is-open');
});

// Used for the festival menu in the navigation
const festivalDropdown = document.querySelector(".dropdown-festival");
const festivalDropdownContent = document.querySelector(".dropdown-content-festival");
const festivalDropdownArrow = document.querySelector(".dropdown-arrow");

festivalDropdown.addEventListener('click', function () {
    festivalDropdownContent.classList.toggle('show');
    festivalDropdownArrow.classList.toggle('open');
});

// Used for the Icon user in the navigation
const headIcon = document.querySelector("#userId");
const dropdownContent = document.querySelector(".dropdown-content1");

headIcon.addEventListener('click', function () {
    dropdownContent.classList.toggle('show');
});
//end Navigation

const member_selected = document.getElementById("member");
function selectMember(member) {
    member_selected.value = member;
}
