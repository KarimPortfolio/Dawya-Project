var closeBtn = document.querySelector('.closeIcone1');
closeBtn.addEventListener('click' , () => {
    var googleMap = document.querySelector('.googleMap');
    setTimeout( () => {
        googleMap.style.display = "none";
    },250);
})
