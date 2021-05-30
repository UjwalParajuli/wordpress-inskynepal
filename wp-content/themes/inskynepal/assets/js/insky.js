window.addEventListener('load', function() {
    
    const pageTitle = document.querySelector('main');

    const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav-links");
    const links = document.querySelectorAll(".nav-links li");

    const dropDownTriggers = document.querySelectorAll('.menu-item-has-children');

    const scrollToTopBtn = document.querySelector('#scroll-to-top');

    hamburger.addEventListener('click', ()=>{
    //Animate Links
        navLinks.classList.toggle("open");
        links.forEach(link => {
            link.classList.toggle("fade");
        });

        //Hamburger Animation
        hamburger.classList.toggle("toggle");
    });

    //Scroll To TOp

    window.addEventListener('scroll', function() {
        window.cancelAnimationFrame(scrollToTop);
        
        if(window.scrollY > 500) {
            scrollToTopBtn.classList.remove('hidden');
        } else {
            scrollToTopBtn.classList.add('hidden');
        }

        if(document.body.classList.contains('single-tours')) {
            if(window.scrollY > scrollPos) {
                header.classList.remove('show');
            } else {
                header.classList.add('show');
            }
            scrollPos = window.scrollY;
        }        
    });

    scrollToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        scrollToTop();
    });

    const scrollToTop = () => {
        const c = document.documentElement.scrollTop || document.body.scrollTop;
        if (c > 0) {
          window.requestAnimationFrame(scrollToTop);
          window.scrollTo(0, c - c / 15);
        }
    };
    
    
    //Dropdown Menu
    
    setDropDownMenu(dropDownTriggers);
    
    // window.addEventListener('resize', () => {
    //     setDropDownMenu(dropDownTriggers);
    // });

    //Accordion

    if(pageTitle.classList.contains('faq-page')) {
        setupAccordion();
    };
});

function setDropDownMenu(dropDownTriggers) {

    dropDownTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            trigger.classList.toggle('drop-open');
        });
    });
}

function setupAccordion() {
    const faqs = document.querySelectorAll('.faq-single');

    faqs.forEach(faq => {
        faq.addEventListener('click', (e) => {
            e.preventDefault();

            faq.classList.toggle('hidden');
        });
    });
}
