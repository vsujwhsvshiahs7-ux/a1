<?php
// TickClockVan - Concept C: Steampunk Horology & Chrono-Lab
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TickClockVan — Bespoke Clockmaking & Mobile Horologist Atelier</title>
  <meta name="description" content="TickClockVan is Soho New York's premier mobile horology atelier specializing in antique grandfather clock restoration, deadbeat escapement calibration, skeleton timepieces, and mobile horologist van visits.">
  
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
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Marcellus&family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Navigation Header -->
  <header class="tick-nav">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
      <a href="index.php" class="brand-logo">Tick<span>ClockVan</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">Atelier</a></li>
        <li><a href="#creations">Timepieces</a></li>
        <li><a href="#matrix">Escapement Matrix</a></li>
        <li><a href="blog.html">Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="contact.html" class="btn-chrono btn-gold" style="padding: 0.5rem 1.25rem; font-size: 0.75rem;">Book Mobile Horologist</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Tick Clock Hero (Concept C Feature) -->
  <section class="tick-hero" id="hero">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center;">
        <div>
          <span class="hero-badge">⚙️ PRECISION HOROLOGY & MOBILE RESTORATION LAB</span>
          <h1 class="font-display hero-title">
            BESPOKE CLOCKMAKING & <span class="gradient-gold">MOBILE HOROLOGIST VAN</span>
          </h1>
          <p style="color: var(--text-light); font-size: 1.15rem; margin-bottom: 2rem; max-width: 600px;">
            Handcrafting mechanical tourbillon grandfather clocks, deadbeat escapement mantelpieces, and invar pendulum regulators with mobile clockmaker van service.
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <a href="#creations" class="btn-chrono btn-gold">Explore Timepieces</a>
            <a href="#matrix" class="btn-chrono btn-outline-gold">Inspect Escapement Matrix</a>
          </div>
        </div>

        <div style="position: relative; border-radius: 16px; overflow: hidden; border: 1px solid var(--border-gold); box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);">
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=faces&tickclock_slot=15" alt="TickClockVan Mechanical Tourbillon Grandfather Clockwork" style="width: 100%; height: 500px; object-fit: cover;">
          <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 1.5rem; background: linear-gradient(0deg, rgba(13,14,18,0.95) 0%, transparent 100%);">
            <span style="font-size: 0.75rem; color: var(--accent-gold); font-weight: 800; text-transform: uppercase;">Masterpiece Creation</span>
            <h3 style="color: var(--text-light); font-size: 1.3rem;">The Sovereign Tourbillon Grandfather Clock</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: The TickClockVan Story -->
  <section class="section" id="story" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div>
          <span class="section-subtitle">Horological Engineering & Legacy</span>
          <h2 class="section-title" style="font-size: 2.8rem; margin-bottom: 1.5rem; color: var(--accent-gold);">Where Mechanical Precision Meets Mobile Mastery</h2>
          <p style="color: var(--text-light); margin-bottom: 1.25rem; line-height: 1.8;">
            TickClockVan was established at 181 Mercer Street in Soho to revitalize historic clockmaking traditions by pairing Swiss lever escapement physics with mobile restoration technology.
          </p>
          <p style="color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.8;">
            Our mobile horology lab van delivers ultrasonic movement cleaning, gear tooth cutting, and invar pendulum beat error calibration directly to private estates, museums, and executive offices.
          </p>
          <div style="padding: 1.25rem; background: var(--bg-card); border-left: 3px solid var(--accent-gold); border-radius: 4px;">
            <p style="color: var(--accent-gold); font-family: var(--font-heading); font-size: 1.15rem; font-style: italic; margin: 0;">
              "Timekeeping is the architecture of human history—where deadbeat escapement oscillations transform ticking gears into timeless art."
            </p>
          </div>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=top&tickclock_slot=16" alt="TickClockVan Horologist Master Clockmaker Workshop" style="border-radius: 16px; border: 1px solid var(--border-gold);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Signature Timepiece Creations -->
  <section class="section" id="creations">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Mechanical Masterpieces</span>
        <h2 class="section-title">Signature Horology Creations</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
        <!-- Creation 1 -->
        <div class="clock-card">
          <div class="clock-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=center&tickclock_slot=17" alt="The Sovereign Tourbillon Grandfather Clock">
          </div>
          <div class="clock-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">Deadbeat Escapement • Invar Pendulum</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-light);">The Sovereign Tourbillon Grandfather Clock</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              8-day hand-wound movement housed in solid walnut cabinet with flame-blued hands and moonphase dial.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-gold); font-weight: 800; font-size: 1.2rem;">$18,500 USD</span>
              <a href="contact.html" class="btn-chrono btn-gold" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Commission Clock</a>
            </div>
          </div>
        </div>

        <!-- Creation 2 -->
        <div class="clock-card">
          <div class="clock-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=bottom&tickclock_slot=18" alt="The Marine Chronometer Mantelpiece">
          </div>
          <div class="clock-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">Gimballed Brass Case • Fusee Barrel</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-light);">The Marine Chronometer Mantelpiece</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              Precision sea-faring chronometer movement set in mahogany box with solid brass bevelled glass.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-gold); font-weight: 800; font-size: 1.2rem;">$12,400 USD</span>
              <a href="contact.html" class="btn-chrono btn-gold" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Commission Clock</a>
            </div>
          </div>
        </div>

        <!-- Creation 3 -->
        <div class="clock-card">
          <div class="clock-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=entropy&tickclock_slot=19" alt="The Skeleton Glass Wall Regulator">
          </div>
          <div class="clock-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">Visible Gear Train • Carbon Fiber Rod</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-light);">The Skeleton Glass Wall Regulator</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              Contemporary skeleton clockwork showcasing hand-polished brass wheels behind anti-reflective mineral glass.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-gold); font-weight: 800; font-size: 1.2rem;">$9,800 USD</span>
              <a href="contact.html" class="btn-chrono btn-gold" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Commission Clock</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Interactive Escapement & Pendulum Oscillating Gear Matrix -->
  <section class="section" id="matrix" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Horological Mechanics Specs</span>
        <h2 class="section-title" style="color: var(--accent-gold);">Clockwork Craftsmanship Matrix</h2>
        <p style="color: var(--text-muted); max-width: 600px; margin: 0.5rem auto 0;">
          Select an escapement mechanism, pendulum alloy, or mobile van service below to inspect horology details:
        </p>
      </div>

      <div class="escapement-matrix-card" style="max-width: 900px; margin: 0 auto; text-align: center;">
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="gear-tab-btn active" data-gear="deadbeat-escapement">Graham Deadbeat</button>
          <button class="gear-tab-btn" data-gear="invar-pendulum">Invar Pendulum</button>
          <button class="gear-tab-btn" data-gear="mainspring-torque">Fusee Barrel</button>
          <button class="gear-tab-btn" data-gear="mobile-van-atelier">Mobile Van Lab</button>
        </div>

        <div id="escapement-matrix-display">
          <div style="background: var(--bg-card); padding: 2rem; border-radius: 12px; border: 1px solid var(--border-gold); margin-top: 1.5rem;">
            <span style="display: inline-block; padding: 0.25rem 0.75rem; background: var(--accent-gold); color: #0D0E12; font-size: 0.75rem; font-weight: 800; border-radius: 4px; text-transform: uppercase; margin-bottom: 0.75rem;">Recoil-Free Oscillation • 3,600 Beats per Hour</span>
            <h3 style="font-size: 1.5rem; color: var(--text-light); margin-bottom: 0.5rem;">Graham Deadbeat Anchor Escapement</h3>
            <p style="color: var(--accent-gold); font-weight: 800; font-size: 1.1rem; margin-bottom: 0.75rem;">⚙️ Horology Spec Pairing: Featured on The Sovereign Tourbillon Grandfather Clock</p>
            <p style="color: var(--text-muted); font-size: 0.95rem;">Engineered by George Graham in 1715, this precision escapement eliminates pendulum recoil, ensuring uniform impulse delivery across long-case grandfather clocks.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Live Mobile Horologist Van & Horology Studio Gallery -->
  <section class="section" id="gallery">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Visual Atmosphere</span>
        <h2 class="section-title">Mobile Atelier & Horology Gallery</h2>
      </div>

      <div class="horology-gallery">
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=faces&tickclock_slot=20" alt="Master Horologist Calibrating Grandfather Clock Movement">
        </div>
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=top&tickclock_slot=21" alt="Gear Cutting Lathe and Brass Wheels Workshop">
        </div>
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=center&tickclock_slot=22" alt="Mobile Horologist Van Private Estate Tuning">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: International Horological Society & Connoisseur Reviews -->
  <section class="section" id="reviews" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Acclaim & Endorsements</span>
        <h2 class="section-title" style="color: var(--accent-gold);">Global Horological Praise</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <div style="background: var(--bg-card); padding: 2rem; border-radius: 16px; border: 1px solid var(--border-gold);">
          <p style="color: var(--text-light); font-style: italic; margin-bottom: 1.5rem;">
            "The mobile clockmaker van restored our 18th-century English longcase clock to within 2 seconds of variation per week. Extraordinary craftsmanship."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-gold); color: #0D0E12; display: flex; align-items: center; justify-content: center; font-weight: 800;">AL</div>
            <div>
              <strong style="color: var(--accent-gold); display: block;">Lord Arthur Sterling</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Antique Clock Collector & Historian</span>
            </div>
          </div>
        </div>

        <div style="background: var(--bg-card); padding: 2rem; border-radius: 16px; border: 1px solid var(--border-gold);">
          <p style="color: var(--text-light); font-style: italic; margin-bottom: 1.5rem;">
            "Having TickClockVan's mobile lab arrive with gear cutting lathes allowed our museum to restore marine chronometers without transport risk."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-gold); color: #0D0E12; display: flex; align-items: center; justify-content: center; font-weight: 800;">HG</div>
            <div>
              <strong style="color: var(--accent-gold); display: block;">Dr. Henri Gautier</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Museum Horological Curator</span>
            </div>
          </div>
        </div>

        <div style="background: var(--bg-card); padding: 2rem; border-radius: 16px; border: 1px solid var(--border-gold);">
          <p style="color: var(--text-light); font-style: italic; margin-bottom: 1.5rem;">
            "Bespoke deadbeat escapements combined with invar pendulum rods make TickClockVan the ultimate destination for mechanical timepiece connoisseurs."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-gold); color: #0D0E12; display: flex; align-items: center; justify-content: center; font-weight: 800;">CS</div>
            <div>
              <strong style="color: var(--accent-gold); display: block;">Clara Sinclair</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">President, Horology Society</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Horological Gazette & Chrono Dispatches -->
  <section class="section" id="gazette">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Chrono Dispatches</span>
        <h2 class="section-title">Horological Gazette</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=bottom&tickclock_slot=23" alt="Mastering Deadbeat Escapements & Pendulum Mechanics">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 24, 2026 • 1,240 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/mastering-deadbeat-escapements-and-pendulum-mechanics.html">Deadbeat Escapements & Pendulums</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">George Graham anchor physics, recoil elimination, and impulse geometry.</p>
            <a href="blog/mastering-deadbeat-escapements-and-pendulum-mechanics.html" style="color: var(--accent-gold); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=entropy&tickclock_slot=24" alt="Invar Rod Temperature Compensation in Longcase Clocks">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 20, 2026 • 1,242 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/invar-rod-temperature-compensation-in-longcase-clocks.html">Invar Pendulum Temperature Compensation</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">Nickel-steel alloy thermal stability and seasonal rate variation control.</p>
            <a href="blog/invar-rod-temperature-compensation-in-longcase-clocks.html" style="color: var(--accent-gold); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=faces&tickclock_slot=25" alt="Fusee Barrel Torque Equalization & Power Reserve">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 16, 2026 • 1,238 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/fusee-barrel-torque-equalization-and-power-reserve.html">Fusee Barrel Torque Equalization</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">Conical fusee gears, mainspring tension curves, and 8-day power reserve.</p>
            <a href="blog/fusee-barrel-torque-equalization-and-power-reserve.html" style="color: var(--accent-gold); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: VIP Horology Circle & Accordion Footer -->
  <section class="section" id="pass" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div style="text-align: center; max-width: 850px; margin: 0 auto; background: var(--bg-card); padding: 3.5rem 2rem; border-radius: 20px; border: 1px solid var(--border-gold);">
        <span class="hero-badge">⚙️ VIP HOROLOGY CIRCLE PASS</span>
        <h2 class="font-display" style="color: var(--accent-gold); font-size: 2.5rem; margin-bottom: 1rem;">Join The Horologist Society</h2>
        <p style="color: var(--text-muted); margin-bottom: 2rem;">Receive priority invitations for private mobile clockmaker van visits, grandfather clock beat tuning, and rare antique timepiece drops.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you! Your VIP horology pass request has been logged by TickClockVan concierge.'); this.reset();" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-dark); border: 1px solid var(--border-gold); color: var(--text-light); border-radius: 4px;">
          <button type="submit" class="btn-chrono btn-gold">Request Pass</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Tick<span>ClockVan</span></a>
          <p>TickClockVan is Soho New York's premier mobile horology atelier dedicated to antique grandfather clock restoration, deadbeat escapement calibration, skeleton timepieces, and mobile horologist van visits.</p>
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
            <li><a href="blog.html">Horology Journal</a></li>
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
          <p>Curating Swiss lever escapements, invar pendulums, and mobile clockmaker restoration vans for horology collectors globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 TickClockVan Studio. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed for Luxury Horology & Precision Clockwork Restoration.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
