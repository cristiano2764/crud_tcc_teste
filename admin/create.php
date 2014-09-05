<?php include 'template-parts/header.php' /** calling of header(to make it uniform in all template file) **/?>
	<div class="container home">
		<h3> Teste </h3>
		
		<?php
			include 'connection.php'; /** Chamando da connection.php que tem um código de conexão **/
			
			if( isset( $_POST['create'] ) ): /** Um gatilho que executar após clicar no botão enviar **/
				
				/*** Colocar todos os dados de texto em variáveis **/
				
				$nome = $_POST['nome']; 
				$email = $_POST['email'];
				$login = $_POST['login'];
				$senha = $_POST['senha'];
				$telefone = $_POST['telefone'];
				$tipo = $_POST['tipo'];

				mysql_query("INSERT INTO usuarios(nome,email,login,senha,telefone,tipo) 
							VALUES('$nome','$email','$login','$senha','$telefone','$tipo')") 
							or die(mysql_error()); /*** executa a inserção do codigo sql **/
							
				echo "<div class='alert alert-info'> Salvo. </div>"; /** Mensagem de sucesso **/
			
			endif;
		?>
		
		
		<form action="" method="POST">
			<label> Nome: </label>
				<input type="text" placeholder="Nome" class="input-medium" name="nome" />
				<input type="text" placeholder="email" class="input-medium" name="email" />
				<input type="text" placeholder="login" class="input-medium" name="login"/>
				<input type="text" placeholder="senha" class="input-medium" name="senha"/>
				<input type="text" placeholder="telefone" class="input-medium" name="telefone"/>
			<label> Tipo: </label>
				<select class="span2" name="tipo">
					<option value="professor">Profesoor</option>
					<option value="aluno">Aluno</option>
				</select>
			
			<br />
			<input type="submit" name="create" value="Cadastrar" class="btn btn-info" />	
			
		</form>		
	</div>	
</div>
</body>
</html>
