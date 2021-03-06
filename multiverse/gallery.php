<?php
// force UTF-8 Ø

if (!defined('WEBPATH')) die();
?>
<!DOCTYPE html>
<html<?php printLangAttribute(); ?>>
<head>
  <meta charset="<?php echo LOCAL_CHARSET; ?>">
  <?php zp_apply_filter('theme_head'); ?>
  <?php printHeadTitle(); ?>
  <?php if (class_exists('RSS')) {
    if ($_rss_news) {
      printRSSHeaderLink("News", gettext("Latest news"));
    }
    if ($_rss_gallery) {
      printRSSHeaderLink("Gallery", gettext('Latest images'));
    }
  } ?>
</head>
<body class="loading">
  <?php zp_apply_filter('theme_body_open'); ?>
  <div id="wrapper">
    <?php include 'header.php'; ?>
    <div id="main">
      <?php while (next_album()): ?>
        <div class="album thumb">
          <a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printAnnotatedAlbumTitle(); ?>"><?php printCustomAlbumThumbImage(getBareAlbumTitle(), null, 300, null, 300, 200); ?></a>
          <h3><a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printAnnotatedAlbumTitle(); ?>"><?php printAlbumTitle(); ?></a></h3>
          <span><?php printAlbumDate(""); ?></span>
          <p><?php echo truncate_string(getBareAlbumDesc(), 120); ?></p>
        </div>
      <?php endwhile; ?>
      <?php printPageListWithNav("", "", false, true, 'pagelist gallery', null, true, 5); ?>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <?php zp_apply_filter('theme_body_close'); ?>
</body>
</html>
