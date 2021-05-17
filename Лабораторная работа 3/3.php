
<?php 


$articles = array(
  "Article-1" => array(
    "img" => "1.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-2" => array(
    "img" => "2.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-3" => array(
    "img" => "3.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-4" => array(
    "img" => "4.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-5" => array(
    "img" => "5.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-6" => array(
    "img" => "6.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-7" => array(
    "img" => "7.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-8" => array(
    "img" => "8.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-9" => array(
    "img" => "9.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-10" => array(
    "img" => "10.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-11" => array(
    "img" => "11.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
  "Article-12" => array(
    "img" => "12.jpg",
    "title" => "Новость новость",
    "text" => "LorSed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natusem10",
  ),
);

$kol = $_GET['kol'];
$tek = $_GET['tek'];
echo json_encode(array_slice($articles, $tek, $kol)); 

?>