		<div id="main"> <!-- Main Content Section with everything -->
			<!-- Page Head -->
			<div class="container-fluid">
				<div class="page-header">
		<div class="breadcrumbs" style="margin-top:50px;">
					
							 <?php print $this->bep_site->get_breadcrumb();?>
				
				</div>
<div id="content">
    <a name="top"></a>
    <?php print displayStatus();?>
    <?php print (isset($content)) ? $content : NULL; ?>
    <?php
    if( isset($page)){
    if( isset($module)){
            $this->load->view($module."/".$page);
        } else {
            $this->load->view($page);
        }}
    ?>
    <br style="clear: both" />
</div>

		