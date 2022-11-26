
// Handle filters

var allFilters = document.querySelectorAll('.filters p');
allFilters.forEach( (elt) => {
    elt.addEventListener('click' , () => {
        setTimeout( () =>  {
            allFilters.forEach( (ele) => {
                ele.classList.remove('active')
            });
            elt.classList.add('active');
        },20);
    });
});

// All images

var images = ['']