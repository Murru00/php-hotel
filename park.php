<?php 
  
include_once __DIR__ ."/park.php";


$filter_parking = isset($_GET['check-parking']) ? true : false;
$filter_vote = isset($_GET['filter-vote']) ? true : false;

if ($filter_parking) {
    $hotels = array_filter($hotels, function ($hotel, $index) {
        return $hotel['parking'] == true;
    }, ARRAY_FILTER_USE_BOTH);

}

if ($filter_vote) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= ($_GET['filter-vote']);
    });
}

?>