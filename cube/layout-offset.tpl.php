<?php include('header.inc'); ?>

<div id='page'>
  <?php if ($tabs): ?><div id='tabs' class='limiter clear-block'><?php print $tabs ?></div><?php endif; ?>
  <?php if ($tabs2): ?><div class='secondary-tabs limiter clear-block'><?php print $tabs2 ?></div><?php endif; ?>
  <?php if ($help) print $help ?>
  <?php if ($header): ?><div id='header' class='limiter clear-block'><?php print $header ?></div><?php endif; ?>

  <div class='clear-block limiter page-content'>
    <?php if ($show_messages && $messages): ?>
      <div id='console' class='clear-block'><?php print $messages; ?></div>
    <?php endif; ?>
    <div id='content'>
      <?php if (!empty($content)): ?>
        <div class='content-wrapper clear-block'><?php print $content ?></div>
      <?php endif; ?>
      <?php print $content_region ?>
    </div>
    <div id='left' class='clear-block'>
      <?php print $left ?>
    </div>
    <div id='right' class='clear-block'>
      <?php print $right ?>
    </div>
  </div>
</div>

<?php include('footer.inc'); ?>
