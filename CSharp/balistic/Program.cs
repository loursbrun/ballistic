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
			int bullet_weight = 250;                // gr
			float ballisticCoefficient = 0.350f ;
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
			Console.WriteLine ("E :---------" + E[54] );

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
			Console.WriteLine ("F :---------" + F[54] );


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
			Console.WriteLine ("G :---------" + G[54] );

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
			Console.WriteLine ("H :---------" + H[54] );













		}
	}
}
