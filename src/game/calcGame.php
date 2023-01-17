<?php

namespace BrainGames\Game\CalcGame;

use function BrainGames\Engine\game;

function calcGame():void
{
    $params = ['*', '+', '-'];

    game('calc', $params);
}