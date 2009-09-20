<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<mappings>
  <?php foreach ($domain_model as $concept): ?>
    <mapping>
      <concept><?php echo $concept->getConceptName() ?></concept>
        <?php foreach ($concept->Activity as $activity): ?>
      <activity rel="<?php if ($activity->getFilename() != '') echo 'http://'.$sf_request->getHost().'/uploads/materiale/'.$activity->getFilename(); ?>"><?php echo $activity->getName() ?></activity>
        <?php endforeach; ?>
    </mapping>
    <?php endforeach; ?>
</mappings>