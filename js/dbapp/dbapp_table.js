//redactorfy
function redactorfy(str) {

	temp = str.split("#");
	
	if($('#'+temp[1]).parents().hasClass('redactor_box')) {
	
		$('#'+temp[1]).redactor('destroy');
	
	} else {
	
		$('#'+temp[1]).redactor({
			paragraphy: false,
			imageUpload: _BASE_URL+'/redactorUpload/upImage',
			fileUpload: _BASE_URL+'/redactorUpload/upFile',
			buttons: ['html', 'formatting', 'bold', 'italic',
			'unorderedlist', 'orderedlist',
			'image', 'video', 'file', 'link', 'alignment', 'horizontalrule']
		});

	}

}


function doTableLink() {

	$('#table tr').each(function(){
	
		$(this).find('td .cell').each(function(){
		
			if( $(this).find('a').size() > 0 ) {
			
				$(this).addClass('cellWithLink');
											
			} else {
			
				$(this).removeClass('cellWithLink');
			
			}		
		})
	
	})

}

// IIFE - Immediately Invoked Function Expression
(function($, window, document) {
	var temp_index = 0;
	let permission = $("#permission").val();

	// The $ is now locally scoped 

   	// Listen for the jQuery ready event on the document
   	$(function() {

   		// The DOM is ready!

   	});
   	
   	//auto-resize for textareas
   	$('textarea').on("focus", function(){
   	
   		$(this).autosize();
   	
   	});
   	
   	//setup choses selects on initial new record popup
   	$('#newRecordForm select').chosen({width: '100%'});
   	
   	
   	//setup possible datepicker
   	// jQuery UI Datepicker
   	   	
   	$('#newRecordForm input.date').each(function(){
   	
   		$(this).datepicker({
   		   	showOtherMonths: true,
   		   	selectOtherMonths: true,
   		   	dateFormat: "yy-mm-dd",
   		   	yearRange: '-1:+1'
   		}).prev('.btn').on('click', function (e) {
   		   e && e.preventDefault();
   		   $(datepickerSelector).focus();
   		});	
   	
   	})
   	
	
	//colum array
		
	//draw table
	zeTable = $('#table').dataTable({
		
		"sDom": "<'row'<'col-md-4'l><'col-md-4'ri><'col-md-4'T>><'ze_wrapper't><'row'<'col-md-6'><'col-md-6'p>>",
		"oTableTools": {
			"sSwfPath": _BASE_URL_+"/swf/copy_csv_xls_pdf.swf",
			"aButtons": [
			            {
			                "sExtends": "copy",
			                "mColumns": _mColumns
			            },
			            {
			                "sExtends": "csv",
			                "sPdfOrientation": "landscape",
			                "sButtonText": "Exportar a Excel",
			                "mColumns": _mColumns
			            },
			            {
			                "sExtends": "pdf",
			                "sPdfOrientation": "landscape",
			                "sPdfSize": "landscape",
			                "sPdfSize": "TABLOID",
			                "mColumns": _mColumns
			            },
			            {
			                "sExtends": "print",

			                "mColumns": _mColumns
			            },

			        ]
		},
        "scrollX": true,
		"sPaginationType": "bootstrap",
		"iDisplayLength": 25,
		"aLengthMenu": [[10, 25, 50, 100, 500, 1000, 5000, 10000, 50000], [10, 25, 50, 100, 500, 1000, 5000, 10000, 50000]],
		"bProcessing": true,
		"bServerSide": true,
		"bAutoWidth": false,
		"sAjaxSource": _BASE_URL+"/table_datasource/"+_theDB+"/"+_theTable,
		"sServerMethod": "POST",
		
		"fnInitComplete": function(oSettings, json) {
		
			doTableLink();
		 	
		 	/*$('#table tr').each(function(){
		 	
		 		$(this).find('td .cell').each(function(){
		 		
		 			tempSpan = $("<span></span>").text($(this).text());
		 			
		 			$(this).empty();
		 			
		 			$(this).append(tempSpan);
		 			
		 			if( $(this).find('span').height() > 40 ) {
		 			
		 				$(this).css('width', $(this).width())
		 				$(this).css('text-overflow', 'ellipsis');
		 				$(this).css('white-space', 'nowrap');
		 			
		 			}
		 		
		 		})
		 	
		 	})*/
		
		},
		"aoColumnDefs": [
					{
					    // `data` refers to the data for the cell (defined by `mData`, which
					    // defaults to the column being worked with, in this case is the first
					    // Using `row[0]` is equivalent.
					    "mRender": function ( data, type, row ) {
					    	
					    	//alert(data)
					    	
					        return '<div>'+data+"</div>";
					        
					        //return $("div").append(data);
					    },
					    "sWidth": "40px",
					    "bSortable": false,
					    "aTargets": [0]
					},
		            {
		                // `data` refers to the data for the cell (defined by `mData`, which
		                // defaults to the column being worked with, in this case is the first
		                // Using `row[0]` is equivalent.
		                "mRender": function ( data, type, row ) {
		                	//alert(row)
							if(temp_index == 26) temp_index=0;
							temp_index++;
		                	if( data != null ) {			
								
		                		if(_tableUpdateAllowed == 'yes') {
									
									if(permission == 'Administrator') {										
										if(temp_index == 23 || temp_index == 24 || temp_index == 25 || temp_index == 26){
											return '<div class="mycheck" id="v' + data + '">'+data+"</div>";
										}
										else if(temp_index == 6) {
											return '<div class="cell razon" id="v' + data + '">'+data+"</div>";
										}
										else if(temp_index == 8) {
											return '<div class="cell fact" id="v' + data + '">'+data+"</div>";
										}
										else{
											return '<div class="cell" id="v' + data + '">'+data+"</div>";
										}
										
									}
									else if(permission == 'Contabilidad') {
										// if(row[23] == data || row[24] == data || row[25] == data || row[26] == data || (row[12] == data&&temp_index==12) || (row[13] == data&&temp_index==13) || (row[14] == data&&temp_index==14) || (row[15] == data&&temp_index==15) || (row[16] == data&&temp_index==16) || (row[17] == data&&temp_index==17) || (row[18] == data&&temp_index==18) || (row[19] == data&&temp_index==19) || (row[20] == data&&temp_index==20))
										if(temp_index == 12 || temp_index == 13 || temp_index == 14 || temp_index == 15 || temp_index == 16 || temp_index == 17 || temp_index == 18 || temp_index == 19 || temp_index == 20 || temp_index == 23 || temp_index == 24 || temp_index == 25 || temp_index == 26)
										{
											return '<div class="mycheck" id="v' + data + '">'+data+"</div>";
										}
										else if(temp_index == 6) {
											return '<div class="cell razon" id="v' + data + '">'+data+"</div>";
										}
										else if(temp_index == 8) {
											return '<div class="cell fact" id="v' + data + '">'+data+"</div>";
										}
										else{
											return '<div class="cell" id="v' + data + '">'+data+"</div>";
										}
									}
									else if(permission == 'Auditoría') {
										if(temp_index == 12 || temp_index == 13 || temp_index == 21 || temp_index == 22){
											return '<div class="cell" id="v' + data + '">'+data+"</div>";
										}
										// else if(temp_index == 6) {
										// 	return '<div class="cell razon" id="v' + data + '">'+data+"</div>";
										// }
										// else if(temp_index == 8) {
										// 	return '<div class="cell fact" id="v' + data + '">'+data+"</div>";
										// }
										else{
											return '<div>'+data+"</div>";
										}
									}
									else if(permission == 'Pagos') {
										if(temp_index == 14 || temp_index == 15 || temp_index == 16 || temp_index == 17 || temp_index == 18 || temp_index == 21 || temp_index == 22){
											return '<div class="cell" id="v' + data + '">'+data+"</div>";
										}
										// else if(temp_index == 6) {
										// 	return '<div class="cell razon" id="v' + data + '">'+data+"</div>";
										// }
										// else if(temp_index == 8) {
										// 	return '<div class="cell fact" id="v' + data + '">'+data+"</div>";
										// }
										else{
											return '<div>'+data+"</div>";
										}
									}
									else if(permission == 'Viaticos') {
										if(temp_index == 21 || temp_index == 22 || temp_index == 19){
											return '<div class="cell" id="v' + data + '">'+data+"</div>";
										}
										// else if(temp_index == 6) {
										// 	return '<div class="cell razon" id="v' + data + '">'+data+"</div>";
										// }
										// else if(temp_index == 8) {
										// 	return '<div class="cell fact" id="v' + data + '">'+data+"</div>";
										// }
										else{
											return '<div>'+data+"</div>";
										}
									}
		                    		
		                    	} else {
									return '<div>'+data+"</div>";
		                    	}
		                    
		                    } else {
		                    
		                    	return "";
		                    
		                    }
		                    
		                    //return $("div").append(data);
		                },
		                "bSortable": true,
		                "aTargets": [ '_all' ]
		            }
		        ]
	});
	$.extend( $.fn.dataTableExt.oStdClasses, {
		"sWrapper": "dataTables_wrapper form-inline"
	});
	
	//custom search field
	$('#zeTableSearch').keyup(function(){
	      zeTable.fnFilter( $(this).val() );
	});
		
	
	//redator editor for new cell note
	$('textarea.redactor').redactor();
	
	
	//tooltips
	$('.tt').tooltip();
	
	$('#revisionTable').on('mouseenter', '.tt', function(){
	
		$(this).tooltip('show');
	
	})
	
	
	//table crub tooltips
	$(".tableCrud a").live("mouseover", function(){
	
		$(this).tooltip('show')
	
	});
	
	
	//new record
	$('#newRecordModal_save').on("click", function(){
		$('#newRecordForm .my-alert').each(function(){ $(this).remove() })

		let razon = $("#new_Razon_social_proveedor").val();
		let fact_numo = $("#new_Fact_numero").val();
		
		$.ajax({
			url: _BASE_URL+"/db/spec_validation",
			type: 'post',
			data: {
				razon: razon,
				fact_numo: fact_numo,
				_token: _TOKEN
			},
			success: function(msg) {
				console.log(msg);
				if(msg == 'false') {
					$("#new_Razon_social_proveedor").focus();
					$("#new_Razon_social_proveedor").parent().append('<span class="my-alert" style="color: red;">proveedor y número de factura repetidos, favor de revisar</span>');
					$("#new_Fact_numero").parent().append('<span class="my-alert" style="color: red;">proveedor y número de factura repetidos, favor de revisar</span>');
				}
				else {
					//disable the button
					$("#newRecordModal_save").addClass('disabled').text('Creating record ...');
					
					//clear out old alerts
					$('#newRecordForm > .alert').each(function(){ $(this).remove() })
					$('#newRecordForm > .my-alert').each(function(){ $(this).remove() })
				
					$('#newRecordForm').submit();
				}
			}
		});
	})
		
	$('#newRecordForm').ajaxForm(function(responseText){
	
		newRecordFormResponse(responseText);
	
	});
	
	
	function newRecordFormResponse(responseText) {
	
		response = jQuery.parseJSON(responseText);
				
		//re-enable button
		$('#newRecordModal_save').removeClass('disabled').text('AGREGAR REGISTRO');
		
		
		//move to the top of the form
		window.location.hash = '#newRecordForm';
		
		
		if(response.response_code == 2) {
		
			$('#newRecordForm > .alert-error').each(function(){ $(this).remove() })
				
			$('#newRecordForm').prepend($(response.message));
				
			return false;
		
		}
		
		//replace the old form with a nice new empty one
		$('#newRecordFormWrapper > *').each(function(){
		
			$(this).remove();
		
		});
		
		$('#newRecordFormWrapper').append( $(response.newrecordform) ).find(":checkbox").checkbox();
		
		//setup the chosen select boxes
		$('#newRecordFormWrapper select').chosen({width: '100%'});
		
		//auto-resize for text areas
		$('#newRecordFormWrapper textarea').autosize();
		   			
		//setup possible datepicker
		// jQuery UI Datepicker
		var datepickerSelector = $('#newRecordFormWrapper').find('.date');
		
		$(datepickerSelector).datepicker({
			showOtherMonths: true,
		  	selectOtherMonths: true,
		  	dateFormat: "yy-mm-dd",
		  	yearRange: '-1:+1'
		}).prev('.btn').on('click', function (e) {
			e && e.preventDefault();
		   	$(datepickerSelector).focus();
		});
		
		$('#newRecordForm > .alert').each(function(){ $(this).remove() })
			
		$('#newRecordForm').prepend($(response.message));
		
		//ajaxify the new form
		$('#newRecordForm').ajaxForm(function(responseText){
		
			newRecordFormResponse(responseText);
		
		});
		
		
		//reload table
		zeTable.fnReloadAjax();
		
		doTableLink();
		
	}
	
	
	//delete a record
	$('#zeTable').on("click", ".crudDel", function(){
	
		if( confirm("Deleting a record can not be undone and might result in referencing data being deleted as well. Are you sure you want to continue?") ) {
		
			window.location = _BASE_URL+"/db/deleteRecord/"+_theDB+"/"+_theTable+"/"+$(this).attr('id');
		
		}
	
	});
	
	var _deleteTableNote;
	
	//delete table note
	$('#tableNotes').on("click", '.deleteTableNote', function(){
		
		if( confirm("Deleting this note can not be un-done. Are you sure you want to continue?") ) {
		
			//disable button
			$(this).addClass('disabled').text('Deleting ...');
			
			//save button for later
			_deleteTableNote = $(this);
		
			theID = $(this).attr('id');
			
			temp = theID.split("_");
			
			noteID = temp[1];
		
			$.ajax({
				type: "POST",
				dataType: "json",
				data: {_token: _TOKEN},
			  	url: _BASE_URL+"/tablenotes/deleteNote/"+_theDB+"/"+_theTable+"/"+noteID
			}).done(function(response){
			
				//re-enable button
				_deleteTableNote.removeClass('disabled').text('Delete');
			
				if(response.response_code == 2) {
				
					$('.thetablenotes > .alert-error').each(function(){ $(this).remove() })
						
					$('.thetablenotes').prepend($(response.message));
						
					return false;
				
				}
				
				
				//update the view
				$('#tableNotes > *').each(function(){ $(this).remove() });
				
				$('#tableNotes').append($(response.notes));
				
				
				//update the number notes as well
				//$('#columnModal_notesTotal').text( $('#columnEditNotes .alert').size() );
					
				
				//display success message
				$('.thetablenotes').prepend( $(response.success_message) );
				
				//window.location.hash = '#tableNotes';
				
				window.setTimeout(function() { $(".thetablenotes .alert-success").fadeOut(1000, function(){$(this).remove()}); }, 3000);
				
				$('#table_notesTotal').text( $('#tableNotes > .alert').size() );
			
			})
		
		}
	
	})
	
	
	//edit table notes
	$('#tableNotes').on("click", ".noteEdit", function(){
	
		//initialize textarea
		$(this).closest('.alert').find('.noteContent').redactor();
	
		//show/hide buttons
		$(this).closest('.details').hide();
		$(this).closest('.details').next().show();
	
	});
	
	//cancel edit column note
	$('#tableNotes').on("click", ".table_canceleditnote", function(){
	
		//disable textarea
		$(this).closest('.alert').find('.noteContent').redactor('destroy');
		
		$('#note_'+$(this).attr('rel')).redactor('destroy');
		
		$(this).closest('.row').hide();
		
		$(this).closest('.row').prev().fadeIn();
	
	});
	
	
	var _table_savenote;
	
	//save update table note
	$('#tableNotes').on("click", ".table_savenote", function(){
	
		if( $(this).closest('.alert').find('.noteContent').redactor('get') != '' ) {
		
			//disable button
			$(this).addClass('disable').text('Saving note ...');
			
			//save button for later
			_table_savenote = $(this);
		
			theID = $(this).attr('id');
			
			temp = theID.split("_");
			
			noteID = temp[1];
			
			$.ajax({
				type: "POST",
				dataType: "json",
				data: {note: $(this).closest('.alert').find('.noteContent').redactor('get'), _token: _TOKEN},
			  	url: _BASE_URL+"/tablenotes/updateNote/"+_theDB+"/"+_theTable+"/"+noteID
			}).done(function(response){
			
				//re-enable button
				_table_savenote.removeClass('disabled').text('Save note');
			
				if(response.response_code == 2) {
				
					$('#thetablenotes > .alert-error').each(function(){ $(this).remove() })
						
					$('#thetablenotes').prepend($(response.message));
						
					return false;
				
				}
				
				//add notes to the view
				
				$('#tableNotes > *').each(function(){ $(this).remove() });
				
				$('#tableNotes').append($(response.notes));
				
				
				//update the number notes as well
				//$('#columnModal_notesTotal').text( $('#columnEditNotes .alert').size() );
				
				
				//display success message
				$('.thetablenotes').prepend( $(response.success_message) );
				
				window.location.hash = '#tableNotes';
				
				window.setTimeout(function() { $(".thetablenotes .alert-success").fadeOut(1000, function(){$(this).remove()}); }, 3000);
			
			})
		
		} else {
		
			alert('Please make sure the note field is not empty.')
		
		}
	
	});
	
	
	//delete table link
	$('a#deleteTableLink').on("click", function(){
	
		if( confirm("Are you sure you want to permanently delete the entire table?") ) {
		
			return true;
		
		} else {
		
			return false;
		
		}
		
	})
	
	
	
	//select dropdown
	$("select.selector").selectpicker({style: 'btn-primary', menuStyle: 'dropdown-inverse'});
	
	
	//advanced search panels
	
	$('#advancedSearch_accordion').on('click', '.panel-title > a', function(e){
	
		e.preventDefault();
	
		$(this).closest('.panel-heading').next().find('.panel-body').slideToggle();
	
	})
	
	$('button#toggleAdvancedSearch').click(function(){
	
		$('#advancedSearchForm_wrapper').slideToggle();
	
	})
	
	//hide advanced search
	$('a#hideAdvancedSearch').click(function(e){
	
		e.preventDefault();
		
		$('#advancedSearchForm_wrapper').slideUp();
	
	})
	
	
	$('a#addSearchItem').click(function(e){
	
		e.preventDefault();
		
		newItem = $("#newSearchItem_templ").clone();
		
		newItem.attr('id', '');
		newItem.css('display', 'block');
		
		newItem.appendTo("#advancedSearch_accordion");
		
		newItem.find('.btn-group.select').each(function(){ $(this).remove(); });
		newItem.find('select.selector').selectpicker({style: 'btn-primary', menuStyle: 'dropdown-inverse'});
		
		$('#advancedSearch_accordion .panel:not(#newSearchItem_templ)').each(function(index){
		
			$(this).find('.item').text("B�squeda nivel 1 "+(index+1));
			
			$(this).find('.panel-title a').attr('href', '#as_collapse'+(index+1));
			
			$(this).find('.panel-collapse').attr('id', 'as_collapse'+(index+1));
			
			//$(this).find('.panel-collapse').removeClass('in');
		
		});
				
	})
	
	//remove AS items
	
	$('#advancedSearchForm').on('click', 'a.removeAsItem', function(e){
	
		e.preventDefault();
		
		$(this).closest('.panel').remove();
		
		$('#advancedSearch_accordion .panel:not(#newSearchItem_templ)').each(function(index){
		
			$(this).find('.item').text("B�squeda nivel "+(index+1));
			
			$(this).find('.panel-title a').attr('href', '#as_collapse'+(index+1));
			
			$(this).find('.panel-collapse').attr('id', 'as_collapse'+(index+1));
			
			//$(this).find('.panel-collapse').removeClass('in');
		
		});
	
	})
	   	

	}(window.jQuery, window, document));
	// The global jQuery object is passed as a parameter