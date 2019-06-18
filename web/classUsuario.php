<?php 
// extends PDO para conectar com banco de dados
class Veiculos extends PDO
{
    private $vei_in_codigo, $vei_st_modelo, $mar_in_codigo, $vei_st_descricao, $vei_st_porta, $vei_in_anofabri, $vei_in_anomodelo, $vei_st_cor,
  $vei_in_km, $vei_st_placa, $vei_re_valor, $vei_st_obs, $vei_dt_inclusao, $vei_ch_ativo, $vei_cb_foto1, $vei_cb_foto2, $vei_cb_foto3, $vei_cb_foto4, $checked;

    public function GetCodVeiculo(){
        return $this->vei_in_codigo;
    }

    public function SetCodVeiculo($value){
        $this->vei_in_codigo = $value;
    }
    
    public function GetModelo(){
        return $this->vei_st_modelo;
    }

    public function SetModelo($value){
        $this->vei_st_modelo = $value;
    }

    public function GetCodMarca(){
        return $this->mar_in_codigo;
    }

    public function SetCodMarca($value){
        $this->mar_in_codigo = $value;    
    }

    public function GetDescricao(){
        return $this->vei_st_descricao;
    }

    public function SetDescricao($value){
        $this->vei_st_descricao = $value;
    }        

    public function GetPorta(){
        return $this->vei_st_porta;
    }

    public function SetPorta($value){
        $this->vei_st_porta = $value;
    }     
    
    public function GetAnoFab(){
        return $this->vei_in_anofabri;
    }

    public function SetAnoFab($value){
        $this->vei_in_anofabri = $value;
    }   
    
    public function GetAnoMod(){
        return $this->vei_in_anomodelo;
    }

    public function SetAnoMod($value){
        $this->vei_in_anomodelo = $value;
    }   

    public function GetCor(){
        return $this->vei_st_cor;
    }

    public function SetCor($value){
        $this->vei_st_cor = $value;
    }   
    
    public function GetKm(){
        return $this->vei_in_km;
    }

    public function SetKm($value){
        $this->vei_in_km = $value;
    }   

    public function GetPlaca(){
        return $this->vei_st_placa;
    }

    public function SetPlaca($value){
        $this->vei_st_placa = $value;
    }  
    
    public function GetValor(){
        return $this->vei_re_valor;
    }

    public function SetValor($value){
        $this->vei_re_valor = $value;
    }   

    public function GetObs(){
        return $this->vei_st_obs;
    }

    public function SetObs($value){
        $this->vei_st_obs = $value;
    }   
    
    public function GetDtInclusao(){
        return $this->vei_dt_inclusao;
    }

    public function SetDtInclusao($value){
        $this->vei_dt_inclusao = $value;
    }   

    public function GetAtivo(){
        return $this->vei_ch_ativo;
    }

    public function SetAtivo($value){
        $this->vei_ch_ativo = $value;
    }   

    public function GetFoto1(){
        return $this->vei_cb_foto1;
    }

    public function SetFoto1($value){
        $this->vei_cb_foto1 = $value;
    }   

    public function GetFoto2(){
        return $this->vei_cb_foto2;
    }

    public function SetFoto2($value){
        $this->vei_cb_foto2 = $value;
    }   

    public function GetFoto3(){
        return $this->vei_cb_foto3;
    }

    public function SetFoto3($value){
        $this->vei_cb_foto3 = $value;
    }   

    public function GetFoto4(){
        return $this->vei_cb_foto4;
    }

    public function SetFoto4($value){
        $this->vei_cb_foto4 = $value;
    }   


    public function ValidarCampos(){

        $retorno = true;
        if ($this->vei_st_modelo == "") {
            echo "O campo Modelo é obrigatório";
            $retorno = false;
        }
               
        if ($this->vei_st_descricao == "") {
            echo "O campo descricao é obrigatório";
            $retorno = false;
        }

        if ($this->vei_re_valor == "") {
            echo "O campo valor é obrigatório";
            $retorno = false;
        }
        return $retorno;
    }

    public function Incluir()
    {
        if ($this->GetAtivo() == 'on')
        {
            $checked = "on";
        }
        else 
        {
            $checked = "off";
        }
        
        $data = [
            'vei_st_modelo' => $this->GetModelo(),
            'vei_st_descricao' => $this->GetDescricao(),
            'vei_st_porta' => $this->GetPorta(),
            'vei_in_anofabri' => $this->GetAnoFab(),
            'vei_in_anomodelo' => $this->GetAnoMod(),
            'vei_st_cor' => $this->GetCor(),
            'vei_in_km' => $this->GetKm(),
            'vei_st_placa' => $this->GetPlaca(),
            'vei_re_valor' => $this->GetValor(),
            'vei_st_obs' => $this->GetObs(),
            'vei_dt_inclusao' => $this->GetDtInclusao(),
            'vei_ch_ativo' => $checked,                                                                                                            
            'vei_cb_foto1' => $this->GetFoto1(),                                                                                                            
            'vei_cb_foto2' => $this->GetFoto2(),                                                                                                            
            'vei_cb_foto3' => $this->GetFoto3(),     
            'vei_cb_foto4' => $this->GetFoto4()           
        ];   
        
        $sql = 'INSERT INTO veiculos (vei_st_modelo,
                                      mar_in_codigo,
                                      vei_st_descricao,
                                      vei_st_porta,
                                      vei_in_anofabri,
                                      vei_in_anomodelo,
                                      vei_st_cor,
                                      vei_in_km,
                                      vei_st_placa,
                                      vei_re_valor,
                                      vei_st_obs,
                                      vei_dt_inclusao,
                                      vei_ch_ativo,
                                      vei_cb_foto1,
                                      vei_cb_foto2,
                                      vei_cb_foto3,
                                      vei_cb_foto4) VALUES(:vei_st_modelo,
                                                           0,
                                                           :vei_st_descricao,
                                                           :vei_st_porta,
                                                           :vei_in_anofabri,
                                                           :vei_in_anomodelo,
                                                           :vei_st_cor,
                                                           :vei_in_km,
                                                           :vei_st_placa,
                                                           :vei_re_valor,
                                                           :vei_st_obs,
                                                           :vei_dt_inclusao,
                                                           :vei_ch_ativo,
                                                           :vei_cb_foto1,
                                                           :vei_cb_foto2,
                                                           :vei_cb_foto3,
                                                           :vei_cb_foto4
                                                           )';
        // Preparação da instrução 
        $stmt= $this->prepare($sql);
        $resp = $stmt->execute($data);
        return $resp;
    }
    
   
    public function Alterar()
    {
        if ($this->GetAtivo() == 'on')
        {
            $checked = "on";
        }
        else 
        {
            $checked = "off";
        }
        
        $data = [
            'vei_in_codigo' => $this->GetCodVeiculo(),            
            'vei_st_modelo' => $this->GetModelo(),
            'mar_in_codigo' => $this->GetCodMarca(),
            'vei_st_descricao' => $this->GetDescricao(),
            'vei_st_porta' => $this->GetPorta(),
            'vei_in_anofabri' => $this->GetAnoFab(),
            'vei_in_anomodelo' => $this->GetAnoMod(),
            'vei_st_cor' => $this->GetCor(),
            'vei_in_km' => $this->GetKm(),
            'vei_st_placa' => $this->GetPlaca(),
            'vei_re_valor' => $this->GetValor(),
            'vei_st_obs' => $this->GetObs(),
            'vei_dt_inclusao' => $this->GetDtInclusao(),
            'vei_ch_ativo' => $checked  ,
            'vei_cb_foto1' => $this->GetFoto1(),                                                                                                            
            'vei_cb_foto2' => $this->GetFoto2(),                                                                                                            
            'vei_cb_foto3' => $this->GetFoto3(),     
            'vei_cb_foto4' => $this->GetFoto4()             
        ];
        
        $sql = 'UPDATE veiculos SET vei_st_modelo = :vei_st_modelo,
                                    mar_in_codigo = :mar_in_codigo,
                                    vei_st_descricao = :vei_st_descricao,
                                    vei_st_porta = :vei_st_porta,
                                    vei_in_anofabri = :vei_in_anofabri,
                                    vei_in_anomodelo = :vei_in_anomodelo,
                                    vei_st_cor = :vei_st_cor,
                                    vei_in_km  = :vei_in_km ,
                                    vei_st_placa = :vei_st_placa,
                                    vei_re_valor = :vei_re_valor,
                                    vei_st_obs  = :vei_st_obs ,
                                    vei_dt_inclusao = :vei_dt_inclusao ,
                                    vei_ch_ativo = :vei_ch_ativo,
                                    vei_cb_foto1 = :vei_cb_foto1,
                                    vei_cb_foto2 = :vei_cb_foto2,
                                    vei_cb_foto3 = :vei_cb_foto3,
                                    vei_cb_foto4 = :vei_cb_foto4
                WHERE vei_in_codigo=:vei_in_codigo';
        // Preparação da instrução 

        $stmt= $this->prepare($sql);
        $stmt->execute($data);
         
        
    }
    public function Excluir($id )
    {
        $sql = "DELETE FROM `veiculos` WHERE vei_in_codigo=".$id;
        $this->query($sql);
    }
    
	public function Consultar( $id )
    {
        $sql = "SELECT * FROM veiculos where vei_in_codigo=".$id;
        if($base = $this->query($sql)){
 
            while($row = $base->fetchObject())
                {
                 $this->SetCodVeiculo( $row->vei_in_codigo );
                 $this->SetModelo( $row->vei_st_modelo );
                 $this->SetCodMarca( $row->mar_in_codigo );
                 $this->SetDescricao( $row->vei_st_descricao );
                 $this->SetPorta( $row->vei_st_porta );
                 $this->SetAnoFab( $row->vei_in_anofabri );
                 $this->SetAnoMod( $row->vei_in_anomodelo );
                 $this->SetCor( $row->vei_st_cor );                                                                                                      
                 $this->SetKm( $row->vei_in_km );
                 $this->SetPlaca( $row->vei_st_placa );                                  
                 $this->SetValor( $row->vei_re_valor );
                 $this->SetObs( $row->vei_st_obs );                                  
                 $this->SetDtInclusao( $row->vei_dt_inclusao );                                  
                 $this->SetAtivo( $row->vei_ch_ativo );                 
                 $this->SetFoto1( $row->vei_cb_foto1 );                 
                 $this->SetFoto2( $row->vei_cb_foto2 );                 
                 $this->SetFoto3( $row->vei_cb_foto3 );                 
                 $this->SetFoto4( $row->vei_cb_foto4 );                                                                                                                       
               return true;
            }
         }
         return false;
    }
	
	
	public function Contar()
	{
		$resp = $this->prepare("SELECT count(vei_in_codigo) as totalreg FROM `veiculos` ");
		$resp->execute();
		$total = $resp->fetch(PDO::FETCH_OBJ);
		return $total->totalreg;
	}

    public function Listar()
    {
        return $this->query( "select * from veiculos order by vei_in_codigo");
    }
	
	public function ListarPag($inicio , $quant )
    {
        return $this->query( "select * from veiculos order by vei_st_modelo limit $inicio,$quant ");
    }
}
?>