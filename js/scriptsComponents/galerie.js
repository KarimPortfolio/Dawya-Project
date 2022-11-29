
// Handle filters

var allFilters = document.querySelectorAll('.filters p');
allFilters.forEach( (elt) => {
    elt.addEventListener('click' , () => {
        setTimeout( () =>  {
            allFilters.forEach( (ele) => {
                ele.classList.remove('active')
            });
            elt.classList.add('active');
            var filtersText = elt.innerHTML;
            switch (filtersText) {
                case 'TOUS':
                    var boujmilImgs = document.querySelectorAll('.boujmilView');
                    boujmilImgs.forEach( (img) => {
                        img.style.display = 'block';
                    })
                    var atelierImgs = document.querySelectorAll('.atelier');
                    atelierImgs.forEach( (img) => {
                        img.style.display = 'block';
                    })
                    break;
                case 'BOUJMIL':
                    var boujmilImgs = document.querySelectorAll('.boujmilView');
                    boujmilImgs.forEach( (img) => {
                        img.style.display = 'block';
                    })
                    var atelierImgs = document.querySelectorAll('.atelier');
                    atelierImgs.forEach( (img) => {
                        img.style.display = 'none';
                    })
                    break;
                case 'ATELIERS':
                    console.log(filtersText);
                    var boujmilImgs = document.querySelectorAll('.boujmilView');
                    boujmilImgs.forEach( (img) => {
                        img.style.display = 'none';
                    })
                    var atelierImgs = document.querySelectorAll('.atelier');
                    atelierImgs.forEach( (img) => {
                        img.style.display = 'block';
                    })
                    break;
            
            }
        },20);
    });
});



