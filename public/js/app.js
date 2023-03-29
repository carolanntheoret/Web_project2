// Used for the burger menu in the navigation
const burgerMenu = document.querySelector(".burgerMenu");
const dropdownMenu = document.querySelector(".headLinks");

//console.log(burgerMenu)
burgerMenu.addEventListener('click', function() {
  dropdownMenu.classList.toggle('is-open');
});

// const userImg = document.querySelector("#userImg");
// const dropdownContent = document.querySelector(".dropdown-content");

// userImg.addEventListener('click', function() {
//     dropdownContent.classList.toggle('show');
// });

// // Fermer le dropdown si l'utilisateur clique en dehors de celui-ci
// window.addEventListener('click', function(event) {
//     if (!event.target.matches('#userImg')) {
//         if (dropdownContent.classList.contains('show')) {
//             dropdownContent.classList.remove('show');
//         }
//     }
// });


//end Navigation



const elem = document.querySelector(".grid");
let quantite = 10
const msnry = new Masonry(elem, {
    // options
    itemSelector: ".grid-item",
    fitWidth: true,
    gutter: 45,
    horizontalOrder: true,
});

window.onload = () => {
    setTimeout(() => {
        msnry.layout();
        elem.style.visibility = 'visible';
    }, 500)
}

function display() {
    const articles = document.querySelectorAll(".grid-item");
    let lastIndex = quantite - 1;

    if (quantite >= articles.length) {
        bouton.style.display = "none";
    }

    for (let i = 0; i < articles.length; i++) {
        if (i > lastIndex) {
            articles[i].style.display = "none";
        } else {
            articles[i].style.display = "block";
        }
    }
}

display();

const bouton = document.querySelector(".button");

bouton.addEventListener("click", () => {
    quantite += 10;
    display();
    msnry.reloadItems();
    msnry.layout();
});

function selectionnerEmployee(employee) {
    employee_selectionner.value = employee;
  }























const member_selected = document.getElementById("member");
function selectMember(member) {
    member_selected.value = member;
}

function member_manage(id, payload) {
    console.log(id, JSON.parse(payload));
}
