<?php
//data daripada table kursus
//DKA4213
$kata1 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '9' ");
$mata1 = mysqli_fetch_array($kata1);

//DKA4223
$kata2 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '10' ");
$mata2 = mysqli_fetch_array($kata2);

//DKA4033
$kata3 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '11' ");
$mata3 = mysqli_fetch_array($kata3);

//DKA4043
$kata4 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '12' ");
$mata4 = mysqli_fetch_array($kata4);

//DKA4054
$kata5 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '13' ");
$mata5 = mysqli_fetch_array($kata5);
?>