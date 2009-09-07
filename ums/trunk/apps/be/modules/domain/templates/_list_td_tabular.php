<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($domain_model->getId(), 'domain_model_edit', $domain_model) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_concept_name">
    <span class="<?php echo $domain_model->getNode()->isLeaf() ? 'file' : 'folder' ?>">
    <?php echo $domain_model->getConceptName() ?>
    </span>
</td>
<!-- td class="sf_admin_text sf_admin_list_td_lft">
  <?php echo $domain_model->getLft() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rgt">
  <?php echo $domain_model->getRgt() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_level">
  <?php echo $domain_model->getLevel() ?>
</td -->
<td class="sf_admin_text sf_admin_list_td_concept_slug">
  <?php echo $domain_model->getConceptSlug() ?>
</td>
