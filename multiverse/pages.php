<?php
// force UTF-8 Ø

if (!defined('WEBPATH'))
die();
?>
<!DOCTYPE html>
<html<?php printLangAttribute(); ?>>
<head>
  <meta charset="<?php echo LOCAL_CHARSET; ?>">
  <?php printHeadTitle(); ?>
  <?php filter::applyFilter('theme_head'); ?>
  <?php if (class_exists('RSS')) {
    if ($_rss_news) {
      printRSSHeaderLink("News", gettext("Latest news"));
    }
    if ($_rss_gallery) {
      printRSSHeaderLink("Gallery", gettext('Latest images'));
    }
  } ?>
  <?php printCodeblock(1); ?>
</head>
<body class="loading">
  <?php filter::applyFilter('theme_body_open'); ?>
  <div id="wrapper">
    <?php include 'header.php'; ?>
    <div id="main">
      <article id="page">
        <h1><?php printPageTitle(); ?></h1>
        <div id="">
          <?php
          printPageContent();
          printCodeblock(2);
          printPageExtraContent();
          printCodeblock(3);
          @callUserFunction('printCommentForm');
          ?>
        </div>
      </article>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <?php printCodeblock(4); ?>
  <?php filter::applyFilter('theme_body_close'); ?>
</body>
</html>
