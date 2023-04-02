// Used for the burger menu in the navigation
const burgerMenu = document.querySelector(".burgerMenu");
const dropdownMenu = document.querySelector(".headLinks");

burgerMenu.addEventListener('click', function() {
  dropdownMenu.classList.toggle('is-open');
});

const headIcon = document.querySelector(".headIcon");
const userImg = document.querySelector("#userImg");
const dropdownContent = document.querySelector("#dropdown-content");

headIcon.addEventListener('click', function() {
    dropdownContent.classList.toggle('show');
    console.log('test')
});

userImg.addEventListener('click', function() {
    dropdownContent.classList.toggle('show');
});

// // Fermer le dropdown si l'utilisateur clique en dehors de celui-ci
// window.addEventListener('click', function(event) {
//     if (!event.target.matches('#userImg') && !event.target.matches('.headIcon')) {
//         if (dropdownContent.classList.contains('show')) {
//             dropdownContent.classList.remove('show');
//         }
//     }
// });
//end Navigation

const member_selected = document.getElementById("member");
function selectMember(member) {
    member_selected.value = member;
}
