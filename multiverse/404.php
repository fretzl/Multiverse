<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) die();
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
        <h1><?php echo gettext("Object not found"); ?></h1>
        <div class="errorbox">
          <?php print404status(isset($album) ? $album : null, isset($image) ? $image : null, $obj); ?>
        </div>
      </article>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <?php filter::applyFilter('theme_body_close'); ?>
</body>
</html>
