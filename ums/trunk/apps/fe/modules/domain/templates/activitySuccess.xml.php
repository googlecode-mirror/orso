<?php use_helper('Activity'); ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<mappings>
  <?php foreach ($domain_model as $concept): ?>
    <mapping>
      <concept><?php echo $concept->getConceptName() ?></concept>
        <?php foreach ($concept->Activity as $activity): ?>
        <activity rel="<?php echo url_for_activity_resource($activity); ?>"><?php echo $activity->getName() ?></activity>
        <?php endforeach; ?>
    </mapping>
    <?php endforeach; ?>
</mappings>