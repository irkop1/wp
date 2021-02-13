<?php



$f = file_get_contents("rss1.xml");

//$a = explode("<loc>",$f)[1];
$ss = explode("<item>",$f);

$i = count($ss);

$config = fopen("hasil.xml", "w");
fwrite($config, '<?xml version="1.0" encoding="utf-8"?>
<!--Created using XmlSitemapGenerator.org - Free HTML, RSS and XML sitemap generator-->
<rss version="2.0">
  <channel>

');



for($x=0; $x < $i; $x++){
$ss = explode("<item>",$f);
$s = explode("</item>",$ss[$x]);
$cek = strpos($s[0],"<pubDate>");


if($cek == null ){
echo "$x Kosong \n";
}else{

fwrite($config, "
<item>");
 fwrite($config, ''.$s[0].''); 
 fwrite($config, "</item>
 ");
  



}}

fwrite($config,'

</channel>
</rss>
');
fclose($config);

?>