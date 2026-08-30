<?php
// force UTF-8 Ø
if (!defined('WEBPATH'))
die();
?>
<!DOCTYPE html>
<html<?php printLangAttribute(); ?>>
<head>
  <meta charset="<?php echo LOCAL_CHARSET; ?>">
  <?php filter::applyFilter('theme_head'); ?>
  <?php printHeadTitle(); ?>
</head>
<body class="loading">
  <?php filter::applyFilter('theme_body_open'); ?>
  <div id="wrapper">
    <?php include 'header.php'; ?>
    <div id="main">
      <article id="page">
        <h1><?php echo gettext("Password required"); ?></h1>
        <?php printPasswordForm($hint, $show, false); ?>
      </article>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <?php filter::applyFilter('theme_body_close'); ?>
</body>
</html>
