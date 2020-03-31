<?php

/**
 * createGameData
 * Creates a new session data
 * 
 * @return bool
 */


/**
 * getResponse
 * Gets the response history array from the session and converts to a string
 * 
 * @return string
 */
function getResponse () {
  return implode('<br><br>', $_SESSION['blacksmith']['response']);
}

/**
 * updateResponse
 * Adds a new response to the response history array found in session
 * Get the full response history from getResponse
 * 
 * @param [string] $response
 * @return string
 */
function updateResponse ($response) {
  if (!isset($_SESSION['blacksmith'])) {
    createGameData();
  } 

  array_push($_SESSION['blacksmith']['response'], $response);

  return getResponse();
}

/**
 * fire
 * Used to start/stop the fire
 * Updates the Session data
 * 
 * @return string
 */


/**
 * buy
 * Used to buy items (wood or ore)
 * Updates the session data
 * 
 * @param [string] $item
 * @return string
 */


/**
 * make
 * Used to make new items (swords, axes, or staffs)
 * Updates the session data
 * 
 * @param [string] $item
 * @return string
 */


/**
 * sell
 * Used to sell items (wood, ore, swords, axes, or staffs)
 * Updates the session data
 *
 * @param [string] $item
 * @return string
 */


/**
 * inventory
 * Used to return session data (formatted)
 * 
 * @return string
 */


/**
 * restart
 * Used to clear session data and start over
 * Updates the session data
 *  
 * @return string
 */


/**
 * help
 * Returns a formatted string of game instructions
 * 
 * @return string
 */
function help () {
  return 'Welcome to Blacksmith, the text based blacksmith game. Use the following commands to play the game: <span class="red">buy <em>item</em></span>, <span class="red">sell <em>item</em></span>, <span class="red">make <em>item</em></span>, <span class="red">fire</span>. To restart the game use the <span class="red">restart</span> command For these instruction again use the <span class="red">help</span> command';
}

/**
 * Create a response based on the players commands
 * - If the player has entered a command 
 *    - extract the command from the player's input
 *      - the explode function will split the input on the space separate the 
 *        command from the option
 *    - check if the entered command is a valid function using function_exists
 *      - check for a command option
 *        - execute command with option using the variable function technique
 *        - updateResponse with function's results
 *      - else
 *        - execute command using the variable function technique
 *        - updateResponse with function's results
 *    - else
 *      - updateResponse with invalid command  
 */

