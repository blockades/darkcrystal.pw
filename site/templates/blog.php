<nav><a href="http://darkcrystal.pw/">Dark Crystal</a> <a href="http://darkcrystal.pw/ssb-protocol-docs.html" target="_blank">Scuttlebutt Protocol Guide</a> <a href="https://github.com/blockades/" target="_blank">Dark Crystal Repos</a> <a href="https://github.com/ssbc" target="_blank">SSB Repos</a></nav><a class="email" href="mailto: frontdesk@blockades.org">Get in touch</a>

<?= css('assets/css/index.css') ?>

  <div class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>

      <?php
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>
        <div class="intro text">
          <?= $page->text()->kirbytext() ?>
        </div>
      <?php endif ?>

      <hr />
    </header>

    <section class="wrap">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">

            <header class="article-header">
              <h2 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

              <p class="article-date"><?= $article->date('F jS, Y') ?></p>
            </header>

            <?php snippet('coverimage', $article) ?>

            <div class="text">
              <p>
                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more">read more</a>
              </p>
            </div>

          </article>

          <hr />

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>

  </div>

<?php snippet('footer') ?>
