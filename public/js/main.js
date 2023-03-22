
$('.listEmployes').hide()
jQuery('.employes').on('click',function(){
  jQuery('.listEmployes').toggle() & $('.listActivities').hide() & $('.listReservations').hide() & $('.listUsers').hide();
})

$('.listUsers').hide()
jQuery('.users').on('click',function(){
  jQuery('.listUsers').toggle() & $('.listActivities').hide() & $('.listReservations').hide() & $('.listEmployes').hide();
})

$('.listActivities').hide()
jQuery('.activities').on('click',function(){
  jQuery('.listActivities').toggle() & $('.listEmployes').hide() & $('.listReservations').hide() & $('.listUsers').hide();
})


jQuery('.reservations').on('click',function(){
  jQuery('.listReservations').toggle() & $('.listEmployes').hide() & $('.listActivities').hide() & $('.listUsers').hide();
})

jQuery('.listMembers').on('click',function(){
    jQuery('.sectionReservation').toggle();
  })

