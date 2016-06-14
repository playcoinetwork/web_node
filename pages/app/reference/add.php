<?
   session_start();
   
   include "../../../kernel/db.php";
   include "../../../kernel/CUserData.php";
   include "../../../kernel/CSysData.php";
   include "../../template/template/CTemplate.php";
   include "../CApp.php";
   include "../write/CWrite.php";
   
   $db=new db();
   $template=new CTemplate($db);
   $ud=new CUserData($db);
   $sd=new CSysData($db);
   $app=new CApp($db, $template);
   $write=new CWrite($db, $template, $app);
   
   if (!isset($_SESSION['userID'])) $this->kern->redirect("../../../index.php");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><? print $_REQUEST['sd']['website_name']; ?></title>
<script src="../../../flat/js/vendor/jquery.min.js"></script>
<script src="../../../flat/js/flat-ui.js"></script>
<link rel="stylesheet"./ href="../../../flat/css/vendor/bootstrap/css/bootstrap.min.css">
<link href="../../../flat/css/flat-ui.css" rel="stylesheet">
<link href="../../../style.css" rel="stylesheet">
<link rel="shortcut icon" href="../../../flat/img/favicon.ico">

<style>
@media only screen and (max-width: 1000px)
{
   .balance_usd { font-size: 40px; }
   .balance_msk { font-size: 40px; }
   #but_send { font-size:30px; }
   #td_balance { height:100px; }
   #div_ads { display:none; }
   .txt_help { font-size:20px;  }
   .font_14 { font-size:20px;  }
   .font_10 { font-size:18px;  }
   .font_14 { font-size:22px;  }
}

.font_14 {font-size:20px;  }
</style>

<style type="text/css" media="screen">
    #editor_code { 
        width:100%;
		height:350px;
		margin:0 auto;
    }
	
	#exec_log { 
        width:100%;
		height:600px;
		margin:0 auto;
    }
	
	#run_code { 
        width:100%;
		height:600px;
		margin:0 auto;
    }
</style>

</head>

<body>


<?
   $template->showTopBar(6);
?>
 

 <div class="container-fluid">
 
 <?
    $template->showBalanceBar();
 ?>


 <div class="row">
 <div class="col-md-1">&nbsp;</div>
 <div class="col-md-8" align="center" style="height:100%; background-color:#ffffff">
 
 <?
     // Location
     $template->showLocation("../../app/write/index.php", "Applications", "", "Reference");
	 
	
 ?>
 
 <br>
 <table width="90%" border="0" cellpadding="0" cellspacing="0">
   <tbody>
     <tr>
       <td width="23%" align="left" valign="top">
       
       <div class="list-group">
       <a href="#" class="list-group-item active" style="font-size:14px">Instructions</a>
       <a href="#" class="list-group-item" style="font-size:14px">Environment Variables</a>
       </div>
       
       </td>
       <td width="6%" align="right" valign="top">&nbsp;</td>
       <td width="71%" align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
         <tbody>
           <tr>
             <td class="font_18"><strong>ADD</strong></td>
           </tr>
           <tr>
             <td><hr></td>
           </tr>
           <tr>
             <td bgcolor="#f5f5f5" class="font_16" height="40px"><strong>&nbsp;&nbsp;ADD op1, op2</strong></td>
           </tr>
           <tr>
             <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
               <tbody>
                 <tr>
                   <td width="6%" align="right" class="fnt_14"><strong>op1</strong></td>
                   <td width="2%">&nbsp;</td>
                   <td width="92%" class="fnt_14">First  operand. It can be a variable or a register.</td>
                 </tr>
                 <tr>
                   <td align="right" class="fnt_14"><strong>op2</strong></td>
                   <td>&nbsp;</td>
                   <td class="fnt_14">Second operand. It can be a variable, a register or a number.</td>
                 </tr>
               </tbody>
             </table></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td class="fnt_14">Adds op1 operand to op2 and put the result in op2 operand. Both operands can be aa register or a variable. Op2 can be also a number.</td>
           </tr>
           <tr>
             <td class="fnt_14">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" valign="top" class="fnt_14">Example</td>
           </tr>
           <tr>
             <td class="fnt_14" align="left">
             
             <div id="editor_code" align="left">// Inits variable v1
mov $v1, 5
             
// Adds 1 to variable $v1. $v1 becomes 6
add $v1, 1
             
// Adds 3 to variable $v1. $v1 becomes 9.5
add $v1, 3.5

// Inits register r1
mov r1, 2

// Adds r1 to v1. $v1 becomes 11.5
add $v1, r1

// Inits variable $v2
mov $v2, 2

// Adds $v2 to $v1. $v2 becomes 13.5. $v1 remains unchanged
add $v2, $v1
             </div>


           <script src="../write/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
           <script>
              var editor_code = ace.edit("editor_code");
              editor_code.setTheme("ace/theme/chrome");
              editor_code.getSession().setMode("ace/mode/assembly_x86");
			  editor_code.setShowPrintMargin(false);
			  
	 		  editor_code.getSession().on('change', function(e) 
			  {
                  $('#but_save').removeAttr('disabled'); 
				  $('#but_test').attr('disabled', 'disabled');
			  });
			   
           </script>
             
             </td>
           </tr>
           <tr>
             <td class="fnt_14">&nbsp;</td>
           </tr>
         </tbody>
       </table></td>
     </tr>
   </tbody>
 </table>
 <br>
 </div>
 <div class="col-md-2" id="div_ads"><? $template->showAds(); ?></div>
 <div class="col-md-1">&nbsp;</div>
 </div>
 </div>
 
 <?
    $template->showBottomMenu();
 ?>
 
</body>
</html>