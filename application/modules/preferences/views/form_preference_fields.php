<h2><?php print $header;?></h2>

<?php print form_open($form_link);?>
<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									<?php print $header;?>
								</h3>
							</div>
							<div class="box-content nopadding">
<table class="table table-nomargin table-bordered">
	<?php foreach($field as $name => $data): ?>
	<tr>
	    <td>
       <label class="control-label">
	    <?php print form_label($data['label'],$name);?>
	    <?php
	    if (FALSE !== ($desc = $this->lang->line('preference_desc_'.$name)))
	    {
	        print "<small>".$desc."</small>";
	    }
	    ?>
		</label>
	    </td>
	    <td><?php print $data['input'];?></td>
	</tr>
	<?php endforeach; ?>
</table>
</div>
						</div>
					</div>
				</div>

                            <div class="form-actions">
									
										<button type="submit" class="btn btn-primary" class="positive" name="submit" value="submit"><?php print $this->lang->line('general_save')?></button>
										<button type="button" class="btn">Cancel</button>
									</div>
<?php print form_close();?>