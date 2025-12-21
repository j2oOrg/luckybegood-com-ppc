<?php
/**
 * Template Name: Rules
 * Rules page template.
 */
get_header();
?>

<style>
.rules-page{padding:3rem 0 4rem; background:radial-gradient(circle at 18% 10%, rgba(127,183,180,0.12), transparent 35%), radial-gradient(circle at 82% 6%, rgba(240,169,136,0.12), transparent 38%), linear-gradient(180deg, var(--bg), var(--bg-2));}
.rules-shell{width:min(1080px, 100% - 2.4rem); margin:0 auto;}
.rules-hero{padding:1rem 0 1.6rem;}
.rules-kicker{margin:0 0 0.35rem; text-transform:uppercase; letter-spacing:2px; color:var(--muted); font-weight:800;}
.rules-title{margin:0 0 0.4rem; font-family:var(--font-heading); font-size:clamp(2.1rem, 4.5vw, 2.9rem); color:var(--heading);}
.rules-lead{margin:0 0 0.8rem; color:var(--muted); max-width:900px;}
.rules-pills{display:flex; flex-wrap:wrap; gap:0.6rem; margin:0.6rem 0 1rem;}
.rules-pill{display:inline-flex; align-items:center; gap:0.45rem; padding:0.48rem 0.9rem; border-radius:999px; background:var(--card); border:1px solid var(--border); color:var(--muted); font-weight:700;}
.rules-pill.accent{background:rgba(127,183,180,0.18); color:var(--accent); border-color:rgba(127,183,180,0.35);}
.rules-meta{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(240px,1fr));
  gap:0.9rem;
  margin:1.1rem 0 0.6rem;
}
.rules-meta-card{
  background:var(--card);
  border:1px solid var(--border);
  border-radius:14px;
  padding:1rem;
  box-shadow:var(--shadow);
}
.rules-meta-card .label{margin:0 0 0.25rem; color:var(--muted); text-transform:uppercase; letter-spacing:1px; font-weight:700; font-size:0.85rem;}
.rules-meta-card .value{margin:0; font-family:var(--font-heading); font-size:1.45rem; color:var(--heading);}
.rules-meta-card .hint{margin:0.2rem 0 0; color:var(--muted);}
.rules-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(260px,1fr));
  gap:1rem;
  margin:1.4rem 0 0;
}
.rule-card{
  background:var(--card-strong);
  border:1px solid var(--border);
  border-radius:16px;
  padding:1.15rem;
  box-shadow:var(--shadow);
  transition:transform .15s ease, box-shadow .15s ease;
}
.rule-card:hover{transform:translateY(-4px); box-shadow:0 16px 38px rgba(17,12,6,0.16);}
.rule-card h3{margin:0 0 0.35rem; font-family:var(--font-heading); color:var(--heading); font-size:1.1rem;}
.rule-card p{margin:0; color:var(--muted); line-height:1.65;}
.rule-card ul{margin:0.35rem 0 0; padding-left:1.1rem; color:var(--muted); line-height:1.7;}
.rule-card li{margin:0.2rem 0;}
.rules-timeline{
  margin:1.6rem 0 0;
  background:var(--card);
  border:1px solid var(--border);
  border-radius:16px;
  padding:1.2rem;
  box-shadow:var(--shadow);
}
.rules-timeline h3{margin:0 0 0.45rem; font-family:var(--font-heading); color:var(--heading);}
.rules-steps{margin:0; padding:0; list-style:none; display:grid; gap:0.55rem;}
.rules-step{display:grid; grid-template-columns:auto 1fr; gap:0.6rem; align-items:start;}
.rules-step .dot{width:18px; height:18px; border-radius:50%; background:linear-gradient(120deg, var(--accent), var(--secondary)); box-shadow:0 8px 16px rgba(17,12,6,0.12);}
.rules-step .copy{color:var(--muted); margin:0;}
.rules-callout{
  margin:1.6rem 0 0;
  background:var(--card-strong);
  border:1px solid var(--border);
  border-radius:14px;
  padding:1rem 1.1rem;
  box-shadow:var(--shadow);
  color:var(--muted);
  font-weight:600;
}
.rules-callout strong{color:var(--heading);}
@media (max-width:720px){
  .rules-page{padding:2.4rem 0 3rem;}
  .rules-grid{grid-template-columns:1fr;}
}
</style>

<main class="rules-page">
  <section class="rules-hero" id="rules">
    <div class="rules-shell">
      <p class="rules-kicker">Official Rules</p>
      <h1 class="rules-title">Rules &amp; Regulations</h1>
      <p class="rules-lead">Official terms for the luckybegood Association Foundation 50/50 raffle. Participation is restricted to individuals 18+ who are physically located in Alberta at the time of purchase.</p>
      <div class="rules-pills">
        <span class="rules-pill accent"><i class="fa-solid fa-certificate"></i> AGLC Raffle Licence #662961</span>
        <span class="rules-pill"><i class="fa-solid fa-ticket"></i> 995 tickets • $10 each</span>
        <span class="rules-pill"><i class="fa-solid fa-calendar-day"></i> Draw: Mar 30, 2026 • 7:00 PM MT</span>
        <span class="rules-pill"><i class="fa-solid fa-location-dot"></i> Fort Edmonton Park, Edmonton</span>
      </div>
      <p class="rules-lead">Operator / Licensee: luckybegood Association Foundation • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). luckybegood is the campaign/brand name only and is not the operator.</p>

      <div class="rules-meta">
        <div class="rules-meta-card">
          <p class="label">Licence number</p>
          <p class="value">662961</p>
          <p class="hint">Issued by AGLC</p>
        </div>
        <div class="rules-meta-card">
          <p class="label">Licence term</p>
          <p class="value">Sept 26, 2025 – Mar 30, 2026</p>
          <p class="hint">Covers this draw window</p>
        </div>
        <div class="rules-meta-card">
          <p class="label">Prize</p>
          <p class="value">50% of sales</p>
          <p class="hint">Current licensed amount: $3,780</p>
        </div>
        <div class="rules-meta-card">
          <p class="label">Eligibility</p>
          <p class="value">18+ in Alberta</p>
          <p class="hint">Physical presence required at purchase</p>
        </div>
      </div>
    </div>
  </section>

  <section class="rules-shell">
    <div class="rules-grid">
      <article class="rule-card">
        <h3>Rules of play</h3>
        <p>This raffle is conducted under AGLC Raffle Licence #662961 and follows all applicable Alberta regulations.</p>
      </article>

      <article class="rule-card">
        <h3>Licensee</h3>
        <p>luckybegood Association Foundation is the licensed operator responsible for conducting the raffle.</p>
      </article>

      <article class="rule-card">
        <h3>Eligibility</h3>
        <p>Participants must be 18+ and physically located in Alberta at the time of purchase. Employees and immediate family of the licensee are not eligible.</p>
      </article>

      <article class="rule-card">
        <h3>Tickets &amp; pricing</h3>
        <p>Tickets cost $10.00 each. A total of 995 tickets are available for this licensed draw.</p>
      </article>

      <article class="rule-card">
        <h3>Prize payout</h3>
        <p>One winner receives 50% of total ticket sales for this draw. The prize is not transferable and is awarded as stated.</p>
      </article>

      <article class="rule-card">
        <h3>Draw details</h3>
        <p>The draw will occur on March 30, 2026 at 7:00 PM MT at Fort Edmonton Park, Edmonton. Draw procedures follow AGLC requirements.</p>
      </article>

      <article class="rule-card">
        <h3>Winner notification</h3>
        <p>The winner will be contacted within 5 business days using the information provided at purchase and will be posted on the raffle site. A response is required within 30 days.</p>
      </article>

      <article class="rule-card">
        <h3>Refund policy</h3>
        <p>All ticket sales are final. No refunds or exchanges once a ticket is purchased.</p>
      </article>

      <article class="rule-card">
        <h3>Disputes &amp; law</h3>
        <p>Any disputes are governed by Alberta law and AGLC regulations. The operator’s decisions are final within those guidelines.</p>
      </article>

      <article class="rule-card">
        <h3>Responsible play</h3>
        <p>Play within your means. If you need support, contact <a href="tel:18663322322" class="link-accent-m8q5">1-866-332-2322</a> (Alberta Health Services Addiction Helpline) or visit our Responsible Play resources.</p>
      </article>

      <article class="rule-card">
        <h3>Questions</h3>
        <p>Need clarification on these rules? Visit the <a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a> or the <a href="<?php echo esc_url( home_url('/#contact') ); ?>">contact section</a> to reach us.</p>
      </article>
    </div>

    <div class="rules-timeline">
      <h3>Draw at a glance</h3>
      <ul class="rules-steps">
        <li class="rules-step"><span class="dot"></span><p class="copy">Tickets sold at $10 each (995 total available).</p></li>
        <li class="rules-step"><span class="dot"></span><p class="copy">Eligibility verified (18+ and physically in Alberta at time of purchase).</p></li>
        <li class="rules-step"><span class="dot"></span><p class="copy">Draw conducted March 30, 2026 at 7:00 PM MT, Fort Edmonton Park.</p></li>
        <li class="rules-step"><span class="dot"></span><p class="copy">One winner drawn; prize equals 50% of total ticket sales.</p></li>
        <li class="rules-step"><span class="dot"></span><p class="copy">Winner notified within 5 business days; must respond within 30 days.</p></li>
      </ul>
    </div>

    <div class="rules-callout">
      <p><strong>Reminder:</strong> Operator / Licensee: luckybegood Association Foundation • AGLC Raffle Licence #662961 • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). luckybegood is the campaign/brand name only and is not the operator.</p>
    </div>
  </section>
</main>

<?php get_footer(); ?>
