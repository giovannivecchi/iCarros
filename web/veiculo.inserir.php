<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
   <script type="text/javascript" src="js/dataTables.js"></script>
   <title>Cadastro de Veiculos</title>
</head>

<body>
   <?php
   include "Pages\\header.php";
   ?>
   <h3 class="col-md-12" style="text-align:center">Cadastro de Veiculos</h3>
   <div class="container">
      <table class="table table-striped">
         <tbody>
            <tr>
               <td colspan="1">
                  <form action="veiculo.gravar.php" method="POST" enctype="multipart/form-data" class="well form-horizontal">
                     <fieldset>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Modelo:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span><input id="vei_st_modelo" name="vei_st_modelo" placeholder="Ex: Celta 1.0 " class="form-control" required="true" value="" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Descrição:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input id="vei_st_descricao" name="vei_st_descricao" placeholder="Ex: Automático, com vidros e portas elétricas" class="form-control" required="true" value="" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Portas:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-menu-hamburger"></i></span><input id="vei_st_porta" name="vei_st_porta" placeholder="Ex: 4" class="form-control" required="true" value="" type="number"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Ano de Fabricação:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="vei_in_anofabri" name="vei_in_anofabri" placeholder="Ex: 2019" class="form-control" required="true" value="" type="number"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Ano de Modelo:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="vei_in_anomodelo" name="vei_in_anomodelo" placeholder="Ex: 2019" class="form-control" required="true" value="" type="number"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Cor:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span><input id="vei_st_cor" name="vei_st_cor" placeholder="Ex: Preto" class="form-control" required="true" value="" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Km:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span><input id="vei_in_km" name="vei_in_km" placeholder="Ex: 90.000" class="form-control" required="true" value="" type="text"></div>
                           </div>
                        </div>
                        <!--<div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <option>A really long option to push the menu over the edget</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                        -->
                        <div class="form-group">
                           <label class="col-md-2 control-label">Placa:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-unchecked"></i></span><input id="vei_st_placa" name="vei_st_placa" placeholder="Ex: AAAA-1111" class="form-control" required="true" value="" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Valor:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="vei_re_valor" name="vei_re_valor" placeholder="Ex: 20.000,00" class="form-control" required="true" value="" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Observações:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span><input id="vei_st_obs" name="vei_st_obs" placeholder="Ex: Doc: OK" class="form-control" required="true" value="" type="text"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Data de inclusão:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="vei_dt_inclusao" name="vei_dt_inclusao" placeholder="Ex: 28/05/2019" class="form-control" required="true" value="" type="date"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto1:</label>
                           <div class="col-md-9 inputGroupContainer">
                              <input type="file" class="form-control-file" name="vei_cb_foto1" class="form-control">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto2:</label>
                           <div class="col-md-9 inputGroupContainer">
                              <input type="file" class="form-control-file"  name="vei_cb_foto2" class="form-control">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto3:</label>
                           <div class="col-md-9 inputGroupContainer">
                              <input type="file" class="form-control-file"  name="vei_cb_foto3" class="form-control">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Foto4:</label>
                           <div class="col-md-9 inputGroupContainer">
                              <input type="file" class="form-control-file"  name="vei_cb_foto4" class="form-control">
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-2 control-label">Ativo:</label>
                           <div class="col-md-10 inputGroupContainer">
                              <input id="vei_ch_ativo" name="vei_ch_ativo" value="on" checked="checked" type="checkbox">
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-2 control-label"></label>
                           <div class="col-md-10 inputGroupContainer">
                              <input class="btn btn-primary" type="submit" value="Salvar"></div>
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
   <!--  
    <form action="veiculo.gravar.php" method="POST"  class="well form-horizontal">
      <table>
        <th style="size:10em">Cadastro de Veiculos</th>
        <tr>
          <td><label>Modelo </label></td>
          <td><input type="text" name="vei_st_modelo" /></td>
        </tr>
        <tr>
          <td><label>Descricao </label></td>
          <td><input type="text" name="vei_st_descricao" /></td>
        </tr>
        <tr>
          <td><label>Portas </label></td>
          <td><input type="text" name="vei_st_porta" /></td>
        </tr>
        <tr>
          <td><label>Ano Fabricação</label></td>
          <td><input type="number" name="vei_in_anofabri" /></td>
        </tr>
        <tr>
          <td><label>Ano do Modelo </label></td>
          <td><input type="number" name="vei_in_anomodelo" /></td>
        </tr>
        <tr>
          <td><label>Cor </label></td>
          <td><input type="text" name="vei_st_cor" /></td>
        </tr>
        <tr>
          <td><label>Km </label></td>
          <td><input type="number" name="vei_in_km" /></td>
        </tr>
        <tr>
          <td><label>Placa </label></td>
          <td><input type="text" name="vei_st_placa" /></td>
        </tr>        
        <tr>
          <td><label>Valor</label></td>
          <td><input type="text" name="vei_re_valor" /></td>
        </tr>        
        <tr>
          <td><label>Observação</label></td>
          <td><input type="text" name="vei_st_obs" /></td>
        </tr>        
        <tr>
          <td><label>Data de Inclusão </label></td>
          <td><input type="date" name="vei_dt_inclusao" /></td>
        </tr>        
        <tr>
          <td><label>Ativo</label></td>
          <td><input type="checkbox" name="vei_ch_ativo" /></td>
        </tr>        
        <tr><td><input type="submit" value="Salvar"></td></tr>
      </table>
    </form>
-->


   <?php
   include "Pages\\footer.php";
   ?>
</body>

</html>