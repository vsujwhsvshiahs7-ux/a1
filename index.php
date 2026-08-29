<?php
// TickClockVan - Concept C: Steampunk Horology & Wristwatch Chrono-Lab
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TickClockVan — Bespoke Wristwatch Craftsmanship & Mobile Watchmaker Atelier</title>
  <meta name="description" content="TickClockVan is Soho New York's premier mobile watchmaker atelier specializing in luxury mechanical wristwatches, tourbillon movements, chronograph restoration, and mobile watchmaker van visits.">
  
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
        <li><a href="#creations">Watches</a></li>
        <li><a href="#matrix">Movement Matrix</a></li>
        <li><a href="blog.html">Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="contact.html" class="btn-chrono btn-gold" style="padding: 0.5rem 1.25rem; font-size: 0.75rem;">Book Mobile Watchmaker</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Tick Clock Hero (Wristwatch Horology) -->
  <section class="tick-hero" id="hero">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center;">
        <div>
          <span class="hero-badge">⌚ PRECISION WRISTWATCH HOROLOGY & MOBILE LAB</span>
          <h1 class="font-display hero-title">
            BESPOKE WRISTWATCHES & <span class="gradient-gold">MOBILE WATCHMAKER ATELIER</span>
          </h1>
          <p style="color: var(--text-light); font-size: 1.15rem; margin-bottom: 2rem; max-width: 600px;">
            Handcrafting mechanical tourbillon wristwatches, column-wheel chronographs, and skeleton watch movements with private mobile watchmaker van fitting lounge service.
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <a href="#creations" class="btn-chrono btn-gold">Explore Wristwatches</a>
            <a href="#matrix" class="btn-chrono btn-outline-gold">Inspect Movement Matrix</a>
          </div>
        </div>

        <div style="position: relative; border-radius: 16px; overflow: hidden; border: 1px solid var(--border-gold); box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);">
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=faces&watch_fresh=15" alt="TickClockVan Mechanical Tourbillon Wristwatch Movement" style="width: 100%; height: 500px; object-fit: cover;">
          <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 1.5rem; background: linear-gradient(0deg, rgba(13,14,18,0.95) 0%, transparent 100%);">
            <span style="font-size: 0.75rem; color: var(--accent-gold); font-weight: 800; text-transform: uppercase;">Flagship Watch Creation</span>
            <h3 style="color: var(--text-light); font-size: 1.3rem;">The Sovereign Flying Tourbillon Chronograph</h3>
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
          <span class="section-subtitle">Wristwatch Horological Mastery</span>
          <h2 class="section-title" style="font-size: 2.8rem; margin-bottom: 1.5rem; color: var(--accent-gold);">Where Watchmaking Art Meets Mobile Hospitality</h2>
          <p style="color: var(--text-light); margin-bottom: 1.25rem; line-height: 1.8;">
            TickClockVan was established at 181 Mercer Street in Soho to reimagine luxury watchmaking by uniting Swiss lever escapement mechanics with mobile watchmaker atelier vans.
          </p>
          <p style="color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.8;">
            Our mobile watch restoration van delivers 3D movement diagnostics, custom watch strap fitting, and balance wheel regulation directly to private residences, luxury hotels, and executive suites.
          </p>
          <div style="padding: 1.25rem; background: var(--bg-card); border-left: 3px solid var(--accent-gold); border-radius: 4px;">
            <p style="color: var(--accent-gold); font-family: var(--font-heading); font-size: 1.15rem; font-style: italic; margin: 0;">
              "Wristwatch horology is micro-engineering elevated to high art—where 300 hand-finished components dance in rhythmic precision on your wrist."
            </p>
          </div>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=top&watch_fresh=16" alt="TickClockVan Master Watchmaker Loupe Workshop" style="border-radius: 16px; border: 1px solid var(--border-gold);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Signature Timepiece Creations -->
  <section class="section" id="creations">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Mechanical Wristwatch Creations</span>
        <h2 class="section-title">Signature Horology Timepieces</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
        <!-- Creation 1 -->
        <div class="clock-card">
          <div class="clock-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=center&watch_fresh=17" alt="The Sovereign Flying Tourbillon Chronograph">
          </div>
          <div class="clock-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">60-Second Tourbillon • Alligator Strap</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-light);">The Sovereign Tourbillon Wristwatch</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              Hand-wound mechanical tourbillon watch featuring 72-hour power reserve, flame-blued hands, and rose gold case.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-gold); font-weight: 800; font-size: 1.2rem;">$24,500 USD</span>
              <a href="contact.html" class="btn-chrono btn-gold" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Reserve Watch</a>
            </div>
          </div>
        </div>

        <!-- Creation 2 -->
        <div class="clock-card">
          <div class="clock-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=bottom&watch_fresh=18" alt="The Heritage Monopusher Chronograph">
          </div>
          <div class="clock-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">Column-Wheel • Hand-Stitched Leather</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-light);">The Monopusher Chronograph Watch</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              Vintage-inspired single-pusher chronograph with enamel dial, tachymeter scale, and sapphire exhibition back.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-gold); font-weight: 800; font-size: 1.2rem;">$16,800 USD</span>
              <a href="contact.html" class="btn-chrono btn-gold" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Reserve Watch</a>
            </div>
          </div>
        </div>

        <!-- Creation 3 -->
        <div class="clock-card">
          <div class="clock-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=entropy&watch_fresh=19" alt="The Skeleton Automatic GMT Timepiece">
          </div>
          <div class="clock-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">Skeleton Movement • Dual Time Zone</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-light);">The Skeleton GMT Automatic Watch</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              Fully openworked mechanical wristwatch showcasing gear train wheel movement and 24-hour second time zone ring.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-gold); font-weight: 800; font-size: 1.2rem;">$13,500 USD</span>
              <a href="contact.html" class="btn-chrono btn-gold" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Reserve Watch</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Interactive Watch Movement Matrix -->
  <section class="section" id="matrix" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Watch Mechanics Specs</span>
        <h2 class="section-title" style="color: var(--accent-gold);">Watchmaking Craftsmanship Matrix</h2>
        <p style="color: var(--text-muted); max-width: 600px; margin: 0.5rem auto 0;">
          Select a watch movement, tourbillon cage, balance spring, or mobile watchmaker van service below to inspect horology details:
        </p>
      </div>

      <div class="escapement-matrix-card" style="max-width: 900px; margin: 0 auto; text-align: center;">
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="gear-tab-btn active" data-gear="deadbeat-escapement">Swiss Tourbillon</button>
          <button class="gear-tab-btn" data-gear="invar-pendulum">Free-Sprung Balance</button>
          <button class="gear-tab-btn" data-gear="mainspring-torque">Column-Wheel</button>
          <button class="gear-tab-btn" data-gear="mobile-van-atelier">Mobile Watchmaker Van</button>
        </div>

        <div id="escapement-matrix-display">
          <div style="background: var(--bg-card); padding: 2rem; border-radius: 12px; border: 1px solid var(--border-gold); margin-top: 1.5rem;">
            <span style="display: inline-block; padding: 0.25rem 0.75rem; background: var(--accent-gold); color: #0D0E12; font-size: 0.75rem; font-weight: 800; border-radius: 4px; text-transform: uppercase; margin-bottom: 0.75rem;">60-Second Cage Rotation • 28,800 vph Frequency</span>
            <h3 style="font-size: 1.5rem; color: var(--text-light); margin-bottom: 0.5rem;">Titanium Flying Tourbillon Escapement</h3>
            <p style="color: var(--accent-gold); font-weight: 800; font-size: 1.1rem; margin-bottom: 0.75rem;">⌚ Watch Spec Pairing: Featured on The Sovereign Tourbillon Wristwatch</p>
            <p style="color: var(--text-muted); font-size: 0.95rem;">Ultra-lightweight titanium tourbillon cage weighing just 0.28 grams that negates gravitational errors across all 6 wrist positions.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Live Mobile Horologist Van & Watchmaking Gallery -->
  <section class="section" id="gallery">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Visual Atmosphere</span>
        <h2 class="section-title">Mobile Atelier & Watchmaking Gallery</h2>
      </div>

      <div class="horology-gallery">
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=faces&watch_fresh=20" alt="Master Watchmaker Inspecting Watch Movement under Loupe">
        </div>
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=top&watch_fresh=21" alt="Mechanical Watch Movement Gear Assembly Workbench">
        </div>
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=center&watch_fresh=22" alt="Mobile Watchmaker Van Fitting Lounge Experience">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: International Horological Society & Connoisseur Reviews -->
  <section class="section" id="reviews" style="background: var(--bg-surface); color: var(--text-light);">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Watchmaker Acclaim</span>
        <h2 class="section-title" style="color: var(--accent-gold);">Global Watch Connoisseur Endorsements</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <div style="background: var(--bg-card); padding: 2rem; border-radius: 16px; border: 1px solid var(--border-gold);">
          <p style="color: var(--text-light); font-style: italic; margin-bottom: 1.5rem;">
            "Having the TickClockVan mobile watchmaker lab park outside our estate allowed our vintage chronograph movement to be serviced and regulated to COSC accuracy."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-gold); color: #0D0E12; display: flex; align-items: center; justify-content: center; font-weight: 800;">AL</div>
            <div>
              <strong style="color: var(--accent-gold); display: block;">Lord Arthur Sterling</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Luxury Watch Collector</span>
            </div>
          </div>
        </div>

        <div style="background: var(--bg-card); padding: 2rem; border-radius: 16px; border: 1px solid var(--border-gold);">
          <p style="color: var(--text-light); font-style: italic; margin-bottom: 1.5rem;">
            "The level of hand finishing on the Sovereign Flying Tourbillon bridge bevels rivals the finest Geneva watchmakers. Pure horological perfection."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-gold); color: #0D0E12; display: flex; align-items: center; justify-content: center; font-weight: 800;">HG</div>
            <div>
              <strong style="color: var(--accent-gold); display: block;">Dr. Henri Gautier</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Watchmaking Historian & Journalist</span>
            </div>
          </div>
        </div>

        <div style="background: var(--bg-card); padding: 2rem; border-radius: 16px; border: 1px solid var(--border-gold);">
          <p style="color: var(--text-light); font-style: italic; margin-bottom: 1.5rem;">
            "The mobile van lounge custom watch strap fitting service delivered a bespoke hand-stitched alligator strap tailored perfectly to my wrist."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-gold); color: #0D0E12; display: flex; align-items: center; justify-content: center; font-weight: 800;">CS</div>
            <div>
              <strong style="color: var(--accent-gold); display: block;">Clara Sinclair</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Executive Watch Stylist</span>
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
        <h2 class="section-title">Wristwatch Horology Gazette</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=bottom&watch_fresh=23" alt="Mastering Tourbillon Watch Movement Physics">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 24, 2026 • 1,245 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/mastering-deadbeat-escapements-and-pendulum-mechanics.html">Tourbillon Wristwatch Escapement Mechanics</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">Breguet tourbillon physics, gravity error compensation, and balance wheel regulation.</p>
            <a href="blog/mastering-deadbeat-escapements-and-pendulum-mechanics.html" style="color: var(--accent-gold); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=entropy&watch_fresh=24" alt="Free-Sprung Balance Spring Regulation in Wristwatches">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 20, 2026 • 1,247 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/invar-rod-temperature-compensation-in-longcase-clocks.html">Free-Sprung Balance Spring Regulation</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">Breguet overcoil balance springs, inertia poising screws, and rate stability.</p>
            <a href="blog/invar-rod-temperature-compensation-in-longcase-clocks.html" style="color: var(--accent-gold); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1560060141-7b9018741ced?auto=format&fit=crop&w=800&h=600&crop=faces&watch_fresh=25" alt="Column-Wheel Chronograph Mechanics & Power Reserve">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-gold); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 16, 2026 • 1,247 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/fusee-barrel-torque-equalization-and-power-reserve.html">Column-Wheel Chronograph Mechanics</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">Pusher feel, horizontal clutch engagement, and mainspring torque reserves.</p>
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
        <span class="hero-badge">⌚ VIP WATCH COLLECTOR CIRCLE PASS</span>
        <h2 class="font-display" style="color: var(--accent-gold); font-size: 2.5rem; margin-bottom: 1rem;">Join The Horologist Watch Circle</h2>
        <p style="color: var(--text-muted); margin-bottom: 2rem;">Receive priority invitations for private mobile watchmaker van visits, 3D movement diagnostics, and limited tourbillon watch drops.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you! Your VIP watch pass request has been logged by TickClockVan concierge.'); this.reset();" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
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
          <p>TickClockVan is Soho New York's premier mobile watchmaker atelier dedicated to luxury mechanical wristwatches, tourbillon movements, chronograph restoration, and mobile watchmaker van visits.</p>
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
            <li><a href="blog.html">Watch Journal</a></li>
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
          <p>Curating Swiss tourbillon movements, free-sprung balance springs, and mobile watchmaker restoration vans for watch collectors globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 TickClockVan Studio. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed for Luxury Wristwatch Horology & Precision Watch Restoration.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
