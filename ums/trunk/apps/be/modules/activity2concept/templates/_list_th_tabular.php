<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_concept_id">
  <?php if ('concept_id' == $sort[0]): ?>
    <?php echo link_to(__('Concept', array(), 'messages'), '@activity_concept_activity2concept?sort=concept_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Concept', array(), 'messages'), '@activity_concept_activity2concept?sort=concept_id&sort_type=asc') ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_activity_id">
  <?php if ('activity_id' == $sort[0]): ?>
    <?php echo link_to(__('Activity', array(), 'messages'), '@activity_concept_activity2concept?sort=activity_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Activity', array(), 'messages'), '@activity_concept_activity2concept?sort=activity_id&sort_type=asc') ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_bloom_evaluation">
  <?php if ('bloom_evaluation' == $sort[0]): ?>
    <?php echo link_to(__('evaluation', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_evaluation&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('evaluation', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_evaluation&sort_type=asc') ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_bloom_synthesis">
  <?php if ('bloom_synthesis' == $sort[0]): ?>
    <?php echo link_to(__('synthesis', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_synthesis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('synthesis', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_synthesis&sort_type=asc') ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_bloom_analysis">
  <?php if ('bloom_analysis' == $sort[0]): ?>
    <?php echo link_to(__('analysis', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_analysis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('analysis', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_analysis&sort_type=asc') ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_bloom_application">
  <?php if ('bloom_application' == $sort[0]): ?>
    <?php echo link_to(__('application', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_application&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('application', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_application&sort_type=asc') ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_bloom_understanding">
  <?php if ('bloom_understanding' == $sort[0]): ?>
    <?php echo link_to(__('understanding', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_understanding&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('understanding', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_understanding&sort_type=asc') ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_bloom_knowledge">
  <?php if ('bloom_knowledge' == $sort[0]): ?>
    <?php echo link_to(__('knowledge', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_knowledge&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('knowledge', array(), 'messages'), '@activity_concept_activity2concept?sort=bloom_knowledge&sort_type=asc') ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>