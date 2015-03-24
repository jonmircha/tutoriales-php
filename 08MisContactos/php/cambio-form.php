<div>
	<label for="email">Email: </label>
	<input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Tu email" value="<?php echo $registro_contacto["email"]; ?>" disabled required />
	<input type="hidden" name="email_hdn" value="<?php echo $registro_contacto["email"]; ?>" />
</div>
<div>
	<label for="nombre">Nombre: </label>
	<input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Escribe tu nombre" title="Tu nombre" value="<?php echo $registro_contacto["nombre"]; ?>" required />
</div>
<div>
	<label for="m">Sexo: </label>
	<input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M" <?php if($registro_contacto["sexo"]=="M"){ echo "checked"; } ?> required />&nbsp;<label for="m">Masculino</label>
	&nbsp;&nbsp;&nbsp;
	<input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" <?php if($registro_contacto["sexo"]=="F"){ echo "checked"; } ?> required />&nbsp;<label for="f">Femenino</label>
</div>
<div>
	<label for="nacimiento">Fecha de nacimiento: </label>
	<input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Tu cumple" value="<?php echo $registro_contacto["nacimiento"]; ?>" required />
</div>
<div>
	<label for="telefono">Telefono: </label>
	<input type="number" id="telefono" class="cambio" name="telefono_txt" placeholder="Escribe tu teléfono" title="Tu teléfono" value="<?php echo $registro_contacto["telefono"]; ?>" required />
</div>
<div>
	<label for="pais">Pais: </label>
	<select id="pais" class="cambio" name="pais_slc" required>
		<option value="">- - -</option>
		<?php include("select-pais.php"); ?>
	</select>
</div>
<div>
	<label for="foto">Foto: </label>
	<div class="adjuntar-archivo cambio">
		<input type="file" id="foto" name="foto_fls" title="Sube tu foto" />
		<input type="hidden" name="foto_hdn" value="<?php echo $registro_contacto["imagen"]; ?>" />
	</div>
	<div>
		<img src="<?php echo "img/fotos/".$registro_contacto["imagen"]; ?>" />
	</div>
</div>
<div>
	<input type="submit" id="enviar-cambio" class="cambio" name="enviar_btn" value="cambiar" />
</div>