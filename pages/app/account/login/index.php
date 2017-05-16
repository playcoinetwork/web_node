<?
   session_start();
   
   include "../../../kernel/db.php";
   include "../../../kernel/CUserData.php";
   include "../../../kernel/CSysData.php";
   include "../../template/template/CTemplate.php";
   include "CLogin.php";
   
   $db=new db();
   $template=new CTemplate($db);
   $ud=new CUserData($db);
   $sd=new CSysData($db);
   $login=new CLogin($db, $template);
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><? print $_REQUEST['sd']['website_name']; ?></title>
<script src="../../../flat/js/vendor/jquery.min.js"></script>
<script src="../../../flat/js/flat-ui.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<link rel="stylesheet"./ href="../../../flat/css/vendor/bootstrap/css/bootstrap.min.css">
<link href="../../../flat/css/flat-ui.css" rel="stylesheet">
<link href="../../../style.css" rel="stylesheet">
<link rel="shortcut icon" href="../../../flat/img/favicon.ico">
</head>

<body>

<?
   $template->showBalanceBar();
?>


   
 
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    
    <tr><td height="100px">&nbsp;</td></tr>
    <tr>
      <td width="55%" align="center" valign="top">
	  
      <?
	     if ($_REQUEST['act']=="login") 
	        $login->doLogin($_REQUEST['txt_user'], $_REQUEST['txt_pass']); 
	     else
		    $login->showLoginPanel();
      ?>
 
      </td>
     <tr><td height="500px">&nbsp;</td></tr>
     
    </tr>
  </tbody>
</table>
 

 
 
 <?
    $template->showBottomMenu();
 ?>
 
</body>
</html>


