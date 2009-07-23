<?xml version="1.0" ?>
<mappings>
  <?php foreach ($domain_model as $concept): ?>
    <mapping>
      <concept><?php echo $concept->getConceptName() ?></concept>
        <?php foreach ($concept->Activity as $activity): ?>
          <activity><?php echo $activity->getName() ?></activity>
        <?php endforeach; ?>
    </mapping>
    <?php endforeach; ?>
</mappings>