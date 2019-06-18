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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span><input id="fullName" name="vei_st_modelo" placeholder="Ex: Celta 1.0 " class="form-control" required="true" value="" type="text"></div>
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
                            <label class="col-md-2 control-label">Ativo:</label>
                            <div class="col-md-10 inputGroupContainer">   
                            <input id="vei_ch_ativo" name="vei_ch_ativo"  type="checkbox">
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