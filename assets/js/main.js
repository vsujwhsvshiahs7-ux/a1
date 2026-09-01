document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { header.classList.add('scrolled'); }
    else { header.classList.remove('scrolled'); }
  });

  const toggleBtn = document.querySelector('.mobile-toggle');
  const mainNav = document.querySelector('.main-nav');
  if (toggleBtn && mainNav) {
    toggleBtn.addEventListener('click', () => {
      const isOpen = mainNav.style.display === 'flex';
      mainNav.style.display = isOpen ? 'none' : 'flex';
      if (!isOpen) {
        mainNav.style.flexDirection = 'column'; mainNav.style.position = 'absolute';
        mainNav.style.top = '100%'; mainNav.style.left = '0'; mainNav.style.right = '0';
        mainNav.style.background = 'rgba(11, 14, 20, 0.98)'; mainNav.style.padding = '24px';
      }
    });
  }

  const optionCards = document.querySelectorAll('.watch-option-card');
  const resultTitle = document.getElementById('watch-custom-title');
  const resultDesc = document.getElementById('watch-custom-desc');
  const resultBadge = document.getElementById('watch-custom-badge');

  const watchTracks = {
    'tourbillon': { title: 'The Flying Tri-Axial Tourbillon Caliber', desc: 'Hand-finished titanium cage rotating across 3 axes to counteract gravitational perturbation on the balance spring.', badge: 'Caliber Specification: 21,600 vph &bull; 72-Hour Power Reserve &bull; Hand-Polished Anglage' },
    'coaxial': { title: 'The Low-Friction Co-Axial Escapement Chronometer', desc: 'Radial tangential impulse kinematics eliminating sliding friction and oil degradation for decade-long isochronism.', badge: 'Caliber Specification: Free-Sprung Balance &bull; Silicon Hairspring &bull; COSC Chronometer Certified' },
    'guilloche': { title: 'The Hand-Engine Turned Rose Lathe Timepiece', desc: 'Solid silver dial blank engraved with hypnotic Clous de Paris and barleycorn flinqué geometry on 19th-century lathes.', badge: 'Artisanal Finish: Flame-Blued Steel Hands &bull; Grand Feu Enamel Accent &bull; Bespoke Monogram' }
  };

  if (optionCards.length > 0 && resultTitle) {
    optionCards.forEach(card => {
      card.addEventListener('click', () => {
        optionCards.forEach(c => c.classList.remove('active'));
        card.classList.add('active');
        const type = card.getAttribute('data-caliber');
        if (watchTracks[type]) {
          resultTitle.textContent = watchTracks[type].title;
          resultDesc.textContent = watchTracks[type].desc;
          if (resultBadge) resultBadge.textContent = watchTracks[type].badge;
        }
      });
    });
  }

  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        faqItems.forEach(i => i.classList.remove('active'));
        if (!isActive) { item.classList.add('active'); }
      });
    }
  });
});