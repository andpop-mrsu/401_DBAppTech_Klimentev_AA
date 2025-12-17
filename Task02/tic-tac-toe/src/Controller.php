<?php
namespace AlexeyKlimentev\TicTacToe\Controller;

use AlexeyKlimentev\TicTacToe\View\View;

function startGame() {
    View::renderStartScreen();
}