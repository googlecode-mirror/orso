<table>
  <tbody>
    <tr>
      <th>Concept:</th>
      <td><?php echo $domain_model->getconcept_id() ?></td>
    </tr>
    <tr>
      <th>Concept name:</th>
      <td><?php echo $domain_model->getconcept_name() ?></td>
    </tr>
    <tr>
      <th>Concept slug:</th>
      <td><?php echo $domain_model->getconcept_slug() ?></td>
    </tr>
    <tr>
      <th>Lft:</th>
      <td><?php echo $domain_model->getlft() ?></td>
    </tr>
    <tr>
      <th>Rgt:</th>
      <td><?php echo $domain_model->getrgt() ?></td>
    </tr>
    <tr>
      <th>Level:</th>
      <td><?php echo $domain_model->getlevel() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('domain/edit?concept_id='.$domain_model->getConceptId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('domain/index') ?>">List</a>
