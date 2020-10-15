$('#next').off('click').on('click',function(e){

	$('#hiddencheck').val('1');
	let ttt = $('#hiddencheck').val();

	console.log("button is "+ttt);

	$('#form').submit();
});


$('#viewResume').off('click').on('click',function(e){
	$('#hiddencheck').val('10');

	$('#form').submit();
});