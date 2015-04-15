<?php
namespace Dende\CommonBundle\DataFixtures;

interface FixtureInterface {
    public function insert($params);
}