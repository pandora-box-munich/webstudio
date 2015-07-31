function setNigths() { 
	var date_from = $('#date_from').val().replace(/-/g, '/');
	var date_from = new Date(date_from+' 4:00:00');
	var date_to = $('#date_to').val().replace(/-/g, '/');	
	var date_to = new Date(date_to+' 12:00:00');
	var diff = Math.floor((date_to.getTime() - date_from.getTime()) / 24 / 60 / 60 / 1000);
	$('#nights').val(diff);
}

function toSetFinal() {
	var date_from = $('#date_from').val().replace(/-/g, '/');	
	var date_from = new Date(date_from+' 4:00:00');
	var date_to = $('#date_to').val().replace(/-/g, '/');	
	var date_to = new Date(date_to+' 12:00:00');
	
	
	$("#datepicker_to").datepicker('destroy');
	$("#datepicker_to").datepicker({
		minDate: new Date(date_from.getFullYear()+'/'+(date_from.getMonth()+1)+'/'+(date_from.getDate()+1)+' 00:00:00'),
		altField: "#date_to",
		altFormat: 'yy-mm-dd',
		dateFormat: 'mm/dd/yy', 
		defaultDate: '+8d',
		onSelect: toSetFinal,
		changeYear: false,
		changeMonth: false,
		showOtherMonths: true, 
		selectOtherMonths: true,
		prevText: "«",
		nextText: "»"
	});
	//$("#datepicker_to").datepicker('option', 'minDate', );
	//CHECK DATE TO  > DATE FROM
	var diff = Math.floor((date_to.getTime() - date_from.getTime()) / 24 / 60 / 60 / 1000);

	if(diff<=0) {
		var newdate = new Date(date_from.getFullYear()+'/'+(date_from.getMonth()+1)+'/'+(date_from.getDate()+1)+' 00:00:00');
		$('#date_to').val(newdate.getFullYear()+'/'+(newdate.getMonth()+1)+'/'+newdate.getDate());
		$("#datepicker_to").datepicker('setDate',newdate);
	}
	
	
	setNigths();
};

function submitIBEform () {
	
	$('#frmAvailability').submit();
}