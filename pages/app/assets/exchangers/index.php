<?
    session_start();
    
   include "../../../kernel/db.php";
   include "../../../kernel/CUserData.php";
   include "../../../kernel/CSysData.php";
   include "../../template/template/CTemplate.php";
   include "CExchangers.php";
   
   $db=new db();
   $template=new CTemplate($db);
   $ud=new CUserData($db);
   $sd=new CSysData($db);
   $ex=new CExchangers($db, $template);
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
   .balance_MSK { font-size: 40px; }
   #but_send { font-size:30px; }
   #td_balance { height:100px; }
   #div_ads { display:none; }
   .txt_help { font-size:20px;  }
   .font_12 { font-size:20px;  }
   .font_10 { font-size:18px;  }
   .font_14 { font-size:22px;  }
}

</style>

</head>

<body>

<?
   $template->showTopBar(4);
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
     $template->showLocation("../../assets/exchangers/index.php", "Assets Exchangers", "", "Browse Exchangers");
	 
	  // Menu
	 if ($_REQUEST['ud']['ID']>0)
	 $template->showNav(1,
	                    "../exchangers/index.php", "Exchangers", "",
	                    "../exchangers/my_offers.php", "My Offers", "");
	 
	 
	 // Help
	 $template->showHelp("An asset exchanger is a user that buys / sells MaskCoins or assets for real money. Exchangers are free to use any payment method they want and trade any available asset. They could buy or sell MaskCoins for PayPal or local bank transfer, for example. Exchangers make money from the spread (the small difference between the bid and ask price of a security or asset). Keep in mind that the spread is imposed by exchangers. Always get in touch by messaging or other external communication method with an exchanger before making any payment. If you don't fully trust an exchanger, you can use the built in escrowing mechanism. ");
	 
	// Exchangers
	$ex->showExchangers();
	
 ?>
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
