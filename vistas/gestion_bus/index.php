<?php require "../../conexiones/header.php" ?>
<body>
    
<div class="container">
		
			<h2>Buses</h2>
			<div class="col-sm-12">
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<span class="btn btn-dark" data-toggle="modal" data-target="#insertarModal">
									<i class="fas fa-plus-circle"></i> Nuevo registro
								</span>
								<span class="btn btn-dark" data-toggle="modal" data-target="#actualizarModal">
									<i class="fas fa-plus-circle"></i> actualizar registro
								</span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12">
									<div id="tablaDatos"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </div>

    <?php require_once "registrar.php" ?>
	<?php require_once "actualizar.php" ?>
    
</body>
