<script type="text/javascript">
/* <![CDATA[ */
$(document).ready(function() {

  switch($('#activity_resource_type').val())
  {
    case 'upload':
      $('.sf_admin_form_field_resource_uri_external').hide();
      break;
    case 'external':
      $('.sf_admin_form_field_resource_uri_upload').hide();
      break;
  }
  
  $('#activity_resource_type').change(function(){
    $('.sf_admin_form_field_resource_uri_upload').toggle();
    $('.sf_admin_form_field_resource_uri_external').toggle();
    return false;
  });
});
/* ]]> */
</script>
