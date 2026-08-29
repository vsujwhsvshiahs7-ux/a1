/* MechanicTimeox - Concept D Interactive JavaScript */
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
  const navbar = document.querySelector('.forge-nav');
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

  // Interactive Micro-Tolerances & Machinery Matrix (Concept D Feature)
  const matrixBtns = document.querySelectorAll('.matrix-tab-btn');
  const matrixDisplay = document.getElementById('machinery-matrix-display');

  const matrixData = {
    "titanium-cnc": {
      "name": "5-Axis CNC Micro-Milling Engine",
      "metric": "0.001mm Micron Tolerance • 12,000 RPM Spindle",
      "notes": "Precision carbide cutter milling grade-5 titanium tourbillon cages and chronograph bridge plates directly from solid billet stock.",
      "ideal": "Featured on The Titan Chrono-Forge Monopusher"
    },
    "dlc-coating": {
      "name": "Diamond-Like Carbon (DLC) Plasma Deposition",
      "metric": "4,500 Vickers Hardness • 2.5 Micron Layer",
      "notes": "High-vacuum physical vapor deposition bonding diamond carbon lattices to steel watch cases for ultra-scratch-resistant tactical matte surfaces.",
      "ideal": "Applied to The Tactical Stealth Automatic GMT"
    },
    "poising-lathe": {
      "name": "Dynamic Balance Wheel Poising & Laser Resection",
      "metric": "Laser Resection Tuning • 28,800 vph Balance Frequency",
      "notes": "Laser-guided balance wheel inertia poising eliminating micro-eccentricity across 6-position chronometric testing.",
      "ideal": "Integrated into all MechanicTimeox Skeleton Masterpieces"
    },
    "mobile-van-workshop": {
      "name": "Mobile Heavy Watchmaking Workshop Van",
      "metric": "On-Site CNC Diagnostics • Mobile Cleanroom Suite",
      "notes": "Custom heavy-duty Mercedes Sprinter mobile lab equipped with 3D optical comparators, ultrasonic degreasers, and custom strap fitting lounges.",
      "ideal": "Private Estate Tuning, Executive Offices & Museum Restoration"
    }
  };

  if (matrixBtns.length > 0 && matrixDisplay) {
    matrixBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        matrixBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const key = this.getAttribute('data-matrix');
        const data = matrixData[key] || matrixData["titanium-cnc"];

        matrixDisplay.innerHTML = `
          <div style="background: var(--bg-card); padding: 2rem; border-radius: 12px; border: 1px solid var(--border-amber); margin-top: 1.5rem;">
            <span style="display: inline-block; padding: 0.25rem 0.75rem; background: var(--accent-amber); color: #111318; font-size: 0.75rem; font-weight: 800; border-radius: 4px; text-transform: uppercase; margin-bottom: 0.75rem;">${data.metric}</span>
            <h3 style="font-size: 1.5rem; color: var(--text-light); margin-bottom: 0.5rem;">${data.name}</h3>
            <p style="color: var(--accent-amber); font-weight: 800; font-size: 1.1rem; margin-bottom: 0.75rem;">⚙️ Machinery Spec Pairing: ${data.ideal}</p>
            <p style="color: var(--text-muted); font-size: 0.95rem;">${data.notes}</p>
          </div>
        `;
      });
    });
  }
});
