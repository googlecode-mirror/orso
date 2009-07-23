
<ul>
  <?php foreach ($domain_model as $concept): ?>
    <li>
      Concept: <?php echo $concept->getConceptName() ?>
      <ul>
        <?php foreach ($concept->Activity as $activity): ?>
          <li><?php echo $activity->getName() ?></li>
        <?php endforeach; ?>
      </ul>
    </li>
    <?php endforeach; ?>
</ul>