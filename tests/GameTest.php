<?php

    require_once "src/Game.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {

        function test_computer_winner()
        {
            //Arrange
            $test_Game = new Game;
            $computer_input = "paper";
            $player_input = "rock";

            //Act
            $result = $test_Game->playGame($computer_input, $player_input);

            //Assert
            $this->assertEquals("Computer wins!", $result);
        }
        function test_player_winner()
        {
            //Arrange
            $test_Game = new Game;
            $computer_input = "scissors";
            $player_input = "rock";

            //Act
            $result = $test_Game->playGame($computer_input, $player_input);

            //Assert
            $this->assertEquals("Player wins!", $result);
        }
        function test_nowinner()
        {
            //Arrange
            $test_Game = new Game;
            $computer_input = "rock";
            $player_input = "rock";

            //Act
            $result = $test_Game->playGame($computer_input, $player_input);

            //Assert
            $this->assertEquals("Nobody wins!", $result);
        }
    }

?>
