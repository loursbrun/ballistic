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



		}
	}
}
