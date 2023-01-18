<?php

namespace BrainGames\Game\EvenGame;

use function BrainGames\Engine\game;

function evenGame(): void
{
    game('even', ['yes', 'no']);
}
