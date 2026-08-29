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

  // Interactive Watch Movement Matrix (Concept C Feature)
  const gearBtns = document.querySelectorAll('.gear-tab-btn');
  const gearDisplay = document.getElementById('escapement-matrix-display');

  const gearData = {
    "deadbeat-escapement": {
      "name": "Titanium Flying Tourbillon Escapement",
      "metric": "60-Second Cage Rotation • 28,800 vph Frequency",
      "notes": "Ultra-lightweight titanium tourbillon cage weighing just 0.28 grams that negates gravitational errors across all 6 wrist positions.",
      "ideal": "Featured on The Sovereign Tourbillon Wristwatch"
    },
    "invar-pendulum": {
      "name": "Free-Sprung Variable Inertia Balance Wheel",
      "metric": "Breguet Overcoil Spring • Gold Poising Screws",
      "notes": "Free-sprung balance wheel adjusted via four gold inertia micro-screws, eliminating regulator curb pins for superior rate stability.",
      "ideal": "Paired with The Monopusher Chronograph & GMT Automatics"
    },
    "mainspring-torque": {
      "name": "Column-Wheel Monopusher Chronograph Engine",
      "metric": "Horizontal Friction Clutch • 60-Minute Sub-Dial",
      "notes": "Hand-machined steel column wheel delivering crisp tactile pusher response and smooth chronograph hand engagement.",
      "ideal": "Applied across Monopusher Chronographs & Racing Timepieces"
    },
    "mobile-van-atelier": {
      "name": "Mobile Watchmaker Restoration Van Lab",
      "metric": "On-Demand VIP Visit • 3D Movement Diagnostic Suite",
      "notes": "Book our custom mobile watchmaker van for private home watch regulation, ultrasonic movement cleaning, and custom strap fitting.",
      "ideal": "Private Estate Visits, Museum Restorations & Executive Tuning"
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
            <p style="color: var(--accent-gold); font-weight: 800; font-size: 1.1rem; margin-bottom: 0.75rem;">⌚ Watch Spec Pairing: ${data.ideal}</p>
            <p style="color: var(--text-muted); font-size: 0.95rem;">${data.notes}</p>
          </div>
        `;
      });
    });
  }
});
