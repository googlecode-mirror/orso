<?xml version="1.0" ?>
<mappings>
  <?php foreach ($activity_list as $activity): ?>
    <mapping>
      <activity><?php echo $activity->getName() ?></activity>
        <?php foreach ($activity->DomainModel as $domain_model): ?>
          <concept><?php echo $domain_model->getConceptName() ?></concept>
        <?php endforeach; ?>
    </mapping>
    <?php endforeach; ?>
</mappings>