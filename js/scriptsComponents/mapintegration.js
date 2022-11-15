// var closeBtn = document.querySelector('.closeIcone1');
// closeBtn.addEventListener('click' , () => {
//     var googleMap = document.querySelector('.googleMap');
//     setTimeout( () => {
//         googleMap.style.display = "none";
//     },250);
// })

var OpenBtn = document.querySelector('.openMap');
OpenBtn.addEventListener('click' , () => {
    var googleMap = document.querySelector('.googleMap');
    setTimeout( () => {
        googleMap.style.display = "flex";
    })
})

$(document).ready( function () {
    //handeling the map button
    $('.openMap').click( () => {
        $('body').toggleClass('body');
        $('.landingPage').hide();
        $('.intro').hide();
    })

    $('.closeIcone1').click( () => {
        $('.googleMap').hide('slow');
        $('body').toggleClass('body');
        $('.intro').show();
        $('.landingPage').show();
    })
})