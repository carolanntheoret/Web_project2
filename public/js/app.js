let quantite = 10;

const elem = document.querySelector(".grid");
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
        elem.style.visibility = "visible";
    }, 1000);
};

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

const member_selected = document.getElementById("member");
function selectMember(member) {
    member_selected.value = member;
}

function member_manage(id, payload) {
    console.log(id, JSON.parse(payload));
}
