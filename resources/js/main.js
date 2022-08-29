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
            if(sliderServices)
            {
                sliderServices.classList.add('d-none');
            }
        }        
        gsap.timeline()
            .from(".link-items", {opacity: 0, stagger: 0.1, delay: 1, y: 10})
            .from(".rrss-items", {opacity: 0, stagger: 0.1, y: 20});
    });

    btnCloseMenu.addEventListener('click', () => {

        if(window.innerWidth < 768)
        {
            setTimeout( () => {
                if(sliderServices)
                {
                    sliderServices.classList.remove('d-none');
                }
            },1005);
        }
        containerMenu.classList.remove('open');
    });

    window.addEventListener('scroll', () => {
        if(window.pageYOffset >= 100)
        {
            containerNavbar.classList.add('bg-dark')
        }else
        {
            containerNavbar.classList.remove('bg-dark')
        }
    });
});