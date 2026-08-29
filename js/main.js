/* TickClockVan - Concept C Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile Navigation Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  }

  // Navbar Scroll Effect
  const navbar = document.querySelector('.tick-nav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Active Link Tracking
  const currentPath = window.location.pathname.split('/').pop() || 'index.php';
  const navAnchors = document.querySelectorAll('.nav-links a');
  
  navAnchors.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath === '' && href === 'index.php')) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });

  // Interactive Escapement & Pendulum Oscillating Gear Matrix (Concept C Feature)
  const gearBtns = document.querySelectorAll('.gear-tab-btn');
  const gearDisplay = document.getElementById('escapement-matrix-display');

  const gearData = {
    "deadbeat-escapement": {
      "name": "Graham Deadbeat Anchor Escapement",
      "metric": "Recoil-Free Oscillation • 3,600 Beats per Hour",
      "notes": "Engineered by George Graham in 1715, this precision escapement eliminates pendulum recoil, ensuring uniform impulse delivery across long-case grandfather clocks.",
      "ideal": "Featured on The Sovereign Tourbillon Grandfather Clock"
    },
    "invar-pendulum": {
      "name": "Invar Temperature-Compensated Pendulum Rod",
      "metric": "Near-Zero Thermal Expansion Coefficient (1.2 × 10⁻⁶/K)",
      "notes": "Nickel-iron alloy pendulum rod that maintains precise physical length during seasonal temperature fluctuations, eliminating timekeeping variance.",
      "ideal": "Paired with The Marine Chronometer & Precision Regulators"
    },
    "mainspring-torque": {
      "name": "Hand-Wound Fusee & Mainspring Barrel Assembly",
      "metric": "8-Day Constant Torque Reserve • Flame-Blued Steel",
      "notes": "Conical fusee gear equalizes mainspring tension from full wind down to final day, providing linear force distribution to the gear train.",
      "ideal": "Applied across Antique Mantelpiece Clocks & Skeleton Timepieces"
    },
    "mobile-van-atelier": {
      "name": "Mobile Clockmaker Restoration Van Lab",
      "metric": "On-Demand VIP Estate Visit • Digital Beat Error Scanner",
      "notes": "Book our custom mobile horologist van for private home grandfather clock leveling, ultrasonic movement cleaning, and wheel teeth repair.",
      "ideal": "Private Estate Visits, Museum Restorations & Antique Tuning"
    }
  };

  if (gearBtns.length > 0 && gearDisplay) {
    gearBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        gearBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const key = this.getAttribute('data-gear');
        const data = gearData[key] || gearData["deadbeat-escapement"];

        gearDisplay.innerHTML = `
          <div style="background: var(--bg-card); padding: 2rem; border-radius: 12px; border: 1px solid var(--border-gold); margin-top: 1.5rem;">
            <span style="display: inline-block; padding: 0.25rem 0.75rem; background: var(--accent-gold); color: #0D0E12; font-size: 0.75rem; font-weight: 800; border-radius: 4px; text-transform: uppercase; margin-bottom: 0.75rem;">${data.metric}</span>
            <h3 style="font-size: 1.5rem; color: var(--text-light); margin-bottom: 0.5rem;">${data.name}</h3>
            <p style="color: var(--accent-gold); font-weight: 800; font-size: 1.1rem; margin-bottom: 0.75rem;">⚙️ Horology Spec Pairing: ${data.ideal}</p>
            <p style="color: var(--text-muted); font-size: 0.95rem;">${data.notes}</p>
          </div>
        `;
      });
    });
  }
});
