<?php
  $brand = get_theme_file_uri('/assets/images/img.png');
  $privacy_link = get_privacy_policy_url();
  if (empty($privacy_link)) {
      $privacy_page = get_page_by_path('privacy-policy');
      $privacy_link = $privacy_page ? get_permalink($privacy_page) : home_url('/privacy-policy');
  }
?>
<footer class="footer-bar-c6u3">
  <div class="shell-wrap-z4m2">
    <div class="footer-brand-u2m9">
      <img class="brand-logo-u8b4" src="<?php echo esc_url( $brand ); ?>" alt="luckybegood logo">
      <span class="sr-only">luckybegood</span>
    </div>

    <div class="footer-note-w0e3" style="text-align:center;">
      <p class="section-sub-p0c6" style="margin:0;">
        Operated by Luckybegood Dog Rescue Foundation<br>
        AGLC Raffle Licence #662991 (regulated by Alberta Gaming, Liquor &amp; Cannabis)<br>
        Draw: March 30, 2026 • Prize: 50% of ticket sales
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        Must be 18+ and physically located in Alberta to participate. All raffles conducted under AGLC rules.
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        Marketing services provided by DigiBox Ltd (authorized agent).
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        Responsible Participation: If play becomes a concern, support is available.<br>
        Alberta Gambling Helpline: 1-866-332-2322 • <a href="https://www.albertahealthservices.ca" target="_blank" rel="noopener noreferrer" class="link-accent-m8q5">www.albertahealthservices.ca</a><br>
        Participation is limited to individuals 18+ located in Alberta.
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        <a href="<?php echo esc_url( $privacy_link ); ?>" class="link-accent-m8q5">Privacy Policy</a>
      </p>
    </div>
  </div>
</footer>

<button id="hubScrollTop" class="scroll-top-d8n2" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
