<?php





 $velocity = 2900;                    // fps
 $bullet_weight = 250;                // gr
 $ballistic_coefficient = 0.350 ;
 $start_distance = 100;
 $range_increment = 100;
 $altitude = 0;                       //ft
 $temperature = 65;                   // F
 $scope_height = 1.09;                // inch
 $zero_range = 200 ;                  //yds












// Velocity

$distanceArray = [
    0 => $start_distance,
    1 =>  $start_distance + $range_increment * 1,
    2 => $start_distance + $range_increment * 2,
    3 => $start_distance + $range_increment * 3 ,
    4 => $start_distance + $range_increment * 4,
    5 => $start_distance + $range_increment * 5,
    6 => $start_distance + $range_increment * 6,
    7 => $start_distance + $range_increment * 7,
    8 => $start_distance + $range_increment * 8,
    9 => $start_distance + $range_increment * 9,
    10 => $start_distance + $range_increment * 10 ,
    11 => $start_distance + $range_increment * 11,
    12 => $start_distance + $range_increment * 12,
    13 => $start_distance + $range_increment * 13,
    14 => $start_distance + $range_increment * 14,
    15 => $start_distance + $range_increment * 15,
    16 => $start_distance + $range_increment * 16,
];







// Array
$A = [
    33 => 43041,
    34 => 36664.2,
    35 => 31488.6,
    36 => 27124.6,
    37 => 23415.1,
    38 => 20325.5,
    39 => 17879.9,
    40 => 16095.6,
    41 => 15433.3,
    42 => 15150.3,
    43 => 14894.3,
    44 => 14798.5,
    45 => 14706.2,
    46 => 14616.9,
    47 => 14447.1,
    48 => 13720.5,
    49 => 12330.3,
    50 => 10168.1,
    51 => 8332.83,
    52 => 6699.05,
    53 => 5245.45,
    54 => 3958.11,

];

$B = [
    13 => $velocity,
    14 => $bullet_weight,
    15 => $ballistic_coefficient,
    16 => $start_distance,
    17 => $range_increment,
    18 => $altitude,
    19 => $temperature,
    20 => $scope_height,
    21 => $zero_range,
    33 => 1 / 43041,
    34 => 1 / 36664.2,
    35 => 1 / 31488.6,
    36 => 1 / 27124.6,
    37 => 1 / 23415.1,
    38 => 1 / 20325.5,
    39 => 1 / 17879.9,
    40 => 1 / 16095.6,
    41 => 1 / 15433.3,
    42 => 1 / 15150.3,
    43 => 1 / 14894.3,
    44 => 1 / 14798.5,
    45 => 1 / 14706.2,
    46 => 1 / 14616.9,
    47 => 1 / 14447.1,
    48 => 1 / 13720.5,
    49 => 1 / 12330.3,
    50 => 1 / 10168.1,
    51 => 1 / 8332.83,
    52 => 1 / 6699.05,
    53 => 1 / 5245.45,
    54 => 1 / 3958.11,

];

$C = [
    33 => 350,
    34 => 450,
    35 => 550,
    36 => 650,
    37 => 750,
    38 => 850,
    39 => 950,
    40 => 1025,
    41 => 1062.5,
    42 => 1087.5,
    43 => 1105,
    44 => 1115,
    45 => 1125,
    46 => 1140,
    47 => 1200,
    48 => 1375,
    49 => 1750,
    50 => 2250,
    51 => 2750,
    52 => 3250,
    53 => 3750,
    54 => 4250,

];


$D = [
    33 => 39663.2,
    34 => 33958.1,
    35 => 29218.7,
    36 => 25192,
    37 => 21792,
    38 => 19020.1,
    39 => 16906.5,
    40 => 15747.2,
    41 => 15288.1,
    42 => 15019.2,
    43 => 14846,
    44 => 14751.9,
    45 => 14661.2,
    46 => 14530.6,
    47 => 14062.5,
    48 => 12977.5,
    49 => 11189.1,
    50 => 9222.059,
    51 => 7492.73,
    52 => 5950.45,
    53 => 4582.38,
    54 => 3369.09,

];


$E = [
    33 => -63.768,
    34 => -51.756,
    35 => -43.64,
    36 => -37.095,
    37 => -30.896,
    38 => -24.4588,
    39 => -17.8388,
    40 => -13.2423,
    41 => -11.3183,
    42 => -10.2383,
    43 => -9.58136,
    44 => -9.231361,
    45 => -8.930021,
    46 => -8.482001,
    47 => -7.2568,
    48 => -5.5464,
    49 => -4.31589,
    50 => -3.66916,
    51 => -3.26733,
    52 => -2.90704,
    53 => -2.57414,
    54 => -2.29123,

];



/*

$E[5] = 2900;   // A faire
$E[6] = 2622;
$E[7] = 2360;
$E[8] = 2115;
$E[9] = 1883;
$E[10] = 1671;
$E[11] = 1477;
$E[12] = 1311;
$E[13] = 1169;
$E[14] = 1069;
$E[15] = 1002;
$E[16] = 946;
$E[17] = 900;
$E[18] = 860;
$E[19] = 824;
$E[20] = 790;
$E[21] = 760;

*/


$F = [
    33 => 0.0758391,
    34 => 0.0473157,
    35 => 0.035161,
    36 => 0.0311391,
    37 => 0.0313196,
    38 => 0.0330303,
    39 => 0.0325134,
    40 => 0.0276581,
    41 => 0.023346,
    42 => 0.0199585,
    43 => 0.0164795,
    44 => 0.0165939,
    45 => 0.0147629,
    46 => 0.0116909,
    47 => 0.00850001,
    48 => 0.00306207,
    49 => 0.000960342,
    50 => 0.00045401,
    51 => 0.000371407,
    52 => 0.000348885,
    53 => 0.000310524,
    54 => 0.000257709,

];


$G = [
    33 => 49.669,
    34 => 35.269,
    35 => 25.7322,
    36 => 18.9904,
    37 => 14.1144,
    38 => 10.6366,
    39 => 8.27886,
    40 => 7.10211,
    41 => 6.66207,
    42 => 6.41183,
    43 => 6.25378,
    44 => 6.16907,
    45 => 6.08802,
    46 => 5.97274,
    47 => 5.57228,
    48 => 4.72557,
    49 => 3.56969,
    50 => 2.57801,
    51 => 1.88267,
    52 => 1.36656,
    53 => 0.974457,
    54 => 0.670381,

];


$H = [
    33 => -0.1845,
    34 => -0.115879,
    35 => -0.079629,
    36 => -0.057305,
    37 => -0.041349,
    38 => -0.0288527,
    39 => -0.01884,
    40 => -0.0129298,
    41 => -0.0106524,
    42 => -0.00941688,
    43 => -0.00866849,
    44 => -0.00828369,
    45 => -0.00793184,
    46 => -0.00745342,
    47 => -0.006058,
    48 => -0.00405656,
    49 => -0.00249074,
    50 => -0.00163915,
    51 => -0.0011924,
    52 => -0.000897071,
    53 => -0.0006880031,
    54 => -0.000540083,

];

$I = [
    33 => 0.000482396,
    34 => 0.000234824,
    35 => 0.000136695,
    36 => 0.0000920586,
    37 => 0.000069381,
    38 => 0.0000558719,
    39 => 0.0000441677,
    40 => 0.0000332035,
    41 => 0.0000268757,
    42 => 0.000022611,
    43 => 0.000020396,
    44 => 0.0000183284,
    45 => 0.0000170991,
    46 => 0.0000150953,
    47 => 0.0000096174,
    48 => 0.00000372586,
    49 => 0.00000127366,
    50 => 0.000000568494,
    51 => 0.000000352828,
    52 => 0.000000245908,
    53 => 0.000000174925,
    54 => 0.000000124357,

];


/*
$M = [
    33 => -3.26733,
    34 => -3.26733,
    35 => -3.26733,
    36 => -3.66916,
    37 => -3.66916,
    38 => -4.31589,
    39 => -4.31589,
    40 => -5.5464,
    41 => -5.5464,
    42 => -7.2568,
    43 => -11.3183,
    44 => -13.2423,
    45 => -17.8388,
    46 => -17.8388,
    47 => -24.4588,
    48 => -24.4588,
    49 => -30.896,
    50 => 0,
    51 => 0,
    52 => 0,
    53 => 0,
    54 => 0,

];

*/


/*

$N = [
    33 => 0.000371407,
    34 => 0.000371407,
    35 => 0.000371407,
    36 => 0.00045401,
    37 => 0.00045401,
    38 => 0.000960342,
    39 => 0.000960342,
    40 => 0.00306207,
    41 => 0.00306207,
    42 => 0.00850001,
    43 => 0.023346,
    44 => 0.0276581,
    45 => 0.0325134,
    46 => 0.0325134,
    47 => 0.0330303,
    48 => 0.0330303,
    49 => 0.0313196,
    50 => 0,
    51 => 0,
    52 => 0,
    53 => 0,
    54 => 0,

];

*/

/*
$O = [
    33 => 1.88267,
    34 => 1.88267,
    35 => 1.88267,
    36 => 2.57801,
    37 => 2.57801,
    38 => 3.56969,
    39 => 3.56969,
    40 => 4.72557,
    41 => 4.72557,
    42 => 5.57228,
    43 => 6.66207,
    44 => 7.10211,
    45 => 8.27886,
    46 => 8.27886,
    47 => 10.6366,
    48 => 10.6366,
    49 => 14.1144,
    50 => 0,
    51 => 0,
    52 => 0,
    53 => 0,
    54 => 0,

];
*/

/*

$P = [
    33 => -0.0011924,
    34 => -0.0011924,
    35 => -0.0011924,
    36 => -0.00163915,
    37 => -0.00163915,
    38 => -0.00249074,
    39 => -0.00249074,
    40 => -0.00405656,
    41 => -0.00405656,
    42 => -0.006058,
    43 => -0.0106524,
    44 => -0.0129298,
    45 => -0.01884,
    46 => -0.01884,
    47 => -0.0288527,
    48 => -0.0288527,
    49 => -0.041349,
    50 => 0,
    51 => 0,
    52 => 0,
    53 => 0,
    54 => 0,

];

*/


/*

$Q = [
    33 => 0.000000352828,
    34 => 0.000000352828,
    35 => 0.000000352828,
    36 => 0.000000568494,
    37 => 0.000000568494,
    38 => 0.00000127366,
    39 => 0.00000127366,
    40 => 0.00000372586,
    41 => 0.00000372586,
    42 => 0.0000096174,
    43 => 0.0000268757,
    44 => 0.0000332035,
    45 => 0.0000441677,
    46 => 0.0000441677,
    47 => 0.0000558719,
    48 => 0.0000558719,
    49 => 0.000069381,
    50 => 0,
    51 => 0,
    52 => 0,
    53 => 0,
    54 => 0,

];

*/





$R = [
    33 => 1.71174863,
    34 => 2.041077933952,
    35 => 2.4013711388,
    36 => 2.80965605315,
    37 => 3.256147938366,
    38 => 3.77440737206,
    39 => 4.34458662614,
    40 => 5.00045096256,
    41 => 5.71933195496,
    42 => 6.5309222014,
    43 => 7.404911980925,
    44 => 8.3307872435,
    45 => 9.33127925,
    46 => 10.33221837,
    47 => 11.4245396044,
    48 => 12.56890084,
    49 => 13.7078481,
    50 => 0,
    51 => 0,
    52 => 0,
    53 => 0,
    54 => 0,

];





$S = [
    33 => 2750,
    34 => 2750,
    35 => 2750,
    36 => 2250,
    37 => 2250,
    38 => 1750,
    39 => 1750,
    40 => 1375,
    41 => 1375,
    42 => 1200,
    43 => 1062,
    44 => 1025,
    45 => 950,
    46 => 950,
    47 => 850,
    48 => 850,
    49 => 750,
    50 => 0,
    51 => 0,
    52 => 0,
    53 => 0,
    54 => 0,

];



$T = [
    33 => 0,
    34 => 0.109224295186016,
    35 => 0.228717977915109,
    36 => 0.364128436291632,
    37 => 0.512210495445715,
    38 => 0.684094748348339,
    39 => 0.87319856148989,
    40 => 1.09072041279031,
    41 => 1.3291421650464,
    42 => 1.59831156960134,
    43 => 1.88817620212221,
    44 => 2.19524900667185,
    45 => 2.52706895994613,
    46 => 2.85903720144233,
    47 => 3.22131294038309,
    48 => 3.60084809834409,
    49 => 3.97858767461233,
    50 => 0,
    51 => 0,
    52 => 0,
    53 => 0,
    54 => 0,

];



$U = [
    33 => 16.076685025,
    34 => 15.5570633090143,
    35 => 15.0347030090666,
    36 => 14.5175751451843,
    37 => 14.0023522839429,
    38 => 13.5098262418597,
    39 => 13.0409445687705,
    40 => 12.625947612038,
    41 => 12.2608586403615,
    42 => 11.9981698612889,
    43 => 11.8195866472782,
    44 => 11.6687337392735,
    45 => 11.5437362259512,
    46 => 11.4342489959869,
    47 => 11.3350791887384,
    48 => 11.2408696578181,
    49 => 11.1573005833829,
    50 => 0,
    51 => 0,
    52 => 0,
    53 => 0,
    54 => 0,

];






// Total Drop -  Result balistique     Good

$D[5] = $B[16];
$D[6] = $D[5] + $B[17];
$D[7] = $D[6] + $B[17];
$D[8] = $D[7] + $B[17];
$D[9] = $D[8] + $B[17];
$D[10] = $D[9] + $B[17];
$D[11] = $D[10] + $B[17];
$D[12] = $D[11] + $B[17];
$D[13] = $D[12] + $B[17];
$D[14] = $D[13] + $B[17];
$D[15] = $D[14] + $B[17];
$D[16] = $D[15] + $B[17];
$D[17] = $D[16] + $B[17];
$D[18] = $D[17] + $B[17];
$D[19] = $D[18] + $B[17];
$D[20] = $D[19] + $B[17];
$D[21] = $D[20] + $B[17];






// Array L   - AS
$L[33] = $D[array_search($S[33], $C)] ;echo($L[33]."<br>");
$M[33] = $E[array_search($S[33], $C)] ;echo($M[33]."<br>");
$N[33] = $F[array_search($S[33], $C)] ;echo($N[33]."<br>");
$O[33] = $G[array_search($S[33], $C)] ;echo($O[33]."<br>");
$P[33] = $H[array_search($S[33], $C)] ;echo($P[33]."<br>");
$Q[33] = $I[array_search($S[33], $C)] ;echo($Q[33]."<br>");
$L[34] = 0 ;
$i = 0 ;






while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[33]){break;
    }  $i++;
    $L[34] = $D[$i+32]; $M[34] = $E[$i+32];
    $N[34] = $F[$i+32]; $O[34] = $G[$i+32];
    $P[34] = $H[$i+32]; $Q[34] = $I[$i+32];
}
$L[35] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[34]){break;
    }  $i++; $L[35] = $D[$i+32];
    $M[35] = $E[$i+32];
    $N[35] = $F[$i+32];
    $O[35] = $G[$i+32];
    $P[35] = $H[$i+32];
    $Q[35] = $I[$i+32];
}
$L[36] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[35]){break;
}  $i++;
    $L[36] = $D[$i+32];
    $M[36] = $E[$i+32];
    $N[36] = $F[$i+32];
    $O[36] = $G[$i+32];
    $P[36] = $H[$i+32];
    $Q[36] = $I[$i+32];
}
$L[37] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[36]){break;
    }  $i++;
    $L[37] = $D[$i+32];
    $M[37] = $E[$i+32];
    $N[37] = $F[$i+32];
    $O[37] = $G[$i+32];
    $P[37] = $H[$i+32];
    $Q[37] = $I[$i+32];
}
$L[38] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[37]){break;
    }  $i++;
    $L[38] = $D[$i+32];
    $M[38] = $E[$i+32];
    $N[38] = $F[$i+32];
    $O[38] = $G[$i+32];
    $P[38] = $H[$i+32];
    $Q[38] = $I[$i+32];
}
$L[39] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[38]){break;
    }  $i++;
    $L[39] = $D[$i+32];
    $M[39] = $E[$i+32];
    $N[39] = $F[$i+32];
    $O[39] = $G[$i+32];
    $P[39] = $H[$i+32];
    $Q[39] = $I[$i+32];
}
$L[40] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[39]){break;
    }  $i++;
    $L[40] = $D[$i+32];
    $M[40] = $E[$i+32];
    $N[40] = $F[$i+32];
    $O[40] = $G[$i+32];
    $P[40] = $H[$i+32];
    $Q[40] = $I[$i+32];
}
$L[41] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[40]){break;
    }  $i++;
    $L[41] = $D[$i+32];
    $M[41] = $E[$i+32];
    $N[41] = $F[$i+32];
    $O[41] = $G[$i+32];
    $P[41] = $H[$i+32];
    $Q[41] = $I[$i+32];
}
$L[42] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[41]){break;
}  $i++;
    $L[42] = $D[$i+32];
    $M[42] = $E[$i+32];
    $N[42] = $F[$i+32];
    $O[42] = $G[$i+32];
    $P[42] = $H[$i+32];
    $Q[42] = $I[$i+32];
}
$L[43] = 0 ;
$i = 0 ; while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[42]){break;
    }  $i++;
    $L[43] = $D[$i+32];
    $M[43] = $E[$i+32];
    $N[43] = $F[$i+32];
    $O[43] = $G[$i+32];
    $P[43] = $H[$i+32];
    $Q[43] = $I[$i+32];
}
$L[44] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[43]){break;
    }  $i++;
    $L[44] = $D[$i+32];
    $M[44] = $E[$i+32];
    $N[44] = $F[$i+32];
    $O[44] = $G[$i+32];
    $P[44] = $H[$i+32];
    $Q[44] = $I[$i+32];
}
$L[45] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[44]){break;
    }  $i++;
    $L[45] = $D[$i+32];
    $M[45] = $E[$i+32];
    $N[45] = $F[$i+32];
    $O[45] = $G[$i+32];
    $P[45] = $H[$i+32];
    $Q[45] = $I[$i+32];
}
$L[46] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[45]){break;
    }  $i++;
    $L[46] = $D[$i+32];
    $M[46] = $E[$i+32];
    $N[46] = $F[$i+32];
    $O[46] = $G[$i+32];
    $P[46] = $H[$i+32];
    $Q[46] = $I[$i+32];
}
$L[47] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[46]){break;
    }  $i++;
    $L[47] =
        $D[$i+32];
    $M[47] = $E[$i+32];
    $N[47] = $F[$i+32];
    $O[47] = $G[$i+32];
    $P[47] = $H[$i+32];
    $Q[47] = $I[$i+32];}
$L[48] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[47]){break;
    }  $i++;
    $L[48] = $D[$i+32];
    $M[48] = $E[$i+32];
    $N[48] = $F[$i+32];
    $O[48] = $G[$i+32];
    $P[48] = $H[$i+32];
    $Q[48] = $I[$i+32];
}
$L[49] = 0 ;
$i = 0 ;
while ( $i< 22) {
    if($B[33 + $i] >= 1 / $J[48]){break;
    }  $i++;
    $L[49] = $D[$i+32];
    $M[49] = $E[$i+32];
    $N[49] = $F[$i+32];
    $O[49] = $G[$i+32];
    $P[49] = $H[$i+32];
    $Q[49] = $I[$i+32];
}





// Array J   - SU
$J[50] = $O[33] + $P[33] * ( $B[13] - $S[33]) + $Q[33] * ($B[13] - $S[33] ) ** 2;
$J[51] = $L[33] + $M[33] * ( $B[13] - $S[33]) + $N[33] * ($B[13] - $S[33] ) ** 2;
$J[53] = 1-0.0000359596 * $B[18] + 0.00000000047741 * $B[18] ** 2;
$J[54] = 518.67 /(459.67 + $B[19]);
$J[52] = $J[53] * $J[54];
$J[33] = $J[51] + 3 * $D[5] / ($B[15] / $J[54]);
$J[34] = $J[51] + 3 * $D[6] / ($B[15] / $J[54]);
$J[35] = $J[51] + 3 * $D[7] / ($B[15] / $J[54]);
$J[36] = $J[51] + 3 * $D[8] / ($B[15] / $J[54]);
$J[37] = $J[51] + 3 * $D[9] / ($B[15] / $J[54]);
$J[38] = $J[51] + 3 * $D[10] / ($B[15] / $J[54]);
$J[39] = $J[51] + 3 * $D[11] / ($B[15] / $J[54]);
$J[40] = $J[51] + 3 * $D[12] / ($B[15] / $J[54]);
$J[41] = $J[51] + 3 * $D[13] / ($B[15] / $J[54]);
$J[42] = $J[51] + 3 * $D[14] / ($B[15] / $J[54]);
$J[43] = $J[51] + 3 * $D[15] / ($B[15] / $J[54]);
$J[44] = $J[51] + 3 * $D[16] / ($B[15] / $J[54]);
$J[45] = $J[51] + 3 * $D[17] / ($B[15] / $J[54]);
$J[46] = $J[51] + 3 * $D[18] / ($B[15] / $J[54]);
$J[47] = $J[51] + 3 * $D[19] / ($B[15] / $J[54]);
$J[48] = $J[51] + 3 * $D[20] / ($B[15] / $J[54]);
$J[49] = $J[51] + 3 * $D[21] / ($B[15] / $J[54]);







// Array L   - AS
$L[33] = $D[array_search($S[33], $C)] ; $M[33] = $E[array_search($S[33], $C)] ; $N[33] = $F[array_search($S[33], $C)] ; $O[33] = $G[array_search($S[33], $C)] ;  $P[33] = $H[array_search($S[33], $C)] ;  $Q[33] = $I[array_search($S[33], $C)] ;
$L[34] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[33]){break;}  $i++; $L[34] = $D[$i+32]; $M[34] = $E[$i+32]; $N[34] = $F[$i+32]; $O[34] = $G[$i+32]; $P[34] = $H[$i+32]; $Q[34] = $I[$i+32];  }
$L[35] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[34]){break;}  $i++; $L[35] = $D[$i+32]; $M[35] = $E[$i+32]; $N[35] = $F[$i+32]; $O[35] = $G[$i+32]; $P[35] = $H[$i+32]; $Q[35] = $I[$i+32];  }
$L[36] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[35]){break;}  $i++; $L[36] = $D[$i+32]; $M[36] = $E[$i+32]; $N[36] = $F[$i+32]; $O[36] = $G[$i+32]; $P[36] = $H[$i+32]; $Q[36] = $I[$i+32];}
$L[37] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[36]){break;}  $i++; $L[37] = $D[$i+32]; $M[37] = $E[$i+32]; $N[37] = $F[$i+32]; $O[37] = $G[$i+32]; $P[37] = $H[$i+32]; $Q[37] = $I[$i+32];}
$L[38] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[37]){break;}  $i++; $L[38] = $D[$i+32]; $M[38] = $E[$i+32]; $N[38] = $F[$i+32]; $O[38] = $G[$i+32]; $P[38] = $H[$i+32]; $Q[38] = $I[$i+32];}
$L[39] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[38]){break;}  $i++; $L[39] = $D[$i+32]; $M[39] = $E[$i+32]; $N[39] = $F[$i+32]; $O[39] = $G[$i+32]; $P[39] = $H[$i+32]; $Q[39] = $I[$i+32];}
$L[40] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[39]){break;}  $i++; $L[40] = $D[$i+32]; $M[40] = $E[$i+32]; $N[40] = $F[$i+32]; $O[40] = $G[$i+32]; $P[40] = $H[$i+32]; $Q[40] = $I[$i+32];}
$L[41] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[40]){break;}  $i++; $L[41] = $D[$i+32]; $M[41] = $E[$i+32]; $N[41] = $F[$i+32]; $O[41] = $G[$i+32]; $P[41] = $H[$i+32]; $Q[41] = $I[$i+32];}
$L[42] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[41]){break;}  $i++; $L[42] = $D[$i+32]; $M[42] = $E[$i+32]; $N[42] = $F[$i+32]; $O[42] = $G[$i+32]; $P[42] = $H[$i+32]; $Q[42] = $I[$i+32];}
$L[43] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[42]){break;}  $i++; $L[43] = $D[$i+32]; $M[43] = $E[$i+32]; $N[43] = $F[$i+32]; $O[43] = $G[$i+32]; $P[43] = $H[$i+32]; $Q[43] = $I[$i+32];}
$L[44] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[43]){break;}  $i++; $L[44] = $D[$i+32]; $M[44] = $E[$i+32]; $N[44] = $F[$i+32]; $O[44] = $G[$i+32]; $P[44] = $H[$i+32]; $Q[44] = $I[$i+32];}
$L[45] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[44]){break;}  $i++; $L[45] = $D[$i+32]; $M[45] = $E[$i+32]; $N[45] = $F[$i+32]; $O[45] = $G[$i+32]; $P[45] = $H[$i+32]; $Q[45] = $I[$i+32];}
$L[46] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[45]){break;}  $i++; $L[46] = $D[$i+32]; $M[46] = $E[$i+32]; $N[46] = $F[$i+32]; $O[46] = $G[$i+32]; $P[46] = $H[$i+32]; $Q[46] = $I[$i+32];}
$L[47] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[46]){break;}  $i++; $L[47] = $D[$i+32]; $M[47] = $E[$i+32]; $N[47] = $F[$i+32]; $O[47] = $G[$i+32]; $P[47] = $H[$i+32]; $Q[47] = $I[$i+32];}
$L[48] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[47]){break;}  $i++; $L[48] = $D[$i+32]; $M[48] = $E[$i+32]; $N[48] = $F[$i+32]; $O[48] = $G[$i+32]; $P[48] = $H[$i+32]; $Q[48] = $I[$i+32];}
$L[49] = 0 ; $i = 0 ; while ( $i< 22) { if($B[33 + $i] >= 1 / $J[48]){break;}  $i++; $L[49] = $D[$i+32]; $M[49] = $E[$i+32]; $N[49] = $F[$i+32]; $O[49] = $G[$i+32]; $P[49] = $H[$i+32]; $Q[49] = $I[$i+32];}





// Array J   - SU
$J[50] = $O[33] + $P[33] * ( $B[13] - $S[33]) + $Q[33] * ($B[13] - $S[33] ) ** 2;
$J[51] = $L[33] + $M[33] * ( $B[13] - $S[33]) + $N[33] * ($B[13] - $S[33] ) ** 2;
$J[53] = 1-0.0000359596 * $B[18] + 0.00000000047741 * $B[18] ** 2;
$J[54] = 518.67 /(459.67 + $B[19]);
$J[52] = $J[53] * $J[54];
$J[33] = $J[51] + 3 * $D[5] / ($B[15] / $J[54]);
$J[34] = $J[51] + 3 * $D[6] / ($B[15] / $J[54]);
$J[35] = $J[51] + 3 * $D[7] / ($B[15] / $J[54]);
$J[36] = $J[51] + 3 * $D[8] / ($B[15] / $J[54]);
$J[37] = $J[51] + 3 * $D[9] / ($B[15] / $J[54]);
$J[38] = $J[51] + 3 * $D[10] / ($B[15] / $J[54]);
$J[39] = $J[51] + 3 * $D[11] / ($B[15] / $J[54]);
$J[40] = $J[51] + 3 * $D[12] / ($B[15] / $J[54]);
$J[41] = $J[51] + 3 * $D[13] / ($B[15] / $J[54]);
$J[42] = $J[51] + 3 * $D[14] / ($B[15] / $J[54]);
$J[43] = $J[51] + 3 * $D[15] / ($B[15] / $J[54]);
$J[44] = $J[51] + 3 * $D[16] / ($B[15] / $J[54]);
$J[45] = $J[51] + 3 * $D[17] / ($B[15] / $J[54]);
$J[46] = $J[51] + 3 * $D[18] / ($B[15] / $J[54]);
$J[47] = $J[51] + 3 * $D[19] / ($B[15] / $J[54]);
$J[48] = $J[51] + 3 * $D[20] / ($B[15] / $J[54]);
$J[49] = $J[51] + 3 * $D[21] / ($B[15] / $J[54]);




// E Velocity

$E[5] = round($S[33] + (- $M[33] - sqrt($M[33]**2 - 4*$N[33]*($L[33]-$J[33]))) / (2*$N[33])) ;
$E[6] = round($S[34] + (- $M[34] - sqrt($M[34]**2 - 4*$N[34]*($L[34]-$J[34]))) / (2*$N[34])) ;
$E[7] = round($S[35] + (- $M[35] - sqrt($M[35]**2 - 4*$N[35]*($L[35]-$J[35]))) / (2*$N[35])) ;
$E[8] = round($S[36] + (- $M[36] - sqrt($M[36]**2 - 4*$N[36]*($L[36]-$J[36]))) / (2*$N[36])) ;
$E[9] = round($S[37] + (- $M[37] - sqrt($M[37]**2 - 4*$N[37]*($L[37]-$J[37]))) / (2*$N[37])) ;
$E[10] = round($S[38] + (- $M[38] - sqrt($M[38]**2 - 4*$N[38]*($L[38]-$J[38]))) / (2*$N[38])) ;
$E[11] = round($S[39] + (- $M[39] - sqrt($M[39]**2 - 4*$N[39]*($L[39]-$J[39]))) / (2*$N[39])) ;
$E[12] = round($S[40] + (- $M[40] - sqrt($M[40]**2 - 4*$N[40]*($L[40]-$J[40]))) / (2*$N[40])) ;
$E[13] = round($S[41] + (- $M[41] - sqrt($M[41]**2 - 4*$N[41]*($L[41]-$J[41]))) / (2*$N[41])) ;
$E[14] = round($S[42] + (- $M[42] - sqrt($M[42]**2 - 4*$N[42]*($L[42]-$J[42]))) / (2*$N[42])) ;
$E[15] = round($S[43] + (- $M[43] - sqrt($M[43]**2 - 4*$N[43]*($L[43]-$J[43]))) / (2*$N[43])) ;
$E[16] = round($S[44] + (- $M[44] - sqrt($M[44]**2 - 4*$N[44]*($L[44]-$J[44]))) / (2*$N[44])) ;
$E[17] = round($S[45] + (- $M[45] - sqrt($M[45]**2 - 4*$N[45]*($L[45]-$J[45]))) / (2*$N[45])) ;
$E[18] = round($S[46] + (- $M[46] - sqrt($M[46]**2 - 4*$N[46]*($L[46]-$J[46]))) / (2*$N[46])) ;
$E[19] = round($S[47] + (- $M[47] - sqrt($M[47]**2 - 4*$N[47]*($L[47]-$J[47]))) / (2*$N[47])) ;
$E[20] = round($S[48] + (- $M[48] - sqrt($M[48]**2 - 4*$N[48]*($L[48]-$J[48]))) / (2*$N[48])) ;
$E[21] = round($S[49] + (- $M[49] - sqrt($M[49]**2 - 4*$N[49]*($L[49]-$J[49]))) / (2*$N[49])) ;




// Array R   - TU
$R[33] = $O[33] + $P[33] * ( $E[5] - $S[33]) + $Q[33] * ( $E[5] - $S[33]) ** 2 ;
$R[34] = $O[34] + $P[34] * ( $E[6] - $S[34]) + $Q[34] * ( $E[6] - $S[34]) ** 2 ;
$R[35] = $O[35] + $P[35] * ( $E[7] - $S[35]) + $Q[35] * ( $E[7] - $S[35]) ** 2 ;
$R[36] = $O[36] + $P[36] * ( $E[8] - $S[36]) + $Q[36] * ( $E[8] - $S[36]) ** 2 ;
$R[37] = $O[37] + $P[37] * ( $E[9] - $S[37]) + $Q[37] * ( $E[9] - $S[37]) ** 2 ;
$R[38] = $O[38] + $P[38] * ( $E[10] - $S[38]) + $Q[38] * ( $E[10] - $S[38]) ** 2 ;
$R[39] = $O[39] + $P[39] * ( $E[11] - $S[39]) + $Q[39] * ( $E[11] - $S[39]) ** 2 ;
$R[40] = $O[40] + $P[40] * ( $E[12] - $S[40]) + $Q[40] * ( $E[12] - $S[40]) ** 2 ;
$R[41] = $O[41] + $P[41] * ( $E[13] - $S[41]) + $Q[41] * ( $E[13] - $S[41]) ** 2 ;
$R[42] = $O[42] + $P[42] * ( $E[14] - $S[42]) + $Q[42] * ( $E[14] - $S[42]) ** 2 ;
$R[43] = $O[43] + $P[43] * ( $E[15] - $S[43]) + $Q[43] * ( $E[15] - $S[43]) ** 2 ;
$R[44] = $O[44] + $P[44] * ( $E[16] - $S[44]) + $Q[44] * ( $E[16] - $S[44]) ** 2 ;
$R[45] = $O[45] + $P[45] * ( $E[17] - $S[45]) + $Q[45] * ( $E[17] - $S[45]) ** 2 ;
$R[46] = $O[46] + $P[46] * ( $E[18] - $S[46]) + $Q[46] * ( $E[18] - $S[46]) ** 2 ;
$R[47] = $O[47] + $P[47] * ( $E[19] - $S[47]) + $Q[47] * ( $E[19] - $S[47]) ** 2 ;
$R[48] = $O[48] + $P[48] * ( $E[20] - $S[48]) + $Q[48] * ( $E[20] - $S[48]) ** 2 ;
$R[49] = $O[49] + $P[49] * ( $E[21] - $S[49]) + $Q[49] * ( $E[21] - $S[49]) ** 2 ;






// Array T   - VB

$T[33] = ( $B[15] / $J[52] ) * ( $R[33] - $J[50] ) ;
$T[34] = ( $B[15] / $J[52] ) * ( $R[34] - $J[50] ) ;
$T[35] = ( $B[15] / $J[52] ) * ( $R[35] - $J[50] ) ;
$T[36] = ( $B[15] / $J[52] ) * ( $R[36] - $J[50] ) ;
$T[37] = ( $B[15] / $J[52] ) * ( $R[37] - $J[50] ) ;
$T[38] = ( $B[15] / $J[52] ) * ( $R[38] - $J[50] ) ;
$T[39] = ( $B[15] / $J[52] ) * ( $R[39] - $J[50] ) ;
$T[40] = ( $B[15] / $J[52] ) * ( $R[40] - $J[50] ) ;
$T[41] = ( $B[15] / $J[52] ) * ( $R[41] - $J[50] ) ;
$T[42] = ( $B[15] / $J[52] ) * ( $R[42] - $J[50] ) ;
$T[43] = ( $B[15] / $J[52] ) * ( $R[43] - $J[50] ) ;
$T[44] = ( $B[15] / $J[52] ) * ( $R[44] - $J[50] ) ;
$T[45] = ( $B[15] / $J[52] ) * ( $R[45] - $J[50] ) ;
$T[46] = ( $B[15] / $J[52] ) * ( $R[46] - $J[50] ) ;
$T[47] = ( $B[15] / $J[52] ) * ( $R[47] - $J[50] ) ;
$T[48] = ( $B[15] / $J[52] ) * ( $R[48] - $J[50] ) ;
$T[49] = ( $B[15] / $J[52] ) * ( $R[49] - $J[50] ) ;


// Array S   - VB

$S[33] = 0 ; $i = 0 ; while ( $i < 22) { if($C[33 + $i] >= 1.1 *  $B[13]){break;}  $i++; $S[33] = $C[$i+32] ;};
$S[34] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[33]){break;}  $i++; $S[34] = $C[$i+32] ;};
$S[35] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[34]){break;}  $i++; $S[35] = $C[$i+32] ;};
$S[36] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[35]){break;}  $i++; $S[36] = $C[$i+32] ;};
$S[37] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[36]){break;}  $i++; $S[37] = $C[$i+32] ;};
$S[38] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[37]){break;}  $i++; $S[38] = $C[$i+32] ;};
$S[39] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[38]){break;}  $i++; $S[39] = $C[$i+32] ;};
$S[40] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[39]){break;}  $i++; $S[40] = $C[$i+32] ;};
$S[41] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[40]){break;}  $i++; $S[41] = $C[$i+32] ;};
$S[42] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[41]){break;}  $i++; $S[42] = $C[$i+32] ;};
$S[43] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[42]){break;}  $i++; $S[43] = $C[$i+32] ;};
$S[44] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[43]){break;}  $i++; $S[44] = $C[$i+32] ;};
$S[45] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[44]){break;}  $i++; $S[45] = $C[$i+32] ;};
$S[46] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[45]){break;}  $i++; $S[46] = $C[$i+32] ;};
$S[47] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[46]){break;}  $i++; $S[47] = $C[$i+32] ;};
$S[48] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[47]){break;}  $i++; $S[48] = $C[$i+32] ;};
$S[49] = 0 ; $i = 0 ; while ( $i < 22) { if($B[33 + $i] >= 1 / $J[48]){break;}  $i++; $S[49] = $C[$i+32] ;};






// Array U   - F

$U[33] = 14.0069 + 6.59285 * (( $E[5] /$B[13]) - 0.65) - 1.94051 * (( $E[5] / $B[13] ) - 0.65) ** 2;
$U[34] = 14.0069 + 6.59285 * (( $E[6] /$B[13]) - 0.65) - 1.94051 * (( $E[6] / $B[13] ) - 0.65) ** 2;
$U[35] = 14.0069 + 6.59285 * (( $E[7] /$B[13]) - 0.65) - 1.94051 * (( $E[7] / $B[13] ) - 0.65) ** 2;
$U[36] = 14.0069 + 6.59285 * (( $E[8] /$B[13]) - 0.65) - 1.94051 * (( $E[8] / $B[13] ) - 0.65) ** 2;
$U[37] = 14.0069 + 6.59285 * (( $E[9] /$B[13]) - 0.65) - 1.94051 * (( $E[9] / $B[13] ) - 0.65) ** 2;
$U[38] = 14.0069 + 6.59285 * (( $E[10] /$B[13]) - 0.65) - 1.94051 * (( $E[10] / $B[13] ) - 0.65) ** 2;
$U[39] = 14.0069 + 6.59285 * (( $E[11] /$B[13]) - 0.65) - 1.94051 * (( $E[11] / $B[13] ) - 0.65) ** 2;
$U[40] = 14.0069 + 6.59285 * (( $E[12] /$B[13]) - 0.65) - 1.94051 * (( $E[12] / $B[13] ) - 0.65) ** 2;
$U[41] = 14.0069 + 6.59285 * (( $E[13] /$B[13]) - 0.65) - 1.94051 * (( $E[13] / $B[13] ) - 0.65) ** 2;
$U[42] = 14.0069 + 6.59285 * (( $E[14] /$B[13]) - 0.65) - 1.94051 * (( $E[14] / $B[13] ) - 0.65) ** 2;
$U[43] = 14.0069 + 6.59285 * (( $E[15] /$B[13]) - 0.65) - 1.94051 * (( $E[15] / $B[13] ) - 0.65) ** 2;
$U[44] = 14.0069 + 6.59285 * (( $E[16] /$B[13]) - 0.65) - 1.94051 * (( $E[16] / $B[13] ) - 0.65) ** 2;
$U[45] = 14.0069 + 6.59285 * (( $E[17] /$B[13]) - 0.65) - 1.94051 * (( $E[17] / $B[13] ) - 0.65) ** 2;
$U[46] = 14.0069 + 6.59285 * (( $E[18] /$B[13]) - 0.65) - 1.94051 * (( $E[18] / $B[13] ) - 0.65) ** 2;
$U[47] = 14.0069 + 6.59285 * (( $E[19] /$B[13]) - 0.65) - 1.94051 * (( $E[19] / $B[13] ) - 0.65) ** 2;
$U[48] = 14.0069 + 6.59285 * (( $E[20] /$B[13]) - 0.65) - 1.94051 * (( $E[20] / $B[13] ) - 0.65) ** 2;
$U[49] = 14.0069 + 6.59285 * (( $E[21] /$B[13]) - 0.65) - 1.94051 * (( $E[21] / $B[13] ) - 0.65) ** 2;













// G Total drop

$G[5] = round( -12 * $U[33] * $T[33] ** 2 , 1);
$G[6] = round( -12 * $U[34] * $T[34] ** 2 , 1);
$G[7] = round( -12 * $U[35] * $T[35] ** 2 , 1);
$G[8] = round( -12 * $U[36] * $T[36] ** 2 , 1);
$G[9] = round( -12 * $U[37] * $T[37] ** 2 , 1);
$G[10] = round( -12 * $U[38] * $T[38] ** 2 , 1);
$G[11] = round( -12 * $U[39] * $T[39] ** 2 , 1);
$G[12] = round( -12 * $U[40] * $T[40] ** 2 , 1);
$G[13] = round( -12 * $U[41] * $T[41] ** 2 , 1);
$G[14] = round( -12 * $U[42] * $T[42] ** 2 , 1);
$G[15] = round( -12 * $U[43] * $T[43] ** 2 , 1);
$G[16] = round( -12 * $U[44] * $T[44] ** 2 , 1);
$G[17] = round( -12 * $U[45] * $T[45] ** 2 , 1);
$G[18] = round( -12 * $U[46] * $T[46] ** 2 , 1);
$G[19] = round( -12 * $U[47] * $T[47] ** 2 , 1);
$G[20] = round( -12 * $U[48] * $T[48] ** 2 , 1);
$G[21] = round( -12 * $U[49] * $T[49] ** 2 , 1);














/*$D = [
    5 => $B[16],
    6 => $D[5] + $B[17],
    7 => $D[6] + $B[17],
    8 => $D[7] + $B[17],
    9 => $D[8] + $B[17],
    10 => $D[9] + $B[17],
    11 => $D[10] + $B[17],
    12 => $D[11] + $B[17],
    13 => $D[12] + $B[17],
    14 => $D[13] + $B[17],
    15 => $D[14] + $B[17],
    16 => $D[15] + $B[17],
    17 => $D[16] + $B[17],
    18 => $D[17] + $B[17],
    19 => $D[18] + $B[17],
    21 => $D[19] + $B[17],
];*/







/*
$V = [
    33 => ,
    34 => ,
    35 => ,
    36 => ,
    37 => ,
    38 => ,
    39 => ,
    40 => ,
    41 => ,
    42 => ,
    43 => ,
    44 => ,
    45 => ,
    46 => ,
    47 => ,
    48 => ,
    49 => ,
    50 => ,
    51 => ,
    52 => ,
    53 => ,
    54 => ,

];




// Total Drop -  Result balistique     Good
$D = [
    5 => ,
    6 => ,
    7 => ,
    8 => ,
    9 => ,
    10 => ,
    11 => ,
    12 => ,
    13 => ,
    14 => ,
    15 => ,
    16 => ,
    17 => ,
    18 => ,
    19 => ,
    20 => ,
    21 => ,
];





 $velocity = 2900;                    // fps
 $bullet_weight = 125;                // gr
 $ballistic_coefficient = 0.326 ;
 $start_distance = 100;
 $range_increment = 100;
 $altitude = 0;                       //ft
 $temperature = 65;                   // F
 $scope_height = 1.09;                // inch
 $zero_range = 200 ;                  //yds


*/




// Vent
$wind1 = round(176 * ($T[33] - (3 * $distanceArray[0]) / $velocity)/2  * (1 - $ballistic_coefficient/2 )) ;
$wind2 = round(176 * ($T[34] - (3 * $distanceArray[1]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind3 = round(176 * ($T[35] - (3 * $distanceArray[2]) / $velocity)/2 * (1 - $ballistic_coefficient/2 ));
$wind4 = round(176 * ($T[36] - (3 * $distanceArray[3]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind5 = round(176 * ($T[37] - (3 * $distanceArray[4]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind6 = round(176 * ($T[38] - (3 * $distanceArray[5]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind7 = round(176 * ($T[39] - (3 * $distanceArray[6]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind8 = round(176 * ($T[40] - (3 * $distanceArray[7]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind9 = round(176 * ($T[41] - (3 * $distanceArray[8]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind10 = round(176 * ($T[42] - (3 * $distanceArray[9]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind11 = round(176 * ($T[43] - (3 * $distanceArray[10]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind12 = round(176 * ($T[44] - (3 * $distanceArray[11]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind13 = round(176 * ($T[45] - (3 * $distanceArray[12]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind14 = round(176 * ($T[46] - (3 * $distanceArray[13]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind15 = round(176 * ($T[47] - (3 * $distanceArray[14]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind16 = round(176 * ($T[48] - (3 * $distanceArray[15]) / $velocity)/2 * (1 - $ballistic_coefficient/2 )) ;
$wind17 = round(176 * ($T[49] - (3 * $distanceArray[16]) / $velocity)/2 * (1 - $ballistic_coefficient/2 ))   ;






// Wind Array

$windArray = [
    0 => $wind1,
    1 => $wind2,
    2 => $wind3,
    3 => $wind4,
    4 => $wind5,
    5 => $wind6,
    6 => $wind7,
    7 => $wind8,
    8 => $wind9,
    9 => $wind10,
    10 => $wind11,
    11 => $wind12,
    12 => $wind13,
    13 => $wind14,
    14 => $wind15,
    15 => $wind16,
    16 => $wind17
];


// Drop Array

$dropArray = [
    0 => round(abs($G[5])),
    1 => round(abs($G[6])),
    2 => round(abs($G[7])),
    3 => round(abs($G[8])),
    4 => round(abs($G[9])),
    5 => round(abs($G[10])),
    6 => round(abs($G[11])),
    7 => round(abs($G[12])),
    8 => round(abs($G[13])),
    9 => round(abs($G[14])),
    10 => round(abs($G[15])),
    11 => round(abs($G[16])),
    12 => round(abs($G[17])),
    13 => round(abs($G[18])),
    14 => round(abs($G[19])),
    15 => round(abs($G[20])),
    16 => round(abs($G[21]))
];


// Velocity

$velocityArray = [
    0 => $E[5],
    1 => $E[6],
    2 => $E[7],
    3 => $E[8],
    4 => $E[9],
    5 => $E[10],
    6 => $E[11],
    7 => $E[12],
    8 => $E[13],
    9 => $E[14],
    10 => $E[15],
    11 => $E[16],
    12 => $E[17],
    13 => $E[18],
    14 => $E[19],
    15 => $E[20],
    16 => $E[21]
];





// Resultat
echo("<style>table, th, td {  border: 1px solid black;  border-collapse: collapse; min-width: 50px }  th, td {  padding: 5px;  text-align: left;  }</style>");
echo("<style>table { display: inline-block; vertical-align: top; margin-left: 20px; }</style>");
echo("<style>caption { background-color: #c0c0c0 }</style>");



echo ("<table>");

echo ("<caption>Parameters</caption>");
echo ("<tr><th>velocity (fps)</th><td>" . $velocity."</td></tr>");                  // fps
echo ("<tr><th>bullet_weight</th><td>" . $bullet_weight."</td></tr>");
echo ("<tr><th>ballistic_coefficient</th><td>" . $ballistic_coefficient."</td></tr>");
echo ("<tr><th>start_distance (yards)</th><td>" . $start_distance."</td></tr>");
echo ("<tr><th>range_increment (yard)</th><td>" . $range_increment."</td></tr>");
echo ("<tr><th>altitude (feet)</th><td>" . $altitude."</td></tr>");
echo ("<tr><th>temperature (F)</th><td>" . $temperature."</td></tr>");
echo ("<tr><th>scope_height (inch)</th><td>" . $scope_height."</td></tr>");
echo ("<tr><th>zero_range (yards)</th><td>" . $zero_range."</td></tr>");


echo ("</table>");

echo ("<table>");

echo ("<caption>Drop</caption>");
echo ("<tr><th>".$distanceArray[0]."</th><td>" . $dropArray[0]."</td></tr>");
echo ("<tr><th>".$distanceArray[1]."</th><td>" . $dropArray[1]."</td></tr>");
echo ("<tr><th>".$distanceArray[2]."</th><td>" . $dropArray[2]."</td></tr>");
echo ("<tr><th>".$distanceArray[3]."</th><td>" . $dropArray[3]."</td></tr>");
echo ("<tr><th>".$distanceArray[4]."</th><td>" . $dropArray[4]."</td></tr>");
echo ("<tr><th>".$distanceArray[5]."</th><td>" . $dropArray[5]."</td></tr>");
echo ("<tr><th>".$distanceArray[6]."</th><td>" . $dropArray[6]."</td></tr>");
echo ("<tr><th>".$distanceArray[7]."</th><td>" . $dropArray[7]."</td></tr>");
echo ("<tr><th>".$distanceArray[8]."</th><td>" . $dropArray[8]."</td></tr>");
echo ("<tr><th>".$distanceArray[9]."</th><td>" . $dropArray[9]."</td></tr>");
echo ("<tr><th>".$distanceArray[10]."</th><td>" . $dropArray[10]."</td></tr>");
echo ("<tr><th>".$distanceArray[11]."</th><td>" . $dropArray[11]."</td></tr>");
echo ("<tr><th>".$distanceArray[12]."</th><td>" . $dropArray[12]."</td></tr>");
echo ("<tr><th>".$distanceArray[13]."</th><td>" . $dropArray[13]."</td></tr>");
echo ("<tr><th>".$distanceArray[14]."</th><td>" . $dropArray[14]."</td></tr>");
echo ("<tr><th>".$distanceArray[15]."</th><td>" . $dropArray[15]."</td></tr>");
echo ("<tr><th>".$distanceArray[16]."</th><td>" . $dropArray[16]."</td></tr>");

echo ("</table>");

echo ("<table>");

echo ("<caption>Velocity</caption>");
echo ("<tr><td>" . $velocityArray[0]."</td></tr>");
echo ("<tr><td>" . $velocityArray[1]."</td></tr>");
echo ("<tr><td>" . $velocityArray[2]."</td></tr>");
echo ("<tr><td>" . $velocityArray[3]."</td></tr>");
echo ("<tr><td>" . $velocityArray[4]."</td></tr>");
echo ("<tr><td>" . $velocityArray[5]."</td></tr>");
echo ("<tr><td>" . $velocityArray[6]."</td></tr>");
echo ("<tr><td>" . $velocityArray[7]."</td></tr>");
echo ("<tr><td>" . $velocityArray[8]."</td></tr>");
echo ("<tr><td>" . $velocityArray[9]."</td></tr>");
echo ("<tr><td>" . $velocityArray[10]."</td></tr>");
echo ("<tr><td>" . $velocityArray[11]."</td></tr>");
echo ("<tr><td>" . $velocityArray[12]."</td></tr>");
echo ("<tr><td>" . $velocityArray[13]."</td></tr>");
echo ("<tr><td>" . $velocityArray[14]."</td></tr>");
echo ("<tr><td>" . $velocityArray[15]."</td></tr>");
echo ("<tr><td>" . $velocityArray[16]."</td></tr>");



echo ("</table>");
echo ("<table>");

echo ("<caption>Wind </caption>");
echo ("<tr><td>" . $windArray[0]."</td></tr>");
echo ("<tr><td>" . $windArray[1]."</td></tr>");
echo ("<tr><td>" . $windArray[2]."</td></tr>");
echo ("<tr><td>" . $windArray[3]."</td></tr>");
echo ("<tr><td>" . $windArray[4]."</td></tr>");
echo ("<tr><td>" . $windArray[5]."</td></tr>");
echo ("<tr><td>" . $windArray[6]."</td></tr>");
echo ("<tr><td>" . $windArray[7]."</td></tr>");
echo ("<tr><td>" . $windArray[8]."</td></tr>");
echo ("<tr><td>" . $windArray[9]."</td></tr>");
echo ("<tr><td>" . $windArray[10]."</td></tr>");
echo ("<tr><td>" . $windArray[11]."</td></tr>");
echo ("<tr><td>" . $windArray[12]."</td></tr>");
echo ("<tr><td>" . $windArray[13]."</td></tr>");
echo ("<tr><td>" . $windArray[14]."</td></tr>");
echo ("<tr><td>" . $windArray[15]."</td></tr>");
echo ("<tr><td>" . $windArray[16]."</td></tr>");

echo ("</table>");


?>