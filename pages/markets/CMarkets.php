<?
class CMarkets
{
	function CMarkets($db, $template)
	{
		$this->kern=$db;
		$this->template=$template;
	}
	
	function showLeftMenu($sel=1)
	{
		?>
        
            <table width="201" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  
                  <tr style="cursor:pointer" onClick="window.location='../goods/index.php'">
                    <td height="40" align="left"><table width="200" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td width="4" <? if ($sel==1) print "bgcolor='#B20002'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          <td width="40" <? if ($sel==1) print "bgcolor='#f7f5e8'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;" height="40" align="center">
                          <span class="glyphicon glyphicon-gift" style="color:<? if ($sel==1) print "#990000"; else print "#bcac8e"; ?>"></span></td>
                          <td <? if ($sel==1) print "bgcolor='#f7f5e8'"; ?> width="110" class="<? if ($sel==1) print "inset_red_14"; else print "inset_maro_14"; ?>" style="border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#ffffff;">Goods</td>
                          <td <? if ($sel==1) print "bgcolor='#f7f5e8'"; ?> width="36" align="center" style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                  
                   <tr style="cursor:pointer" onClick="window.location='../digital/index.php'">
                    <td height="40" align="left"><table width="200" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td width="4" <? if ($sel==2) print "bgcolor='#B20002'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          <td width="40" <? if ($sel==2) print "bgcolor='#f7f5e8'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;" height="40" align="center">
                           <span class="glyphicon glyphicon-headphones" style="color:<? if ($sel==2) print "#990000"; else print "#bcac8e"; ?>"></span></td>
                          <td <? if ($sel==2) print "bgcolor='#f7f5e8'"; ?> width="110" class="<? if ($sel==2) print "inset_red_14"; else print "inset_maro_14"; ?>" style="border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#ffffff;">Digital Goods</td>
                          <td <? if ($sel==2) print "bgcolor='#f7f5e8'"; ?> width="36" align="center" style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                  
                  <tr style="cursor:pointer" onClick="window.location='../services/index.php'">
                    <td height="40" align="left"><table width="200" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td width="4" <? if ($sel==3) print "bgcolor='#B20002'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          <td width="40" <? if ($sel==3) print "bgcolor='#f7f5e8'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;" height="40" align="center">
                           <span class="glyphicon glyphicon-briefcase" style="color:<? if ($sel==3) print "#990000"; else print "#bcac8e"; ?>"></span></td>
                          <td <? if ($sel==3) print "bgcolor='#f7f5e8'"; ?> width="110" class="<? if ($sel==3) print "inset_red_14"; else print "inset_maro_14"; ?>" style="border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#ffffff;">Services</td>
                          <td <? if ($sel==3) print "bgcolor='#f7f5e8'"; ?> width="36" align="center" style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                  
                   <tr style="cursor:pointer" onClick="window.location='../escrowers/index.php'">
                    <td height="40" align="left"><table width="200" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td width="4" <? if ($sel==4) print "bgcolor='#B20002'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          <td width="40" <? if ($sel==4) print "bgcolor='#f7f5e8'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;" height="40" align="center">
                           <span class="glyphicon glyphicon-lock" style="color:<? if ($sel==4) print "#990000"; else print "#bcac8e"; ?>"></span></td>
                          <td <? if ($sel==4) print "bgcolor='#f7f5e8'"; ?> width="110" class="<? if ($sel==4) print "inset_red_14"; else print "inset_maro_14"; ?>" style="border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#ffffff;">Escrowers</td>
                          <td <? if ($sel==4) print "bgcolor='#f7f5e8'"; ?> width="36" align="center" style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                  
                   <tr style="cursor:pointer" onClick="window.location='../exchangers/index.php'">
                    <td height="40" align="left"><table width="200" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td width="4" <? if ($sel==5) print "bgcolor='#B20002'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          <td width="40" <? if ($sel==5) print "bgcolor='#f7f5e8'"; ?> style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;" height="40" align="center">
                           <span class="glyphicon glyphicon-refresh" style="color:<? if ($sel==5) print "#990000"; else print "#bcac8e"; ?>"></span></td>
                          <td <? if ($sel==5) print "bgcolor='#f7f5e8'"; ?> width="110" class="<? if ($sel==5) print "inset_red_14"; else print "inset_maro_14"; ?>" style="border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#ffffff;">Exchangers</td>
                          <td <? if ($sel==5) print "bgcolor='#f7f5e8'"; ?> width="36" align="center" style="border-bottom-width:1px; border-bottom-style:inset; border-bottom-color:#ffffff;">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                  
                  
                 
                  <tr>
                    <td height="40" align="left">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="40" align="left">&nbsp;</td>
                  </tr>
                </tbody>
              </table>
        
        <?
	}
	
	
}
?>