
<!-- saved from url=(0171)http://funcionario.animaeducacao.com.br/SOL/codigoFonte/aluno/SOL_109.php?intCodAluno=336969&intCodCampus=4&intCodTitulo=5799591&bBoleta=1&bExtrato=1&bPeriodoLetivoAtual=1 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><link rel="stylesheet" href=" /css/padrao.css" type="text/css">
<link rel="stylesheet" href="/css/Interface.css" type="text/css">
<link rel="stylesheet" href=" /css/interface_home.css" type="text/css">
<link href="/css/global.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href=" /css/print.css" media="print">

<style type="text/css">
     @media print {
       #imgImprimir,
       #imgFechar,
       .caixaAviso
       { display:none;}
      }
  </style>

</head><body><form name="frmFormulario" action="" target="" method="">


  <table border="0"><tbody><tr>
  <td align="left" valign="bottom" id="divimgImprimir"><img class=""  dir="" lang="" id="imgImprimir"   name="imgImprimir" border="0"> <img src="/assets/img/botn_imprimir.gif" alt="" onclick="imprimir()" style="cursor:pointer;"></td>
  
  
  <td align="left" valign="bottom" id="divimgFechar"><img class="" style="cursor:pointer" dir="" lang="" id="imgFechar" name="imgFechar" border="0"> <a href="/boleto/gerar"><img src="/assets/img/botn_fechar.gif" alt=""> </a>  </td>
 
  </tr></tbody></table>
  <table border="0"><tbody><tr><td align="left" valign="bottom" id="divspnBoleta"><span id="spnBoleta" class="" dir="" lang="">
<style type="text/css">
.tbl {
  border: 1px solid #333333;
  width: 738px;
  position: static;
  height: 957px;
  left: 15px;
  top: 10px;
  right: 15px;
  bottom: 2px;
  page-break-before: auto;
  page-break-after: auto;
  background-position: left top;
    margin-top: 20px;
}
.cel {
  border-top-width: 1px;
  border-right-width: 1px;
  border-bottom-width: 1px;
  border-left-width: 1px;
  border-top-style: none;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: none;
  border-top-color: #000000;
  border-right-color: #000000;
  border-bottom-color: #000000;
  border-left-color: #000000;
}
.celdir {
  border-top-width: 1px;
  border-right-width: 1px;
  border-bottom-width: 1px;
  border-left-width: 1px;
  border-top-style: none;
  border-right-style: none;
  border-bottom-style: solid;
  border-left-style: none;
  border-top-color: #000000;
  border-right-color: #000000;
  border-bottom-color: #000000;
  border-left-color: #000000;
}
.linha {
  border-top-width: 1px;
  border-right-width: 1px;
  border-bottom-width: 1px;
  border-left-width: 1px;
  border-top-style: solid;
  border-right-style: none;
  border-bottom-style: none;
  border-left-style: none;
  border-top-color: #000000;
}
div.#dvBoleta {
              left : 0px;
              margin-top : 0px;
              margin-left : 23px;
              top  : 0px; 
             }
</style>

<title>Boleta</title>




<div id="dvBoleta" name="dvBoleta" align="left">
  <table width="738" height="990" border="0" cellpadding="0" cellspacing="0" class="tbl">
    <tbody><tr> 
      <td width="836" height="59"> <table width="738" height="59" border="0" cellpadding="0" cellspacing="0" class="celdir">
          <tbody><tr> 
            <td width="60" height="58" class="cel"><strong><img src="/assets/img/{{{$nomeImagemIes}}}" width="145" height="45"></strong></td>
            <td width="80%"><table width="591" height="58" border="0" cellpadding="0" cellspacing="0" class="celdir">
                <tbody><tr> 
                  <td width="11">&nbsp;</td>

                  <td width="580" height="19"><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="3" face="Arial, Helvetica, sans-serif"><strong>{{{$cedenteIes}}}</strong></font></strong></font> 
                  </td>
                </tr>
                <tr> 
                  <td height="19">&nbsp;</td>
                  <td><font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif">CNPJ: 
                    08.446.503/0001-05</font></font></font></td>
                </tr>
                <tr> 
                  <td height="19">&nbsp;</td>
                  <td><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">{{{$nomIes}}}</font></strong></font></strong></td>
                </tr>
              </tbody></table></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="12"><font size="1" face="Arial, Helvetica, sans-serif"><strong>ALUNO:</strong> 
        1111{{{$fimRa}}}  -{{{$nome}}}</font></td>
    </tr>
    <tr> 
      <td height="37"> <table width="738" height="37" border="0" cellpadding="0" cellspacing="0" class="celdir">
          <tbody><tr> 
            <td width="369" height="12"><strong><font size="1" face="Arial, Helvetica, sans-serif">CURSO: 
              </font></strong><font size="1" face="Arial, Helvetica, sans-serif">{{{$curso}}}</font></td>
            <td width="369"><strong><font size="1" face="Arial, Helvetica, sans-serif">TURNO:</font></strong><font size="1" face="Arial, Helvetica, sans-serif"> 
              noite </font></td>
          </tr>
          <tr> 
            <td height="12"><strong><font size="1" face="Arial, Helvetica, sans-serif">CAMPUS:</font></strong><font size="1" face="Arial, Helvetica, sans-serif"> 
              {{{$campus}}}         </font></td>
            <td><strong><font size="1" face="Arial, Helvetica, sans-serif">OCORRÊNCIA: 
              </font></strong><font size="1" face="Arial, Helvetica, sans-serif">Segundo Período</font></td>
          </tr>
          <tr> 
            <td height="12"><strong><font size="1" face="Arial, Helvetica, sans-serif">PERÍODO 
              LETIVO: </font></strong><font size="1" face="Arial, Helvetica, sans-serif">{{{$ano}}}/{{{$semestre}}}</font></td>
            <td><strong><font size="1" face="Arial, Helvetica, sans-serif">VERSÃO 
              GRADE: </font></strong><font size="1" face="Arial, Helvetica, sans-serif">ENC00002</font></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="25"> <table width="738" height="25" border="0" cellpadding="0" cellspacing="0" class="celdir">
          <tbody><tr> 
            <td width="369" height="12"><strong><font size="1" face="Arial, Helvetica, sans-serif">PARCELA: 
              </font></strong><font size="1" face="Arial, Helvetica, sans-serif">{{{$parcela}}}</font></td>
            <td width="369"><strong><font size="1" face="Arial, Helvetica, sans-serif">
              </font></strong><font size="1" face="Arial, Helvetica, sans-serif"></font></td>
          </tr>
          <tr> 
            <td width="369" height="12"><strong><font size="1" face="Arial, Helvetica, sans-serif">VENCIMENTO: 
              </font></strong><font size="1" face="Arial, Helvetica, sans-serif">08/{{{$mes}}}/{{{$ano}}}</font></td>
            <td><font size="1" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td width="738" height="310"> 
        <table width="738" height="316" border="0" cellpadding="0" cellspacing="0" class="linha">
          <tbody><tr> 
            <td width="369" height="315"> <table width="369" height="315" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="227" height="12"><font size="1" face="Courier New, Courier, mono">Mensalidade</font></td>
                  <td width="68" height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono"> </font></div></td>
                  <td width="73" height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">       989,00</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">DCE</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono"> </font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">         4,00</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">Total</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono"> </font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">       993,00</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
                <tr> 
                  <td height="15"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td height="15"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                  <td height="15"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                </tr>
              </tbody></table></td>
            <td width="369" height="315"> <table width="369" height="314" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr> 
                  <td width="369" height="156" class="celdir"> <table width="369" height="157" border="0" cellpadding="0" cellspacing="0">
                      <tbody><tr> 
                        <td width="106" height="13" class="cel"> <div align="center"><font face="Courier New, Courier, mono"><strong><font size="1">P.Letivo</font></strong></font></div></td>
                        <td width="90" height="13" class="cel"> <div align="center"><font face="Courier New, Courier, mono"><strong><font size="1">Parc.</font></strong></font></div></td>
                        <td width="90" height="13" class="cel"> <div align="center"><font face="Courier New, Courier, mono"><strong><font size="1">Valor</font></strong></font></div></td>
                        <td width="83" height="13" class="celdir"> <div align="center"><font face="Courier New, Courier, mono"><strong><font size="1">Status</font></strong></font></div></td>
                      </tr>
                      @for($x = 1; $x <= $parcela; $x++)
                      <tr> 
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">{{{$ano}}}/{{{$semestre}}}</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">{{{$x}}}</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">       993,00</font></div></td>
                        <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">
                        @if ($x < $parcela)
                          Baixado
                        @else
                          Aberto
                        @endif
                        </font></div></td>
                      </tr>

                     

                     @endfor
                     @for($x = 1; $x <= 12 - $parcela; $x++)
                        <tr> 
                          <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                          <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                          <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                          <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        </tr>


                     @endfor
<!--                       <tr> 
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                      </tr>
                      <tr> 
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                      </tr>
                      <tr> 
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                      </tr>
                      <tr> 
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                      </tr>
                      <tr> 
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                      </tr>
                      <tr> 
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                      </tr>
                      <tr> 
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="right"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                        <td height="12"> <div align="center"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></div></td>
                      </tr> -->
                    </tbody></table></td>
                </tr>
                <tr> 
                  <td height="157"> <table width="369" height="158" border="0" cellpadding="0" cellspacing="0" class="celdir">
                      <tbody><tr> 
                        <td width="369" height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="12"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                      <tr> 
                        <td height="13"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                      </tr>
                    </tbody></table></td>
                </tr>
              </tbody></table></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="175"> 
        <table width="738" height="180" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr> 
            <td width="738" height="30"> 
              <table width="738" height="35" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr> 
                  <td height="13" class="celdir"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td class="celdir"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                  <td class="celdir"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
                </tr>
                <tr> 
                  <td width="181" height="22" class="cel"><strong><font size="2" face="Arial, Helvetica, sans-serif">HSBC</font></strong></td>
                  <td width="97" class="cel"> <div align="center"><font size="2"><strong><font size="4" face="Arial, Helvetica, sans-serif">399-9</font></strong></font></div></td>
                  <td width="460" class="celdir">&nbsp;</td>
                </tr>
              </tbody></table></td>
          </tr>
          <tr> 
            <td height="25"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr> 
                  <td width="738" height="24"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                      <tbody><tr> 
                        <td width="738" height="12"><font size="1" face="Courier New, Courier, mono">LOCAL 
                          DE PAGAMENTO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>PAGÁVEL EM QUALQUER BANCO ATÉ O VENCIMENTO</strong></font></td>
                      </tr>
                    </tbody></table></td>
                </tr>
              </tbody></table></td>
          </tr>
          <tr> 
            <td height="24"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                <tbody><tr> 
                  <td width="738" height="12"><font size="1" face="Courier New, Courier, mono">NOME 
                    DO ALUNO</font></td>
                </tr>
                <tr> 
                  <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong> 
                    1111{{{$fimRa}}}  -{{{$nome}}} / {{{$curso}}} Parc. {{{$parcela}}}- {{{$ano}}}/{{{$semestre}}}</strong></font></td>
                </tr>
              </tbody></table></td>
          </tr>
          <tr> 
            <td height="24"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr> 
                  <td width="553" height="24"> <table width="553" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="552" height="12"><font size="1" face="Courier New, Courier, mono">CEDENTE</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>{{{$cedenteIes}}}</strong></font></td>
                      </tr>
                    </tbody></table></td>
                  <td width="185"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" class="celdir">
                      <tbody><tr> 
                        <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">DATA 
                          VENCIMENTO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><div align="right"><font size="1" face="Arial, Helvetica, sans-serif"><strong>08/{{{$mes}}}/{{{$ano}}}</strong></font></div></td>
                      </tr>
                    </tbody></table></td>
                </tr>
              </tbody></table></td>
          </tr>
          <tr> 
            <td height="24"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr> 
                  <td width="147" height="24"> <table width="147" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="146" height="12"><font size="1" face="Courier New, Courier, mono">NÚMERO 
                          DOCUMENTO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"> <div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">170730            </font></strong></div></td>
                      </tr>
                    </tbody></table></td>
                  <td width="162"> <table width="162" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="161" height="12"><font size="1" face="Courier New, Courier, mono">ESPÉCIE 
                          DOCUMENTO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>DM</strong></font></strong></td>
                      </tr>
                    </tbody></table></td>
                  <td width="59"> <table width="59" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="58" height="12"><font size="1" face="Courier New, Courier, mono">ACEITE</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">S</font></strong></div></td>
                      </tr>
                    </tbody></table></td>
                  <td width="185"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="184" height="12"><font size="1" face="Courier New, Courier, mono">DATA 
                          PROCESSAMENTO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">01/{{{$mes}}}/{{{$ano}}}</font></strong></div></td>
                      </tr>
                    </tbody></table></td>
                  <td width="185"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                      <tbody><tr> 
                        <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">AGÊNCIA/CÓDIGO 
                          CEDENTE</font></td>
                      </tr>
                      <tr> 
                        <td height="11"> <div align="right"><strong><font size="1" face="Arial, Helvetica, sans-serif">1926      /002620-5</font></strong></div></td>
                      </tr>
                    </tbody></table></td>
                </tr>
              </tbody></table></td>
          </tr>
          <tr> 
            <td height="24"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr> 
                  <td width="118" height="24"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">CGC 
                          CEDENTE</font></td>
                      </tr>
                      <tr> 
                        <td height="11"> <div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">08.446.503/0001-05</font></strong></div></td>
                      </tr>
                    </tbody></table></td>
                  <td width="118"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">CARTEIRA</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><strong>03</strong></font></div></td>
                      </tr>
                    </tbody></table></td>
                  <td width="118"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">ESPÉCIE</font></td>
                      </tr>
                      <tr> 


                        <td height="11"> <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><strong>R$</strong></font></div></td>
                      </tr>
                    </tbody></table></td>
                  <td width="118"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">QUANTIDADE</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                  <td width="81"> <table width="81" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td width="80" height="12"><font size="1" face="Courier New, Courier, mono">VALOR</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                  <td width="185"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                      <tbody><tr> 
                        <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">NOSSO 
                          NÚMERO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"> <div align="right"><font size="1" face="Arial, Helvetica, sans-serif"><strong>17495153703       </strong></font></div></td>
                      </tr>
                    </tbody></table></td>
                </tr>
              </tbody></table></td>
          </tr>
          <tr> 
            <td height="24"> <table width="738" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr> 
                  <td width="19%" height="24"> <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td><font size="1" face="Courier New, Courier, mono">(-)DESCONTO/ABATIMENTO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                  <td width="15%"> <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td><font size="1" face="Courier New, Courier, mono">(-)OUTRAS 
                          DEDUÇÕES </font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                  <td width="11%"> <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td><font size="1" face="Courier New, Courier, mono">(+)MULTA/MORA</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                  <td width="122"> <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td><font size="1" face="Courier New, Courier, mono">(+)OUTROS 
                          ACRÈSCIMOS </font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                  <td width="99"> <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cel">
                      <tbody><tr> 
                        <td><font size="1" face="Courier New, Courier, mono">(=)VALOR 
                          COBRADO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                  <td width="184"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" class="celdir">
                      <tbody><tr> 
                        <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">(=)VALOR 
                          DO DOCUMENTO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"> <div align="right"><font size="1" face="Arial, Helvetica, sans-serif"><strong>     993,00</strong></font></div></td>
                      </tr>
                    </tbody></table></td>
                </tr>
              </tbody></table></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="12" class="celldir"> <table width="738" height="12" border="0" cellpadding="0" cellspacing="0" class="celdir">
          <tbody><tr> 
            <td width="738" height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="22"> <table width="738" height="22" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr> 
            <td width="202" height="22" class="cel"><strong><font size="2" face="Arial, Helvetica, sans-serif">HSBC</font></strong></td>
            <td width="121" class="cel"> <div align="center"><font size="2"><strong><font size="4" face="Arial, Helvetica, sans-serif">399-9</font></strong></font></div></td>
            <td width="415" class="celdir"><div align="center"><font size="2"><strong><font face="Arial, Helvetica, sans-serif">39991.74950 19230.309146 00262.050016 9 53270000020180</font></strong></font></div></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="24"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr> 
            <td width="553" height="24"> <table width="553" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="552" height="12"><font size="1" face="Courier New, Courier, mono">LOCAL 
                    DE PAGAMENTO</font></td>
                </tr>
                <tr> 
                  <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>PAGÁVEL EM QUALQUER BANCO ATÉ O VENCIMENTO</strong></font></td>
                </tr>
              </tbody></table></td>
            <td width="185"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" class="celdir">
                <tbody><tr> 
                  <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">DATA 
                    VENCIMENTO</font></td>
                </tr>
                <tr> 
                  <td height="11"><div align="right"><font size="1" face="Arial, Helvetica, sans-serif"><strong>08/{{{$mes}}}/{{{$ano}}}</strong></font></div></td>
                </tr>
              </tbody></table></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="25"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr> 
            <td width="555" height="24"> <table width="553" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="552" height="12"><font size="1" face="Courier New, Courier, mono">CEDENTE</font></td>
                </tr>
                <tr> 
                  <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>{{{$cedenteIes}}}</strong></font></td>
                </tr>
              </tbody></table></td>
            <td width="185"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                <tbody><tr> 
                  <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">AGÊNCIA/CÓDIGO 
                    CEDENTE</font></td>
                </tr>
                <tr> 
                  <td height="11"><div align="right"><font size="1" face="Arial, Helvetica, sans-serif"><strong><font size="1" face="Arial, Helvetica, sans-serif">1926      /002620-5</font></strong></font></div></td>
                </tr>
              </tbody></table></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="24"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr> 
            <td width="118" height="24"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">DATA 
                    DOCUMENTO</font></td>
                </tr>
                <tr> 
                  <td height="11"> <div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">01/{{{$mes}}}/{{{$ano}}}</font></strong></div></td>
                </tr>
              </tbody></table></td>
            <td width="118"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">NÚMERO 
                    DOCUMENTO </font></td>
                </tr>
                <tr> 
                  <td height="11"><div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><strong><font size="1" face="Arial, Helvetica, sans-serif">170730            </font></strong></font></div></td>
                </tr>
              </tbody></table></td>
            <td width="118"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">ESPÉCIE 
                    DOCUMENTO</font></td>
                </tr>
                <tr> 
                  <td height="11"> <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;DM</strong></font></div></td>
                </tr>
              </tbody></table></td>
            <td width="81"> <table width="81" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="80" height="12"><font size="1" face="Courier New, Courier, mono">ACEITE</font></td>
                </tr>
                <tr> 
                  <td height="11"><div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;<font size="1" face="Arial, Helvetica, sans-serif">S</font></strong></font></div></td>
                </tr>
              </tbody></table></td>
            <td width="118"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">DATA 
                    PROCESSAMENTO</font></td>
                </tr>
                <tr> 
                  <td height="11"> <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><strong><font size="1" face="Arial, Helvetica, sans-serif">01/{{{$mes}}}/{{{$ano}}}</font></strong></font></div></td>
                </tr>
              </tbody></table></td>
            <td width="185"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                <tbody><tr> 
                  <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">NOSSO 
                    NÚMERO</font></td>
                </tr>
                <tr> 
                  <td height="11"> <div align="right"><font size="1" face="Arial, Helvetica, sans-serif"><strong>17495153703       </strong></font></div></td>
                </tr>
              </tbody></table></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="24"> <table width="738" height="24" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr> 
            <td width="118" height="24"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">USO 
                    DO BANCO</font></td>
                </tr>
                <tr> 
                  <td height="11"> <div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">&nbsp;</font></strong></div></td>
                </tr>
              </tbody></table></td>
            <td width="118"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">CARTEIRA</font></td>
                </tr>
                <tr> 
                  <td height="11"><div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><strong>03</strong></font></div></td>
                </tr>
              </tbody></table></td>
            <td width="118"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">ESPÉCIE</font></td>
                </tr>
                <tr> 
                  <td height="11"> <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><strong>R$</strong></font></div></td>
                </tr>
              </tbody></table></td>
            <td width="118"> <table width="118" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="117" height="12"><font size="1" face="Courier New, Courier, mono">QUANTIDADE</font></td>
                </tr>
                <tr> 
                  <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                </tr>
              </tbody></table></td>
            <td width="81"> <table width="81" height="24" border="0" cellpadding="0" cellspacing="0" class="cel">
                <tbody><tr> 
                  <td width="80" height="12"><font size="1" face="Courier New, Courier, mono">VALOR</font></td>
                </tr>
                <tr> 
                  <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                </tr>
              </tbody></table></td>
            <td width="185"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" class="celdir">
                <tbody><tr> 
                  <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">(=) 
                    VALOR DO DOCUMENTO</font></td>
                </tr>
                <tr> 
                  <td height="11"> <div align="right"><font size="1" face="Arial, Helvetica, sans-serif"><strong>     993,00</strong></font></div></td>
                </tr>
              </tbody></table></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="152"> 
        <table width="738" height="145" border="0" cellpadding="0" cellspacing="0" class="linha">
          <tbody><tr> 
            <td width="553" height="144" class="cel"> <table width="552" height="144" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr> 
                  <td width="552" height="12"><font size="1" face="Courier New, Courier, mono">INSTRUÇÕES</font></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>APÓS VENCIMENTO MULTA R$ 4.04 E R$ 0.17 C.M DIA.</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="11"><strong><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong></td>
                </tr>
              </tbody></table></td>
            <td width="185" height="144" class="celdir"> <table width="185" height="144" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr> 
                  <td width="185" height="24"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                      <tbody><tr> 
                        <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">(-)DESCONTO/ABATIMENTO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                </tr>
                <tr> 
                  <td height="24"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                      <tbody><tr> 
                        <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">(-)OUTRAS 
                          DEDUÇÕES </font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                </tr>
                <tr> 
                  <td height="24"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                      <tbody><tr> 
                        <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">(+)MULTA/MORA</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                </tr>
                <tr> 
                  <td height="24"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" class="celdir">
                      <tbody><tr> 
                        <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">(+)OUTROS 
                          ACRÈSCIMOS </font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                </tr>
                <tr> 
                  <td height="24"> <table width="185" height="24" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" class="celdir">
                      <tbody><tr> 
                        <td width="185" height="12"><font size="1" face="Courier New, Courier, mono">(=)VALOR 
                          COBRADO</font></td>
                      </tr>
                      <tr> 
                        <td height="11"><font size="1" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></td>
                      </tr>
                    </tbody></table></td>
                </tr>
                <tr> 
                  <td height="12"><strong><font size="1" face="Courier New, Courier, mono"><strong>&nbsp;</strong></font></strong></td>
                </tr>
                <tr> 
                  <td height="12"><strong><font size="1" face="Courier New, Courier, mono"><strong>&nbsp;</strong></font></strong></td>
                </tr>
              </tbody></table></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr> 
      <td height="40"> 
        <table width="738" height="49" border="0" cellpadding="0" cellspacing="0" class="celdir">
          <tbody><tr> 

            <td width="600" height="12"><font size="1" face="Courier New, Courier, mono">SACADO</font></td>
            <td width="138"><font size="1" face="Courier New, Courier, mono">&nbsp;</font></td>
          </tr>
          <tr> 
            <td height="12"><strong><font size="1" face="Courier New, Courier, mono"><strong> 
              {{{$nome}}} Parc. {{{$parcela}}} - {{{$ano}}}/{{{$semestre}}}</strong></font></strong></td>
            <td><strong><font size="1" face="Courier New, Courier, mono"><strong>&nbsp;</strong></font></strong></td>
          </tr>
          <tr> 
            <td height="12"><font size="1" face="Courier New, Courier, mono"><strong>{{{$endereco}}}</strong></font></td>
            <td><strong><font size="1" face="Courier New, Courier, mono"><strong>&nbsp;</strong></font></strong></td>
          </tr>
          <tr> 
            <td height="12"><font size="1" face="Courier New, Courier, mono"><strong>CEP: 
              {{{$cep}}} {{{$cidade}}} - {{$estado}}</strong></font></td>
            <td><font size="1" face="Courier New, Courier, mono"><strong>CPF: 
              {{{$cpf}}}</strong></font></td>
          </tr>
        </tbody></table></td>
    </tr>
  </tbody></table>
</div><table width="738" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
  <td width="75%"><strong><font size="1" face="Courier New, Courier, mono"><strong>&nbsp;</strong></font></strong></td>
  <td><strong><font size="1" face="Courier New, Courier, mono">AUTENTICAÇÃO 
  MECÂNICA </font></strong></td>
</tr>
<tr>
<td>
<table width="10" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
     <td>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
     <td>
       <img src="/assets/img/espaco.jpg">
     </td>
     <td>
       <img src="/assets/img/barra.jpg">
     </td>
</tr>
</tbody></table>
</td>
<td><strong><font size="1" face="Courier New, Courier, mono"><strong>FICHA 
  DE COMPENSAÇÃO</strong></font></strong></td>
</tr>
</tbody></table>


</span>
</td>
  </tr></tbody></table>

</form><script language="JavaScript">

function imprimir()
{
window.print();
}

</script></body></html>