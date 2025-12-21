<?php
/**
 * Front page template pulling the landing content from the static index.html.
 */
get_header();
$hero_image = get_theme_file_uri('/assets/images/herobackground02.png');
?>

<main>
  <section class="hero" id="home">
    <div class="container hero-grid hero-bento">
      <div class="hero-copy">
        <p class="eyebrow">Licensed charitable raffle</p>
        <h1 class="hero-title">Luckybegood Dog Rescue Foundation 50/50 Raffle</h1>
        <p class="hero-sub">Licensed charitable raffle operated under AGLC Raffle Licence #662991. Issued by Alberta Gaming, Liquor &amp; Cannabis. Winner receives 50% of ticket sales for this licensed draw.</p>
        <div class="hero-prize-stack">
          <span class="hero-prize">$3,780 Current Licensed Draw Amount</span>
          <span class="hero-prize-sub">(50% of ticket sales to date)</span>
        </div>
        <div class="hero-chips">
          <span class="pill accent"><i class="fa-solid fa-certificate"></i> AGLC Licence #662991</span>
          <span class="pill"><i class="fa-solid fa-ticket"></i> 995 tickets total</span>
          <span class="pill"><i class="fa-solid fa-calendar-day"></i> Draw: Mar 30, 2026 • 7:00 PM MT</span>
          <span class="pill"><i class="fa-solid fa-bolt"></i> Winner takes 50% of ticket sales</span>
        </div>
        <div class="hero-cta">
          <a href="#" class="btn primary" data-signup-btn>Join the draw</a>
          <a href="#how" class="btn ghost">How it works</a>
        </div>
        <p class="hero-sub" style="font-size:0.95rem; margin-top:0.4rem;">Must be 18+ and physically located in Alberta at time of purchase.</p>
        <div class="hero-plate">
          <p class="plate-title">Licence &amp; operator</p>
          <p>Operator / Licensee: Luckybegood Dog Rescue Foundation • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC).</p>
          <p>AGLC Raffle Licence #662991 • luckybegood is the campaign/brand name only and is not the operator.</p>
        </div>
      </div>

      <div class="hero-aside">
        <div class="countdown-bento">
          <div class="countdown-top">
            <p class="countdown-kicker">Next licensed draw</p>
            <p class="countdown-date">March 30, 2026 • 7:00 PM MT</p>
            <div class="countdown-tags">
              <span class="pill accent"><i class="fa-solid fa-location-dot"></i> Fort Edmonton Park</span>
              <span class="pill"><i class="fa-solid fa-ticket"></i> $10 each • 995 total</span>
            </div>
          </div>
          <div class="countdown-dials" id="countdown">
            <div class="dial">
              <span class="dial-value" id="countdownDays">27</span>
              <span class="dial-label">Days</span>
            </div>
            <div class="dial">
              <span class="dial-value" id="countdownHours">00</span>
              <span class="dial-label">Hours</span>
            </div>
            <div class="dial">
              <span class="dial-value" id="countdownMinutes">00</span>
              <span class="dial-label">Minutes</span>
            </div>
            <div class="dial">
              <span class="dial-value" id="countdownSeconds">00</span>
              <span class="dial-label">Seconds</span>
            </div>
          </div>
          <div class="countdown-progress">
            <div class="progress-track">
              <div class="progress-fill" id="countdownProgress"></div>
            </div>
            <p class="countdown-note">Prize: 50% of ticket sales • Current licensed draw amount $3,780 • AGLC Raffle Licence #662991</p>
          </div>
        </div>

        <div class="hero-visual hero-visual-card">
          <div class="halo"></div>
          <img src="<?php echo esc_url( $hero_image ); ?>" alt="luckybegood Raffle hero">
          <span class="hero-label"><i class="fa-solid fa-circle-info"></i> Real cash prizes</span>
        </div>
      </div>
    </div>
  </section>

  <section class="fun-strip" id="packages">
    <div class="container fun-grid">
      <article class="fun-card">
        <p class="fun-label">Ticket price</p>
        <p class="fun-value">$10</p>
        <p class="fun-hint">First-come, first-served</p>
      </article>
      <article class="fun-card">
        <p class="fun-label">Ticket limit</p>
        <p class="fun-value">995</p>
        <p class="fun-hint">Maximum odds: 1 in 995</p>
      </article>
      <article class="fun-card">
        <p class="fun-label">Grand prize</p>
        <p class="fun-value">50% of sales</p>
        <p class="fun-hint">Current amount: $3,780</p>
      </article>
      <article class="fun-card">
        <p class="fun-label">Draw time</p>
        <p class="fun-value">Mar 30, 7 PM</p>
        <p class="fun-hint">Fort Edmonton Park</p>
      </article>
    </div>
  </section>

  <section class="prize-spotlight" id="prizes">
    <div class="container prize-grid">
      <article class="prize-card">
        <p class="section-eyebrow">Grand prize</p>
        <h2 class="section-title">Limited tickets. One $3,780 (and growing) licensed prize.</h2>
        <p class="section-sub">A vivid, licensed raffle experience — built to stand out and easy to enter.</p>
        <div class="prize-meta">
          <span class="pill accent"><i class="fa-solid fa-ticket"></i> $10 per ticket</span>
          <span class="pill"><i class="fa-solid fa-layer-group"></i> 995 tickets total</span>
          <span class="pill"><i class="fa-solid fa-calendar-day"></i> Draw: Mar 30, 2026 • 7:00 PM MT</span>
        </div>
        <p class="pitch">One winner receives 50% of ticket sales. Issued by AGLC Raffle Licence #662991.</p>
        <div class="cta-stack">
          <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-bolt"></i> Get Tickets Now</a>
          <span class="pill accent"><i class="fa-solid fa-clock"></i> Countdown is live</span>
        </div>
      </article>

      <article class="prize-info-card">
        <h3>Ticket details (as licensed)</h3>
        <ul class="info-list">
          <li>Ticket price: $10.00 per ticket</li>
          <li>Total tickets available: 995</li>
          <li>Prize: 50% of total ticket sales</li>
          <li>Draw date: March 30, 2026 at 7:00 PM MT</li>
          <li>Draw location: Fort Edmonton Park, Edmonton</li>
        </ul>
        <div class="micro-plate">Operator / Licensee: Luckybegood Dog Rescue Foundation • AGLC Raffle Licence #662991 • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). luckybegood is the campaign/brand name only and is not the operator.</div>
      </article>

      <div class="stat-grid">
        <div class="stat-box">
          <p class="label">Ticket pool</p>
          <p class="num">995</p>
          <p class="hint">Maximum odds: 1 in 995</p>
        </div>
        <div class="stat-box">
          <p class="label">Price per ticket</p>
          <p class="num">$10</p>
          <p class="hint">First-come, first-served</p>
        </div>
        <div class="stat-box">
          <p class="label">Winner count</p>
          <p class="num">1</p>
          <p class="hint">One grand prize package</p>
        </div>
        <div class="stat-box">
          <p class="label">Draw date</p>
          <p class="num">Mar 30</p>
          <p class="hint">2026 • Licensed &amp; posted</p>
        </div>
      </div>
    </div>
  </section>

  <section class="packages" id="how">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">How it works</p>
        <h2 class="section-title">A playful, simple raffle flow</h2>
        <p class="section-sub">Purchase, wait for the draw, and support conservation — all under the same AGLC licence.</p>
      </div>

      <div class="package-grid">
        <article class="package-card">
          <div class="package-name">1. Purchase tickets</div>
          <p class="package-note">Only 995 tickets available, $10 each.</p>
          <p class="package-note">Secure your spot before the clock hits zero.</p>
        </article>
        <article class="package-card">
          <div class="package-name">2. Wait for draw</div>
          <p class="package-note">Official draw on March 30, 2026 at 7:00 PM MT.</p>
          <p class="package-note">Draw location: Fort Edmonton Park, Edmonton.</p>
        </article>
        <article class="package-card">
          <div class="package-name">3. Win the prize</div>
          <p class="package-note">One winner receives the $3,780 (and growing) prize pool.</p>
          <p class="package-note">Payout equals 50% of total ticket sales.</p>
        </article>
        <article class="package-card">
          <div class="package-name">4. Support conservation</div>
          <p class="package-note">Proceeds align with wildlife and outdoor heritage causes.</p>
          <p class="package-note">Help keep ecosystems healthy and thriving.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="packages" id="impact">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Your impact</p>
        <h2 class="section-title">Tickets that support conservation</h2>
        <p class="section-sub">Every purchase echoes the raffle spirit—backing wildlife and outdoor heritage.</p>
      </div>
      <div class="package-grid">
        <article class="package-card">
          <p class="package-note">
            Every ticket helps fund wildlife and habitat initiatives similar to the Pheasant Release Program. Together we keep ecosystems healthy and outdoor experiences thriving.
          </p>
          <a href="<?php echo esc_url( home_url('/faq') ); ?>" class="btn primary">Ask about the mission</a>
        </article>
        <article class="package-card prize-info-card">
          <p class="section-eyebrow" style="margin-bottom:0.35rem;">Operator</p>
          <p class="section-sub" style="margin:0;">Operated by:<br>
          Luckybegood Dog Rescue Foundation<br>
          9111-39 Avenue, Edmonton, AB T6E5Y2<br>
          Licensed charitable organization in Alberta</p>
          <p class="section-sub" style="margin:0.6rem 0 0;">Advertising and marketing services provided by:<br>
          DigiBox Ltd (authorized agent)</p>
        </article>
      </div>
    </div>
  </section>

  <section class="packages" id="winners">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Winners</p>
        <h2 class="section-title">Winners announced after the draw</h2>
        <p class="section-sub">Check back after March 30, 2026 for the official winner announcement.</p>
      </div>
      <div class="package-grid">
        <article class="package-card">
          <p class="package-note">We’ll post the verified winner and prize claim details here once the draw is completed.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="regulatory" id="responsible">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Compliance</p>
        <h2 class="section-title">Licensed &amp; regulated</h2>
        <p class="section-sub">Operator / Licensee: Luckybegood Dog Rescue Foundation • AGLC Raffle Licence #662991 • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). luckybegood is the campaign/brand name only.</p>
      </div>

      <div class="rg-grid">
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Licence &amp; limits</h3>
          <p>Operator / Licensee: Luckybegood Dog Rescue Foundation • AGLC Raffle Licence #662991 • 995 tickets • $10 each • Draw: Mar 30, 2026 • One $3,780 winner.</p>
          <span class="rg-badge-pill"><i class="fa-solid fa-scale-balanced"></i> Posted odds: max 1 in 995</span>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-heart-pulse"></i></div>
          <h3>Participate responsibly</h3>
          <p>18+ only. Set limits, keep raffle participation balanced, and take breaks. We promote balance over impulse.</p>
          <a class="rg-cta" href="https://www.albertahealthservices.ca" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-arrow-up-right-from-square"></i> Responsible participation resources</a>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
          <h3>Need support?</h3>
          <p>Helpline: <a href="tel:18663322322" class="link-accent">1-866-332-2322</a> • Alberta Health Services Addiction Helpline.</p>
          <ul class="res-links">
            <li><a href="https://gamesenseab.ca/" target="_blank" rel="noopener noreferrer">GameSense Alberta</a></li>
            <li><a href="https://www.gambleaware.org/" target="_blank" rel="noopener noreferrer">BeGambleAware</a></li>
            <li><a href="https://selfexclusion.ca/" target="_blank" rel="noopener noreferrer">Self-Exclusion Program</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Contact</p>
        <h2 class="section-title">We’re here to help</h2>
        <p class="section-sub">Questions about tickets, rules, or responsible gaming? Reach out anytime.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-card">
          <h3>Message us</h3>
          <p>Email: <a href="mailto:support@luckybegood.com">support@luckybegood.com</a></p>
          <p>Hours: Mon–Fri, 9:00 AM – 5:00 PM (MT)</p>
          <p>Response time: within 1–2 business days</p>
        </div>
        <div class="contact-form-card">
          <h3>Need assistance?</h3>
          <p>Visit the <a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a> or <a href="<?php echo esc_url( home_url('/rules') ); ?>">Rules</a> for quick answers.</p>
          <div class="form-status" aria-live="polite">Prefer a call? Email us to schedule.</div>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="sticky-ribbon">
  <div class="item"><i class="fa-solid fa-circle-exclamation"></i> 18+</div>
  <div class="item"><i class="fa-solid fa-shield"></i> Responsible Gaming</div>
  <div class="item"><i class="fa-solid fa-ticket"></i> AGLC Licence #662991</div>
  <div class="item"><i class="fa-solid fa-bolt"></i> Fast Checkout</div>
</div>

<div class="luckybegood-modal" id="signupModal" aria-hidden="true">
  <div class="modal-card">
    <button class="modal-close" type="button" data-modal-close aria-label="Close form"><i class="fa-solid fa-xmark"></i></button>
    <h3>Ticket Purchase Inquiry</h3>
    <p>Send us a message about buying raffle tickets. We’ll respond with next steps.</p>
    <form id="signupForm" class="modal-form">
      <input type="text" id="signupName" placeholder="Full name" required>
      <input type="email" id="signupEmail" placeholder="Email address" required>
      <input type="tel" id="signupPhone" placeholder="Phone number" required>
      <textarea id="signupMessage" placeholder="Your message or ticket request" rows="3" required></textarea>
      <button type="submit" class="btn primary">Send message</button>
      <p id="signupStatus" class="modal-status" aria-live="polite"></p>
    </form>
  </div>
</div>

<div class="sticky-footer">
  <div class="container">
    <div class="badge"><span class="age-number">18+</span></div>
    <div class="badge"><i class="fa-solid fa-shield-check"></i> Responsible Gaming</div>
    <div class="badge"><i class="fa-solid fa-certificate"></i> AGLC Licence #662991</div>
  </div>
</div>

<?php get_footer(); ?>
