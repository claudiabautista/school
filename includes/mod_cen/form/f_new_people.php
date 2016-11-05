<form action="index.php?men=people&id=1" method="POST" >
	<div>
		<div>
			DNI:<br>
			<input name="dni" id="dni" type="text" value="<?php echo $info_people->dni ?>"size="8"  placeholder="solo números"   pattern="[0-9]{8}" required>			
		</div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>

	</div>


		<table>
			<tr>
				<th>DNI:</th>
				<td> <input name="dni" type="text" value="<?php echo $dato_persona->dni ?>"size="8"  placeholder="solo números"   pattern="[0-9]{8}" required>
				</td>
			</tr>
			<tr>
				<th>CUIL</th>
				<td> <input name="cuil" type="text" value="<?php echo $dato_persona->cuil ?>" size="11"  placeholder="solo números"   pattern="[0-9]{11}" >
				</td>
			</tr>
			<tr>
				<th>Apellido</th>
				<td> <input type="text" name="apellido" value="<?php echo $dato_persona->apellido ?>" placeholder="ingrese apellido"   size="50" required >

				</td>
			</tr>	
			<tr>
				<th>Nombre</th>
				<td> <input type="text" name="nombre" value="<?php echo $dato_persona->nombre ?>" placeholder="ingrese nombre" size="50" required >
				</td>
			</tr>				
			<tr>
				<th>Fecha de Nacimiento</th>
					 <td> <input type="date" name="fecha_nac" value="<?php echo $dato_persona->fecha_nac ?>" />
				</td>
			</tr>
			<tr>
				<th>Sexo</th>
					 <td>
					
						<input type="radio" name="sexo" value="m" <?php if($dato_persona->sexo=='m') echo "checked"; ?> >Masculino
						<input type="radio" name="sexo" value="f" <?php if($dato_persona->sexo=='f') echo "checked"; ?> >Femenino
					</td>
			</tr>
			<tr>
				<th>Teléfono</th>
					 <td> <input type="text" name="telefono"  value="<?php echo $dato_persona->telefono ?>" placeholder="Nº Teléfono, solo números" size="40" title="Ingresar solo números" pattern="[0-9]{1,18}" />
				</td>
			</tr>
			<tr>
				<th>Celular</th>
					 <td> <input type="text" name="celular" value="<?php echo $dato_persona->celular ?>" placeholder="Nº Teléfono, solo números" size="40" title="Ingresar solo números" pattern="[0-9]{7,18}" />
				</td>
			</tr>
			<tr>
				<th>Corre Electrónico</th>
				<td> <input type="email" name="email" value="<?php echo $dato_persona->email ?>" placeholder="ingrese correo electronico" size="50" >
				</td>
			</tr>	
			<tr>
				<th>Dirección</th>
				<td> <input size="40" type="text" value="<?php echo $dato_persona->direccion ?>" name="direccion" />
				</td>
			</tr>	
			<tr>
				<th></th>
				<td> 
				<input type="hidden" name="persona_id" value="<?php echo $dato_persona->persona_id ?>"/>				
				<input type="submit" name="nuevo" value="Aplicar cambios" />
				</td>
			</tr>
		</table>
</form>>