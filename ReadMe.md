# Ninjas vs Pirates
## Example for working in a team with Doctrine ORM and GIT branches

Following is a step by step example to demonstrate what a workflow of a team of 2 programmers could look like who want to want a convenient method of pitting Ninjas vs Pirates.

*Cheryl has had enough. Her work relationship with James is good, they are a team and have completed as lot of assignments over the past couple of months. But now - he's totally wrong. James proclaiming that Ninjas are better than Pirates is an insult which cannot go unpunished and will have to be decided by a programmers duel! Choosing the same weapons would be unfitting, as both Ninjas and Pirates prefer specific ways of combat. Therefore both programmers settle on a simple rulesset for the fight...*


### The Rules
Ninjas and Pirates are going to be "Combatants"
- James is going to implement the Ninja Class
- Cheryl is going to implement the Pirate Class
- Each combatant must have a name
- Each combatant must be able to give his allegiance  ("Ninja" or "Pirate")
- Each combatant will start with 9 life points
- Each combatant is allowed to have a set of 3 fight moves (see below)
- Each combatant must be storable in the database along with his/her fightmoves

Each "Combatant" must possess exactly 3 "Fightmoves"
- a "Fightmove" must feature a Description and a damage value
- the total damage value of all 3 "Fightmoves" must not exceed 9

Combat flow
- the main program will decide on who starts the fight randomly
- the main program will select one of the 3 "Fightmoves" for the "Combatant" randomly
- this process continues until one of the "Combatants" is down (Lifepoints are 0 or less)

### Why are "Fightmoves" and "Combatants" defined by interfaces?
For this example we would not necessarily need interfaces or base classes. We could just implement a "Fightmove" class with description and damage value and the programmers could fill the values as they see fit via constructors.
As Cheryl and James want to win in style however, they will choose some custom implementations to generate the descriptions for their fight move in the custom classes.

### Base implementation (v0.1.0)
A base implementation for the main program, abstract classes and interfaces are available to both programmers before they start their implementation.



*After completing the base implementation, Cheryl and James commit the current version to master on GIT*

``` git push origin master ```

*Then they add a tag for referencing a pre-release version*

``` git tag -a v0.1.0 -m "Combat simulator base structure"```



### Feature branches

*After the base setup Cheryl and James start to work separately and create an own feature branch from the current version.*

*Cheryl uses:*

``` git checkout v0.1.0 ```

``` git branch -b "PirateImplementation"```

*James uses:*

``` git checkout v0.1.0 ```

``` git branch -b "NinjaImplementation"```

*Now both Cheryl and James can work on their implementations for the combatants.*

