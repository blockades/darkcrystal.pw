<?php snippet('header') ?>

<div class="fullscreen">
  <?= $page->landing()->kirbytext() ?>
</div>
<main>

<div class="intro">
  <small>What is Dark Crystal?</small>
  <?= $page->intro()->kirbytext() ?>
</div>

<div class="secondary">
  <?= $page->secondary()->kirbytext() ?>
</div>
</main>

<div class="faq">
  <div class="faq_title">
    <?= $page->faq_title()->kirbytext() ?>
  </div>

  <div class="inner">
    <div class="faq_left">
      <?= $page->faq_left()->kirbytext() ?>
    </div>

    <div class="faq_right">
      <?= $page->faq_right()->kirbytext() ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
