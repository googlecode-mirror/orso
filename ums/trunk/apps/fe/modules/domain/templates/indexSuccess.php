<h1>Domain List</h1>

<table>
  <thead>
    <tr>
      <th>Concept</th>
      <th>Concept name</th>
      <th>Concept slug</th>
      <th>Lft</th>
      <th>Rgt</th>
      <th>Level</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($domain_model_list as $domain_model): ?>
    <tr>
      <td><a href="<?php echo url_for('domain/show?concept_id='.$domain_model->getConceptId()) ?>"><?php echo $domain_model->getConceptId() ?></a></td>
      <td><?php echo $domain_model->getConceptName() ?></td>
      <td><?php echo $domain_model->getConceptSlug() ?></td>
      <td><?php echo $domain_model->getLft() ?></td>
      <td><?php echo $domain_model->getRgt() ?></td>
      <td><?php echo $domain_model->getLevel() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('domain/new') ?>">New</a>
