var baseUrl  = $('#getBaseURL').val();
var data     = "";
var head     = "";
function listJenis() {
  $.ajax({
    url: baseUrl + "index.php/C_jenis/getJenis",
    dataType: "json",
    success : function(dataJSON) {
	    for (var i =0; i<dataJSON.jumlah; i++){
      data +='<tbody>' +
                '<tr>' +
    							'<td>'+(i+1)+'</td>' +
    							'<td>'+dataJSON.hasil[i].id_jenis+'</td>' +
        					'<td>'+dataJSON.hasil[i].jenis+'</td>' +
        					'<td>X</td>' +
                '</tr>'+
              '</tbody>';
      $('#dataTables-example').append(data);
      data = '';
	    }
    }
  });
}
// $(window).load(function() {
//   listJenis();
// });
listJenis();
