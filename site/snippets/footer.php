

  <footer class="site-footer cf">
      <p class="footer-text"><?php echo $site->copyright()->kirbytext() ?></p>
      
      <nav class="languages" role="navigation">
        <ul>
          <?php if($site->showLanguageSelector()->bool()): ?>
          <?php foreach($site->languages() as $language): ?>
            <li>
              <a href="<?php echo $page->url($language->code()) ?>" <?php e($site->language() == $language, ' class="active"') ?>>
                <?php echo html($language->name()) ?>
              </a>
            </li>
          <?php endforeach ?>
        <?php endif ?>
        </ul>
      </nav>

  </footer>
  

  <?php echo js("assets/js/main.min.js") ?>
  <?php echo js("@auto") ?>

  <?php snippet('analytics') ?>
  <?php echo snippet('ga'); ?>
  <?= js([
  'assets/vendor/photoswipe/photoswipe.min.js',
  'assets/vendor/photoswipe/photoswipe-ui-default.min.js',
  'assets/plugins/lightbox-gallery/init-photoswipe.min.js'
]) ?>
</body>
</html>
 