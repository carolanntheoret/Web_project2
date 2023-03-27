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

const members = document.querySelectorAll('.member')
for (let member of members) {
member.addEventListener('click', function member_manage(id) {
    document.querySelector(".sectionReservation .listReservations").innerHTML = "";
   fetch(`get-reservations/${member.getAttribute("data-member")}`, { credentials: "include", headers: { 'Accept': 'application/json', 'Content-Type': 'application/json', }}).then(reply => reply.json()).then(data => {
        const reservations = data
        for (let reservation of reservations) {
            let div = document.createElement('div');
        div.innerHTML = `<p>${reservation.name}</p><p>${reservation.open_day}-${reservation.closed_day}</p><p>${reservation.quantity}</p>`;
        document.querySelector(".sectionReservation .listReservations").appendChild(div);
        }
        console.log(id.pointerId)
   })
})
}


$(".addAdmin").click(function () {
    $(".createAdmin").css("display", "flex");});

$(".addUser").click(function () {
        $(".createUser").css("display", "flex");});

$(".addActivity").click(function () {
            $(".createActivity").css("display", "flex");});


