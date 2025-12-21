<?php
/**
 * Template Name: FAQ
 * FAQ page template.
 */
get_header();
?>

<style>
.faq-page{padding:3rem 0 4rem; background:radial-gradient(circle at 20% 8%, rgba(127,183,180,0.12), transparent 35%), radial-gradient(circle at 80% 6%, rgba(240,169,136,0.12), transparent 38%), linear-gradient(180deg, var(--bg), var(--bg-2));}
.faq-shell{width:min(1080px, 100% - 2.4rem); margin:0 auto;}
.faq-hero{
  padding:1rem 0 1.6rem;
}
.faq-kicker{
  text-transform:uppercase;
  letter-spacing:2px;
  color:var(--muted);
  margin:0 0 0.35rem;
  font-weight:800;
}
.faq-title{
  font-family:var(--font-heading);
  font-size:clamp(2rem, 4vw, 2.8rem);
  margin:0 0 0.4rem;
  color:var(--heading);
}
.faq-lead{margin:0 0 0.8rem; color:var(--muted); max-width:880px;}
.faq-pill-row{display:flex; flex-wrap:wrap; gap:0.6rem; margin:0.6rem 0 1rem;}
.faq-pill{
  display:inline-flex;
  align-items:center;
  gap:0.45rem;
  padding:0.48rem 0.9rem;
  border-radius:999px;
  background:var(--card);
  border:1px solid var(--border);
  color:var(--muted);
  font-weight:700;
}
.faq-pill.accent{background:rgba(127,183,180,0.18); color:var(--accent); border-color:rgba(127,183,180,0.35);}
.faq-facts{
  padding:1.2rem 0 0.4rem;
}
.faq-fact-grid{display:grid; grid-template-columns:repeat(auto-fit, minmax(210px,1fr)); gap:0.85rem;}
.faq-fact{
  background:var(--card);
  border:1px solid var(--border);
  border-radius:14px;
  padding:0.9rem 1rem;
  box-shadow:var(--shadow);
}
.faq-fact .label{margin:0 0 0.25rem; color:var(--muted); text-transform:uppercase; letter-spacing:1px; font-weight:700; font-size:0.85rem;}
.faq-fact .value{margin:0; font-family:var(--font-heading); font-size:1.6rem; color:var(--heading);}
.faq-fact .hint{margin:0.2rem 0 0; color:var(--muted);}
.faq-grid{
  margin:1.4rem 0 0;
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));
  gap:1rem;
}
.faq-card{
  background:var(--card-strong);
  border:1px solid var(--border);
  border-radius:16px;
  padding:1.1rem;
  box-shadow:var(--shadow);
  transition:transform .15s ease, box-shadow .15s ease;
}
.faq-card:hover{transform:translateY(-4px); box-shadow:0 16px 38px rgba(17,12,6,0.16);}
.faq-card h3{
  margin:0 0 0.35rem;
  font-family:var(--font-heading);
  color:var(--heading);
  font-size:1.05rem;
}
.faq-card p{margin:0; color:var(--muted);}
.faq-note{
  margin:1.4rem 0 0;
  background:var(--card);
  border:1px solid var(--border);
  border-radius:14px;
  padding:1rem;
  box-shadow:var(--shadow);
  color:var(--muted);
  font-weight:600;
}
.faq-note strong{color:var(--heading);}
@media (max-width:720px){
  .faq-page{padding:2.4rem 0 3rem;}
  .faq-grid{grid-template-columns:1fr;}
}
</style>

<main class="faq-page">
  <section class="faq-hero" id="faq">
    <div class="faq-shell">
      <p class="faq-kicker">Need answers?</p>
      <h1 class="faq-title">Frequently Asked Questions</h1>
      <p class="faq-lead">Clear, licensed information about the luckybegood Association Foundation 50/50 raffle.</p>
      <div class="faq-pill-row">
        <span class="faq-pill accent"><i class="fa-solid fa-certificate"></i> AGLC Licence #662961</span>
        <span class="faq-pill"><i class="fa-solid fa-ticket"></i> 995 tickets • $10 each</span>
        <span class="faq-pill"><i class="fa-solid fa-calendar-day"></i> Draw: Mar 30, 2026 • 7:00 PM MT</span>
        <span class="faq-pill"><i class="fa-solid fa-location-dot"></i> Fort Edmonton Park, Edmonton</span>
      </div>
      <p class="faq-lead">Operator / Licensee: luckybegood Association Foundation • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). luckybegood is the campaign/brand name only and is not the operator.</p>
    </div>
  </section>

  <section class="faq-facts">
    <div class="faq-shell faq-fact-grid">
      <div class="faq-fact">
        <p class="label">Ticket price</p>
        <p class="value">$10</p>
        <p class="hint">First-come, first-served</p>
      </div>
      <div class="faq-fact">
        <p class="label">Tickets issued</p>
        <p class="value">995</p>
        <p class="hint">Maximum odds: 1 in 995</p>
      </div>
      <div class="faq-fact">
        <p class="label">Prize type</p>
        <p class="value">50% of sales</p>
        <p class="hint">Current licensed amount: $3,780</p>
      </div>
      <div class="faq-fact">
        <p class="label">Draw time</p>
        <p class="value">Mar 30, 7 PM</p>
        <p class="hint">Fort Edmonton Park, Edmonton</p>
      </div>
    </div>
  </section>

  <section class="faq-body-m2c7" aria-labelledby="faq-list">
    <div class="faq-shell faq-grid">
      <article class="faq-card">
        <h3>What do tickets cost and how many are printed?</h3>
        <p>Each ticket is $10 and only 995 tickets are issued under AGLC Licence #662961. The prize equals 50% of total ticket sales.</p>
      </article>

      <article class="faq-card">
        <h3>Who can purchase a ticket?</h3>
        <p>Buyers must be 18+ and physically located in Alberta at the time of purchase. Employees and immediate family of the licensee are not eligible.</p>
      </article>

      <article class="faq-card">
        <h3>When and where is the draw?</h3>
        <p>The licensed draw is March 30, 2026 at 7:00 PM MT, held at Fort Edmonton Park, Edmonton.</p>
      </article>

      <article class="faq-card">
        <h3>What does the winner receive?</h3>
        <p>The winner takes 50% of total ticket sales. Current licensed draw amount: $3,780 (and grows with more sales).</p>
      </article>

      <article class="faq-card">
        <h3>Do I need to be present at the draw?</h3>
        <p>No. Attendance is not required. We will post the verified winner and contact them directly.</p>
      </article>

      <article class="faq-card">
        <h3>How will the winner be notified?</h3>
        <p>We contact the winner within 5 business days using the details provided at purchase. A response is required within 30 days.</p>
      </article>

      <article class="faq-card">
        <h3>Can I buy multiple tickets?</h3>
        <p>Yes. Each ticket is a separate chance to win. Maximum odds are 1 in 995 if all tickets are sold.</p>
      </article>

      <article class="faq-card">
        <h3>Are ticket sales refundable?</h3>
        <p>All ticket sales are final—no refunds or exchanges once purchased.</p>
      </article>

      <article class="faq-card">
        <h3>Where do proceeds go?</h3>
        <p>Proceeds support conservation-focused initiatives inspired by programs like the Pheasant Release Program.</p>
      </article>

      <article class="faq-card">
        <h3>Who operates this raffle?</h3>
        <p>Operator / Licensee: luckybegood Association Foundation • Authority: AGLC. luckybegood is the campaign/brand name only and not the operator.</p>
      </article>

      <article class="faq-card">
        <h3>Need more help?</h3>
        <p>Email <a href="mailto:support@luckybegood.com" class="link-accent-m8q5">support@luckybegood.com</a> or use the <a href="<?php echo esc_url( home_url('/#contact') ); ?>">contact section</a> on the homepage.</p>
      </article>
    </div>
  </section>

  <section class="faq-shell faq-note">
    <p><strong>Reminder:</strong> This licensed raffle is operated by the luckybegood Association Foundation under AGLC Raffle Licence #662961. Must be 18+ and located in Alberta to purchase.</p>
  </section>
</main>

<?php get_footer(); ?>
