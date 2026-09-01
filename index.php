<?php
$site_name = "Mechanic Time Ox";
$site_tagline = "Haute Horology & Master Watchmaking Manufacture";
$official_address = "181 Mercer Street, New York, NY 10012, United States";
$official_phone = "+1-888-777-5845";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mechanic Time Ox | Haute Horology & Master Watchmaking Manufacture</title>
  <meta name="description" content="Discover Mechanic Time Ox: bespoke mechanical chronometers, hand-anglage finishing, tourbillons, rose engine guilloché dials, and watchmaking atelier in Manhattan.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='%230B0E14' stroke='%23D4AF37' stroke-width='4'/><circle cx='50' cy='50' r='30' fill='none' stroke='%23E5A988' stroke-width='2'/><line x1='50' y1='50' x2='50' y2='25' stroke='%23D4AF37' stroke-width='3'/><line x1='50' y1='50' x2='68' y2='50' stroke='%23F1F5F9' stroke-width='2'/><circle cx='50' cy='50' r='4' fill='%23D4AF37'/></svg>">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>
  <header class="site-header">
    <div class="container">
      <div class="header-inner">
        <a href="index.php" class="brand-container">
          <div class="brand-logo-icon">🦊</div>
          <div class="brand-text-wrap">
            <span class="brand-logo-text"><?php echo $site_name; ?></span>
            <span class="brand-tagline"><?php echo $site_tagline; ?></span>
          </div>
        </a>
        <nav class="main-nav">
          <a href="index.php" class="nav-link active">Main</a>
          <a href="about.html" class="nav-link">Manufacture</a>
          <a href="blog.html" class="nav-link">Horology Journal</a>
          <a href="contact.html" class="nav-link">Commission</a>
        </nav>
        <div class="nav-cta"><a href="contact.html" class="btn-watch btn-gold">Commission Caliber</a></div>
        <button class="mobile-toggle" aria-label="Toggle Navigation"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>
  <main>
    <!-- Section 1: Hero Showcase -->
    <section class="hero-watch">
      <div class="container">
        <div class="hero-grid">
          <div>
            <span class="section-tag">Haute Horology & Chronometric Art</span>
            <h1 class="hero-title">The Sacred Mechanics of <span>Master Timepieces.</span></h1>
            <p class="hero-subtitle">
              Crafting bespoke hand-finished mechanical chronometers, multi-axis tourbillons, and engine-turned guilloché dials in our private Manhattan watchmaking atelier.
            </p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap;">
              <a href="contact.html" class="btn-watch btn-gold">Commission Bespoke Timepiece</a>
              <a href="about.html" class="btn-watch btn-outline">Explore Caliber Craft</a>
            </div>
            <div class="hero-stats">
              <div class="stat-item"><h4>&plusmn;1 Sec/Day</h4><p>Chronometric Isochronism</p></div>
              <div class="stat-item"><h4>100% Hand Anglage</h4><p>Mirror Beveled Edges</p></div>
              <div class="stat-item"><h4>Bespoke</h4><p>Manhattan Atelier Commissions</p></div>
            </div>
          </div>
          <div class="hero-img-box">
            <img src="assets/images/hero-mechanical-watch.jpg" alt="Macro skeleton mechanical watch dial with visible tourbillon gear wheels and blued steel hands">
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2: Three Pillars of Haute Horology -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Horological Pillars</span>
          <h2>The Architecture of Mechanical Time</h2>
          <p>Every timepiece unifies frictionless escapement mechanics, meticulous hand-finishing anglage, and kinetic tourbillon regulation.</p>
        </div>
        <div class="grid-3">
          <div class="watch-card">
            <div class="card-img-wrap"><img src="assets/images/craft-coaxial-escapement.jpg" alt="Macro view of precision co-axial escapement balance wheel" loading="lazy"><span class="card-tag-pill">Isochronism</span></div>
            <div class="card-body"><h3>Radial Escapement Kinetics</h3><p>Delivering tangential impulses that eliminate sliding friction, preserving lubrication and chronometric accuracy over decades.</p><a href="about.html" class="card-link">Explore Escapements &rarr;</a></div>
          </div>
          <div class="watch-card">
            <div class="card-img-wrap"><img src="assets/images/craft-hand-anglage.jpg" alt="Master watchmaker hand-beveling movement bridges with gentian wood pegs" loading="lazy"><span class="card-tag-pill">Hand Finishing</span></div>
            <div class="card-body"><h3>Hand Anglage & Black Polish</h3><p>45-degree hand-filed chamfers and specular black mirror polish on steel bridges, executed under high-magnification microscopes.</p><a href="about.html" class="card-link">Explore Hand Finishing &rarr;</a></div>
          </div>
          <div class="watch-card">
            <div class="card-img-wrap"><img src="assets/images/craft-tourbillon-cage.jpg" alt="Intricate multi-axis tourbillon titanium cage rotating within movement" loading="lazy"><span class="card-tag-pill">Tourbillon</span></div>
            <div class="card-body"><h3>Multi-Axis Tourbillons</h3><p>Rotating balance assemblies that average out gravitational rate deviations in vertical wrist positions for uncompromising precision.</p><a href="about.html" class="card-link">Explore Tourbillons &rarr;</a></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3: Signature Caliber Collection -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Caliber Portfolio</span>
          <h2>The Master Timepiece Collection</h2>
          <p>Individually numbered chronometers regulated to observatory chronometer standards in our Manhattan workshop.</p>
        </div>
        <div class="grid-3">
          <div class="watch-card"><div class="card-body"><h3>The Chronomètre Souverain</h3><p>Twin-barrel 72-hour power reserve movement featuring a free-sprung gyromax balance and solid red gold mainplates.</p><a href="contact.html" class="card-link">Request Allocation &rarr;</a></div></div>
          <div class="watch-card"><div class="card-body"><h3>The Tri-Axial Tourbillon</h3><p>A titanium tourbillon cage completing nested rotations every 30, 60, and 120 seconds for total gravitational neutralization.</p><a href="contact.html" class="card-link">Request Allocation &rarr;</a></div></div>
          <div class="watch-card"><div class="card-body"><h3>The Ultra-Thin Micro-Rotor</h3><p>A 2.8mm caliber powered by a solid platinum off-centered micro-rotor, showcasing hand-turned Clous de Paris guilloché.</p><a href="contact.html" class="card-link">Request Allocation &rarr;</a></div></div>
        </div>
      </div>
    </section>

    <!-- Section 4: Interactive Caliber Configurator -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Interactive Watch Studio</span>
          <h2>Configure Your Bespoke Caliber</h2>
          <p>Select your preferred escapement architecture, finishing anglage tier, and dial guilloché pattern.</p>
        </div>
        <div class="interactive-watch-tool">
          <div class="watch-selector-grid">
            <div class="watch-option-card active" data-caliber="tourbillon"><h4>Tri-Axial Tourbillon</h4><p>Multi-axis gravitational compensation, 21,600 vph, titanium cage.</p></div>
            <div class="watch-option-card" data-caliber="coaxial"><h4>Co-Axial Chronometer</h4><p>Radial impulse kinematics, free-sprung balance, zero sliding friction.</p></div>
            <div class="watch-option-card" data-caliber="guilloche"><h4>Rose Engine Guilloché</h4><p>Hand-turned silver dial, Clous de Paris, flame-blued hands.</p></div>
          </div>
          <div class="watch-result-box">
            <div>
              <div id="watch-custom-badge" style="color: var(--color-gold); font-weight: 700; font-size: 0.85rem; margin-bottom: 6px; letter-spacing: 0.05em; text-transform: uppercase;">Caliber Specification: 21,600 vph &bull; 72-Hour Power Reserve &bull; Hand-Polished Anglage</div>
              <h3 id="watch-custom-title" style="margin-bottom: 8px;">The Flying Tri-Axial Tourbillon Caliber</h3>
              <p id="watch-custom-desc" style="color: var(--color-text-muted); font-size: 0.95rem;">Hand-finished titanium cage rotating across 3 axes to counteract gravitational perturbation on the balance spring.</p>
            </div>
            <a href="contact.html" class="btn-watch btn-gold" style="white-space: nowrap;">Commission This Caliber</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 5: The Master Watchmaker's Manifesto -->
    <section class="section">
      <div class="container">
        <div class="grid-2">
          <div>
            <span class="section-tag">Horological Manifesto</span>
            <h2 style="font-size: 2.3rem; margin-bottom: 20px;">Master Horologist: The Soul of Mechanical Precision</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 16px;">
              In an era of disposable digital screens, a mechanical timepiece represents the ultimate triumph of human mechanical ingenuity: a miniature kinetic engine beating 28,800 times an hour, powered solely by a coiled spring.
            </p>
            <p style="color: var(--color-text-muted); margin-bottom: 24px;">
              At Mechanic Time Ox, we honor the unhurried discipline of traditional Swiss and Saxon watchmaking, executing every bevel, polish, and regulation by hand in our SoHo atelier:
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 28px;">
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-gold); font-size: 1.1rem; margin-bottom: 4px;">⚙️ Free-Sprung Balances</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Micro-metric gold inertia screws ensuring stable chronometric rate consistency.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-gold); font-size: 1.1rem; margin-bottom: 4px;">✨ Specular Black Polish</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Zinc plate diamond paste lapping creating optical black reflection angles.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-gold); font-size: 1.1rem; margin-bottom: 4px;">🌀 Rose Engine Lathes</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Manual antique geometric lathes engraving solid sterling silver dial blanks.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-gold); font-size: 1.1rem; margin-bottom: 4px;">🏛️ Manhattan Atelier</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Private watchmaker workbenches and client commissioning suites at 181 Mercer St.</p>
              </div>
            </div>
            <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
              <a href="about.html" class="btn-watch btn-gold">Read Atelier Story &rarr;</a>
              <a href="contact.html" class="btn-watch btn-outline">Book Private Viewing</a>
            </div>
          </div>
          <div class="hero-img-box" style="position: relative;">
            <img src="assets/images/about-watchmaker-atelier.jpg" alt="Master horologist working with loupe and precision tweezers at wooden workbench" loading="lazy">
            <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(11, 14, 20, 0.92); backdrop-filter: blur(10px); padding: 14px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
              <span style="font-size: 0.8rem; color: var(--color-gold); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em;">Manhattan Watch Atelier</span>
              <span style="font-size: 0.78rem; color: var(--color-text-muted);">SoHo &bull; 181 Mercer St</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 6: Verified Horological Benchmarks -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Manufacturing Benchmarks</span>
          <h2>Haute Horology Standards</h2>
          <p>Independently tested for chronometric rate stability, thermal isochronism, and flawless artisanal anglage finishing.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-gold); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">&plusmn;1.0s</div>
            <h4 style="margin-bottom: 12px;">Daily Rate Precision</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Tested across six positions and three temperatures exceeding COSC chronometer criteria.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-gold); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">100%</div>
            <h4 style="margin-bottom: 12px;">Hand-Beveled Anglage</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Every bridge, lever, and screw sink is hand-chamfered with gentian wood and diamond paste.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-gold); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">28,800</div>
            <h4 style="margin-bottom: 12px;">Vibrations Per Hour</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">4Hz high-beat balance cadence for smooth seconds hand glide and superior shock resilience.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 7: Manhattan Salon Lookbook -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Manhattan Atelier Salon</span>
          <h2>The Mercer Street Watchmaking Gallery</h2>
          <p>Experience quiet consultation suites, live watchmaker workbenches, and private commissioning lounges in SoHo.</p>
        </div>
        <div style="border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-border); position: relative;">
          <img src="assets/images/lookbook-mercer-salon.jpg" alt="Interior of modern luxury watchmaking atelier lounge in Manhattan with leather armchairs and showcases" style="width: 100%; height: 500px; object-fit: cover;">
          <div style="position: absolute; bottom: 32px; left: 32px; background: rgba(11, 14, 20, 0.92); backdrop-filter: blur(12px); padding: 24px 32px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); max-width: 500px;">
            <h3 style="font-size: 1.35rem; margin-bottom: 8px; color: var(--color-gold);">The Mercer Watchmaking Suite</h3>
            <p style="color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 16px;">Private timepiece commissions, movement assembly viewings, and bespoke horology consultations.</p>
            <a href="blog.html" class="card-link">Read Horology Treatises &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 8: Connoisseur & Collector Testimonials -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Collector Testimonials</span>
          <h2>Reflections from Discerning Connoisseurs</h2>
          <p>Independent collectors, horology critics, and master watchmakers on Mechanic Time Ox.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-gold); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #F1F5F9; font-style: italic; margin-bottom: 20px;">"The hand-anglage on my Chronomètre Souverain is nothing short of breathtaking. Under a 10x loupe, the interior angles and black polish rival the finest independent masters in Geneva."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Lord Henrik Montgomery</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Horology Collector & Patron, London</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-gold); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #F1F5F9; font-style: italic; margin-bottom: 20px;">"The co-axial radial escapement maintains incredible rate stability. After six months on the wrist, it has gained less than three seconds total."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Dr. Julian Sterling</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Precision Mechanical Engineer, Zurich</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-gold); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #F1F5F9; font-style: italic; margin-bottom: 20px;">"The private commissioning session at 181 Mercer Street was an unforgettable experience. Selecting the guilloché pattern directly with the master watchmaker made the piece uniquely mine."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Maximilian Laurent</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Architectural Designer & Horology Patron, New York</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 9: Private Caliber Commissioning Consultation -->
    <section class="section">
      <div class="container container-narrow">
        <div style="background: radial-gradient(circle at center, rgba(212, 175, 55, 0.2), transparent 70%), var(--color-card-bg); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 60px 48px; text-align: center;">
          <span class="section-tag">Private Horological Commission</span>
          <h2 style="font-size: 2.3rem; margin-bottom: 16px;">Commission Your Master Timepiece</h2>
          <p style="color: var(--color-text-muted); max-width: 560px; margin: 0 auto 32px;">
            Visit our Manhattan atelier at 181 Mercer Street, New York, NY 10012 to discuss custom movement complications, hand-engraved guilloché motifs, and bespoke precious metal allocations.
          </p>
          <div style="display: flex; gap: 12px; justify-content: center; max-width: 500px; margin: 0 auto 24px; flex-wrap: wrap;">
            <input type="email" placeholder="Enter your private email" style="flex: 1; min-width: 240px; padding: 14px 18px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); background: var(--color-subtle-bg); color: var(--color-text-main); font-size: 0.95rem;">
            <a href="contact.html" class="btn-watch btn-gold">Request Allocation</a>
          </div>
          <p style="font-size: 0.8rem; color: #64748B;">Direct atelier appointments welcomed at +1-888-777-5845.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="brand-container" style="margin-bottom: 1.2rem;">
            <div class="brand-logo-icon">🦊</div>
            <div class="brand-text-wrap">
              <span class="brand-logo-text"><?php echo $site_name; ?></span>
              <span class="brand-tagline"><?php echo $site_tagline; ?></span>
            </div>
          </div>
          <p style="font-size: 0.92rem; color: #8A99AD; line-height: 1.8;">
            Crafting bespoke hand-finished mechanical chronometers, multi-axis tourbillons, and engine-turned guilloché dials in our private Manhattan watchmaking atelier.
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul class="footer-links">
            <li><a href="index.php">Main</a></li>
            <li><a href="about.html">Manufacture</a></li>
            <li><a href="blog.html">Horology Journal</a></li>
            <li><a href="contact.html">Commission</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal & Policies</h4>
          <ul class="footer-links">
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Horological Disclaimer</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Manhattan Atelier</h4>
          <div class="footer-contact-item"><span class="icon">📍</span><span><?php echo $official_address; ?></span></div>
          <div class="footer-contact-item"><span class="icon">📞</span><span><?php echo $official_phone; ?></span></div>
        </div>
      </div>
      <div class="footer-bottom">
        <div>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All Rights Reserved.</div>
        <div>Haute Horology &bull; Master Mechanical Chronometry &bull; Hand Anglage Finishing</div>
      </div>
    </div>
  </footer>
  <script src="assets/js/main.js"></script>
</body>
</html>