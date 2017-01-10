using System;

namespace balistic
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			//Console.WriteLine ("Hello World!");




			/* ----------------------------------------- */
			/* ==              Header                    */
			/* ----------------------------------------- */



			/*     global vars    */


	

			int velocity = 2900;                    // fps
			int bullet_weight = 135;                // gr
			float ballisticCoefficient = 0.3f ;
			float startDistance = 100;
			int rangeIncrement = 100;
			int altitude = 0;                       //ft
			int temperature = 65;                   // F
			float scopeHeight = 1.09f;                // inch
			int zeroRange = 200 ;                  //yds

			Console.WriteLine ("velocity :----------" + velocity );
			Console.WriteLine ("bullet_weight ::----" + bullet_weight );
			Console.WriteLine ("BC ::---------------" + ballisticCoefficient );
			Console.WriteLine ("startDistance :-----" + startDistance );
			Console.WriteLine ("rangeIncrement :----" + rangeIncrement );
			Console.WriteLine ("altitude :----------" + altitude );
			Console.WriteLine ("temperature :-------" + temperature );
			Console.WriteLine ("scopeHeight :-------" + scopeHeight );
			Console.WriteLine ("zeroRange :---------" + zeroRange );

			Console.WriteLine ("----------------------------------------" );




			// Array Distance =>  distanceArray
			float[] distanceArray = new float[17]; 

			distanceArray[0] = startDistance;
			distanceArray[1] = startDistance + rangeIncrement * 1;
			distanceArray[2] = startDistance + rangeIncrement * 2;
			distanceArray[3] = startDistance + rangeIncrement * 3;
			distanceArray[4] = startDistance + rangeIncrement * 4;
			distanceArray[5] = startDistance + rangeIncrement * 5;
			distanceArray[6] = startDistance + rangeIncrement * 6;
			distanceArray[7] = startDistance + rangeIncrement * 7;
			distanceArray[8] = startDistance + rangeIncrement * 8;
			distanceArray[9] = startDistance + rangeIncrement * 9;
			distanceArray[10] = startDistance + rangeIncrement * 10;
			distanceArray[11] = startDistance + rangeIncrement * 11;
			distanceArray[12] = startDistance + rangeIncrement * 12;
			distanceArray[13] = startDistance + rangeIncrement * 13;
			distanceArray[14] = startDistance + rangeIncrement * 14;
			distanceArray[15] = startDistance + rangeIncrement * 15;
			distanceArray[16] = startDistance + rangeIncrement * 16;

			//Console.WriteLine ("distanceArray :---------" + distanceArray[12] );



	
			// A
			Double[] A = new Double[55]; 
			A[33] = 43041;
			A[34] = 36664.2;
			A[35] = 31488.6;
			A[36] = 27124.6;
			A[37] = 23415.1;
			A[38] = 20325.5;
			A[39] = 17879.9;
			A[40] = 16095.6;
			A[41] = 15433.3;
			A[42] = 15150.3;
			A[43] = 14894.3;
			A[44] = 14798.5;
			A[45] = 14706.2;
			A[46] = 14616.9;
			A[47] = 14447.1;
			A[48] = 13720.5;
			A[49] = 12330.3;
			A[50] = 10168.1;
			A[51] = 8332.83;
			A[52] = 6699.05;
			A[53] = 5245.45;
			A[54] = 3958.11;


			// B
			Double[] B = new Double[55]; 
			B[13] = velocity;
			B[14] = bullet_weight;
			B[15] = ballisticCoefficient;
			B[16] = startDistance;
			B[17] = rangeIncrement;
			B[18] = altitude;
			B[19] = temperature;
			B[20] = scopeHeight;
			B[21] = zeroRange;
			B[33] = 1 / 43041;
			B[34] = 1 / 36664.2;
			B[35] = 1 / 31488.6;
			B[36] = 1 / 27124.6;
			B[37] = 1 / 23415.1;
			B[38] = 1 / 20325.5;
			B[39] = 1 / 17879.9;
			B[40] = 1 / 16095.6;
			B[41] = 1 / 15433.3;
			B[42] = 1 / 15150.3;
			B[43] = 1 / 14894.3;
			B[44] = 1 / 14798.5;
			B[45] = 1 / 14706.2;
			B[46] = 1 / 14616.9;
			B[47] = 1 / 14447.1;
			B[48] = 1 / 13720.5;
			B[49] = 1 / 12330.3;
			B[50] = 1 / 10168.1;
			B[51] = 1 / 8332.83;
			B[52] = 1 / 6699.05;
			B[53] = 1 / 5245.45;
			B[54] = 1 / 3958.11;
			//Console.WriteLine ("B :---------" + B[49] );


			// C
			Double[] C = new Double[55]; 
			C[33] = 350;
			C[34] = 450;
			C[35] = 550;
			C[36] = 650;
			C[37] = 750;
			C[38] = 850;
			C[39] = 950;
			C[40] = 1025;
			C[41] = 1062.5;
			C[42] = 1087.5;
			C[43] = 1105;
			C[44] = 1115;
			C[45] = 1125;
			C[46] = 1140;
			C[47] = 1200;
			C[48] = 1375;
			C[49] = 1750;
			C[50] = 2250;
			C[51] = 2750;
			C[52] = 3250;
			C[53] = 3750;
			C[54] = 4250;
			//Console.WriteLine ("C :---------" + C[54] );

			// D
			Double[] D = new Double[55]; 
			D[33] = 39663.2;
			D[34] = 33958.1;
			D[35] = 29218.7;
			D[36] = 25192;
			D[37] = 21792;
			D[38] = 19020.1;
			D[39] = 16906.5;
			D[40] = 15747.2;
			D[41] = 15288.1;
			D[42] = 15019.2;
			D[43] = 14846;
			D[44] = 14751.9;
			D[45] = 14661.2;
			D[46] = 14530.6;
			D[47] = 14062.5;
			D[48] = 12977.5;
			D[49] = 11189.1;
			D[50] = 9222.059;
			D[51] = 7492.73;
			D[52] = 5950.45;
			D[53] = 4582.38;
			D[54] = 3369.09;
			//Console.WriteLine ("D :---------" + D[54] );


			// E
			Double[] E = new Double[55]; 
			E[33] = -63.768;
			E[34] = -51.756;
			E[35] = -43.64;
			E[36] = -37.095;
			E[37] = -30.896;
			E[38] = -24.4588;
			E[39] = -17.8388;
			E[40] = -13.2423;
			E[41] = -11.3183;
			E[42] = -10.2383;
			E[43] = -9.58136;
			E[44] = -9.231361;
			E[45] = -8.930021;
			E[46] = -8.482001;
			E[47] = -7.2568;
			E[48] = -5.5464;
			E[49] = -4.31589;
			E[50] = -3.66916;
			E[51] = -3.26733;
			E[52] = -2.90704;
			E[53] = -2.57414;
			E[54] = -2.29123;
			//Console.WriteLine ("E :---------" + E[54] );

			// F
			Double[] F = new Double[55]; 
			F[33]= 0.0758391;
			F[34]= 0.0473157;
			F[35]= 0.035161;
			F[36]= 0.0311391;
			F[37]= 0.0313196;
			F[38]= 0.0330303;
			F[39]= 0.0325134;
			F[40]= 0.0276581;
			F[41]= 0.023346;
			F[42]= 0.0199585;
			F[43]= 0.0164795;
			F[44]= 0.0165939;
			F[45]= 0.0147629;
			F[46]= 0.0116909;
			F[47]= 0.00850001;
			F[48]= 0.00306207;
			F[49]= 0.000960342;
			F[50]= 0.00045401;
			F[51]= 0.000371407;
			F[52]= 0.000348885;
			F[53]= 0.000310524;
			F[54]= 0.000257709;
			//Console.WriteLine ("F :---------" + F[54] );


			// G
			Double[] G = new Double[55]; 
			G[33]= 49.669;
			G[34]= 35.269;
			G[35]= 25.7322;
			G[36]= 18.9904;
			G[37]= 14.1144;
			G[38]= 10.6366;
			G[39]= 8.27886;
			G[40]= 7.10211;
			G[41]= 6.66207;
			G[42]= 6.41183;
			G[43]= 6.25378;
			G[44]= 6.16907;
			G[45]= 6.08802;
			G[46]= 5.97274;
			G[47]= 5.57228;
			G[48]= 4.72557;
			G[49]= 3.56969;
			G[50]= 2.57801;
			G[51]= 1.88267;
			G[52]= 1.36656;
			G[53]= 0.974457;
			G[54]= 0.670381;
			//Console.WriteLine ("G :---------" + G[54] );

			// H
			Double[] H = new Double[55]; 
			H[33]= -0.1845;
			H[34]= -0.115879;
			H[35]= -0.079629;
			H[36]= -0.057305;
			H[37]= -0.041349;
			H[38]= -0.0288527;
			H[39]= -0.01884;
			H[40]= -0.0129298;
			H[41]= -0.0106524;
			H[42]= -0.00941688;
			H[43]= -0.00866849;
			H[44]= -0.00828369;
			H[45]= -0.00793184;
			H[46]= -0.00745342;
			H[47]= -0.006058;
			H[48]= -0.00405656;
			H[49]= -0.00249074;
			H[50]= -0.00163915;
			H[51]= -0.0011924;
			H[52]= -0.000897071;
			H[53]= -0.0006880031;
			H[54]= -0.000540083;
			//Console.WriteLine ("H :---------" + H[54] );




			// I
			Double[] I = new Double[55]; 
			I[33]= 0.000482396;
			I[34]= 0.000234824;
			I[35]= 0.000136695;
			I[36]= 0.0000920586;
			I[37]= 0.000069381;
			I[38]= 0.0000558719;
			I[39]= 0.0000441677;
			I[40]= 0.0000332035;
			I[41]= 0.0000268757;
			I[42]= 0.000022611;
			I[43]= 0.000020396;
			I[44]= 0.0000183284;
			I[45]= 0.0000170991;
			I[46]= 0.0000150953;
			I[47]= 0.0000096174;
			I[48]= 0.00000372586;
			I[49]= 0.00000127366;
			I[50]= 0.000000568494;
			I[51]= 0.000000352828;
			I[52]= 0.000000245908;
			I[53]= 0.000000174925;
			I[54]= 0.000000124357;
			//Console.WriteLine ("I :---------" + I[54] );



			// R
			Double[] R = new Double[55]; 
			R[33]=1.71174863;
			R[34]=2.041077933952;
			R[35]=2.4013711388;
			R[36]=2.80965605315;
			R[37]=3.256147938366;
			R[38]=3.77440737206;
			R[39]=4.34458662614;
			R[40]=5.00045096256;
			R[41]=5.71933195496;
			R[42]=6.5309222014;
			R[43]=7.404911980925;
			R[44]=8.3307872435;
			R[45]=9.33127925;
			R[46]=10.33221837;
			R[47]=11.4245396044;
			R[48]=12.56890084;
			R[49]=13.7078481;
			R[50]=0;
			R[51]=0;
			R[52]=0;
			R[53]=0;
			R[54]=0;
			//Console.WriteLine ("R :---------" + R[43] );





			// S
			Double[] S = new Double[55]; 
			S[33]= 2750;
			S[34]= 2750;
			S[35]= 2750;
			S[36]= 2250;
			S[37]= 2250;
			S[38]= 1750;
			S[39]= 1750;
			S[40]= 1375;
			S[41]= 1375;
			S[42]= 1200;
			S[43]= 1062;
			S[44]= 1025;
			S[45]= 950;
			S[46]= 950;
			S[47]= 850;
			S[48]= 850;
			S[49]= 750;
			S[50]= 0;
			S[51]= 0;
			S[52]= 0;
			S[53]= 0;
			S[54]= 0;
			//Console.WriteLine ("S :---------" + S[43] );



			// T
			Double[] T = new Double[55]; 
			T[33]= 0;
			T[34]= 0.109224295186016;
			T[35]= 0.228717977915109;
			T[36]= 0.364128436291632;
			T[37]= 0.512210495445715;
			T[38]= 0.684094748348339;
			T[39]= 0.87319856148989;
			T[40]= 1.09072041279031;
			T[41]= 1.3291421650464;
			T[42]= 1.59831156960134;
			T[43]= 1.88817620212221;
			T[44]= 2.19524900667185;
			T[45]= 2.52706895994613;
			T[46]= 2.85903720144233;
			T[47]= 3.22131294038309;
			T[48]= 3.60084809834409;
			T[49]= 3.97858767461233;
			T[50]= 0;
			T[51]= 0;
			T[52]= 0;
			T[53]= 0;
			T[54]= 0;
			//Console.WriteLine ("T :---------" + T[43] );




			// U
			Double[] U = new Double[55]; 
			U[33]= 16.076685025;
			U[34]= 15.5570633090143;
			U[35]= 15.0347030090666;
			U[36]= 14.5175751451843;
			U[37]= 14.0023522839429;
			U[38]= 13.5098262418597;
			U[39]= 13.0409445687705;
			U[40]= 12.625947612038;
			U[41]= 12.2608586403615;
			U[42]= 11.9981698612889;
			U[43]= 11.8195866472782;
			U[44]= 11.6687337392735;
			U[45]= 11.5437362259512;
			U[46]= 11.4342489959869;
			U[47]= 11.3350791887384;
			U[48]= 11.2408696578181;
			U[49]= 11.1573005833829;
			U[50]= 0;
			U[51]= 0;
			U[52]= 0;
			U[53]= 0;
			U[54]= 0;
			//Console.WriteLine ("U :---------" + U[43] );



			// Total Drop -  Result balistique     Good

			D[5] = B[16]; 
			D[6] = D[5] + B[17];
			D[7] = D[6] + B[17];
			D[8] = D[7] + B[17];
			D[9] = D[8] + B[17];
			D[10] = D[9] + B[17];
			D[11] = D[10] + B[17];
			D[12] = D[11] + B[17];
			D[13] = D[12] + B[17];
			D[14] = D[13] + B[17];
			D[15] = D[14] + B[17];
			D[16] = D[15] + B[17];
			D[17] = D[16] + B[17];
			D[18] = D[17] + B[17];
			D[19] = D[18] + B[17];
			D[20] = D[19] + B[17];
			D[21] = D[20] + B[17];
		
			//Console.WriteLine ("D19 :---------" + D[19] );

			//L[33] = D[array_search(S[33], C)] ; M[33] = E[array_search(S[33], C)] ; N[33] = F[array_search(S[33], C)] ; O[33] = G[array_search(S[33], C)] ;  P[33] = H[array_search(S[33], C)] ;  Q[33] = I[array_search(S[33], C)] ; 



			Double[] L = new Double[55]; 
			Double[] M = new Double[55]; 
			Double[] N = new Double[55]; 
			Double[] O = new Double[55]; 
			Double[] P = new Double[55]; 
			Double[] Q = new Double[55];
			Double[] J = new Double[55];



			L[33] = D[Array.IndexOf(C, S[33])];
			M[33] = E[Array.IndexOf(C, S[33])];
			N[33] = F[Array.IndexOf(C, S[33])];
			O[33] = G[Array.IndexOf(C, S[33])];
			P[33] = H[Array.IndexOf(C, S[33])];
			Q[33] = I[Array.IndexOf(C, S[33])];

			L[34] = 0;


			//Console.WriteLine ("L33 :---------" + L[33] );
			//Console.WriteLine ("M33 :---------" + M[33] );
			//Console.WriteLine ("N33 :---------" + N[33] );
			//Console.WriteLine ("O33 :---------" + O[33] );
			//Console.WriteLine ("P33 :---------" + P[33] );
			//Console.WriteLine ("Q33 :---------" + Q[33] );
		
		
			//int i = 0;  

			J[50] = O[33] + P[33] * ( B[13] - S[33]) + Q[33] * (B[13] - S[33] ) * 2;
			J[51] = L[33] + M[33] * ( B[13] - S[33]) + N[33] * (B[13] - S[33] ) * 2;
			J[53] = 1-0.0000359596 * B[18] + 0.00000000047741 * B[18] * 2;
			J[54] = 518.67 /(459.67 + B[19]);
			J[52] = J[53] * J[54];
			J[33] = J[51] + 3 * D[5] / (B[15] / J[54]);
			J[34] = J[51] + 3 * D[6] / (B[15] / J[54]);
			J[35] = J[51] + 3 * D[7] / (B[15] / J[54]);
			J[36] = J[51] + 3 * D[8] / (B[15] / J[54]);
			J[37] = J[51] + 3 * D[9] / (B[15] / J[54]);
			J[38] = J[51] + 3 * D[10] / (B[15] / J[54]);
			J[39] = J[51] + 3 * D[11] / (B[15] / J[54]);
			J[40] = J[51] + 3 * D[12] / (B[15] / J[54]);
			J[41] = J[51] + 3 * D[13] / (B[15] / J[54]);
			J[42] = J[51] + 3 * D[14] / (B[15] / J[54]);
			J[43] = J[51] + 3 * D[15] / (B[15] / J[54]);
			J[44] = J[51] + 3 * D[16] / (B[15] / J[54]);
			J[45] = J[51] + 3 * D[17] / (B[15] / J[54]);
			J[46] = J[51] + 3 * D[18] / (B[15] / J[54]);
			J[47] = J[51] + 3 * D[19] / (B[15] / J[54]);
			J[48] = J[51] + 3 * D[20] / (B[15] / J[54]);
			J[49] = J[51] + 3 * D[21] / (B[15] / J[54]);

			//Console.WriteLine ("J[50] :---------" + B[15] );
			//Console.WriteLine ("J[50] :---------" + J[45] );




		}
	}
}
