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

$(".sectionReservation").hide();
jQuery(".listMembers").on("click", function () {
    jQuery(".sectionReservation").show();
});

// jQuery('.listMembers').on('click',function(){
//     jQuery('.sectionReservation').toggle();
//   })

function member_manage(id) {
   fetch(`/get-reservations/${id}`).then(reply => reply.text()).then(data => {

   })
}

