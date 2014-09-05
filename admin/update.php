<?php include 'template-parts/header.php' /** calling of header(to make it uniform in all template file) **/?>	
<div class="container home">
		<h3> Atualizar</h3>
		<?php include "connection.php" /** calling of connection.php that has the connection code **/ ?>
		<table class="table table-bordered">
              <thead>
                <tr>
                  <th width="60px">ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Login</th>
				  <th>Senha</th>
				  <th>telefone</th>
				  <th>Tipo</th>
				  <th> </th>
                </tr>
              </thead>
              <tbody>
			  <?php 
				$result = mysql_query("SELECT * FROM usuarios");
				
				while($data = mysql_fetch_object($result) ):
			  ?>
                <tr>
                  <td><?php echo $data->ID ?></td>
                  <td><?php echo $data->nome ?></td>
                  <td><?php echo $data->email ?></td>
                  <td><?php echo $data->login ?></td>
                  <td><?php echo $data->senha ?></td>
                  <td><?php echo $data->telefone ?></td>
                  <td><?php echo $data->tipo ?></td>
                 
				  <td>
					<a href="updatebyId.php?id=<?php echo $data->ID ?>">
						<button class="btn btn-info"> Editar </button>
					</a>
				  </td>
                </tr>
			  <?php
				endwhile;
			  ?>
              </tbody>
		</table>
</div>	
</div>
</body>
</html>
