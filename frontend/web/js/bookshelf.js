$(function(){
	$('#createbook').click(function (){
		$('#modal2').modal('show')
			.find('#modalContent2')
			.load($(this).attr('value'));
	});

});

