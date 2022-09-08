// Delete these comments and add the full program in a single code box here

// This section is needed for all but the first short assessed exercise

// Cut and paste this version as a Java file and compile and run it locally to check it works.
// The full program should include 
//         - libraries (where needed), 
//         - main method and
//         - class definition
//         - Each method should have a comment explaining its purpose
//         - The program should start with comments as below

// NAME
// DATE
// VERSION
// BRIEF OVERVIEW OF PURPOSE

import java.util.Scanner; // Needed to make Scanner available
import java.util.Random;
import java.io.*;
class game // change the name to something appropriate
{
    public static void main (String [] a) throws IOException
    {
        play(); //Change this to a call to the method doing the work
        System.exit(0);
    }
    
   // Add all methods the program uses here
    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // the following 6 procedures output the image of a dice face using a sesis of print commands  

    public static void rolled1(){ //prints out dice face for 1
        System.out.println("");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("X              X");
        System.out.println("X      XX      X");
        System.out.println("X    X  X      X");
        System.out.println("X       X      X");
        System.out.println("X       X      X");
        System.out.println("X     XXXXX    X");
        System.out.println("X              X");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("");
    }

    public static void rolled2(){ //prints out dice face for 2
        System.out.println("");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("X              X");
        System.out.println("X     XXXX     X");
        System.out.println("X    X    X    X");
        System.out.println("X        X     X");
        System.out.println("X       X      X");
        System.out.println("X      X       X");
        System.out.println("X     XXXXXX   X");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("");
    }


    public static void rolled3(){ //prints out dice face for 3
        System.out.println("");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("X              X");
        System.out.println("X     XXXX     X");
        System.out.println("X    X    X    X");
        System.out.println("X         X    X");
        System.out.println("X       XX     X");
        System.out.println("X         X    X");
        System.out.println("X    X    X    X");
        System.out.println("X     XXXX     X");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("");
    }

    public static void rolled4(){ //prints out dice face for 4
        System.out.println("");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("X              X");
        System.out.println("X     X        X");
        System.out.println("X    X    X    X");
        System.out.println("X   X     X    X");
        System.out.println("X  XXXXXXXXXX  X");
        System.out.println("X         X    X");
        System.out.println("X         X    X");
        System.out.println("X              X");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("");
    }

    public static void rolled5(){ //prints out dice face for 5
        System.out.println("");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("X              X");
        System.out.println("X    XXXXXXX   X");
        System.out.println("X    X         X");
        System.out.println("X    XXXXXX    X");
        System.out.println("X          X   X");
        System.out.println("X          X   X");
        System.out.println("X    XXXXXX    X");
        System.out.println("X              X");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("");
    }

    public static void rolled6(){ //prints out dice face for 6
        System.out.println("");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("X              X");
        System.out.println("X       X      X");
        System.out.println("X      X       X");
        System.out.println("X     X        X");
        System.out.println("X    XXXXX     X");
        System.out.println("X    X     X   X");
        System.out.println("X    X     X   X");
        System.out.println("X     XXXXX    X");
        System.out.println("XXXXXXXXXXXXXXXX");
        System.out.println("");
    }

    // the main command 
    public static int rolldice(){

        Random roll = new Random();
        Scanner usercatchup = new Scanner(System.in);  //pauses until the players presses enter so that they can catch up
                                                       //and understand what is happening 

        System.out.println("press enter to roll the dice");
        String allowusertocatchup = usercatchup.nextLine();

        int diceroll = (roll.nextInt(6)+1);

        if (diceroll == 1) {
            rolled1();
        }
        else if (diceroll == 2) {
            rolled2();
        }
        else if (diceroll == 3) {
            rolled3();
        }
        else if (diceroll == 4) {
            rolled4();
        }
        else if (diceroll == 5) {
            rolled5();
        }
        else if (diceroll == 6) {
            rolled6();
        }

        return diceroll;

    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //method for taking a int value from the user 
    public static int userint(int minvalue, int maxvalue ){  
        Scanner input = new Scanner(System.in);


        int userinput;

        // try for catching when the user inputs a value that cannot be turned into a integer
         try {
                userinput = Integer.parseInt(input.nextLine()); //takes users input
        }
        catch (NumberFormatException e){

            System.out.println("please enter an integer");
            return  userint(minvalue, maxvalue);
        }




        //if statement checks whether the number fits between required parameters, if not the method will recall itself
        if (userinput < minvalue) {

            System.out.println("enter a number greater than " + minvalue);
            return userint(minvalue, maxvalue); 
        }


        else if ((userinput > maxvalue ) && (maxvalue != -1)){ 

            System.out.println("enter a number less than " + maxvalue);
            return userint(minvalue, maxvalue);
        }


        else{

            return userinput;
        }


    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //procedure for creating a new player  
    public static player createplayer(int playernumber, boolean active){
        Scanner input = new Scanner(System.in);

        player newplayer = new player();

        //takes users inputted name and sets it as players name 
        System.out.println("what is your name?");
        newplayer.Name = input.nextLine();

        //sets the values according to the variables entered into createplayer 
        newplayer.PlayerNumber = playernumber;
        newplayer.Active = active;
        newplayer.Position = 0;

        return newplayer ;
    }


    //sets the initiave of a player 
    public static int giveinitiative(int initiative, player Player){
        return Player.Initiative = initiative;
    }


    //gets the name of a player
    public static String getname (player Player){
        return Player.Name; 
    }

    //returns the initiative of a player
    public static int getinitiative(player Player){

        return Player.Initiative;
    }

    //returns the position of a player
    public static int getposition(player Player){

        return Player.Position;
    }

    //changes the position of a player 
    public static void changeposition(player Player, int spacesmoved){

        Player.Position = Player.Position+ spacesmoved;
    }


    //creates a new player from save:
    public static player takeplayerfromsave(int playernumber, boolean active, String name, int space){
        Scanner input = new Scanner(System.in);

        player newplayer = new player();

        //takes users saved name and sets it as players name 
        newplayer.Name = name;

        //sets the values according to the variables saved
        newplayer.PlayerNumber = playernumber;
        newplayer.Active = active;
        newplayer.Position = space;

        return newplayer ;
    }

    //sets the position of a player 
    public static void setposition(player Player, int space){

        Player.Position = space;
    }
	
	
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //function for sorting the order of players 
    public static player[] rollsorter(player[] arraytobesorted){

        player[] startingarray = arraytobesorted; 
        player[] sortedarray = new player[arraytobesorted.length]; //the array that will be returned

        //this sort works by placing the player with the largest roll at the back of the array, so that they are then ignored on the next passthrough of the sorter 
        for (int z = 0; z< arraytobesorted.length; z++){ 

            player highestplayer = startingarray[0]; //records the player with the highest initiative
            int highestplayerpos = 0; //records the position that player was originally in in the array

            for (int i = 0; i < startingarray.length; i++){

                if (getinitiative(highestplayer) < getinitiative(startingarray[i])) { //if statement which compares players initiative rolls 

                    highestplayer = arraytobesorted[i]; //when statement is true these two variables are assigned the details of that player for the array
                    highestplayerpos = i;


                }

            }

            sortedarray[z] = highestplayer ; // largest rolling player gets added to the back of sorted array here 
            giveinitiative(0, startingarray[highestplayerpos]); // this prevents the player from getting double counted by the sort system
        }

        return sortedarray; //returns sorted array
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //sort method for organising players rolling the dice to set their initiative 
    public static void initiativerolls( player[] playerarray){

        System.out.println("");
        System.out.println("Time to roll for initiative");
        System.out.println("");

        for(int i = 0; i < playerarray.length; i++){
            System.out.println(getname(playerarray[i]) +" please roll ");
            giveinitiative(rolldice(), playerarray[i] );
            System.out.println("");
        }


    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //assaigns the details to the ADT that holds the details to the game.
    public static gamedetails assaigndetails(int currentplayertogo){

        gamedetails details = new gamedetails();

        //takes the player order

        //holds who is currently  going in the order
        details.CurrentPlayer = currentplayertogo;

        //the questions that may come up
        String[] questions = {"When Greek Fire was descovered and used for battle, it was able to set the surface of seas ablaze to burn down ships",
                              "In Docter Who, the Weeping Angels can be stopped by forcing them to look at themselves in the mirror",
                              "In the bible, Moses was said to save many of earth's creatures by building a large Arc to house 2 of each animal when the great flood came",
                              "The constellation Orian is said to be followed by 2 great bears during his hunt through the night sky",
                              "In the Lord of the Rings, Aragorn, king of men hid his name under the alias Strider  ",
                              "During Christmas, santa is often accompanied by Krampus, a devil who punishes misbehaving children, one of the ways he does this is by eating them",
                              "During World War 2, The Germans were often found using gas during trench warefare against the allied powers",
                              "The holy grail is a special chalice said to bring enlightenment to those who drink from it",
                              "Medusa was the only Gorgon that had originally been born as a human",
                              "The Great Archemedies, during the punic wars had designed a weapon which used mirrors which turned the sun's rays into a lazer that burned ships at sea",
                              "In Norse Myhtology, the Valkaries were a group of men who would bring fallen warriors to the afterlife"};

        //the answers to the questions above
        boolean[] answers = {true, true, false, false, true, true, false, false, true, true, false, };

        //assaigns the questions and answers to the adt 
        details.Questions = questions;

        details.Answers = answers;

        //returns the details of the game 
        return details;

    }

    //pulls the number for initiative, 
    public static int getcurrentplayer(gamedetails details){

        return details.CurrentPlayer;
    }

    //changes who goes next
    public static void changecurrentplayer(int number, gamedetails details, int numofplayers ){

        details.CurrentPlayer = details.CurrentPlayer + number;

        if (details.CurrentPlayer ==  numofplayers){
            details.CurrentPlayer = details.CurrentPlayer - numofplayers;
        }
    }



    //pulls a question from the adt array depending on the question number being called 
    public static String getquestion(gamedetails details, int questionnumber){

        return details.Questions[questionnumber];
    }

    //pulls the answer to a question, answer given depends on answer numeber
    public static boolean getanswer(gamedetails details, int answernumber){

        return details.Answers[answernumber];
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //procedure prints a board with where everyone currently is 
    public static void showboard(player[] order){

        for(int space = 0; space <14; space++ ){ //for statement loops 13 times, once for each space on the board
            System.out.println("XXXXXXXXXXXXXXXXXXXXXXX"); // top of a space

            for (int i = 0; i < order.length; i++){ //repeats so that there is a space for every name to fit in 

                if (getposition(order[i]) == space){ //if statment checks if there is a player in that space

                    //if there is a player in the space, the name is printed out where the player goes 
                    System.out.println(" "+getname(order[i]));
                    System.out.println("X                     X");
                }
                else {
                    //otherwise prints an empty space 
                    System.out.println("");
                    System.out.println("X                     X");
                }
            }

        }

            System.out.println("XXXXXXXXXXXXXXXXXXXXXXX"); //prints bottom of board

    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // method making player roll and move position 
    public static void makemove(player[] order, gamedetails details){

        player currentplayer = order[getcurrentplayer(details)];
        int roll = rolldice();
        System.out.println("You have moved, " + roll +" spaces!");
        changeposition(currentplayer, roll);


    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // checks if any player has reached the final position 
    public static boolean checkiffinished(player[] order, gamedetails details){

        player currentplayer = order[getcurrentplayer(details)];

        if (getposition(currentplayer)>12){
            System.out.println("Congratulations, "+ getname(currentplayer) + " you have escaped the haunted house!");
            System.out.println("You have won the game!");
            setposition(currentplayer, 13); //sets the winning player to position 13 so that they can be seen on the board

            return true;
        }
        else{
            return false;
        }

    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //method for takeing a true or false value from the user
    public static boolean usertruefalse() {
        Scanner input = new Scanner(System.in);
        String userinput = "";

        //while loop repeats until the user enters either true or false
        while (userinput.equals("")) {



            userinput = (input.nextLine()).toLowerCase(); //takes users input

            if (userinput.equals("true")) { 
                System.out.println("you have entered \"true\"");
                return true;
            }


            else if (userinput.equals("false")) {
                System.out.println("you have entered \"false\"");
                return false;
                }


            else {
                System.out.println("please enter either \"true\" or \"false\"");
                userinput = "";
            }
        }
        return false;
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //method which randomly asks questions to the players, allowing them the chance at moving forward for a second time or not falling backwards
    public static void askquestion(gamedetails details, player[] order){
        Random random = new Random();
        int chance = random.nextInt(4); //depending on this value, either a trap , secret passage or nothing will happen

        if (chance == 3){ //there is a 1/4 chance that a secret passage is triggered

            System.out.println("Secret Passage, answer the question correctly for a chance to roll again");
            System.out.println("");


            int questionnumber = random.nextInt(11); //this random number selects what question gets asked to the player 
            System.out.println(getquestion(details , questionnumber));
            System.out.println("is this true or false");
            System.out.println("");

            boolean useranswer = usertruefalse(); // saves the answer given by the player in the variable 

            //if statement checks if the player got the answer right
            if (useranswer == getanswer(details, questionnumber)){
                System.out.println("you are correct");
                makemove(order, details); // calls for the player to make another move 
                System.out.println("");
            }
            else{
                System.out.println("you are incorrect");
                System.out.println("");
            }
        }

        else if (chance == 2){ //also a 1/4 chance for a trap to occur

            System.out.println("Trap, answer the question correctly otherwise fall back a space");
            System.out.println("");

            int questionnumber = random.nextInt(11);
            System.out.println(getquestion(details , questionnumber));
            System.out.println("is this true or false");
            System.out.println("");

            boolean useranswer = usertruefalse();

            //checks if the plaeyr got the answer wrong 
            if (useranswer != getanswer(details, questionnumber)){
                System.out.println("you are incorrect");
                changeposition(order[getcurrentplayer(details)], -1); // calls to move the player back one space  
                System.out.println("");
            }
            else{
                System.out.println("you are correct, you do not fall into the trap");
                System.out.println("");
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //main procedure which starts the game and calls other procedures 
    public static void play() throws IOException {

        //stores how many people are playing the game
        System.out.println("would you like to start a new game");
		boolean gamedescision = useryesno();
		gamedetails details;
		player order[];
		int numofplayers;
		
		if (gamedescision == false){
			
			numofplayers = Integer.parseInt(readsave(1));
			details = assaigndetails(Integer.parseInt(readsave(2)));
			
			order = new player[numofplayers];
			
			player player1 = takeplayerfromsave(1, true, readsave(3), Integer.parseInt(readsave(4)));
			order[0] = player1;
			
			player player2 = takeplayerfromsave(1, true, readsave(5), Integer.parseInt(readsave(6)));
			order[1] = player2;
			
			if(numofplayers > 2){
				player player3 = takeplayerfromsave(1, true, readsave(7), Integer.parseInt(readsave(8)));
				order[2] = player3 ;
			}
			if(numofplayers > 3){
				player player4 = takeplayerfromsave(1, true, readsave(9), Integer.parseInt(readsave(10)));
				order[3] = player4;
			}
		}
		
		else{
		
		
			System.out.println("how many players are playing, maximum of 4, minimum of 2");
			numofplayers = userint(1, 4);
			player[] players = new player[numofplayers];

										//creation of players starts here 

			//creates the ADT for player one 
			System.out.println("");
			System.out.println("player 1:");
			player player1 = createplayer(1, true);
			players[0] = player1; 

			//creates the ADT for player 2
			System.out.println("");
			System.out.println("player 2:");
			player player2 = createplayer(2, true);
			players[1] = player2;

			//if statements check if there are any other players present and creates ADTs for the rest 
			if (numofplayers >= 3) {
				System.out.println("");
				System.out.println("player 3:");
				player player3 = createplayer(3, true);
				players[2] = player3;
			}


			if (numofplayers == 4){
				System.out.println("");
				System.out.println("player 4:");
				player player4 = createplayer(4, true);
				players[3] = player4;
			}

										//creation of players ends here 

										//players intiative and order happens here

			initiativerolls(players); //function gives players initiative
			order = rollsorter(players); //function orders the players in terms of intiative and puts them in new array order
			details = assaigndetails(0);

			System.out.println("the players will go in this order");
			for (int i = 0; i < order.length; i++) {
				System.out.println(getname(order[i]));

			}
		}

                                    // game starts here 

        System.out.println("");
        System.out.println("The Game Starts :");
        System.out.println("");

        boolean finished = false; //used by the while loop to check whether someone has won the game 

        while (finished == false){

            if (getcurrentplayer(details) == 0){
                showboard(order); //shows the board 
            }

            System.out.println(getname(order[getcurrentplayer(details)])+", it is your turn"); //states which player is going next
            makemove(order, details );                                //calls for player to move
            askquestion(details, order);                              //might play a trap or passage here  
            finished =  checkiffinished(order, details);              //checks if a player has won
            changecurrentplayer(1, details, numofplayers);            //adds one to the initiative count so that the next player can go 
			savegame(order, details, numofplayers);
            }

        showboard(order); //once game is over, a final board will show

    }
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		//method to save the game so that it can be continued next time
		public static void savegame(player[] order, gamedetails details, int numofplayers  ) throws IOException
		{
			
			PrintWriter save = new PrintWriter(new FileWriter("gamesave.txt"));
			
			save.println(numofplayers);                 //it first saves the number of players in the game
			save.println(getcurrentplayer(details));   // then saves the current initiative count
			
			for(int i = 0; i < numofplayers; i++){
				save.println(getname(order[i]));		//saves the name of the players
				save.println(getposition(order[i]));	//saves the position the player is in, 
														//the players will be saved in the order they are going in
				
			}
			save.close();
			
			
			System.out.println("game saved, would you like to exit?");
			boolean desicion = useryesno();
			
			if (desicion == true ){
				showboard(order);
				System.exit(0);
			}
			
		}
		

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	public static String readsave(int line)throws IOException{
		
		BufferedReader read = new BufferedReader(new FileReader("gamesave.txt"));
		
		String hold = "";
		
		for(int i = 0; i <line;i++){
			hold = read.readLine();
		}
		
		read.close();
		
		return hold;
		
	}
	
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //method for takeing a new game or last game value from the user
    public static boolean useryesno() {
        Scanner input = new Scanner(System.in);
        String userinput = "";

        //while loop repeats until the user enters either new game or last game
        while (userinput.equals("")) {



            userinput = (input.nextLine()).toLowerCase(); //takes users input

            if (userinput.equals("no")) { 
                System.out.println("you have entered \"no\"");
                return false;
            }


            else if (userinput.equals("yes")) {
                System.out.println("you have entered \"yes\"");
                return true;
                }


            else {
                System.out.println("please enter either \"yes\" or \"no\"");
                userinput = "";
            }
        }
        return false;
    }
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
}




    // the class template for a player
class player { 
    int PlayerNumber; //the number of the player 
    boolean Active; //whether this player is active |
    String Name;    //the name of the player 
    int Position;  //the position of this players piece
    int Initiative; // the initiative this player started with (where in the order this player takes his turn, set by dice roll)
}

    
class gamedetails {
    
    int CurrentPlayer;
    
    String[] Questions;
    
    boolean[] Answers;
}
