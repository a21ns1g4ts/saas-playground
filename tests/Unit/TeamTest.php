<?php

namespace Tests\Unit;

use App\Team;
use Tests\TestCase;

class TeamTest extends TestCase
{
    public function test_if_team_can_create()
    {
        $team = factory(Team::class)->create();

        $this->assertInstanceOf('App\Team', $team);
    }
}
