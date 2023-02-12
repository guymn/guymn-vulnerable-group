<?PHP
include ("connect.inc.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>jQuery UI Signature Basics</title>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/south-street/jquery-ui.css" rel="stylesheet">
<link href="jquery.signature.css" rel="stylesheet">
<style>
.kbw-signature { width: 400px; height: 200px; }
</style>
<!--[if IE]>
<script src="excanvas.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
<script src="jquery.signature.js"></script>
<script>
$(function() {
$('textarea').each(function(index, element) {
$(this).hide();
});

$('button').click(function() {
var rel=$(this).attr('rel');
$('#redrawSignature').signature('draw', $('#signatureJSON'+rel).val());
});


$('#redrawSignature').signature({disabled: true});

});
</script>
</head>
<body>

<table>
<tr>
<td>ลำดับ</td>
<td>ชื่อ</td>
<td>ลายเซน</td>
</tr>
<?PHP
$strSelect="SELECT * FROM signature";
$Query=mysqli_query($Con,$strSelect) or die (mysql_error());
$i=0;
while($Result=mysqli_fetch_array($Query)){
$i++;
?>
<tr>
<td><?=$i;?></td>
<td><?=$Result['Name'];?></td>
<td><button id="redrawButton" rel="<?=$i?>">Signature</button><textarea id="signatureJSON<?=$i;?>"><?=$Result['Draw'];?></textarea></td>
</tr>
<?PHP } ?>
</table>
<div id="redrawSignature"></div>
</body>
</html>