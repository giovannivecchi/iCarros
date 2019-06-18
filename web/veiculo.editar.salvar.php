<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>	
	<script type="text/javascript" src="js/dataTables.js"></script>		
    <title>Veiculos</title>
</head>
<body>

<?php 
include "config.php";
include "classUsuario.php";
include "Pages\\header.php";	

$veiculos = new Veiculos( DB_STRING, DB_USER, DB_PASS);

$veiculos->SetCodVeiculo($_POST["vei_in_codigo"]);
$veiculos->SetModelo($_POST["vei_st_modelo"]);
$veiculos->SetDescricao($_POST["vei_st_descricao"]);
$veiculos->SetPorta($_POST["vei_st_porta"]);
$veiculos->SetAnoFab($_POST["vei_in_anofabri"]);
$veiculos->SetAnoMod($_POST["vei_in_anomodelo"]);
$veiculos->SetCor($_POST["vei_st_cor"]);
$veiculos->SetKm($_POST["vei_in_km"]);
$veiculos->SetPlaca($_POST["vei_st_placa"]);
$veiculos->SetValor($_POST["vei_re_valor"]);
$veiculos->SetObs($_POST["vei_st_obs"]);
$veiculos->SetDtInclusao($_POST["vei_dt_inclusao"]);
$veiculos->SetAtivo($_POST["vei_ch_ativo"]);


if ($veiculos->ValidarCampos())
{
    $veiculos->Alterar();
}

?>

<h3 class="col-md-12" style="text-align:center">Informações do Veiculo</h3>
  <div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="veiculo.gravar.php" method="POST" class="well form-horizontal">
                      <fieldset>
                      <div class="form-group">
                            <label class="col-md-2 control-label">Codigo:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span><input id="vei_in_codigo" name="vei_in_codigo" placeholder=" " class="form-control" required="true" value="<?php echo $veiculos->GetCodVeiculo();  ?>" type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Modelo:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span><input id="vei_st_modelo" name="vei_st_modelo" placeholder="Ex: Celta 1.0 " class="form-control" required="true"  value="<?php echo $veiculos->GetModelo();  ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Descrição:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input id="vei_st_descricao" name="vei_st_descricao" placeholder="Ex: Automático, com vidros e portas elétricas"  class="form-control" required="true" value="<?php echo $veiculos->GetDescricao();  ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Portas:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-menu-hamburger"></i></span><input id="vei_st_porta" name="vei_st_porta" placeholder="Ex: 4" class="form-control" required="true"  value="<?php echo $veiculos->GetPorta();  ?>"  type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Ano de Fabricação:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="vei_in_anofabri" name="vei_in_anofabri" placeholder="Ex: 2019" class="form-control" required="true"  value="<?php echo $veiculos->GetAnoFab();  ?>" type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Ano de Modelo:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="vei_in_anomodelo" name="vei_in_anomodelo" placeholder="Ex: 2019" class="form-control" required="true"  value="<?php echo $veiculos->GetAnoMod();  ?>"  type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Cor:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span><input id="vei_st_cor" name="vei_st_cor" placeholder="Ex: Preto" class="form-control" required="true"  value="<?php echo $veiculos->GetCor();  ?>"  type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Km:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span><input id="vei_in_km" name="vei_in_km" placeholder="Ex: 90.000" class="form-control" required="true"  value="<?php echo $veiculos->GetKm();  ?>" type="text"></div>
                            </div>
                         </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Placa:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-unchecked"></i></span><input id="vei_st_placa" name="vei_st_placa" placeholder="Ex: AAAA-1111" class="form-control"  required="true" value="<?php echo $veiculos->GetPlaca();  ?>"type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Valor:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="vei_re_valor" name="vei_re_valor" placeholder="Ex: 20.000,00" class="form-control"  required="true" value="<?php echo $veiculos->GetValor();  ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Observações:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span><input id="vei_st_obs" name="vei_st_obs" placeholder="Ex: Doc: OK" class="form-control"  required="true" value="<?php echo $veiculos->GetObs();  ?>"  type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Data de inclusão:</label>
                            <div class="col-md-10 inputGroupContainer">
                               <div class="input-group" ><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="vei_dt_inclusao" name="vei_dt_inclusao" placeholder="Ex: 28/05/2019"  class="form-control" required="true" value="<?php echo $veiculos->GetDtInclusao();  ?>" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                           <label class="col-md-2 control-label">Foto1:</label>
                           <div class="col-md-9 inputGroupContainer">
                              <input type="file" class="form-control-file" id="vei_cb_foto1" name="vei_cb_foto1" class="form-control" value="<?php echo $veiculos->GetFoto1();  ?>">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto2:</label>
                           <div class="col-md-9 inputGroupContainer">
                              <input type="file" class="form-control-file" id="vei_cb_foto2" name="vei_cb_foto2" class="form-control" value="<?php echo $veiculos->GetFoto2();  ?>" >
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto3:</label>
                           <div class="col-md-9 inputGroupContainer">
                              <input type="file" class="form-control-file" id="vei_cb_foto3" name="vei_cb_foto3" class="form-control" value="<?php echo $veiculos->GetFoto3();  ?>">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto4:</label>
                           <div class="col-md-9 inputGroupContainer">
                              <input type="file" class="form-control-file" id="vei_cb_foto4" name="vei_cb_foto4" class="form-control" value="<?php echo $veiculos->GetFoto4();  ?>">
                           </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Ativo:</label>
                            <div class="col-md-10 inputGroupContainer">   
                            <input id="vei_ch_ativo" name="vei_ch_ativo"  value="<?php echo $veiculos->GetAtivo();  ?>" 
                            <?php 
                            if($veiculos->GetAtivo() == 'on'){
                              echo 'checked="checked"';
                            }
                            else{
                              echo 'checked="unchecked"';
                            }
                            ?>
                            type="checkbox">
                            </div>      
                        </div>                     
                         </div>
                         </div>
                      </fieldset>
                   </form>
                </td>                
             </tr>
          </tbody>
       </table>
    </div>
    <?php 
  include "Pages\\footer.php";	
	?>
</body>
</html>