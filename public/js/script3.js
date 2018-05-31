$(document).on('click', '.pagination a', function(e){
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	var route = "http://localhost:8000/usuario/show";

	$.ajax({
		url: route,
		data: {page: page},
		type: 'GET',
		dataType: 'JSON',
		success:function(data){
			$('.users').html(data);
		}
	});

});