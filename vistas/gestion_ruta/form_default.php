
<div class="form-load">
	<div class="head">
		<h1 class="titulo">Rutas </h1>
	</div>
	<?php
$var_consulta = 'SELECT * FROM conductor';
$var_resultado = $obj_conexion->query($var_consulta);
if ($var_resultado->num_rows > 0) { ?>
	<table>
		<tr>
			
			<th>lugar de Partida</th>
			<th>Lugar de Destino</th>
			<th>Hora de Partida</th>
			<th>Hora de Llegada</th>
			<th class="edit center"><a class="icon icon-edit"></a></th>
			<th class="delete center"><a class="icon icon-trash"></a></th>
    	</tr>
		<?php
			 while ($var_dato = $var_resultado->fetch_array()) { ?>

			
	    	
		    		<tr>
						<td><?php echo $var_dato['lugarpartida']; ?></td>
						<td><?php echo $var_dato['lugardestino']; ?></td>
						<td><?php echo $var_dato['horapartida']; ?></td>
						<td><?php echo $var_dato['horallegada']; ?></td>
						<td>
							
								<input style="display:none;" type="text" name="id" >
								<button class="btnedit" data-toggle="modal" data-target="#actualizarModal"></button>
							
						</td>
						<td>
							
								<input style="display:none;" type="text" name="id" >
								<input style="display:none;" type="text" name="userimage" >
								<button class="btndelete" ></button>
							
						</td>
					</tr>
			
	</table>
		
	<div class="pages">
		
	</div>
</div>

<div class="form-options">
	<div class="options">
		
			<span class="btn icon icon-plus" data-toggle="modal" data-target="#insertarModal"></span>
		
		<form action="#" method="POST">
			<button class="btn disabled icon icon-coding" name="btn" value="form_coding" type="submit" disabled></button>
		</form>
		<form action="#" method="POST">
			<button class="btn disabled icon icon-printer" name="btn" value="form_printer" type="submit" disabled></button>
		</form>
		<form action="/">
			<button class="btnexit icon icon-exit" type="submit"></button>
		</form>
    </div>
	<div class="search">
		<form name="form-search" action="#" method="POST">
			<p>
				<input type="text" class="text" name="search" placeholder="Buscar...">
				<button class="btn-search icon  icon-search" type="submit"></button>
			</p>
			
		</form>
	</div>
</div>
</div>

<?php }?>
<?php }?>