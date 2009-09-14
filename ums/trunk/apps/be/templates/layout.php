<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>UMS Admin Interface</title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          <a href="<?php echo url_for('@homepage') ?>">
            HomePage
          </a>
        </h1>
      </div>
      <div id="menu">
        <ul>
          <li>
            <?php echo link_to('Domain Model', '@domain_model') ?>
          </li>
          <li>
            <?php echo link_to('User Groups', '@group_group') ?>
          </li>
          <li>
            <?php echo link_to('Users', '@user_user') ?>
          </li>
          <li>
            <?php echo link_to('Activity', '@activity_activity') ?>
          </li>
          <li>
            <?php echo link_to('Activity2Concept', '@activity_concept_activity2concept') ?>
          </li>
        </ul>
      </div>
    <?php echo $sf_content ?>
    </div>
  </body>
</html>
