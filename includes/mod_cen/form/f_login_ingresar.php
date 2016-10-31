<form action="index.php?men=login&id=1" method="POST" >
		<table>
			
			<tr>
				<th>Usuario</th>
				<td> <input type="text" name="username" " placeholder="ingrese Usuario"   size="50" required >
				</td>
			</tr>	
			<tr>
				<th>Contreña</th>
				<td> <input type="password" name="password" placeholder="ingrese contraseña" size="50" required >
				</td>
			</tr>				
			
			
			<tr>
				<th></th>
				<td> 
				<input type="hidden" name="persona_id" value="<?php echo $dato_persona->persona_id ?>"/>				
				<input type="submit" name="ingreso" value="Ingresar" />
				</td>
			</tr>
		</table>
</form>>