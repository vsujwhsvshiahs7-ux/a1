<?php
// MechanicTimeox - Concept D: Industrial Chrono-Forge & Micro-Mechanics Atelier
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MechanicTimeox — Industrial Mechanical Chronometry & Mobile Watchmaker Atelier</title>
  <meta name="description" content="MechanicTimeox is Soho New York's premier industrial watchmaking atelier specializing in raw titanium tourbillons, DLC coated chronographs, micro-machining, and mobile watchmaker van workshop visits.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Rajdhani:wght@600;700&family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Navigation Header -->
  <header class="forge-nav">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
      <a href="index.php" class="brand-logo">Mechanic<span>Timeox</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">Atelier</a></li>
        <li><a href="#creations">Machines</a></li>
        <li><a href="#matrix">Tolerances Matrix</a></li>
        <li><a href="blog.html">Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="contact.html" class="btn-forge btn-amber" style="padding: 0.5rem 1.25rem; font-size: 0.75rem;">Book Mobile Workshop</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Chrono-Forge Hero (Concept D Feature) -->
  <section class="forge-hero" id="hero">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center;">
        <div>
          <span class="hero-badge">⚙️ HEAVY INDUSTRIAL CHRONOMETRY & MOBILE WORKSHOP</span>
          <h1 class="font-display hero-title">
            INDUSTRIAL MICRO-MECHANICS & <span class="gradient-amber">MOBILE WATCHMAKER VAN</span>
          </h1>
          <p style="color: var(--text-light); font-size: 1.15rem; margin-bottom: 2rem; max-width: 600px;">
            Engineered from solid grade-5 titanium billets with DLC diamond coating, 5-axis CNC gear milling, and private mobile watchmaking van lounge service.
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <a href="#creations" class="btn-forge btn-amber">Explore Timepiece Machines</a>
            <a href="#matrix" class="btn-forge btn-outline-amber">Inspect Tolerances Matrix</a>
          </div>
        </div>

        <div style="position: relative; border-radius: 12px; overflow: hidden; border: 1px solid var(--border-amber); box-shadow: 0 20px 50px rgba(0, 0, 0, 0.85);">
          <img src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?auto=format&fit=crop&w=800&h=600&crop=faces&mechanic_slot=15" alt="MechanicTimeox Grade-5 Titanium Tourbillon Engine Movement" style="width: 100%; height: 500px; object-fit: cover;">
          <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 1.5rem; background: linear-gradient(0deg, rgba(17,19,24,0.95) 0%, transparent 100%);">
            <span style="font-size: 0.75rem; color: var(--accent-amber); font-weight: 800; text-transform: uppercase;">Flagship Industrial Machine</span>
            <h3 style="color: var(--text-light); font-size: 1.3rem;">The Titan Chrono-Forge Monopusher</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: The MechanicTimeox Story -->
  <section class="section" id="story" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div>
          <span class="section-subtitle">Industrial Engineering & Chronometry</span>
          <h2 class="section-title" style="font-size: 2.8rem; margin-bottom: 1.5rem; color: var(--accent-amber);">Where Heavy Machinery Meets High Watchmaking</h2>
          <p style="color: var(--text-light); margin-bottom: 1.25rem; line-height: 1.8;">
            MechanicTimeox was established at 181 Mercer Street in Soho to push watchmaking into the industrial future by combining aerospace-grade CNC machining with mobile watchmaker workshop vans.
          </p>
          <p style="color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.8;">
            Our mobile workshop van features on-site 3D optical comparators, ultrasonic solvent degreasers, and micro-lathes that deliver high-precision watch movement regulation directly to private estates and executive offices.
          </p>
          <div style="padding: 1.25rem; background: var(--bg-card); border-left: 3px solid var(--accent-amber); border-radius: 4px;">
            <p style="color: var(--accent-amber); font-family: var(--font-heading); font-size: 1.15rem; font-style: italic; margin: 0;">
              "True chronometry is industrial truth—where 0.001mm micro-machining tolerances transform raw titanium billets into indestructible timepieces."
            </p>
          </div>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1565849904461-04a58ad377e0?auto=format&fit=crop&w=800&h=600&crop=top&mechanic_slot=16" alt="MechanicTimeox Industrial CNC Lathe Watchmaking Workshop" style="border-radius: 12px; border: 1px solid var(--border-amber);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Signature Timepiece Creations -->
  <section class="section" id="creations">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Mechanical Engineering Machines</span>
        <h2 class="section-title">Signature Horological Timepieces</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
        <!-- Machine 1 -->
        <div class="forge-card">
          <div class="forge-img-wrap">
            <img src="https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?auto=format&fit=crop&w=800&h=600&crop=center&mechanic_slot=17" alt="The Titan Chrono-Forge Monopusher">
          </div>
          <div class="forge-body">
            <span style="font-size: 0.75rem; color: var(--accent-amber); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">Grade-5 Titanium • Column Wheel</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-light);">The Titan Chrono-Forge Monopusher</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              Monolithic titanium chassis housing a 28,800 vph column-wheel monopusher movement with sapphire exhibition caseback.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-amber); font-weight: 800; font-size: 1.2rem;">$28,900 USD</span>
              <a href="contact.html" class="btn-forge btn-amber" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Commission Machine</a>
            </div>
          </div>
        </div>

        <!-- Machine 2 -->
        <div class="forge-card">
          <div class="forge-img-wrap">
            <img src="https://images.unsplash.com/photo-1533227268428-f9ed0900fb3b?auto=format&fit=crop&w=800&h=600&crop=bottom&mechanic_slot=18" alt="The Tactical Stealth Automatic GMT">
          </div>
          <div class="forge-body">
            <span style="font-size: 0.75rem; color: var(--accent-amber); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">DLC Diamond Coating • Dual Time Zone</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-light);">The Tactical Stealth Automatic GMT</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              Vickers 4,500 DLC coated black steel case featuring 24-hour dual timezone bezel and rubberized Kevlar strap.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-amber); font-weight: 800; font-size: 1.2rem;">$19,400 USD</span>
              <a href="contact.html" class="btn-forge btn-amber" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Commission Machine</a>
            </div>
          </div>
        </div>

        <!-- Machine 3 -->
        <div class="forge-card">
          <div class="forge-img-wrap">
            <img src="https://images.unsplash.com/photo-1521747116042-5a810fda9664?auto=format&fit=crop&w=800&h=600&crop=entropy&mechanic_slot=19" alt="The Openworked Skeleton Tourbillon Engine">
          </div>
          <div class="forge-body">
            <span style="font-size: 0.75rem; color: var(--accent-amber); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">60-Sec Flying Tourbillon • Skeletonized</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-light);">The Skeleton Tourbillon Engine</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              Fully openworked skeleton movement showcasing titanium tourbillon cage, flame-blued hands, and 80-hour power reserve.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-amber); font-weight: 800; font-size: 1.2rem;">$32,000 USD</span>
              <a href="contact.html" class="btn-forge btn-amber" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Commission Machine</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Interactive Micro-Tolerances & Machinery Matrix -->
  <section class="section" id="matrix" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Micro-Mechanics Specs</span>
        <h2 class="section-title" style="color: var(--accent-amber);">Machinery & Tolerances Matrix</h2>
        <p style="color: var(--text-muted); max-width: 600px; margin: 0.5rem auto 0;">
          Select a CNC milling engine, plasma coating, laser poising, or mobile workshop van below to inspect industrial specs:
        </p>
      </div>

      <div class="machinery-matrix-card" style="max-width: 900px; margin: 0 auto; text-align: center;">
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="matrix-tab-btn active" data-matrix="titanium-cnc">5-Axis CNC Milling</button>
          <button class="matrix-tab-btn" data-matrix="dlc-coating">DLC Coating</button>
          <button class="matrix-tab-btn" data-matrix="poising-lathe">Laser Balance Poising</button>
          <button class="matrix-tab-btn" data-matrix="mobile-van-workshop">Mobile Workshop Van</button>
        </div>

        <div id="machinery-matrix-display">
          <div style="background: var(--bg-card); padding: 2rem; border-radius: 12px; border: 1px solid var(--border-amber); margin-top: 1.5rem;">
            <span style="display: inline-block; padding: 0.25rem 0.75rem; background: var(--accent-amber); color: #111318; font-size: 0.75rem; font-weight: 800; border-radius: 4px; text-transform: uppercase; margin-bottom: 0.75rem;">0.001mm Micron Tolerance • 12,000 RPM Spindle</span>
            <h3 style="font-size: 1.5rem; color: var(--text-light); margin-bottom: 0.5rem;">5-Axis CNC Micro-Milling Engine</h3>
            <p style="color: var(--accent-amber); font-weight: 800; font-size: 1.1rem; margin-bottom: 0.75rem;">⚙️ Machinery Spec Pairing: Featured on The Titan Chrono-Forge Monopusher</p>
            <p style="color: var(--text-muted); font-size: 0.95rem;">Precision carbide cutter milling grade-5 titanium tourbillon cages and chronograph bridge plates directly from solid billet stock.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Live Industrial Watchmaker Atelier & Mobile Van Gallery -->
  <section class="section" id="gallery">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Visual Atmosphere</span>
        <h2 class="section-title">Mobile Workshop & Industrial Gallery</h2>
      </div>

      <div class="industrial-gallery">
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1617043786394-f977fa12eddf?auto=format&fit=crop&w=800&h=600&crop=faces&mechanic_slot=20" alt="Master Watchmaker Inspection under Loupe">
        </div>
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1619252584172-a83a949b6efd?auto=format&fit=crop&w=800&h=600&crop=top&mechanic_slot=21" alt="Mechanical Watch Movement Gear Assembly Bench">
        </div>
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=800&h=600&crop=center&mechanic_slot=22" alt="Mobile Watchmaker Van Workshop Experience">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: International Chronometry Society & Connoisseur Reviews -->
  <section class="section" id="reviews" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Engineering Acclaim</span>
        <h2 class="section-title" style="color: var(--accent-amber);">Industrial Chronometry Endorsements</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <div style="background: var(--bg-card); padding: 2rem; border-radius: 12px; border: 1px solid var(--border-amber);">
          <p style="color: var(--text-light); font-style: italic; margin-bottom: 1.5rem;">
            "The 0.001mm machining precision on the Titan Monopusher chassis is staggering. MechanicTimeox has bridged aerospace engineering and high horology."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-amber); color: #111318; display: flex; align-items: center; justify-content: center; font-weight: 800;">VR</div>
            <div>
              <strong style="color: var(--accent-amber); display: block;">Vikram Vance</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Aerospace Metallurgist & Watch Collector</span>
            </div>
          </div>
        </div>

        <div style="background: var(--bg-card); padding: 2rem; border-radius: 12px; border: 1px solid var(--border-amber);">
          <p style="color: var(--text-light); font-style: italic; margin-bottom: 1.5rem;">
            "Reserving the mobile watchmaking workshop van for our private estate collection overhaul saved weeks of transport risk. Exemplary service."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-amber); color: #111318; display: flex; align-items: center; justify-content: center; font-weight: 800;">HG</div>
            <div>
              <strong style="color: var(--accent-amber); display: block;">Dr. Henri Gautier</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Industrial Museum Curator</span>
            </div>
          </div>
        </div>

        <div style="background: var(--bg-card); padding: 2rem; border-radius: 12px; border: 1px solid var(--border-amber);">
          <p style="color: var(--text-light); font-style: italic; margin-bottom: 1.5rem;">
            "The DLC diamond coating on the Tactical Stealth GMT survived rigorous field tests without a single micro-scratch. Unmatched durability."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-amber); color: #111318; display: flex; align-items: center; justify-content: center; font-weight: 800;">CS</div>
            <div>
              <strong style="color: var(--accent-amber); display: block;">Clara Sinclair</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Chronometry Guild President</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Industrial Horology Gazette & Chrono Dispatches -->
  <section class="section" id="gazette">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Chrono Dispatches</span>
        <h2 class="section-title">Industrial Horology Gazette</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1609587312208-cea54be969e7?auto=format&fit=crop&w=800&h=600&crop=bottom&mechanic_slot=23" alt="5-Axis CNC Milling of Grade-5 Titanium Tourbillon Cages">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-amber); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 24, 2026 • 1,245 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/mastering-deadbeat-escapements-and-pendulum-mechanics.html">5-Axis CNC Titanium Micro-Milling</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">Micron tolerance machining, carbide tool paths, and titanium tourbillon cages.</p>
            <a href="blog/mastering-deadbeat-escapements-and-pendulum-mechanics.html" style="color: var(--accent-amber); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?auto=format&fit=crop&w=800&h=600&crop=entropy&mechanic_slot=24" alt="DLC Plasma Vapor Deposition in Watch Cases">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-amber); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 20, 2026 • 1,247 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/invar-rod-temperature-compensation-in-longcase-clocks.html">DLC Plasma Vapor Deposition</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">Vickers 4,500 hardness, carbon lattice bonding, and tactical matte black cases.</p>
            <a href="blog/invar-rod-temperature-compensation-in-longcase-clocks.html" style="color: var(--accent-amber); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1565849904461-04a58ad377e0?auto=format&fit=crop&w=800&h=600&crop=faces&mechanic_slot=25" alt="Column-Wheel Monopusher Chronograph Mechanics">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-amber); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 16, 2026 • 1,247 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/fusee-barrel-torque-equalization-and-power-reserve.html">Column-Wheel Monopusher Engines</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">Tactile pusher response, horizontal friction clutches, and power delivery curves.</p>
            <a href="blog/fusee-barrel-torque-equalization-and-power-reserve.html" style="color: var(--accent-amber); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: VIP Chronometry Circle & 4-Column Footer -->
  <section class="section" id="pass" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div style="text-align: center; max-width: 850px; margin: 0 auto; background: var(--bg-card); padding: 3.5rem 2rem; border-radius: 16px; border: 1px solid var(--border-amber);">
        <span class="hero-badge">⚙️ VIP CHRONOMETRY CIRCLE PASS</span>
        <h2 class="font-display" style="color: var(--accent-amber); font-size: 2.5rem; margin-bottom: 1rem;">Join The Industrial Watchmaker Circle</h2>
        <p style="color: var(--text-muted); margin-bottom: 2rem;">Receive priority invitations for mobile workshop van visits, 3D optical movement scans, and limited industrial timepiece machine drops.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you! Your VIP chronometry pass request has been logged by MechanicTimeox concierge.'); this.reset();" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-dark); border: 1px solid var(--border-amber); color: var(--text-light); border-radius: 4px;">
          <button type="submit" class="btn-forge btn-amber">Request Pass</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Mechanic<span>Timeox</span></a>
          <p>MechanicTimeox is Soho New York's premier industrial watchmaking atelier dedicated to raw titanium tourbillons, DLC coated chronographs, micro-machining, and mobile watchmaker van visits.</p>
          <p style="margin-top: 1rem; color: var(--text-muted);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Chrono Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Atelier Focus</h4>
          <p>Curating 5-axis CNC titanium milling, DLC diamond coatings, and mobile watchmaker workshop vans for horology collectors globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 MechanicTimeox Studio. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed for Industrial Mechanical Chronometry & Micro-Engineering.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
