<style type="text/css">
      .labelc{
           font-size: 17px;
    text-transform: capitalize!important;
    font-weight: 600;
    margin-bottom: -3px;
    margin-top: 11px;
    color: #7f7f7f;
      }
</style>

<form action="<?php echo site_url('db/updateRecord/'.$theDB."/".$theTable."/".$indexName."/".$recordID);?>" method="post" id="recordForm">

	<input type="hidden" name="_token" value="<?php echo $this->session->userdata('session_id');?>">

	<div class="panel-group margin-bottom-15" id="recordDetails">
	
		<?php
			$counter = 0;
		?>

		<?php foreach($recordData as $field=>$value):?>
		
		<?php if($field == 'Updated_By'):?>
		<input type="hidden" name="<?php echo $field;?>" value="<?php echo $this->session->userdata('username'); ?>" id="new_<?php echo $field;?>">
		<?php elseif($field == 'Updated_At'):?>
		<input type="hidden" name="<?php echo $field;?>" value="<?php echo date_default_timezone_get(); ?>" id="new_<?php echo $field;?>">
		<?php elseif($field == 'Created_By'):?>
		<input type="hidden" id="new_<?php echo $field;?>">
		<?php elseif($field == 'Created_At'):?>
		<input type="hidden" id="new_<?php echo $field;?>">
		<?php else:?>
		<?php if($counter >= 0):?>
    		
      			
      				<?php if( isset($value['additional_data']['index']) && $value['additional_data']['index'] != 'none' ):?>
      				<!-- <div class="alert alert-error">
      					<button type="button" class="close fui-cross" data-dismiss="alert"></button>
      				  	<p>
      				  		<?php printf( $this->lang->line('table_popup_cell_message_index'), $value['additional_data']['index'] )?>
      				  	</p>
      				  	<?php if(isset($value['additional_data']['auto_increment'])):?>
      				  	<p>
      				  		<?php echo $this->lang->line('table_popup_cell_message_autoincrement')?>
      				  	</p>
      				  	<?php endif;?>
      				</div> -->
      				<?php endif;?>
      			      			
      				<?php if( !isset($value['reference_table']) ):?>
      				      			
      					<?php if(strlen($value['val']) > 255):?>
      			<label class="labelc"><?php echo $field;?></label>
      						<textarea name="<?php echo $field;?>" class="form-control" rows="3" placeholder="Enter your text here" id="<?php echo $field?>-text" placeholder="Enter your text here"><?php echo $value['val'];?></textarea>
      						<label class="checkbox" for="html_<?php echo $field;?>">
      							<input type="checkbox" value="" id="html#<?php echo $field;?>text" data-toggle="checkbox" onchange="redactorfy('#<?php echo $field?>-text')">
      				  			<?php echo $this->lang->line('shared_html_editor_please')?>
      						</label>
      			
      					<?php else:?>
      					
      						<?php
      						
      							//check if this is a date field
      						
      							$temp = explode("-", $value['val']);
      							
      							if( count($temp) == 3 && strlen($temp[0]) == 4 && strlen($temp[1]) == 2 && strlen($temp[2]) == 2 ):
      						
      						?>

                                    <label class="labelc"><?php echo $field;?></label>
      						
      							<div class="input-group">
      								<span class="input-group-btn">
      							  		<button class="btn" type="button"><span class="fui-calendar"></span></button>
      							  	</span>
      							  	<input type="text" name="<?php echo $field;?>" class="form-control date" value="<?php echo $value['val'];?>" id="<?php echo $field?>-text" style="position: relative; z-index: 2000;">
      							</div>
      							
      						<?php elseif( isset($value['additional_data']['select']) ):?>
      						
      							<?php
      								$optionArray = json_decode($value['additional_data']['select'], true);
      							?>
      							
                                                <label class="labelc"><?php echo $field;?></label>
      							<select name="<?php echo $field;?>" id="<?php echo $field?>-text">
      								<?php foreach( $optionArray as $option ):?>
      								<option <?php if( $value['val'] == $option ):?>selected<?php endif;?> value="<?php echo $option;?>"><?php echo $option;?></option>
      								<?php endforeach;?>
      							</select>
      						
      						<?php else:?>
      			<label class="labelc"><?php echo $field;?></label>
      							<textarea <?php if(isset($value['additional_data']['auto_increment'])):?>disabled<?php endif;?> name="<?php echo $field;?>" class="form-control" rows="1" placeholder="Enter your text here" id="<?php echo $field?>-text"><?php echo $value['val'];?></textarea>
      							<?php if(!isset($value['additional_data']['auto_increment'])):?>
      							<label class="checkbox" for="html_<?php echo $field;?>">
      							<input type="checkbox" value="" id="html#<?php echo $field;?>text" data-toggle="checkbox" onchange="redactorfy('#<?php echo $field?>-text')">
      				  		<?php echo $this->lang->line('shared_html_editor_please')?>
      							</label>
      							<?php endif;?>
      						
      						<?php endif;?>
      			
      					<?php endif;?>
      				
      				<?php else:?>
      				      		<label class="labelc"><?php echo $field;?></label>		
      					<select name="<?php echo $field;?>" id="<?php echo $field?>-text">
      						<?php foreach( $value['referenced_data'] as $row ):?>
      						<option value="<?php echo $row[$value['reference_table_key']]?>" <?php if( $row[$value['reference_table_key']] == $value['val'] ):?>selected<?php endif;?>><?php echo $row[$value['use_column']]?></option>
      						<?php endforeach;?>
      					</select>
      				
      				<?php endif;?>
        		
      			
    		
		<?php endif;?>
		<?php endif;?>
		<?php $counter++;?>
		
		<?php endforeach;?>
		
	</div><!-- .panel-group -->

</form>