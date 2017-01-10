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
			Console.WriteLine ("C :---------" + C[54] );



		}
	}
}
