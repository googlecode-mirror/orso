<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<mappings>
  <?php foreach ($activity_list as $activity): ?>
    <mapping>
      <activity rel="<?php if ($activity->getFilename() != '') echo 'http://'.$sf_request->getHost().'/uploads/materiale/'.$activity->getFilename(); ?>"><?php echo $activity->getName() ?></activity>
        <?php foreach ($activity->DomainModel as $domain_model): ?>
          <concept><?php echo $domain_model->getConceptName() ?></concept>
        <?php endforeach; ?>
    </mapping>
    <?php endforeach; ?>
</mappings>