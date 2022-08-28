document.addEventListener('DOMContentLoaded', (event) => {
    
    let btnOpenMenu = document.getElementById('open-menu');
    let btnCloseMenu = document.getElementById('close-menu');
    let containerMenu = document.querySelector('.navbar-mobile_menu');
    let sliderServices = document.querySelector('.header-slider_service_3d')
    let containerNavbar = document.querySelector('.navbar-container');

    btnOpenMenu.addEventListener('click', () => {
        containerMenu.classList.add('open');
        if(window.innerWidth < 768)
        {
            sliderServices.classList.add('d-none');
        }        
        gsap.timeline()
            .from(".link-items", {opacity: 0, stagger: 0.1, delay: 1, y: 10})
            .from(".rrss-items", {opacity: 0, stagger: 0.1, y: 20});
    });

    btnCloseMenu.addEventListener('click', () => {

        if(window.innerWidth < 768)
        {
            setTimeout( () => {
                sliderServices.classList.remove('d-none')
            },1005);
        }
        containerMenu.classList.remove('open');
    });

    document.addEventListener('scroll', () => {
        if(this.pageYOffset >= 100)
        {
            containerNavbar.classList.add('bg-dark')
        }else
        {
            containerNavbar.classList.remove('bg-dark')
        }
    });

        var slideUp = {opacity: 0,easing: 'ease-in',delay: 200};
        var slidedesc = {opacity: 0,easing: 'ease-in',delay: 1000};
        var slideBottom = {opacity: 0,easing: 'cubic-bezier(.17,.67,.83,.67)',delay: 2100};
        ScrollReveal().reveal('.work-with-us_title',{opacity:0,easing: 'ease-in', delay: 400 });
        ScrollReveal().reveal('.work-with-us_description',{opacity:0,easing: 'ease-in', delay: 1000 });
        ScrollReveal().reveal('.work-with-us-image',{opacity:0,easing: 'ease-in', delay: 1500 });
        ScrollReveal().reveal('.service-item',slideBottom);
        ScrollReveal().reveal('.button-action',{ delay: 250 });
        ScrollReveal().reveal('.contact-the-team-title',{opacity:0,easing: 'ease-in', delay: 400 });
        ScrollReveal().reveal('.button-action-2',{opacity:0,easing: 'ease-in', delay: 1000 });
        ScrollReveal().reveal('.contact-the-team-image',{opacity:0,easing: 'ease-in', delay: 2000 });

});