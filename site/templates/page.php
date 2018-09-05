<nav><a href="http://darkcrystal.pw/">Dark Crystal</a> <a href="http://darkcrystal.pw/ssb-protocol-docs.html" target="_blank">Scuttlebutt Protocol Guide</a> <a href="https://github.com/blockades/" target="_blank">Dark Crystal Repos</a> <a href="https://github.com/ssbc" target="_blank">SSB Repos</a></nav><a class="email" href="mailto: frontdesk@blockades.org">Get in touch</a>

  <div class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </div>

<?php snippet('footer') ?>
