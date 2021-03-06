<?php snippet('header') ?>

  <div class="secondary team">
    <div class="text">
      <h1>About MMT</h1>
      <?= $page->intro()->kirbytext() ?>
      <?= $page->text()->kirbytext() ?>
    </div>

      <h2>Peers</h2>

      <div class="team-list">
        <?php foreach($page->children()->visible()->filterBy('intendedTemplate', 'team')->shuffle() as $member): ?>
          <div class="team-list-single">
            <?php if($image = $member->image()): ?>
              <figure>
                <img src="<?= $image->url() ?>" alt="Portrait of <?= $member->title()->html() ?>" />
              </figure>
            <?php endif ?>

            <span class="name"><?= $member->title()->html() ?></span>
            <?= $member->about()->kirbytext() ?>

            <div class="team-contact text">
              <i>ssb:</i><br />
              <a href="https://www.scuttlebutt.nz/" target="_blank"><?= $member->ssb_name()->html() ?></a><br />
              <a href="https://www.scuttlebutt.nz/" target="_blank"><?= $member->ssb_publickey()->html() ?></a><br />
              <i>twitter:</i><br />
              <?= kirbytag(['twitter' => $member->twitter()->html()]) ?><br />
              <i>github:</i><br />
              <a href="http://github.com/<?= $member->github()->html() ?>" target="_blank"><?= $member->github()->html() ?></a><br />
              <i>contact:</i><br />
              <a href="<?= $member->contact()->html() ?>" target="_blank"><?= $member->contact()->html() ?></a><br />
            </div>
          </div>
        <?php endforeach ?>
      </div>

      <h2>Advisors</h2>

      <div class="secondary team">
        <div class="text">
          <?= $page->advisorsText()->kirbytext() ?>
        </div>
      </div>


      <div class="team-list">
        <?php foreach($page->children()->visible()->filterBy('intendedTemplate', 'advisor')->shuffle() as $advisor): ?>
          <div class="team-list-single">

            <?php if($image = $advisor->image()): ?>
              <figure>
                <img src="<?= $image->url() ?>" alt="Portrait of <?= $advisor->title()->html() ?>" />
              </figure>
            <?php endif ?>


            <span class="name"><?= $advisor->title()->html() ?></span>
            <?= $advisor->about()->kirbytext() ?>


            <div class="team-contact text">
              <i>ssb:</i><br />
              <a href="https://www.scuttlebutt.nz/" target="_blank"><?= $advisor->ssb_name()->html() ?></a><br />
              <a href="https://www.scuttlebutt.nz/" target="_blank"><?= $advisor->ssb_publickey()->html() ?></a><br />
              <i>twitter:</i><br />
              <?= kirbytag(['twitter' => $advisor->twitter()->html()]) ?><br />
              <i>github:</i><br />
              <a href="http://github.com/<?= $advisor->github()->html() ?>" target="_blank"><?= $advisor->github()->html() ?></a><br />
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </section>
  </div>
<?php snippet('footer') ?>
