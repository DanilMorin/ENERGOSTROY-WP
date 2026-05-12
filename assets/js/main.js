document.addEventListener('DOMContentLoaded', () => {
  const slider = document.querySelector('.service-slider');

  if (slider) {
    new Splide(slider, {
      type: 'loop',
      speed: 1900,
      perPage: 1,
      focus: 'center',
      arrows: true,
      pagination: false,
      autoWidth: false,
      width: '100%',
      padding: { left: '1rem', right: '1rem' },
      breakpoints: {
        900: {
          padding: { left: '1.2rem', right: '1.2rem' },
        },
      },
      arrowPath:
        'M10.3833 6.28337L13.3333 3.33337L30 20L13.3333 36.6667L10.3833 33.7167L24.1 20L10.3833 6.28337Z',
    }).mount();
  }
});

// Scroll to contacts for iOS devices
document.addEventListener('DOMContentLoaded', () => {
  const contactBtn = document.querySelector('a[href="#contacts-id"]');
  const target = document.querySelector('#contacts-id');

  if (contactBtn && target) {
    contactBtn.addEventListener('click', (e) => {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  }
});

//menu
document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.header__burger');
  const nav = document.querySelector('.header__nav');

  if (!burger || !nav) return;

  const setMenuState = (isOpen) => {
    burger.classList.toggle('is-active', isOpen);
    nav.classList.toggle('is-active', isOpen);

    document.body.classList.toggle('menu-open', isOpen);
    burger.setAttribute('aria-expanded', String(isOpen));
    burger.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
  };

  setMenuState(false);

  burger.addEventListener('click', () => {
    const isOpen = !burger.classList.contains('is-active');
    setMenuState(isOpen);
  });

  document.querySelectorAll('.header__menu a').forEach((link) => {
    link.addEventListener('click', () => setMenuState(false));
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth >= 900) {
      setMenuState(false);
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      setMenuState(false);
    }
  });
});

//animation menu
document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');
  if (!header) return;

  const syncBodyOffset = () => {
    document.body.style.paddingTop = `${header.offsetHeight}px`;
  };

  syncBodyOffset();
  window.addEventListener('resize', syncBodyOffset);

  let lastScrollY = window.scrollY;
  const delta = 8;

  window.addEventListener(
    'scroll',
    () => {
      const currentScrollY = window.scrollY;

      if (currentScrollY <= 0) {
        header.classList.remove('header--scroll-hidden', 'header--scroll-visible');
        lastScrollY = 0;
        return;
      }

      if (currentScrollY > lastScrollY + delta) {
        header.classList.add('header--scroll-hidden');
        header.classList.remove('header--scroll-visible');
      } else if (currentScrollY < lastScrollY - delta) {
        header.classList.remove('header--scroll-hidden');
        header.classList.add('header--scroll-visible');
      }

      lastScrollY = currentScrollY;
    },
    { passive: true }
  );
});

