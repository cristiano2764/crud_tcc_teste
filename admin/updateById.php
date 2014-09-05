<?php include 'template-parts/header.php' /** calling of header(to make it uniform in all template file) **/?>
	<div class="container home">
		<h3> Atualizar </h3>
		
		<?php
			include 'connection.php'; /** Chamando da connection.php que tem um código de conexão **/
			
			$ID = $_GET['id']; /** Obtem a id do usuários **/
			
			if( isset( $_POST['update'] ) ): /** Um gatilho que executar após clicar no botão enviar **/
				
				/*** Colocar todos os dados de texto em variáveis **/
				
				$nome = $_POST['nome']; 
				$email = $_POST['email'];
				$login = $_POST['login'];
				$senha = $_POST['senha'];
				$telefone = $_POST['telefone'];
				$tipo = $_POST['tipo'];
				
				mysql_query("UPDATE usuarios SET nome = '$nome', email = '$email', login = '$login', senha = '$senha', telefone = '$telefone', tipo = '$tipo' WHERE ID = '$ID'") 
							or die(mysql_error()); /*** execute the insert sql code **/
							
				echo "<div class='alert alert-info'> Editado com sucesso. </div>"; /** Mensagem de sucesso **/
			
			endif;
			
			
			$result = mysql_query("SELECT * FROM usuarios WHERE ID='$ID'");
			
			$data = mysql_fetch_object( $result ); 
			
		?>
		
		
		<form action="" method="POST">
			<label> Nome: </label>
				<input name="nome" type="text" class="input-medium" id="nome" value="<?php echo $data->nome ?>" nome="nome" />
				<input name="email" type="text" class="input-medium" id="email" value="<?php echo $data->email ?>" email="email" />
				<input type="text" value="<?php echo $data->login ?>" class="input-medium" name="login"/>
				<input name="senha" type="text" class="input-medium" id="senha" value="<?php echo $data->senha ?>" senha="senha"/>
				<input name="telefone" type="text" class="input-medium" id="telefone" value="<?php echo $data->telefone ?>" telefone="telefone"/>

				<label> Tipo: </label>
				<select class="span2" name="tipo">
					<?php if($data->gender=='professor'): ?>
						<option value="professor" selected>Professor</option>
						<option value="aluno">Aluno</option>
					<?php else: ?>
						<option value="professor">Professor</option>
						<option value="aluno" selected>Aluno</option>
					<?php endif; ?>
				</select>
			
			<br />
			<input type="submit" name="update" value="Atualizar" class="btn btn-info" />	
			
		</form>		
	</div>	
</div>
</body>
</html>
