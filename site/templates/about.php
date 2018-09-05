<?php snippet('header') ?>

  <div class="main" role="main">

    <div class="wrap">

      <header>
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <hr />
      </header>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>

    </div>

    <section class="team wrap wide">

      <h2>Peers</h2>

      <ul class="team-list grid gutter-1">
        <?php foreach($page->children()->visible()->filterBy('intendedTemplate', 'team')->shuffle() as $member): ?>

          <li class="team-item column">

            <?php if($image = $member->image()): ?>
              <figure class="team-portrait">
                <img src="<?= $image->url() ?>" alt="Portrait of <?= $member->title()->html() ?>" />
              </figure>
            <?php endif ?>

            <div class="team-info">
              <h3 class="team-name"><?= $member->title()->html() ?></h3>
              <p class="team-position"><?= $member->position()->html() ?></p>
              <div class="team-about text">
                <?= $member->about()->kirbytext() ?>
              </div>
            </div>

            <div class="team-contact text">
              <i>ssb:</i><br />
              <?= $member->ssb()->html() ?><br />
              <i>twitter:</i><br />
              <?= kirbytag(['twitter' => $member->twitter()->html()]) ?><br />
              <i>github:</i><br />
              <a href="http://github.com/<?= $member->github()->html() ?>"><?= $member->github()->html() ?></a><br />
              <i>Email:</i><br />
              <a href="mailto:<?= $member->email()->html() ?>"><?= $member->email()->html() ?></a><br />
            </div>
          </li>
        <?php endforeach ?>
      </ul>

      <h2>Advisors</h2>

      <ul class="team-list grid gutter-1">
        <?php foreach($page->children()->visible()->filterBy('intendedTemplate', 'advisor')->shuffle() as $advisor): ?>
          <li class="team-item column">

            <?php if($image = $advisor->image()): ?>
              <figure class="team-portrait">
                <img src="<?= $image->url() ?>" alt="Portrait of <?= $advisor->title()->html() ?>" />
              </figure>
            <?php endif ?>

            <div class="team-info">
              <h3 class="team-name"><?= $advisor->title()->html() ?></h3>
              <p class="team-position"><?= $advisor->position()->html() ?></p>
              <div class="team-about text">
                <?= $advisor->about()->kirbytext() ?>
              </div>
            </div>

            <div class="team-contact text">
              <i>ssb:</i><br />
              <?= $advisor->ssb()->html() ?><br />
              <i>twitter:</i><br />
              <?= kirbytag(['twitter' => $advisor->twitter()->html()]) ?><br />
              <i>github:</i><br />
              <a href="http://github.com/<?= $advisor->github()->html() ?>"><?= $advisor->github()->html() ?></a><br />
            </div>
          </li>
        <?php endforeach ?>
      </ul>


    </section>

  </div>

<?php snippet('footer') ?>
