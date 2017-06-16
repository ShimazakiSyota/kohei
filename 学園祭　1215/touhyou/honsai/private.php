<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta content="ja" http-equiv="Content-Language">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>ASO Festival　SAMPLE</title>
<link href="./style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();
ini_set( 'display_errors', "On" );

	require_once '../honsaiclass/EventFlagManager.php'; //EventFlagマネージャーの読み込み
//学祭公開情報取得
	$gakusaiflag = gakusaiflag();
//学祭公開情報判定
	if($gakusaiflag[0][2] == 0){
	 header('location: ./honsaiprivate.php');
	}


$eventid = $_SESSION['eventid'];
require_once '../honsaiclass/EventIdManager.php';
$event = EventIdData($eventid);
?>

	<header>
		<div class="backdiv">
			<img alt="戻る" src="../img/back.png" onClick="history.back()"></div>
		<h2><?php echo $event[0][1]; ?></h2>
	</header>
	<div class="contentsdiv">
		<div class="commingdiv"><h2>まだ公開していません。しばらくしてから再度アクセスしてください。</h2></div>

	</div>



</body>
</html>



