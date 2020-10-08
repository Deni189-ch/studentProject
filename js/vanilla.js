
//появление иконок при скроле 
window.addEventListener('scroll', function(){   
    $imageNav.style.opacity = 1;
    $imageNav.style.transform = 'translateX(0%)'
});

//появление иконок при нажатии кнопки
let $imageNav = document.querySelector('.image__nav');
window.addEventListener('keyup', function() {
    $imageNav.style.opacity = 1;
    $imageNav.style.transform = 'translateX(0%)'
});

//появление стрелки подьема на вверх
let $up = document.querySelector('.up');

window.addEventListener('scroll', function() {
    let top = $imageNav.getBoundingClientRect().top;
    let centerWidth = window.outerHeight/2;

    if(top <= 0) {
        $up.style.display ='block';
        $up.style.opacity = 1;
    } else {
        $up.style.opacity = 0;
        $up.style.display ='none';
    }
});


//появление карточек трипс при скроле
let $tripsItem = document.querySelectorAll('.trips-item');

window.addEventListener('scroll', function(){    
    let centerWindow = window.innerHeight / 2;
    let delay = 0;
    
        $tripsItem.forEach(function (item) {
            let top = item.getBoundingClientRect().top;
    
            if(item.classList.contains('animation')) {
                return false
            }

            if(top <= centerWindow) {
                item.classList.add('animation')
                 
                item.style.transitionDelay = `${index}s`;  
                delay++;
            } 
        });
    
   
    
    
})
