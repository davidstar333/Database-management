// IIFE - Immediately Invoked Function Expression
(function($, window, document) {

	let razon = false;
	let razon_value;
	let fact = false;
	let fact_value;
	let _theUdate_By;
	let _theUdate_At;


	// The $ is now locally scoped 

   	// Listen for the jQuery ready event on the document
   	$(function() {

   		// The DOM is ready!

   	});
   	
	   
	$('#fieldModal').on('hidden.bs.modal', function () {
		razon = false;
		fact = false;
		razon_value = "";
		fact_value = "";
	});
   	
   	
   	//load a single cell
   	$('#zeTable').on("click", "div.cell", function(){
		razon_value = $(this).parent().parent().find('.razon').text();
		fact_value = $(this).parent().parent().find('.fact').text();
		if( $(this).attr('class') == 'cell razon' ) {
			razon = true;
		}
		else if( $(this).attr('class') == 'cell fact' ) {
			fact =true;
		}
   	   	
		   _theDIV = $(this);
		   _theUdate_By = $(this).parent().parent().find('td').eq(25).find('div');
		   _theUdate_At = $(this).parent().parent().find('td').eq(26).find('div');
		//    console.log(_theUdate_By);
   		//column name
   		fieldName = $(this).parent().closest('table').find('th').eq($(this).parent().index()).text();
   		_fieldName = fieldName;
   		
   		//row index name
   		temp = $(this).parent().closest('tr').find('td').eq(0).find('span.recordID').attr('id');
   		ttemp = temp.split("_");
   		   		
   		if( ttemp.length == 3 ) {
   		
   			rowIndex = ttemp[1]+"_"+ttemp[2];
   		
   		} else {
   		
   			rowIndex = ttemp[1];
   		
   		}
   		   		
   		_rowIndex = rowIndex;
   		   		    	       		    	    
   		//only allow if this is NOT the first column
   		
   		if($(this).parent().index() != 0) {
   			
   			//update modal header
   			$('#fieldModalLabel span').text(fieldName);
   			
   			//empty out the tab
   			$('#cellWrapper > *').each(function(){
   			
   				$(this).remove();
   			
   			})
   			
   			//get the field data
   			$.ajax({
   				type: "GET",
   				dataType: "json",
   			  	url: _BASE_URL+"/db/getCell/"+_theDB+"/"+_theTable+"/"+_fieldName+"/"+_rowIndex
   			}).done(function(response){
   			
   				if(response.response_code == 2) {
   				
   					$('#fieldModalLabel_tab1 > .alert-error').each(function(){ $(this).remove() })
   						
   					$('#fieldModalLabel_tab1').prepend($(response.message));
   					
   					return false;
   					
   					return false;
   				
   				}
   								
   				$('#cellWrapper').append( $(response.cell) )
   				
   				
   				//redactorfy?
   				if(/<[a-z][\s\S]*>/i.test( $('#cellWrapper #redactorArea').val() )) {
   				
   					//data contains HTML
   					$('#cellWrapper #redactorArea').redactor({
   						paragraphy: false,
   						imageUpload: _BASE_URL+'/redactorUpload/upImage',
   						fileUpload: _BASE_URL+'/redactorUpload/upFile',
   						buttons: ['html', 'formatting', 'bold', 'italic',
   						'unorderedlist', 'orderedlist',
   						'image', 'video', 'file', 'link', 'alignment', 'horizontalrule']
   					});
   					
   					$('#cellWrapper input[type="checkbox"]').prop('checked', true)
   				
   				}
   				
   				
   				//setup the chosen select boxes
   				$('#cellWrapper select').chosen({width: '100%'});
   				
   				//setup the checkboxes
   				$('#cellWrapper').find(':checkbox').checkbox();
   				
   				//setup possible datepicker
   				// jQuery UI Datepicker
   				var datepickerSelector = '#datepicker-99';
   				
   				$(datepickerSelector).datepicker({
   					showOtherMonths: true,
   				  	selectOtherMonths: true,
   				  	dateFormat: "yy-mm-dd",
   				  	yearRange: '-1:+1'
   				}).prev('.btn').on('click', function (e) {
   				  e && e.preventDefault();
   				  $(datepickerSelector).focus();
   				});
   				
   				//auto-resize for text boxes
   				$('#cellWrapper textarea').autosize();
   			
   			});
   			
   			//remove old notes
   			$('.cellnotes > div:not(#templ_cellnote)').each(function(){
   			
   				$(this).remove();
   			
   			})
   			
   			//get the cell notes for this field
   			$.ajax({
   				type: "GET",
   				dataType: "json",
   			  	url: _BASE_URL+"/columnnotes/getColumnNotes/"+_theDB+"/"+_theTable+"/"+_fieldName
   			}).done(function(response){
   			
   				if(response.response_code == 2) {
   				
   					alert(response.error);
   					
   					return false;
   				
   				}
   								
   				//add notes to the view
   				
   				$('#columnNotes > *').each(function(){ $(this).remove() });
   				
   				$('#columnNotes').append($(response.notes));
   				
   				
   				//update the number notes as well
   				$('#fieldModal_notesTotal').text( $('#columnNotes .alert').size() );
   			
   			});
   			
   			//show modal;
   			$('#fieldModal').modal();
   			    	    	
   			//revisions
   			
   			$.ajax({
   				type: "GET",
   				dataType: "json",
   			  	url: _BASE_URL+"/revisions/"+_theDB+"/"+_theTable+"/"+_fieldName+"/"+_tablePrimaryKey+"/"+_rowIndex
   			}).done(function(response){
   			
   				if(response.response_code == 2) {
   				
   					$('#fieldModalLabel_tab2 > .alert-error').each(function(){ $(this).remove() })
   						
   					$('#fieldModalLabel_tab2').prepend($(response.message));
   						
   					return false;
   				
   				}
   				
   				//remove old view stuff
   				$('#fieldModalLabel_tab2 > *').each(function(){
   				
   					$(this).remove();
   				
   				})
   				
   				//append new revision list
   				$('#fieldModalLabel_tab2').append($(response.revisions));
   				
   				//update the number of revisions
   				$('#fieldModal_revisionsTotal').text( $('#revisionTable tbody tr').size() );
   				
   			});
   						
   		}
   	
   	})
   	
   	var _theRow = '';
   	
   	//field saving
   	$('#fieldModal_save').click(function(){
		let elem = $(this);
		if(fact) {
			let razon_numo = razon_value;
			let fact_numo = $("#redactorArea").val();
			
			$.ajax({
				url: _BASE_URL+"/db/spec_validation",
				type: 'post',
				data: {
					razon: razon_numo,
					fact_numo: fact_numo
				},
				success: function(msg) {
					console.log(msg);
					if(msg == 'false') {
						$("#redactorArea").parent().append('<span class="my-alert" style="color: red;">proveedor y número de factura repetidos, favor de revisar</span>');
						return false;
					}
					else {
						$(".my-alert").remove();
						saveColumn(elem);
					}
				}
			});
		}
		else if(razon) {
			let razon_numo = $("#redactorArea").val();
			let fact_numo = fact_value;
			
			$.ajax({
				url: _BASE_URL+"/db/spec_validation",
				type: 'post',
				data: {
					razon: razon_numo,
					fact_numo: fact_numo
				},
				success: function(msg) {
					console.log(msg);
					if(msg == 'false') {
						$("#redactorArea").parent().append('<span class="my-alert" style="color: red;">proveedor y número de factura repetidos, favor de revisar</span>');
						return false;
					}
					else {
						$(".my-alert").remove();
						saveColumn(elem);
					}
				}
			});
		}
		else {
			saveColumn(elem);
		}
	});
	   
	function saveColumn(elem) {
		elem.attr('disabled', true).text("Saving changes ...");
		isFK = 0;//is FK field or not?
   		
   		//does redactor exist?
   		if($('#fieldModalLabel_tab1').find('.redactor_box').size() > 0) {
   		
   			_fieldValue = $('#redactorArea').redactor('get');
   			   		
   		} else {//nope
   		
   			if( $('#cellWrapper textarea').size() > 0 ) {//regular textarea
   			
   				_fieldValue = $('#cellWrapper textarea').val();
   			
   			} else {//dropdown select for FK values
   				
				isFK = 1;
				
   				_fieldValue = $('#cellWrapper [name=val]').val();
				maskVal = $('#cellWrapper [name=val] option:checked').text();
				   			
   			}
   		}
   		
   		$.ajax({
   			type: "POST",
   			dataType: "json",
   		  	url: _BASE_URL+"/db/saveField/"+_theDB+"/"+_theTable+"/"+_fieldName,
   		  	data: { val: _fieldValue, indexName: _tablePrimaryKey, index: _rowIndex, _token: _TOKEN}
   		}).done(function(response){
   		
   			//re-enable the button
   			$('#fieldModal_save').removeAttr('disabled').text("Guardar cambios");
   		
   			if(response.response_code == 2) {
   				
   				$('#fieldModalLabel_tab1 > .alert-error').each(function(){ $(this).remove() })
   					
   				$('#fieldModalLabel_tab1').prepend($(response.message));
   					   				
   			
   			} else if(response.response_code == 1) {
   			
   				//update table cell
   				
				if( isFK == 1 ) {
				
					_theDIV.html(maskVal);
					
				} else {
				
					   _theDIV.html(_fieldValue);
					//    console.log($("#sess_user").val());
						let ttt = $("#sess_user").val();
					   _theUdate_By.html(ttt);
					   _theUdate_At.html(response.date);
					
				}
   				
   				doTableLink();
   				   			
   				//show message
   				$('#fieldModal .tab-pane:first').prepend($(response.success_message));
   			
   				//auto destruct the success message
   				window.setTimeout(function() { $("#fieldModalLabel_tab1 > .alert").fadeOut(1000, function(){$(this).remove()}); }, 3000);
   				
   				window.location.hash = '#fieldModalLabel_tab1';
   				
   				
   				//update the revisions table
   				
   				$('#fieldModalLabel_tab2 > *').each(function(){
   					$(this).remove();
   				})
   				
   				$('#fieldModalLabel_tab2').append($(response.revisions));
   				
   				//update the number of revisions
   				$('#fieldModal_revisionsTotal').text( $('#revisionTable tbody tr').size() );
   				
   			
   			}
   		
   		})
	}
   	
   	//remove revision buttons
   	   	   	
   	fieldModal.on("click", "button.removeRevision", function(){
   	
   		if(confirm("Removing this revision CAN NOT BE UNDONE. Are you sure about this?")) {
   		
   			_theDeleteRevisionButton = $(this);
   		
   			$.ajax({
   				type: "GET",
   				dataType: "json",
   			  	url: _BASE_URL+"/revisions/removeRevision/"+$(this).attr('id')
   			}).done(function(response){
   			
   				if(response.response_code == 2) {
   				
   					$('#fieldModalLabel_tab2 > .alert-error').each(function(){ $(this).remove() })
   						
   					$('#fieldModalLabel_tab2').prepend($(response.message));
   					
   					return false;
   				
   				}
   			
   				//show message
   				$('#fieldModalLabel_tab2').prepend($(response.success_message));
   				
   				//auto destruct the success message
   				window.setTimeout(function() { $("#fieldModalLabel_tab2 > .alert").fadeOut(1000, function(){$(this).remove()}); }, 3000);
   				
   				window.location.hash = '#fieldModalLabel_tab2';
   				
   				//update the revisions table
   				
   				_theDeleteRevisionButton.closest('tr').fadeOut(function(){
   					$(this).remove();
   				})
   				
   			})
   		
   		}
   	
   	})
   	
   	var _restoreRevisionButton;
   	
   	//restore revision buttons
   	fieldModal.on("click", "button.restoreRevision", function(){
   	
   		if(confirm("Restoring this revision will result in the current value of the field being overwritten. Continue?")) {
   		
   			//disable button
   			$(this).attr('disabled', true).text("Working");
   			
   			//save the button element
   			_restoreRevisionButton = $(this)
   		
   			$.ajax({
   				type: "GET",
   				dataType: "json",
   			  	url: _BASE_URL+"/revisions/restoreRevision/"+_theDB+"/"+$(this).attr('id')
   			}).done(function(response){
   			
   				//re-enable the button
   				_restoreRevisionButton.removeAttr('disabled').text("Restore");
   			
   				if(response.response_code == 2) {
   				
   					$('#fieldModalLabel_tab2 > .alert-error').each(function(){ $(this).remove() })
   						
   					$('#fieldModalLabel_tab2').prepend($(response.message));
   					
   					return false;
   				
   				}
   				
   			
   				//show message
   				$('#fieldModalLabel_tab2').prepend($(response.success_message));
   				
   				//auto destruct the success message
   				window.setTimeout(function() { $("#fieldModalLabel_tab2 > .alert").fadeOut(1000, function(){$(this).remove()}); }, 3000);
   				
   				window.location.hash = '#fieldModalLabel_tab2';
   				
   				window.setTimeout(function() { $("#restoreRevisionAlert").fadeOut(1000, function(){$(this).remove()}); }, 3000);
   				
   				//update the revisions table
   				$('#fieldModalLabel_tab2 > *').each(function(){
   					$(this).remove();
   				});
   				
   				$('#fieldModalLabel_tab2').append($(response.revisions));
   				
   				//update the number of revisions
   				$('#fieldModal_revisionsTotal').text( $('#revisionTable tbody tr').size() )
   				
   				
   				//update data view
   				_theDIV.html(response.theValue);
   				
   				doTableLink();
   				
   				$('#redactorArea').val(response.theValue)
   			
   			})
   		
   		}
   	
   	});
   	
   	//field modal save note
   	fieldModal.on("click", "#fieldModal_addnote", function(){
   	
   		if( $('#fieldModal_newnote').redactor('get') != '' ) {
   		
   			//disable button
   			$(this).attr('disabled', true).text("Adding new note ...");
   		
   			$.ajax({
   				type: "POST",
   				dataType: "json",
   				data: {note: $('#fieldModal_newnote').redactor('get'), _token: _TOKEN},
   			  	url: _BASE_URL+"/columnnotes/newNote/"+_theDB+"/"+_theTable+"/"+_fieldName
   			}).done(function(response){
   			
   				//re-enable the button
   				$('#fieldModal_addnote').removeAttr('disabled').text("Add new note");
   			
   				if(response.response_code == 2) {
   				
   					$('#fieldModalLabel_tab3 > .alert-error').each(function(){ $(this).remove() })
   						
   					$('#fieldModalLabel_tab3').prepend($(response.message));
   					   						
   					return false;
   				
   				}
   				
   				//add notes to the view
   				
   				$('#columnNotes > *').each(function(){ $(this).remove() });
   				
   				$('#columnNotes').append($(response.notes));
   				
   				
   				//update the number notes as well
   				$('#fieldModal_notesTotal').text( $('#columnNotes .alert').size() );
   				
   				
   				//display success message
   				$('#fieldModalLabel_tab3').prepend( $(response.success_message) );
   				
   				window.location.hash = '#fieldModalLabel_tab3';
   				
   				window.setTimeout(function() { $("#fieldModalLabel_tab3 .alert-success").fadeOut(1000, function(){$(this).remove()}); }, 3000);
   				
   				
   			})
   		
   		}
   	
   	});
   	
   	
   	//delete column single note
   	$('#fieldModal').on("click", ".deleteColumnNote", function(){
   	
   		if( confirm("Deleting this note can not be un-done. Are you sure you want to continue?") ) {
   	
   			theID = $(this).attr('id');
   		
   			temp = theID.split("_");
   		
   			noteID = temp[1];
   		
   			$.ajax({
   				type: "POST",
   				dataType: "json",
   				data: {_token: _TOKEN},
   		  		url: _BASE_URL+"/columnnotes/deleteNote/"+_theDB+"/"+_theTable+"/"+_fieldName+"/"+noteID
   			}).done(function(response){
   		
   				if(response.response_code == 2) {
   			
   					$('#fieldModalLabel_tab3 > .alert-error').each(function(){ $(this).remove() })
   						
   					$('#fieldModalLabel_tab3').prepend($(response.message));
   						
   					return false;
   			
   				}
   			
   				//update the view
   				$('#columnNotes > *').each(function(){ $(this).remove() });
   			
   				$('#columnNotes').append($(response.notes));
   			
   			
   				//update the number notes as well
   				$('#fieldModal_notesTotal').text( $('#columnNotes .alert').size() );
   				
   			
   				//display success message
   				$('#fieldModalLabel_tab3').prepend( $(response.success_message) );
   			
   				window.location.hash = '#fieldModalLabel_tab3';
   			
   				window.setTimeout(function() { $("#fieldModalLabel_tab3 .alert-success").fadeOut(1000, function(){$(this).remove()}); }, 3000);
   		
   			})
   		
   		}
   		
   		return false;
   		
   	
   	})
   	
   	
   	//efit column notes
   	$('#fieldModal').on("click", ".noteEdit", function(){
   	
   		//initialize textarea
   		$(this).closest('.alert').find('.noteContent').redactor();
   	
   		//show/hide buttons
   		$(this).closest('.details').hide();
   		$(this).closest('.details').next().show();
   	
   	});
   	
   	
   	//cancel edit column note
   	$('#fieldModal').on("click", ".fieldModal_canceleditnote", function(){
   	
   		//disable textarea
   		$(this).closest('.alert').find('.noteContent').redactor('destroy');
   		
   		$('#note_'+$(this).attr('rel')).redactor('destroy');
   		
   		$(this).closest('.row').hide();
   		
   		$(this).closest('.row').prev().fadeIn();
   	
   	});
   	
   	var _saveNoteButton;
   	
   	//save update column note
   	$('#fieldModal').on("click", ".fieldModal_savenote", function(){
   	
   		if( $(this).closest('.alert').find('.noteContent').redactor('get') != '' ) {
   		
   			//disable button
   			$(this).attr('disabled', true).text("Saving note ...");
   			
   			//save button for later
   			_saveNoteButton = $(this)
   		
   			theID = $(this).attr('id');
   			
   			temp = theID.split("_");
   			
   			noteID = temp[1];
   			
   			$.ajax({
   				type: "POST",
   				dataType: "json",
   				data: {note: $(this).closest('.alert').find('.noteContent').redactor('get'), _token: _TOKEN},
   			  	url: _BASE_URL+"/columnnotes/updateNote/"+_theDB+"/"+_theTable+"/"+_fieldName+"/"+noteID
   			}).done(function(response){
   			
   				_saveNoteButton.removeAttr('disabled').text("Save note");
   			
   				if(response.response_code == 2) {
   				
   					$('#fieldModalLabel_tab3 > .alert-error').each(function(){ $(this).remove() })
   						
   					$('#fieldModalLabel_tab3').prepend($(response.message));
   						
   					return false;
   				
   				}
   				
   				//add notes to the view
   				
   				$('#columnNotes > *').each(function(){ $(this).remove() });
   				
   				$('#columnNotes').append($(response.notes));
   				
   				
   				//update the number notes as well
   				$('#fieldModal_notesTotal').text( $('#columnNotes .alert').size() );
   				
   				
   				//display success message
   				$('#fieldModalLabel_tab3').prepend( $(response.success_message) );
   				
   				window.location.hash = '#fieldModalLabel_tab3';
   				
   				window.setTimeout(function() { $("#fieldModalLabel_tab3 .alert-success").fadeOut(1000, function(){$(this).remove()}); }, 3000);
   			
   			})
   		
   		} else {
   		
   			alert('Please make sure the note field is not empty.')
   		
   		}
   	
   	});
   	
   	   	
   	//field modal event
   	fieldModal.on('show.bs.modal', function (e) {
   		
   		//show first tab when modal opens
   		$(this).find('.nav-tabs a:first').tab('show');
   		
   		$('#fieldModal .modal-footer > *:not(#fieldModal_close)').hide();
   		
   		//first tab's open, show the correct button
   		$('#fieldModal .modal-footer > label, #fieldModal .modal-footer #fieldModal_save').show();
   		
   	})
   	
   	//field modal tab events
   	$('#fieldModal .nav-tabs a').on('show.bs.tab', function (e) {
   	
   		//default hide all except close button
   		$('#fieldModal .modal-footer > *:not(#fieldModal_close)').hide();
   	
   		if($(e.target).parent().index() == 0) {
   		
   			$('#fieldModal .modal-footer > label, #fieldModal .modal-footer #fieldModal_save').show();
   		
   		}
   		
   		if($(e.target).parent().index() == 2) {
   		
   			$('#fieldModal .modal-footer #fieldModal_addnote').show();
   		
   		}
   		
   	});
   	
   	
   	
   	
 }(window.jQuery, window, document));
 // The global jQuery object is passed as a parameter