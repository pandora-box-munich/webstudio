$(document).ready(function() {
// Datepicker
		//START PARAMS
		$("#datepicker_from").datepicker({
			minDate: "+1d",
			altField: "#date_from",
			altFormat: 'yy-mm-dd',
			dateFormat: 'mm/dd/yy',
			onSelect: toSetFinal,
			defaultDate: "+1d",
			changeYear: false,
			changeMonth: false,
			showOtherMonths: true,
			selectOtherMonths: true,
			prevText: "Â«",
			nextText: "Â»"
		});
 		var currentDate = new Date();  
       	$("#datepicker_from").datepicker("setDate",currentDate);  
       
		$("#datepicker_to").datepicker({
			minDate: "+2d",
			altField: "#date_to",
			altFormat: 'yy-mm-dd',
			dateFormat: 'mm/dd/yy',
			defaultDate: '+2d',
			onSelect: toSetFinal,
			changeYear: false,
			changeMonth: false,
			showOtherMonths: true, 
			selectOtherMonths: true,
			prevText: "Â«",
			nextText: "Â»"
		});
 		var currentDate = new Date();  
       	$("#datepicker_to").datepicker("setDate",currentDate);  

// Booker Rooms Select fields visible/unvisible
if(document.getElementById("setroom").value=='1'){
    $('#room2').hide();
	$('#room3').hide();	
}
if(document.getElementById("setroom").value=='2'){
    $('#room2').show();
	$('#room3').hide();	
}
if(document.getElementById("setroom").value=='3'){
    $('#room2').show();
	$('#room3').show();	
}

$("select#setroom").change(function() {
	if(document.getElementById("setroom").value=='1'){
		$('#room2').hide();
		$('#room3').hide();	
	}
	if(document.getElementById("setroom").value=='2'){
		$('#room2').show();
		$('#room3').hide();	
	}
	if(document.getElementById("setroom").value=='3'){
    	$('#room2').show();
		$('#room3').show();	
	}
});


});

// Functions 

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

// Booker Change URL

function urlEX(){

    if(document.frmAvailability.RES_PROP_ID.value=="4"){
       	document.frmAvailability.action = "https://secure-belovedhotels.com/booking/index.php";
	} else if(document.frmAvailability.RES_PROP_ID.value=="5"){
       	document.frmAvailability.action = "https://www.finestresorts.com/booking/index.php";
	} else {
		document.frmAvailability.action = "https://www.excellence-resorts.com/er";
	}
}