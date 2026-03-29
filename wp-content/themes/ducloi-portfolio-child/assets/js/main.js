document.addEventListener('DOMContentLoaded', function () {
  const cur = document.getElementById('cur');
  const cur2 = document.getElementById('cur2');

  if (cur && cur2 && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    let ringX = mouseX;
    let ringY = mouseY;

    cur.style.display = 'block';
    cur2.style.display = 'block';
    cur.style.opacity = '1';
    cur2.style.opacity = '1';

    document.addEventListener('mousemove', function (e) {
      mouseX = e.clientX;
      mouseY = e.clientY;

      cur.style.left = mouseX + 'px';
      cur.style.top = mouseY + 'px';
    });

    function animateRing() {
      ringX += (mouseX - ringX) * 0.14;
      ringY += (mouseY - ringY) * 0.14;

      cur2.style.left = ringX + 'px';
      cur2.style.top = ringY + 'px';

      requestAnimationFrame(animateRing);
    }

    animateRing();

    document.querySelectorAll('a, button, .proj-card, .cert-item, .skill-cat, .contact-link').forEach(el => {
      el.addEventListener('mouseenter', () => document.body.classList.add('hovering'));
      el.addEventListener('mouseleave', () => document.body.classList.remove('hovering'));
    });

    document.addEventListener('mouseleave', function () {
      cur.style.opacity = '0';
      cur2.style.opacity = '0';
    });

    document.addEventListener('mouseenter', function () {
      cur.style.opacity = '1';
      cur2.style.opacity = '1';
    });
  } else {
    document.body.style.cursor = 'auto';
    if (cur) cur.style.display = 'none';
    if (cur2) cur2.style.display = 'none';
  }

  const nav = document.getElementById('nav');
  if (nav) {
    window.addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', window.scrollY > 50);
    });
  }

  const obs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

  const bs = document.querySelector('.skill-bars');
  if (bs) {
    const barObs = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.querySelectorAll('.bar-fill').forEach(b => {
            b.style.width = b.dataset.w + '%';
          });
        }
      });
    }, { threshold: 0.3 });

    barObs.observe(bs);
  }

  const secs = document.querySelectorAll('section[id]');
  const navAs = document.querySelectorAll('.nav-links a');

  window.addEventListener('scroll', () => {
    let current = '';

    secs.forEach(section => {
      if (window.scrollY >= section.offsetTop - 120) {
        current = section.id;
      }
    });

    navAs.forEach(a => {
      a.style.color = a.getAttribute('href') === '#' + current ? 'var(--gold)' : '';
    });
  });
});