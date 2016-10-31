<form action="index.php?men=inventario&id=1" method="POST" >
			<label>Nombre  de Artículo:</label>
			<input name="nombre" type="text" value="<?php echo $dato_inventario->nombre ?>" size="50"  placeholder="Nombre de Art."   required>
		
			<label>Descripción:</label>
			<input name="descripcion" type="text" value="<?php echo $dato_inventario->descripcion ?>" size="150"  placeholder="Descripción" required >
			
			<label>Precio Unitario:</label>
			<input type="text" name="precio_unitario" value="<?php echo $dato_inventario->precio_unitario ?>" placeholder="ingrese precio unitario"   size="50" required >

			<label>Cantidad:</label>
			<input type="text" name="cantidad" value="<?php echo $dato_inventario->cantidad?>" placeholder="ingrese cantidad" pattern="[0-9]"  size="3" required >
			
			<label>Total:</label>
			<input type="text" name="total" value="<?php echo $dato_inventario->total ?>" />
			
			<label>Estado:</label>
				<?php				
				$estado=Inventario::camposet('estado','inventario');
				echo '<select name="estado">';
  					foreach ($estado AS $valor) 
  											
							if($valor==$inventario->estado) {						
								echo "<option selected value='$valor'>$valor</option>";
							}else {						
								echo "<option value='$valor'>$valor</option>";
							}
								  							
  				echo '</select>';				
				?>	
			
			<label>Observación:</label>
            <textarea cols="50" rows='10' name="observacion" ></textarea>
						
			<br>
			<input type="hidden" name="inventario_id" value="<?php echo $dato_inventario->inventario_id ?>"/>				
			<input type="submit" name="nuevo" value="Aplicar cambios"/>
			
</form>