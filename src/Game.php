<?php


    class Game
    {
        Public $player;
        Private $computer;

        function __construct($player,$computer)
        {
            $this->player=$player;
            $this->computer=$computer;
        }
        function getPlayer()
        {
            return $this->player;
        }
        function getComputer()
        {
            return $this->computer;
        }

        function playGame()
        {

            if (($this->computer== "rock" and $this->player == "scissors") or ($this->computer=="scissors" and $this->player =="paper") or ($this->computer=="paper" and $this->player=="rock")) {
                return "Computer wins!";
            } elseif (($this->player=="rock" and $this->computer=="scissors") or ($this->player=="scissors" and $this->computer=="paper") or ($this->player=="paper" and $this->computer=="rock")) {
                return "Player wins!";
            }else {
                return "Nobody wins!";
            }

        }


    }
 ?>
