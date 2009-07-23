

    <?php foreach ($activity_list as $activity): ?>
    <tr>
      <td><?php echo $activity->getId() ?></a></td>
      <td><?php echo $activity->getName() ?></td>
      <td><?php echo $activity->getType() ?></td>
      <td><?php echo $activity->getWeight() ?></td>
      <td><?php echo $activity->DomainModel?></td>
    </tr>
    <?php endforeach; ?>

