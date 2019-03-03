<form method="post" id="recordForm">

	<input type="hidden" name="_token" value="<?php echo $this->session->userdata('session_id');?>">

	
	<style type="text/css">
		ul.details, .stdpad ul.details {
    list-style: none;
    margin: 0;
    padding: 0;
}

ul.details li {
    padding: 7px 10px;
    border-bottom: 1px solid #ECECEC;
    min-height: 20px;

    font-weight: 400;
}

.details > li > span:first-child {
    display: inline-block;
    margin-bottom: 2px;
    color: #A4A5A9;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: .3px;
}
	</style>
		<?php
			$counter = 0;
		?>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.12.4.js"></script>

           <link rel="stylesheet" href="<?php echo base_url();?>css/buttons.dataTables.min.css">
    
<script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/buttons.flash.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/buttons.print.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('#tablaoculta').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'TABLOID'
            }
        ]
    } );
} );
</script>

<style type="text/css">
	#tablaoculta{
    
    display: none;
}

#tablaoculta_filter{
	display: none;
}

#tablaoculta_info{
	display: none;
}

#tablaoculta_paginate{
	display: none;
}
</style>

<table class="display nowrap" style="width:100%" id="tablaoculta">
	<thead>
            <tr>
            	<?php foreach($recordData as $field=>$value):?>
                <th><?php echo $field;?></th>
                <?php endforeach;?>
            </tr>
        </thead>
        <tbody>
        <tr>
        	<?php foreach($recordData as $field=>$value):?>
                <td><?php echo $value['val'];?></td>
                 <?php endforeach;?>
            </tr>
        </tbody>
    </table>
<table class="table table-striped table-hover table-reflow" id="vertabla">
		<?php foreach($recordData as $field=>$value):?>
		
		<?php if($counter > 0):?>
		
    		<tr>
                    <th ><strong style="text-transform: capitalize;"><?php echo $field;?>: </strong></th>
                    <td> <?php echo $value['val'];?> <td>
                </tr>
		<?php endif;?>
		
		<?php $counter++;?>
		
		<?php endforeach;?>

	</table>

</form>