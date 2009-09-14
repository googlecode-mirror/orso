<td class="sf_admin_text sf_admin_list_td_concept_id">
  <?php echo link_to($activity_concept->getConceptName(), 'activity_concept_activity2concept_edit', $activity_concept) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_activity_id">
  <?php echo link_to($activity_concept->getActivityName(), 'activity_concept_activity2concept_edit', $activity_concept) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_weight">
  <?php echo $activity_concept->getBloomKnowledge() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_weight">
  <?php echo $activity_concept->getBloomUnderstanding() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_weight">
  <?php echo $activity_concept->getBloomApplication() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_weight">
  <?php echo $activity_concept->getBloomAnalysis() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_weight">
  <?php echo $activity_concept->getBloomSynthesis() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_weight">
  <?php echo $activity_concept->getBloomEvaluation() ?>
</td>
