<script>
			$(document).ready(function () {
				//alert("hola");
				//$('#apellido').focusout(function () {
					
				$("#apellido").focusout (function(){
					//var cant = 	$("#apellido").val().length;				
					//alert(cant);
				if ($("#apellido").val().length>0) {
					
					
				//$('#apellido').focusout(function () {
						var apellido = $(this).val();
						var nombre = $("#nombre").val();
						var dni = $("#dni").val();
						var url="includes/mod_cen/clases/json_bus_per.php";
					
						$("#tablajson tbody").html("");
						$.getJSON(url,{apellido: apellido,nombre: nombre,dni:dni},function(resultado){
						$.each(resultado, function(i,cliente){
						var newRow =
						"<tr>"
							+"<td>"+cliente.id+"</td>"
							+"<td>"+cliente.nombre+"</td>"
							+"<td>"+cliente.apellido+"</td>"
							+"<td>"+cliente.dni+"</td>"
							+"<td><a href='index.php?men=persona&id=1&persona_id="+cliente.id+"'><img src='img/iconos/modificar_p.png' alt='modificar' longdesc='Modificar Datos de Persona'></a></td>"		
							
						+"</tr>";
						$(newRow).appendTo("#tablajson tbody");
							});
						});
				}		
				});
				
				$('#nombre').focusout(function() {
					if ($("#nombre").val().length>0) {						
						var nombre = $(this).val();
						var apellido = $("#apellido").val();
						var dni = $("#dni").val();
						var url="includes/mod_cen/clases/json_bus_per.php";
					
						$("#tablajson tbody").html("");
						$.getJSON(url,{nombre: nombre,apellido: apellido,dni:dni},function(resultado){
						$.each(resultado, function(i,cliente){
						var newRow =
						"<tr>"
							+"<td>"+cliente.id+"</td>"
							+"<td>"+cliente.nombre+"</td>"
							+"<td>"+cliente.apellido+"</td>"
							+"<td>"+cliente.dni+"</td>"
							+"<td><a href='index.php?men=persona&id=1&persona_id="+cliente.id+"'><img src='img/iconos/modificar_p.png' alt='modificar' longdesc='Modificar Datos de Persona'></a></td>"		
							
						+"</tr>";
						$(newRow).appendTo("#tablajson tbody");
							});
						});
					}	
				});
				
				$('#dni').focusout(function() {
					if ($("#dni").val().length>0) {
				//$('#dni').keypress(function() {
						var dni = $(this).val();
						var apellido = $("#apellido").val();
						var nombre = $("#nombre").val();
						var url="includes/mod_cen/clases/json_bus_per.php";
					
						$("#tablajson tbody").html("");
						$.getJSON(url,{nombre: nombre,apellido: apellido,dni:dni},function(resultado){
						$.each(resultado, function(i,cliente){
						var newRow =
						"<tr>"
							+"<td>"+cliente.id+"</td>"
							+"<td>"+cliente.nombre+"</td>"
							+"<td>"+cliente.apellido+"</td>"
							+"<td>"+cliente.dni+"</td>"
							+"<td><a href='index.php?men=persona&id=1&persona_id="+cliente.id+"'><img src='img/iconos/modificar_p.png' alt='modificar' longdesc='Modificar Datos de Persona'></a></td>"		
						+"</tr>";
						$(newRow).appendTo("#tablajson tbody");
							});
						});
					}	
				});	
																		
       });					
</script>	
<?php
			include_once("includes/mod_cen/form/f_people_search.php");					
	
?>
			
	<table class="grilla" id="tablajson">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>DNI</th>
			<th>Modif.</th>				
		</thead>
		<tbody></tbody>
	</table>		
	
			
			