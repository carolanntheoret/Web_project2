
$('.listeEmployes').hide()
jQuery('.employes').on('click',function(){
  jQuery('.listeEmployes').toggle() & $('.listeActivities').hide() & $('.listeReservations').hide() & $('.listeUsers').hide();
})

$('.listeUsers').hide()
jQuery('.users').on('click',function(){
  jQuery('.listeUsers').toggle() & $('.listeActivities').hide() & $('.listeReservations').hide() & $('.listeEmployes').hide();
})

$('.listeActivities').hide()
jQuery('.activities').on('click',function(){
  jQuery('.listeActivities').toggle() & $('.listeEmployes').hide() & $('.listeReservations').hide() & $('.listeUsers').hide();
})


jQuery('.reservations').on('click',function(){
  jQuery('.listeReservations').toggle() & $('.listeEmployes').hide() & $('.listeActivities').hide() & $('.listeUsers').hide();
})

