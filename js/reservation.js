

var button1 = document.querySelector('.first_btn');
button1.addEventListener('click' , () => {
    var span1 = document.querySelector('.span1');
    var span2 = document.querySelector('.span2');
    var reservationPart1 = document.querySelector('.reservation_first_part');
    var reservationPart2 = document.querySelector('.reservation_second_part');
    
    setTimeout( () => {
        span1.classList.remove('span_active');
        span1.classList.add('span_desactiver');
        span2.classList.remove('span_desactiver');
        span2.classList.add('span_active');
    },20)
    
    reservationPart1.style.display = 'none';
    reservationPart2.style.display = 'block';
    
})

var button2 = document.querySelector('.second_btn');
button2.addEventListener( 'click' , () => {
    var span3 = document.querySelector('.span2');
    var span4 = document.querySelector('.span3');
    var reservationPart3 = document.querySelector('.reservation_second_part');
    var reservationPart4 = document.querySelector('.reservation_thired_part');
    setTimeout( () => {
        span3.removeAttribute('span_active');
        span3.setAttribute('class','span_desactiver');
        span4.removeAttribute('.span_desactiver');
        span4.setAttribute('class' , 'span_active');
    },20);

    reservationPart3.style.display = 'none';
    reservationPart4.style.display = 'block';
    
})

// window.addEventListener('scroll' , () => {
//     if (window.scrollY >= 150) {
//         var header = document.querySelector('header');
//         header.style.position = 'fixed';
//         header.style.width = '100%';
//         header.style.zIndex = '200';
//         header.style.top = '0px';
//         header.style.background = '#FFFF';
//     }
//     else{
//         var header = document.querySelector('header');
//         header.style.position = 'static';
//     }
// })


const section = document.querySelector('section');

for (var i = 0 ; i < 15 ; i++) {
    let blocks = document.createElement('img');
    blocks.classList.add('block');
    blocks.setAttribute('src' , '../images/blob4.png');
    section.appendChild(blocks);
}

function animateBlocks () {
    var html = document.querySelector('html');
    html.style.overflowX = 'hidden'
    anime({
        targets: '.block',
        translateX: function () {
            return anime.random(-700,700)
        },
        translateY: function () {
            return anime.random(-500,500)
        },
        scale: function () {
            return anime.random(1,5)
        },
        easing:'linear',
        duration:3000,
        delay:anime.stagger(10),
        complete:animateBlocks,
    })
}

animateBlocks();


setInterval( () => {
    var allBlocks = document.querySelectorAll('.block');
    allBlocks.forEach( (block) => {
         block.style.display = 'none';
    })
},3800);

// API (send form data to owner email;

// let form = document.querySelector('#reservation_form');
// form.addEventListener('submit' , (e) => {
//     e.preventDefault();
//     const newResrvation = new FormData(form);
//     const payload = new URLSearchParams(newResrvation)
//     fetch('http://localhost/dawyawebsite/Dawya-project/reservationmail.php' , {
//         method:'POST',
//         body:payload,
//     })
//       .then(resp => resp.text())
//       .then(data => console.log(data))
//       .catch(err => {
//             alert("Data doesn't send");
//       });
// })
