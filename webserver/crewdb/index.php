<?php
# require_once("db_access.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CREWdb</title>
<style type="text/css">
<!--
.style4 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; }
.style9 {color: #000000; font-family: Arial, Helvetica, sans-serif; }
.style10 {font-size: 14px}
.style12 {font-family: Arial, Helvetica, sans-serif; font-size: 24px; }
.style13 {font-size: 12px}
.style15 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
}
.style18 {font-family: Arial, Helvetica, sans-serif; font-size: 36px; }
.style19 {font-size: 36}
.style20 {font-family: Arial, Helvetica, sans-serif; font-size: 36; }
.style21 {font-size: 18}
.style22 {font-family: Arial, Helvetica, sans-serif; font-size: 18; }
.style28 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style29 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style30 {font-family: Arial, Helvetica, sans-serif}
.style32 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<body>
<form id="chromForm" name="crew" method="post" action="confirm.php">
<table width=100% border="0" cellspacing="0" cellpadding="0">
  <tr  >
    <th width="9" rowspan="2" valign="middle" scope="row">&nbsp;</th>
    <td width="120" rowspan="2" align="center" valign="middle"><img src="img/crew_updated.gif" alt="Chromatin Readers Erasers Writers" width="120" height="95" /></td>
    <td width="151" height="67" align="left" valign="top"><span class="style18"><br />
      CREWdb</span></td>
    <td width="84"><span class="style4">c</span></td>
    <td width="85" rowspan="2">&nbsp;</td>
    <td width="136" rowspan="2" >&nbsp;</td>
    <td width="63" rowspan="2" align="left"><p class="style9">&nbsp;</p></td>
    <td colspan="3" rowspan="2" valign="middle" bordercolor="#000000"><span class="style9"><!--<span class="style12">MollahLab--><img src="img/logo.png" width="170"/></span><br />
        <!--<span class="style10">Department of Genetics</span>--><img src="img/genetics_logo_45H.fw_.png" width="90"/></span></td>
  </tr>
  <tr  >
    <td colspan="2" align="left" valign="top"><span class="style28"><strong> C</strong>hromatin</span> <span class="style29">R</span><span class="style28">eaders<strong> E</strong>rasers <strong>W</strong>riters<strong> d</strong>ata<strong>b</strong>ase  </span></td>
    </tr>
  <tr>
    <th colspan="10" scope="row"><hr /></th>
    </tr>
  
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="97">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="52">&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="4" bordercolor="#000000"><div align="center"><span class="style15">Results</span></div></td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <th width="9" scope="row">&nbsp;</th>
    <td height="25" colspan="2"><div align="right"><span class="style22">Choose cell line&nbsp&nbsp </span></div></td>
    <td colspan="2"><br />
      <select name="menu1">
      <option>Choose option</option>
      <option selected="selected">Breast</option>
      <option>Skin</option>
      <option>Pancreas</option>
      <option>Neural progenitor</option>
      <option>Prostate</option>
      <option>Lung</option>
    </select><p></p></td>
    <td colspan="4" rowspan="8" bordercolor="#000000" bgcolor="#F2F2FF"><div align="center"></div>      
      <p class="style21">&nbsp;</p>
      <p class="style21">&nbsp;</p>
      <p align="center" class="style19"><img src="img/crew_updated2.gif" alt="Chromatin Readers Erasers Writers" width="200" height="158" /></p>      
      <div align="center">
        <p class="style20">&nbsp;</p>
        </div></td>
    <td rowspan="8" bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td height="25" colspan="2"><div align="right" class="style22">Choose signatures or drugs&nbsp&nbsp</div>
      <p>&nbsp;</p></td>
    <td><select multiple name="sel1[]" size="3">
      <option value="c1">C1</option>
      <option value="c2">C2</option>
      <option value="c3">C3</option>
      <option value="c4">C4</option>
      <option value="Afuresertib">Afuresertib </option>
      <option value="AR A014418">AR A014418</option>
      <option value="BMS-345541">BMS-345541</option>
      <option value="BMS-906024">BMS-906024</option>
      <option value="BYL719">BYL719</option>
      <option value="dactolisib">dactolisib </option>
      <option value="dinaciclib">dinaciclib</option>
      <option value="Everolimus">Everolimus </option>
      <option value="flavopiridol">flavopiridol</option>
      <option value="IPI145">IPI145 </option>
      <option value="lenalidomide">Lenalidomide</option>
      <option value="Losmapimod">Losmapimod </option>
      <option value="Nilotinib">Nilotinib</option>
      <option value="Pazopanib">Pazopanib </option>
      <option value="PD0325901">PD0325901 </option>
      <option value="PD-0332991">PD-0332991</option>
      <option value="Pravastatin">Pravastatin </option>
      <option value="PRI-724">PRI-724</option>
      <option value="PS-1145">PS-1145</option>
      <option value="RO4929097">RO4929097</option>
      <option value="SC H900776">SC H900776</option>
      <option value="Selumetinib">Selumetinib </option>
      <option value="SP600125">SP600125 </option>
      <option value="Staurosporine">Staurosporine </option>
      <option value="TG101348">TG101348 </option>
      <option value="Tofacitinib">Tofacitinib </option>
      <option value="Vemurafenib">Vemurafenib </option>
      <option value="Verteporfin">Verteporfin </option>
      <option value="Vorinostat">Vorinostat </option>
      <option value="VX-970">VX-970</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td height="25" colspan="4"><hr /></td>
    </tr>
  
  <tr>
    <th width="9" rowspan="3" scope="row">&nbsp;</th>
    <td height="31" valign="middle"><div align="center"><span class="style30"></span></div>
      <span class="style30"><label></label>
        </span>
      <div align="right"><br />      
      </div></td>
    <td height="31" valign="middle"><div align="center"></div></td>
    <td height="62" rowspan="3"><p align="center"> <span class="style30"><strong>Search</strong></span><br />
      <textarea name="keyword" rows="8"></textarea>
      <br />
    </p></td>
    <td height="62" rowspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="31" valign="middle">&nbsp;</td>
    <td height="31" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="31" colspan="2" valign="top"><div align="right"><span class="style30">Enter Genes/Proteins by &nbsp;&nbsp;
    </span></div>
      <span class="style30">
      <label>      </label>
      </span>
      <div align="right"><span class="style30"><br />
          <input type="radio" name="geneid" value="1" checked />
        Name </span>
        <input type="radio" name="geneid" value="2" />
          <span class="style30">Entrez Id&nbsp;&nbsp;</span></div>
      </div>
      </label>
        <div align="left"></div>
      </label>    </td>
  </tr>
  <tr>
    <th width="9" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  <tr>
    <th width="9" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <th colspan="10" scope="row"><div align="center" class="style13"><span style="font-family: 'Arial'"><font color="grey">Chromatin Reader Eraser Writer database (CREWdb)</font></span> <br />
        <span class="style28">Version 1.0.1</span> </div></th>
    </tr>
</table>
</form>
</body>
</html>
