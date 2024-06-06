document.addEventListener('DOMContentLoaded', () => {
  initPageFunctionalities();
  window.addEventListener("scroll", handleScroll);
  faqAccordion()
  loadFormContact()
});

const initPageFunctionalities = () => {
  const menuToggle = document.querySelector('#menu-icon');
  const menuTop = document.querySelector('#menu-top');
  const mediaQuery = window.matchMedia('(max-width: 720px)');
  const goTop = document.querySelector(".goto-top");
  const header = document.querySelector(".header");

  // Menu Responsive
  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    menuTop.classList.toggle('active');
    header.classList.toggle('opened');
  });

  window.addEventListener('resize', () => {
    if(!mediaQuery.matches) {
      menuToggle.classList.remove('active');
      menuTop.classList.remove('active');
      header.classList.remove('opened');
    }
  });

  // Go to top
  goTop.addEventListener("click", () => {
    window.scroll({
      top: 0,
      behavior: 'smooth'
    })
  })
}

const handleScroll = () => {
  let prevScrollPos = window.scrollY || window.pageYOffset;
  const header = document.querySelector(".header");
  const goTop = document.querySelector(".goto-top");

  window.addEventListener("scroll", function() {
    const currentScrollPos = window.scrollY || window.pageYOffset;

    if (prevScrollPos < currentScrollPos) {
      header.classList.add("hidden");
      header.classList.remove("visible");
      goTop.classList.remove("visible");
    } else {
      header.classList.add("visible");
      header.classList.remove("hidden");
      goTop.classList.add("visible");
    }

    if (currentScrollPos === 0) {
      header.classList.remove("visible");
    }

    prevScrollPos = currentScrollPos;

    // Mostrar u ocultar goTop basado en la posición del scroll
    if (currentScrollPos < 1) {
      goTop.style.opacity = "0";
    } else {
      goTop.style.opacity = "1";
    }
  });

  // Al inicio, verificar posición del scroll para mostrar u ocultar goTop
  const initialScrollPos = window.scrollY || window.pageYOffset;
  if (initialScrollPos < 1) {
    goTop.style.opacity = "0";
  } else {
    goTop.style.opacity = "1";
  }
};

const faqAccordion = () => {
  const allDetails = document.querySelectorAll("#faq details");
  allDetails.forEach((details) => {
    details.addEventListener("toggle", () => {
      if (details.open) {
        allDetails.forEach((otherDetails) => {
          if (otherDetails !== details) {
            otherDetails.removeAttribute("open");
          }
        });
      }
    });
  });
}

const loadFormContact = () => {
  const btnAbrirPopup = document.querySelectorAll( '.contact' );
  const btnClosePopup = document.querySelector( '.popup__close' );
  const body = document.body;
  const backdrop = document.querySelector( '.popup__overlay' );
  const popup = document.querySelector( '.popup' );
  const header = document.querySelector(".header");
  const menuIcon = document.querySelector('#menu-icon');
  const menuTop = document.querySelector('#menu-top');
  const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;

  btnAbrirPopup.forEach(button => {
    button.addEventListener('click', () => {
      popup.classList.add('open');
      body.classList.add('no-scroll');
      body.style.paddingRight = `${scrollbarWidth}px`;
      menuIcon.classList.remove('active');
      menuTop.classList.remove('active');
      header.classList.remove('opened');
    });
  });

  if ( btnClosePopup || backdrop ) {
    [ btnClosePopup, backdrop].forEach( (e) => {
      e.addEventListener( 'click', () => {
        popup.classList.remove( 'open' );
        body.classList.remove( 'no-scroll' );
        body.removeAttribute( 'style' );
        history.pushState('', document.title, window.location.pathname + window.location.search);
      });
    });
  }
}
