$(function(){
	$('.tradebook').click(function (){
		
		$('#modal5').modal('show')
			.find('#modalContent5')
			.load($(this).attr('value'));
	});
	
});
