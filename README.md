# Medival-War

@Author Jiao Shiqi | Xu Haoran | Wei Lai | Wang Tianying

This is a group project website game.

This mini project aims at building a web page game called Medieval War, setting Holy Roman Empire as the background. The game includes three main parts, login system: administration system and battle system; and two databases: user database and game database.

# Build Instrucation

-Set up server like XAMPP.
-Import pages files and img folder into htdoc foler.
-Import database files medieval.sql and MedievalWar.sql into database in phpMyadmin.

# Background
Holy Roman Empire of Medieval period is set as the background of the game, with three powers, Duchy of Saxony, Duchy of Bavaria and Kingdom of Italy, existed at the moment. The three powers have to make a plan to develop their own cities and battle against other powers, until one of them conquers all the cities on the map.
The game is started from AD 1055. At that moment, Holy Roman Empire has been built and the king of Duchy of Saxony is the emperor of Holy Roman Empire. The rest two powers will try to dominate the emperor and Duchy of Saxony wants to unite the whole country. Of course the powers are not equal to each other. Duchy of Saxony will have 5 cities initially, while Duchy of Bavaria and Kingdom of Italy have 3 cities and 4 cities respectively. Users can choose different power at the beginning of the game, which means that the difficulty will be different because of the initial cities assigned to the power.
Here is a brief background of the three powers:
Duchy of Saxony: The duchy is located at the northwest part on the map. The current emperor of Holy Roman Empire is the duke of Saxony, Otto III. The duchy has the highest quantity of cities, so that it is the best choice for a beginner of this game.
Duchy of Bavaria: The duchy is located at the east part on the map and has only 3 cities initially, which is the hardest mode if user chose this power at the beginning of the game.
Kingdom of Italy: The kingdom has 4 cities and is out of the control of Germanic peoples since last empire Otto II died. It is located at the south part on the map.

# Specification
The rules of this web page game are relatively complicated, although we have provided some instructions to help users play this game. Here is a detailed direction.

# Properties of fortresses
12 fortresses are provided, designed from the history. When the user chooses one power out of three, a certain initial fortresses will be assigned to him or her. A fortress will have some properties, which are the determinants of which fortress will win when two fortresses battle with each other. The list of these properties are shown as following, 
Agriculture: a number to measure the productivity of food. A higher value of Agriculture means a higher increase in food during every period.
MaxAgriculture: the value of agriculture of a fortress cannot be higher than the value of MaxAgriculture.
Business: a number to measure the increase of money during every period.
MaxBusiness: the maximum value of business of a fortress.
Food: A necessity of battles and development of a fortress. It will be consume automatically every turn and the fortress will generate a certain quantity of food every period according to its value of Agriculture.
Money: A necessity of conscription and development. Similarly, it will be generated every period according to the fortress’s value of Business.
Loyalty: The value of Loyalty will decrease 1 at then end of each turn. The maximum value 100 and when users occupy a new fortress the value of Loyalty should be really low, randomly from 10 to 50 at first.
Troops: it is a value to represent the power of a fortress. The troops will play its role only when they are assigned to a warrior.
Ownership: there’s three value of this property, 1, 2 and 3, which shows the power that a fortress belongs to.
Figure . the list of three powers
Figure . the list of fortresses

# Properties of warriors
Two to four warriors will be assigned to a fortress at the beginning of the game. No matter what a user wants to do, he or she has to assign the task to a warrior to do so. For example, if the user wants to battle with another fortress, he or she must choose a warrior.
WarriorName: The names of warriors. Some of them are inspired from the real history.
Level: A higher level shows a higher ability of a warrior. The maximum value of Level is 20.
STR: The value will determine the attack damage.
DEF: The value will determine the defensive power.
DEX: The value will determine the hit rate and the sequence of attacks.
INT: This will determine the magic damage of a wizard and he defensive power of magic of every character.
CMD: It will determine the maximum value of troops that a warrior can have.
LUK: This will determine the critical hit rate. A higher value will increase the chance of critical hit.
Figure . the list of warriors

# Units
In this game, there are six kinds of units, where every warrior should belong to one of them. There is a restrain relationship among these units. Different units have different advantages and disadvantages.
Figure . the diagram of the restrain relationship
Ownership: It shows which power that the warrior or units belong to.
Location: It is the current location of the warrior or units.

# Main map
Once the user click on the icon of a fortress, the buttons of command and battle will be shown at the right. He or she can choose either command to develop the fortress or battle to conquer enemy’s fortress.
Every warrior can be assigned only one task, and the fortress will have return accordingly at the end of the turn.

# Commands
Farming: The task will consume 1000 value of money, and increase Random(50, 150) value of Agriculture, until the value of Agriculture reaches its maximum value.
Business: It will consume 1000 value of money, and increase Random(50, 150) value of Business, until the value of Business reaches its maximum value.
Searching: This action may increase Random(50, 150) value of money and food, and also these is 2% chance to find new warrior to join the power.
Plundering: It will increase Random(1000, 2000) value of money and food, however, the loyalty will be decreased by Random(2, 6) and the value of Agriculture and Business will be decreased by a random value between 100 and 300.
Administration: This will consume 2500 value of money to increase loyalty by a random value between 1 and 3.
Conscription:  It will cost 1000 value of money to increase Troops by 500 to 1500. The maximum value of Troops is 99999.
Distribution: This command is to assign troops to warriors. The maximum of troops that a warrior have is calculated by the equation: (level of the warrior)*200+(CMD)*100
Transportation: The user can choose this task to transport food, money or Troops. There is a 5% chance to lose these stuffs or Troops.

# Battle
This button is located besides the main map. It is a special command in this game, where users can ask warriors (maximum 4 warriors) to take a certain quantity of food (maximum value of food that warrior can take is 9000) entering a enemy’s fortress to fight with the local warriors and troops. If the user wins the battle, he or she will occupy the fortress.
When users click the button of battle, he or she will be asked to choose warriors and the value of food to take. The target fortress must be a city nearby. The battle will be finished automatically according to the values, where users don't have to operate. The battle is turn-based, where attacks are did in a specific sequence and the target of attack is chose randomly. Warriors will be asked to return to their own fortress if the troops are decreased to 0.
The determinant of a battle is the value of food. The food will decrease 300 each time. The battle will be ended when food of a power is decreased to 0, and the fortress with its food being 0 will be the loser in this battle and lose a warrior randomly, who can be searched by a certain chance if the user use the command searching. Warriors of the winner will increase their levels by 1. 
When the battle is finished, the webpage will return to the main map and start the next turn. 


