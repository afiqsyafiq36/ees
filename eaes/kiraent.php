<?php
include "tablekursus.php";
//CLO1
//select avg c1s1 mengikut kursus from db
$avg1_dka4213 = mysqli_query($hubung,"SELECT AVG(ent_C1S1) AS ent_C1S1 FROM entrance WHERE kodkursus = 'DKA4213' ");
$avg1_dka4223 = mysqli_query($hubung,"SELECT AVG(ent_C1S1) AS ent_C1S1 FROM entrance WHERE kodkursus = 'DKA4223' ");
$avg1_dka4033 = mysqli_query($hubung,"SELECT AVG(ent_C1S1) AS ent_C1S1 FROM entrance WHERE kodkursus = 'DKA4033' ");
$avg1_dka4043 = mysqli_query($hubung,"SELECT AVG(ent_C1S1) AS ent_C1S1 FROM entrance WHERE kodkursus = 'DKA4043' ");
$avg1_dka4054 = mysqli_query($hubung,"SELECT AVG(ent_C1S1) AS ent_C1S1 FROM entrance WHERE kodkursus = 'DKA4054' ");

//select avg c1s2 mengikut kursus from db
$avg2_dka4213 = mysqli_query($hubung,"SELECT AVG(ent_C1S2) AS ent_C1S2 FROM entrance WHERE kodkursus = 'DKA4213' ");
$avg2_dka4223 = mysqli_query($hubung,"SELECT AVG(ent_C1S2) AS ent_C1S2 FROM entrance WHERE kodkursus = 'DKA4223' ");
$avg2_dka4033 = mysqli_query($hubung,"SELECT AVG(ent_C1S2) AS ent_C1S2 FROM entrance WHERE kodkursus = 'DKA4033' ");
$avg2_dka4043 = mysqli_query($hubung,"SELECT AVG(ent_C1S2) AS ent_C1S2 FROM entrance WHERE kodkursus = 'DKA4043' ");
$avg2_dka4054 = mysqli_query($hubung,"SELECT AVG(ent_C1S2) AS ent_C1S2 FROM entrance WHERE kodkursus = 'DKA4054' ");

//select avg c1s3 mengikut kursus from db
$avg3_dka4213 = mysqli_query($hubung,"SELECT AVG(ent_C1S3) AS ent_C1S3 FROM entrance WHERE kodkursus = 'DKA4213' ");
$avg3_dka4223 = mysqli_query($hubung,"SELECT AVG(ent_C1S3) AS ent_C1S3 FROM entrance WHERE kodkursus = 'DKA4223' ");
$avg3_dka4033 = mysqli_query($hubung,"SELECT AVG(ent_C1S3) AS ent_C1S3 FROM entrance WHERE kodkursus = 'DKA4033' ");
$avg3_dka4043 = mysqli_query($hubung,"SELECT AVG(ent_C1S3) AS ent_C1S3 FROM entrance WHERE kodkursus = 'DKA4043' ");
$avg3_dka4054 = mysqli_query($hubung,"SELECT AVG(ent_C1S3) AS ent_C1S3 FROM entrance WHERE kodkursus = 'DKA4054' ");


//fetch data avg c1 mengikut kursus
$s1_dka4213 = mysqli_fetch_array($avg1_dka4213);
$s1_dka4223 = mysqli_fetch_array($avg1_dka4223);
$s1_dka4033 = mysqli_fetch_array($avg1_dka4033);
$s1_dka4043 = mysqli_fetch_array($avg1_dka4043);
$s1_dka4054 = mysqli_fetch_array($avg1_dka4054);

//fetch data avg c2 mengikut kursus
$s2_dka4213 = mysqli_fetch_array($avg2_dka4213);
$s2_dka4223 = mysqli_fetch_array($avg2_dka4223);
$s2_dka4033 = mysqli_fetch_array($avg2_dka4033);
$s2_dka4043 = mysqli_fetch_array($avg2_dka4043);
$s2_dka4054 = mysqli_fetch_array($avg2_dka4054);

//fetch data avg c3 mengikut kursus
$s3_dka4213 = mysqli_fetch_array($avg3_dka4213);
$s3_dka4223 = mysqli_fetch_array($avg3_dka4223);
$s3_dka4033 = mysqli_fetch_array($avg3_dka4033);
$s3_dka4043 = mysqli_fetch_array($avg3_dka4043);
$s3_dka4054 = mysqli_fetch_array($avg3_dka4054);

// END CLO1

//CLO2
//select avg c1s1 mengikut kursus from db
$a1_dka4213 = mysqli_query($hubung,"SELECT AVG(ent_C2S1) AS ent_C2S1 FROM entrance WHERE kodkursus = 'DKA4213' ");
$a1_dka4223 = mysqli_query($hubung,"SELECT AVG(ent_C2S1) AS ent_C2S1 FROM entrance WHERE kodkursus = 'DKA4223' ");
$a1_dka4033 = mysqli_query($hubung,"SELECT AVG(ent_C2S1) AS ent_C2S1 FROM entrance WHERE kodkursus = 'DKA4033' ");
$a1_dka4043 = mysqli_query($hubung,"SELECT AVG(ent_C2S1) AS ent_C2S1 FROM entrance WHERE kodkursus = 'DKA4043' ");
$a1_dka4054 = mysqli_query($hubung,"SELECT AVG(ent_C2S1) AS ent_C2S1 FROM entrance WHERE kodkursus = 'DKA4054' ");

//select avg c1s2 mengikut kursus from db
$a2_dka4213 = mysqli_query($hubung,"SELECT AVG(ent_C2S2) AS ent_C2S2 FROM entrance WHERE kodkursus = 'DKA4213' ");
$a2_dka4223 = mysqli_query($hubung,"SELECT AVG(ent_C2S2) AS ent_C2S2 FROM entrance WHERE kodkursus = 'DKA4223' ");
$a2_dka4033 = mysqli_query($hubung,"SELECT AVG(ent_C2S2) AS ent_C2S2 FROM entrance WHERE kodkursus = 'DKA4033' ");
$a2_dka4043 = mysqli_query($hubung,"SELECT AVG(ent_C2S2) AS ent_C2S2 FROM entrance WHERE kodkursus = 'DKA4043' ");
$a2_dka4054 = mysqli_query($hubung,"SELECT AVG(ent_C2S2) AS ent_C2S2 FROM entrance WHERE kodkursus = 'DKA4054' ");

//select avg c1s3 mengikut kursus from db
$a3_dka4213 = mysqli_query($hubung,"SELECT AVG(ent_C2S3) AS ent_C2S3 FROM entrance WHERE kodkursus = 'DKA4213' ");
$a3_dka4223 = mysqli_query($hubung,"SELECT AVG(ent_C2S3) AS ent_C2S3 FROM entrance WHERE kodkursus = 'DKA4223' ");
$a3_dka4033 = mysqli_query($hubung,"SELECT AVG(ent_C2S3) AS ent_C2S3 FROM entrance WHERE kodkursus = 'DKA4033' ");
$a3_dka4043 = mysqli_query($hubung,"SELECT AVG(ent_C2S3) AS ent_C2S3 FROM entrance WHERE kodkursus = 'DKA4043' ");
$a3_dka4054 = mysqli_query($hubung,"SELECT AVG(ent_C2S3) AS ent_C2S3 FROM entrance WHERE kodkursus = 'DKA4054' ");


//fetch data avg c1 mengikut kursus
$z1_dka4213 = mysqli_fetch_array($a1_dka4213);
$z1_dka4223 = mysqli_fetch_array($a1_dka4223);
$z1_dka4033 = mysqli_fetch_array($a1_dka4033);
$z1_dka4043 = mysqli_fetch_array($a1_dka4043);
$z1_dka4054 = mysqli_fetch_array($a1_dka4054);

//fetch data avg c2 mengikut kursus
$z2_dka4213 = mysqli_fetch_array($a2_dka4213);
$z2_dka4223 = mysqli_fetch_array($a2_dka4223);
$z2_dka4033 = mysqli_fetch_array($a2_dka4033);
$z2_dka4043 = mysqli_fetch_array($a2_dka4043);
$z2_dka4054 = mysqli_fetch_array($a2_dka4054);

//fetch data avg c3 mengikut kursus
$z3_dka4213 = mysqli_fetch_array($a3_dka4213);
$z3_dka4223 = mysqli_fetch_array($a3_dka4223);
$z3_dka4033 = mysqli_fetch_array($a3_dka4033);
$z3_dka4043 = mysqli_fetch_array($a3_dka4043);
$z3_dka4054 = mysqli_fetch_array($a3_dka4054);

// END CLO2

//CLO3
//select avg c1s1 mengikut kursus from db
$y1_dka4213 = mysqli_query($hubung,"SELECT AVG(ent_C3S1) AS ent_C3S1 FROM entrance WHERE kodkursus = 'DKA4213' ");
$y1_dka4223 = mysqli_query($hubung,"SELECT AVG(ent_C3S1) AS ent_C3S1 FROM entrance WHERE kodkursus = 'DKA4223' ");
$y1_dka4033 = mysqli_query($hubung,"SELECT AVG(ent_C3S1) AS ent_C3S1 FROM entrance WHERE kodkursus = 'DKA4033' ");
$y1_dka4043 = mysqli_query($hubung,"SELECT AVG(ent_C3S1) AS ent_C3S1 FROM entrance WHERE kodkursus = 'DKA4043' ");
$y1_dka4054 = mysqli_query($hubung,"SELECT AVG(ent_C3S1) AS ent_C3S1 FROM entrance WHERE kodkursus = 'DKA4054' ");

//select avg c1s2 mengikut kursus from db
$y2_dka4213 = mysqli_query($hubung,"SELECT AVG(ent_C3S2) AS ent_C3S2 FROM entrance WHERE kodkursus = 'DKA4213' ");
$y2_dka4223 = mysqli_query($hubung,"SELECT AVG(ent_C3S2) AS ent_C3S2 FROM entrance WHERE kodkursus = 'DKA4223' ");
$y2_dka4033 = mysqli_query($hubung,"SELECT AVG(ent_C3S2) AS ent_C3S2 FROM entrance WHERE kodkursus = 'DKA4033' ");
$y2_dka4043 = mysqli_query($hubung,"SELECT AVG(ent_C3S2) AS ent_C3S2 FROM entrance WHERE kodkursus = 'DKA4043' ");
$y2_dka4054 = mysqli_query($hubung,"SELECT AVG(ent_C3S2) AS ent_C3S2 FROM entrance WHERE kodkursus = 'DKA4054' ");

//select avg c1s3 mengikut kursus from db
$y3_dka4213 = mysqli_query($hubung,"SELECT AVG(ent_C3S3) AS ent_C3S3 FROM entrance WHERE kodkursus = 'DKA4213' ");
$y3_dka4223 = mysqli_query($hubung,"SELECT AVG(ent_C3S3) AS ent_C3S3 FROM entrance WHERE kodkursus = 'DKA4223' ");
$y3_dka4033 = mysqli_query($hubung,"SELECT AVG(ent_C3S3) AS ent_C3S3 FROM entrance WHERE kodkursus = 'DKA4033' ");
$y3_dka4043 = mysqli_query($hubung,"SELECT AVG(ent_C3S3) AS ent_C3S3 FROM entrance WHERE kodkursus = 'DKA4043' ");
$y3_dka4054 = mysqli_query($hubung,"SELECT AVG(ent_C3S3) AS ent_C3S3 FROM entrance WHERE kodkursus = 'DKA4054' ");


//fetch data avg c1 mengikut kursus
$x1_dka4213 = mysqli_fetch_array($y1_dka4213);
$x1_dka4223 = mysqli_fetch_array($y1_dka4223);
$x1_dka4033 = mysqli_fetch_array($y1_dka4033);
$x1_dka4043 = mysqli_fetch_array($y1_dka4043);
$x1_dka4054 = mysqli_fetch_array($y1_dka4054);

//fetch data avg c2 mengikut kursus
$x2_dka4213 = mysqli_fetch_array($y2_dka4213);
$x2_dka4223 = mysqli_fetch_array($y2_dka4223);
$x2_dka4033 = mysqli_fetch_array($y2_dka4033);
$x2_dka4043 = mysqli_fetch_array($y2_dka4043);
$x2_dka4054 = mysqli_fetch_array($y2_dka4054);

//fetch data avg c3 mengikut kursus
$x3_dka4213 = mysqli_fetch_array($y3_dka4213);
$x3_dka4223 = mysqli_fetch_array($y3_dka4223);
$x3_dka4033 = mysqli_fetch_array($y3_dka4033);
$x3_dka4043 = mysqli_fetch_array($y3_dka4043);
$x3_dka4054 = mysqli_fetch_array($y3_dka4054);

// END CLO3

//new declare

//DKA4213 CLO1
$A1S1 = (round($s1_dka4213['ent_C1S1'],2)); 
$A1S2 = (round($s2_dka4213['ent_C1S2'],2));
$A1S3 = (round($s3_dka4213['ent_C1S3'],2));

//CLO2
$A2S1 = (round($z1_dka4213['ent_C2S1'],2)); 
$A2S2 = (round($z2_dka4213['ent_C2S2'],2));
$A2S3 = (round($z3_dka4213['ent_C2S3'],2));

// CLO3
$A3S1 = (round($x1_dka4213['ent_C3S1'],2)); 
$A3S2 = (round($x2_dka4213['ent_C3S2'],2));
$A3S3 = (round($x3_dka4213['ent_C3S3'],2));

//DKA4223 CLO1
$B1S1 = (round($s1_dka4223['ent_C1S1'],2)); 
$B1S2 = (round($s2_dka4223['ent_C1S2'],2));
$B1S3 = (round($s3_dka4223['ent_C1S3'],2));

// CLO2
$B2S1 = (round($z1_dka4223['ent_C2S1'],2)); 
$B2S2 = (round($z2_dka4223['ent_C2S2'],2));
$B2S3 = (round($z3_dka4223['ent_C2S3'],2));

// CLO3
$B3S1 = (round($x1_dka4223['ent_C3S1'],2)); 
$B3S2 = (round($x2_dka4223['ent_C3S2'],2));
$B3S3 = (round($x3_dka4223['ent_C3S3'],2));

//DKA4033 CLO1
$C1S1 = (round($s1_dka4033['ent_C1S1'],2)); 
$C1S2 = (round($s2_dka4033['ent_C1S2'],2));
$C1S3 = (round($s3_dka4033['ent_C1S3'],2));

// CLO2
$C2S1 = (round($z1_dka4033['ent_C2S1'],2)); 
$C2S2 = (round($z2_dka4033['ent_C2S2'],2));
$C2S3 = (round($z3_dka4033['ent_C2S3'],2));

// CLO3
$C3S1 = (round($x1_dka4033['ent_C3S1'],2)); 
$C3S2 = (round($x2_dka4033['ent_C3S2'],2));
$C3S3 = (round($x3_dka4033['ent_C3S3'],2));

//DKA4043 CLO1
$D1S1 = (round($s1_dka4043['ent_C1S1'],2)); 
$D1S2 = (round($s2_dka4043['ent_C1S2'],2));
$D1S3 = (round($s3_dka4043['ent_C1S3'],2));

// CLO2
$D2S1 = (round($z1_dka4043['ent_C2S1'],2)); 
$D2S2 = (round($z2_dka4043['ent_C2S2'],2));
$D2S3 = (round($z3_dka4043['ent_C2S3'],2));

// CLO3
$D3S1 = (round($x1_dka4043['ent_C3S1'],2)); 
$D3S2 = (round($x2_dka4043['ent_C3S2'],2));
$D3S3 = (round($x3_dka4043['ent_C3S3'],2));

//DKA4054 CLO1
$E1S1 = (round($s1_dka4054['ent_C1S1'],2)); 
$E1S2 = (round($s2_dka4054['ent_C1S2'],2));
$E1S3 = (round($s3_dka4054['ent_C1S3'],2));

// CLO2
$E2S1 = (round($z1_dka4054['ent_C2S1'],2)); 
$E2S2 = (round($z2_dka4054['ent_C2S2'],2));
$E2S3 = (round($z3_dka4054['ent_C2S3'],2));

// CLO3
$E3S1 = (round($x1_dka4054['ent_C3S1'],2)); 
$E3S2 = (round($x2_dka4054['ent_C3S2'],2));
$E3S3 = (round($x3_dka4054['ent_C3S3'],2));


// Kiraan Purata bagi CLO 1 Soalan 1,2,3
$purataA = $A1S1 + $A1S2 + $A1S3;
$purataB = $A2S1 + $A2S2 + $A2S3;
$purataC = $A3S1 + $A3S2 + $A3S3;

$purataD = $B1S1 + $B1S2 + $B1S3;
$purataE = $B2S1 + $B2S2 + $B2S3;
$purataF = $B3S1 + $B3S2 + $B3S3;

$purataG = $C1S1 + $C1S2 + $C1S3;
$purataH = $C2S1 + $C2S2 + $C2S3;
$purataI = $C3S1 + $C3S2 + $C3S3;

$purataJ = $D1S1 + $D1S2 + $D1S3;
$purataK = $D2S1 + $D2S2 + $D2S3;
$purataL = $D3S1 + $D3S2 + $D3S3;

$purataM = $E1S1 + $E1S2 + $E1S3;
$purataN = $E2S1 + $E2S2 + $E2S3;
$purataO = $E3S1 + $E3S2 + $E3S3;


//dka4213
$clo14213 = $purataA / 3;
$clo24213 = $purataB / 3;
$clo34213 = $purataC / 3;

//bundarkan
$c14213 = (round($clo14213,2));
$c24213 = (round($clo24213,2)); 
$c34213 = (round($clo34213,2)); 

//dka4223
$clo14223 = $purataD / 3;
$clo24223 = $purataE / 3;
$clo34223 = $purataF / 3;

//bundarkan
$c14223 = (round($clo14223,2));
$c24223 = (round($clo24223,2)); 
$c34223 = (round($clo34223,2)); 

//dka4033
$clo14033 = $purataG / 3;
$clo24033 = $purataH / 3;
$clo34033 = $purataI / 3;

//bundarkan
$c14033 = (round($clo14033,2));
$c24033 = (round($clo24033,2)); 
$c34033 = (round($clo34033,2)); 


//dka4043
$clo14043 = $purataJ / 3;
$clo24043 = $purataK / 3;
$clo34043 = $purataL / 3;

//bundarkan
$c14043 = (round($clo14043,2));
$c24043 = (round($clo24043,2)); 
$c34043 = (round($clo34043,2)); 


//dka4054
$clo14054 = $purataM / 3;
$clo24054 = $purataN / 3;
$clo34054 = $purataO / 3;

//bundarkan
$c14054 = (round($clo14054,2));
$c24054 = (round($clo24054,2)); 
$c34054 = (round($clo34054,2)); 

//declare avg clo1,2,3 for ent &ext page
$entk14213 = $c14213;
$entk24213 = $c24213;
$entk34213 = $c34213;

//declare avg clo1,2,3
$entk14223 = $c14223;
$entk24223 = $c24223;
$entk34223 = $c34223;

//declare avg clo1,2,3
$entk14033 = $c14033;
$entk24033 = $c24033;
$entk34033 = $c34033;

//declare avg clo1,2,3
$entk14043 = $c14043;
$entk24043 = $c24043;
$entk34043 = $c34043;

//declare avg clo1,2,3
$entk14054 = $c14054;
$entk24054 = $c24054;
$entk34054 = $c34054;


//average variable for page ent & ext
//4213
$entc14213 = $c14213;
$entc24213 = $c24213; 
$entc34213 = $c34213;

//4223
$entc14223 = $c14223;
$entc24223 = $c24223; 
$entc34223 = $c34223; 

//4033
$entc14033 = $c14033;
$entc24033 = $c24033; 
$entc34033 = $c34033; 

//4043
$entc14043 = $c14043;
$entc24043 = $c24043; 
$entc34043 = $c34043; 

//4054
$entc14054 = $c14054;
$entc24054 = $c24054; 
$entc34054 = $c34054; 

//untuk min bagi setiap satu soalan clo
//DKA4213 CLO1
$entA1S1 = $A1S1; 
$entA1S2 = $A1S2;
$entA1S3 = $A1S3;

//CLO2
$entA2S1 = $A2S1; 
$entA2S2 = $A2S2;
$entA2S3 = $A2S3;

// CLO3
$entA3S1 = $A3S1; 
$entA3S2 = $A3S2;
$entA3S3 = $A3S3;

//DKA4223 CLO1
$entB1S1 = $B1S1; 
$entB1S2 = $B1S2;
$entB1S3 = $B1S3;

// CLO2
$entB2S1 = $B2S1; 
$entB2S2 = $B2S2;
$entB2S3 = $B2S3;

// CLO3
$entB3S1 = $B3S1; 
$entB3S2 = $B3S2;
$entB3S3 = $B3S3;

//DKA4033 CLO1
$entC1S1 = $C1S1; 
$entC1S2 = $C1S2;
$entC1S3 = $C1S3;

// CLO2
$entC2S1 = $C2S1; 
$entC2S2 = $C2S2;
$entC2S3 = $C2S3;

// CLO3
$entC3S1 = $C3S1; 
$entC3S2 = $C3S2;
$entC3S3 = $C3S3;

//DKA4043 CLO1
$entD1S1 = $D1S1; 
$entD1S2 = $D1S2;
$entD1S3 = $D1S3;

// CLO2
$entD2S1 = $D2S1; 
$entD2S2 = $D2S2;
$entD2S3 = $D2S3;

// CLO3
$entD3S1 = $D3S1; 
$entD3S2 = $D3S2;
$entD3S3 = $D3S3;

//DKA4054 CLO1
$entE1S1 = $E1S1; 
$entE1S2 = $E1S2;
$entE1S3 = $E1S3;

// CLO2
$entE2S1 = $E2S1; 
$entE2S2 = $E2S2;
$entE2S3 = $E2S3;

// CLO3
$entE3S1 = $E3S1; 
$entE3S2 = $E3S2;
$entE3S3 = $E3S3;
?>