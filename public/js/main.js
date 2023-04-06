$(".listEmployes").hide();
jQuery(".employes").on("click", function () {
    jQuery(".listEmployes").show() &
        $(".listActivities").hide() &
        $(".listReservations").hide() &
        $(".listUsers").hide();
});

$(".listUsers").hide();
jQuery(".users").on("click", function () {
    jQuery(".listUsers").show() &
        $(".listActivities").hide() &
        $(".listReservations").hide() &
        $(".listEmployes").hide();
});

$(".listActivities").hide();
jQuery(".activities").on("click", function () {
    jQuery(".listActivities").show() &
        $(".listEmployes").hide() &
        $(".listReservations").hide() &
        $(".listUsers").hide();
});

jQuery(".reservations").on("click", function () {
    jQuery(".listReservations").show() &
        $(".listEmployes").hide() &
        $(".listActivities").hide() &
        $(".listUsers").hide();
});

$(".addAdmin").click(function () {
    $(".createAdmin").css("display", "flex");
});

$(".addUser").click(function () {
    $(".createUser").css("display", "flex");
});

$(".addActivity").click(function () {
    $(".createActivity").css("display", "flex");
});

const members = document.querySelectorAll('.member')
for (let member of members) {
    member.addEventListener('click', function member_manage(id) {
        document.querySelector(".sectionReservation .listReservations").innerHTML = "";
        fetch(`get-reservations/${member.getAttribute("data-member")}`, { credentials: "include", headers: { 'Accept': 'application/json', 'Content-Type': 'application/json', } }).then(reply => reply.json()).then(data => {
            const reservations = data
            for (let reservation of reservations) {
                let div = document.createElement('div')
                let form = `<form action="/delete-reservation?" method="get"><select name="quantity">`
                for (let i = reservation.quantity; i > 0; i--) {
                    form += `<option value="${i}">${i}</option>`
                }
                form += `</select><input name="reservation_id" type="hidden" value="${reservation.reservation_id}"><span class="loginInput"><input type="submit" value="🚫" style:"outline: none;"></span></form>`
                div.innerHTML = `<span><h1><strong>${reservation.name}</strong></h1></span><span><p>${reservation.open_day}-${reservation.closed_day}</p><p>Quantité: ${reservation.quantity}</p></span><span class="suppress">Supprimer: ${form}</span>`;
                document.querySelector(".sectionReservation .listReservations").appendChild(div);
            }
        })
    })
}

