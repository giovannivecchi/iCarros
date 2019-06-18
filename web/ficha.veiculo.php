<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lista de Veiculos</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>	
	<script type="text/javascript" src="js/dataTables.js"></script>		
</head>
<body>
<?php 
  include "Pages\\header.php";	
	include "config.php";
	include "classUsuario.php";


	$veiculo = new Veiculos( DB_STRING, DB_USER, DB_PASS);
	$quant = $veiculo->Contar();
	?> 

	<table class="table" style="width:100%">
	<thead class="table-dark">
		<tr>			
			<td scope="col">Código</td>
			<td scope="col">Modelo</td>
			<td scope="col">Cor</td>			
			<td scope="col">Ano</td>			
			<td scope="col">Preço</td>			
			<td scope="col">Ativo</td>			
			<td scope="col">Ações</td>
		</tr>
	</thead>
<?php 
$pag = @$_GET['pag'];
if( $pag == "")		
	$pag = 1;
		
$limite = 10;
$inicio = ( ($pag-1) * $limite) ;	
$paginas = ceil($quant / $limite );		

$excluir = @$_GET['excluir'];
if( $excluir != "" )		
{
	$veiculo->Excluir($excluir);
	echo "Usuário ".$excluir." Excluído com sucesso!";
}
		
// chama o método listar da classe
$result = $veiculo->ListarPag($inicio, $limite);

  // atraves do If checa se houve um retorno válido   
  if (isset($result))
  {
    while ($user = $result->fetchObject())
    {   ?>
		<tr>
			<td><?php echo $user->vei_in_codigo; ?></td>		
			<td><?php echo $user->vei_st_modelo; ?></td>					
			<td><?php echo $user->vei_st_cor; ?></td>				
			<td><?php echo $user->vei_in_anomodelo; ?></td>							
			<td><?php echo $user->vei_re_valor; ?></td>										
			<td><?php 
                            if($user->vei_ch_ativo == 'on' ){
                              echo 'Sim';
                            }
                            else{
                              echo 'Não';
                            }
                            ?></td>				
			<td><a href='veiculo.editar.php?id=<?php echo $user->vei_in_codigo; ?>'>
			  <span class="	glyphicon glyphicon-edit text-warning"></a>
				<a href='ficha.veiculo.php?excluir=<?php echo $user->vei_in_codigo; ?>'>
				<span class="	glyphicon glyphicon-minus-sign text-danger"></a></a>
			</td>
		</tr>
		<?php
	 /*
	 echo "<tr><td>".$user->usuarioId."</td>
	 			<td>".$user->nome."</td>
				<td> <a href='veiculo.editar.php?id=$user->usuarioId'>Editar</a></td></tr>";
	 
	 	*/
    }
  }
  else
  {
      echo "<tr><td colspan='3'>Não há dados para listar!</td></tr>";
  }
?>
	</table>
	
<div>
<ul class="pagination">
  <?php
	for( $i = 1; $i <= $paginas; $i++ )
	{
		echo "<li class='page-item'><a class='page-link' href='./ficha.veiculo.php?pag=$i'>$i</a></li></span> ";
	}

   ?>
</ul>
	<?php 
  include "Pages\\footer.php";	
	?>


	</body>

	