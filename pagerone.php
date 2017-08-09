<html>
<head><title>PHP TEST</title></head>
<body>

<p>テスト</p>

<?php
//require_once("Pager/Pager.php");

$options = array(
  "totalItems" => 200,
  "delta" => 10,
  "perPage" => 8
);

$pager =& Pager::factory($options);
$navi = $pager -> getLinks();
print($navi["all"]);

$currentPageID = $pager -> getCurrentPageID();
?>

<p>現在のページ番号は <?php print($currentPageID); ?> です</p>

</body>
</html>