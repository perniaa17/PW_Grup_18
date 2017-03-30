function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

var loadcontent = function(p, num_total){

	$("#more-items").remove();
	num = ((p - 1) * 10) + 1;
	pag = p + 1;
	num_ini = num;

	$.ajax({
		type: "POST",
		url : 'ajax_content.php?p='+p,
		async: true,
		success : function (datos){
			var dataJson = eval(datos);

			for(var i in dataJson){
				$("#list-items").append('<li id="item-' + num +'"><h2>' + num + '</h2>' +
    				'<span class="autor">' + dataJson[i].comentario_nombre +'</span>' +
       				'<span class="contenido">' + dataJson[i].comentario_content +'</span></li>');

				num++;
			}
			if(num<num_total){
				$("#list-items").append('<li id="more-items">' +
					'<a href="#" onclick="loadcontent('+ pag +','+ num_total +')">Cargar mas ...</a>' +
           			'</li>');

			}
			goToByScroll("item-"+num_ini);
		}
	});
	return false;
};
