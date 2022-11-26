

function handleFiltersStyle() {
    // var allFilters = document.querySelectorAll('.filters p');
    // allFilters.forEach( (e) => {
    //      e.classList.remove('active');
    // })
    // element.classList.add('active');
    console.log('true');
}

var allFilters = document.querySelectorAll('.filters p');
allFilters.forEach( (elt) => {
    elt.addEventListener('click' , () => {
        document.querySelector('.filters p').classList.remove('active');
        elt.classList.add('active');
    })
})
