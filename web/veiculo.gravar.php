<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
   ?>
   <?php
   include "config.php";
   include "classUsuario.php";

   //$nome = ($_POST["nome"]);
   $vei_st_modelo = ($_POST["vei_st_modelo"]);
   $vei_st_descricao = ($_POST["vei_st_descricao"]);
   $vei_st_porta = ($_POST["vei_st_porta"]);
   $vei_in_anofabri = ($_POST["vei_in_anofabri"]);
   $vei_in_anomodelo = ($_POST["vei_in_anomodelo"]);
   $vei_st_cor = ($_POST["vei_st_cor"]);
   $vei_in_km = ($_POST["vei_in_km"]);
   $vei_st_placa = ($_POST["vei_st_placa"]);
   $vei_re_valor = ($_POST["vei_re_valor"]);
   $vei_st_obs = ($_POST["vei_st_obs"]);
   $vei_dt_inclusao = ($_POST["vei_dt_inclusao"]);
   $vei_ch_ativo = ($_POST["vei_ch_ativo"]);
   $vei_cb_foto1 = ($_FILES['vei_cb_foto1']);
   $vei_cb_foto2 = ($_FILES['vei_cb_foto2']);
   $vei_cb_foto3 = ($_FILES['vei_cb_foto3']);
   $vei_cb_foto4 = ($_FILES['vei_cb_foto4']);


   $veiculos = new Veiculos(DB_STRING, DB_USER, DB_PASS);

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
   ?>

   <div class="alert alert-primary col-md-12" style="margim-left:50% text-align:center" role="alert">
      <?php

      $i = 1;
      while ($i <= 4) {
         if ($_FILES['vei_cb_foto' . $i]['name'] != null) {
            if ($_FILES['vei_cb_foto' . $i]['type'] == "image/jpeg") {
               // define a pasta onde serão salvos os arquivos
               $uploaddir = './arquivos/';
               // concatena a pasta com o nome do arquivo
               $uploadfile = $uploaddir . $_FILES['vei_cb_foto' . $i]['name'];

               // copia o arquivo para a pasta
               move_uploaded_file($_FILES['vei_cb_foto' . $i]['tmp_name'], $uploadfile);

               switch ($i) {
                  case 1:
                     $veiculos->SetFoto1($_FILES['vei_cb_foto' . $i]['name']);
                     break;
                  case 2:
                     $veiculos->SetFoto2($_FILES['vei_cb_foto' . $i]['name']);
                     break;
                  case 3:
                     $veiculos->SetFoto3($_FILES['vei_cb_foto' . $i]['name']);
                     break;
                  case 4:
                     $veiculos->SetFoto4($_FILES['vei_cb_foto' . $i]['name']);
                     break;
               }
            }
            $i++;
         }
      }

      if ($veiculos->ValidarCampos()) {
         $rsp = $veiculos->Incluir();
         if ($rsp)
            echo "Item gravado com sucesso!";
         else
            echo "Erro na gravação !";
      }
      ?>
   </div>
   <h3 class="col-md-12" style="text-align:center">Informações do Veiculo</h3>
   <div class="container">
      <table class="table table-striped">
         <tbody>
            <tr>
               <td colspan="1">
                  <form action="veiculo.gravar.php" method="POST" class="well form-horizontal">
                     <fieldset>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Modelo:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span><input id="vei_st_modelo" name="vei_st_modelo" placeholder="Ex: Celta 1.0 " class="form-control" required="true" disabled value="<?php echo $veiculos->GetModelo();  ?>" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Descrição:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input id="vei_st_descricao" name="vei_st_descricao" placeholder="Ex: Automático, com vidros e portas elétricas" disabled class="form-control" required="true" value="<?php echo $veiculos->GetDescricao();  ?>" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Portas:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-menu-hamburger"></i></span><input id="vei_st_porta" name="vei_st_porta" placeholder="Ex: 4" class="form-control" required="true" disabled value="<?php echo $veiculos->GetPorta();  ?>" type="number"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Ano de Fabricação:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="vei_in_anofabri" name="vei_in_anofabri" placeholder="Ex: 2019" class="form-control" required="true" disabled value="<?php echo $veiculos->GetAnoFab();  ?>" type="number"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Ano de Modelo:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="vei_in_anomodelo" name="vei_in_anomodelo" placeholder="Ex: 2019" class="form-control" required="true" disabled value="<?php echo $veiculos->GetAnoMod();  ?>" type="number"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Cor:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span><input id="vei_st_cor" name="vei_st_cor" placeholder="Ex: Preto" class="form-control" required="true" disabled value="<?php echo $veiculos->GetCor();  ?>" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Km:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span><input id="vei_in_km" name="vei_in_km" placeholder="Ex: 90.000" class="form-control" required="true" disabled value="<?php echo $veiculos->GetKm();  ?>" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Placa:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-unchecked"></i></span><input id="vei_st_placa" name="vei_st_placa" placeholder="Ex: AAAA-1111" class="form-control" disabled required="true" value="<?php echo $veiculos->GetPlaca();  ?>" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Valor:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="vei_re_valor" name="vei_re_valor" placeholder="Ex: 20.000,00" class="form-control" disabled required="true" value="<?php echo $veiculos->GetValor();  ?>" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Observações:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span><input id="vei_st_obs" name="vei_st_obs" placeholder="Ex: Doc: OK" class="form-control" disabled required="true" value="<?php echo $veiculos->GetObs();  ?>" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Data de inclusão:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="vei_dt_inclusao" name="vei_dt_inclusao" placeholder="Ex: 28/05/2019" disabled class="form-control" required="true" value="<?php echo $veiculos->GetDtInclusao();  ?>" type="date"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto1:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <img src='./arquivos/<?php echo $veiculos->GetFoto1();  ?>'>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto2:</label>
                           <div class="col-md-10 inputGroupContainer" >
                              <img src='./arquivos/<?php echo $veiculos->GetFoto2();  ?>' width="320" height="205">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto3:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <img src='./arquivos/<?php echo $veiculos->GetFoto3();  ?>' width="320" height="205">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto4:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <img src='./arquivos/<?php echo $veiculos->GetFoto4();  ?>' width="320" height="205">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Ativo:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <input id="vei_ch_ativo" name="vei_ch_ativo" disabled value="<?php echo $veiculos->GetAtivo();  ?>" <?php
                                                                                                                                    if ($veiculos->GetAtivo() == 'on') {
                                                                                                                                       echo 'checked="checked"';
                                                                                                                                    } else {
                                                                                                                                       echo 'checked="unchecked"';
                                                                                                                                    }
                                                                                                                                    ?> type="checkbox">
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