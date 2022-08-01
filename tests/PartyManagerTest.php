<?php

declare(strict_types=1);

namespace Archetype\Party\Tests;

use Archetype\OrganizationName;
use Archetype\Organization\Organization;
use Archetype\PartyIdentifier;
use PHPUnit\Framework\TestCase;
use Archetype\PartyManager;

class PartyManagerTest extends TestCase
{
    /**
     * @var PartyManager
     */
    private PartyManager $manager;

    public function setUp(): void
    {
        $this->manager = new PartyManager();
    }

    public function testSearchByNameFindOne(): void
    {
        $partyOne = new Organization(new PartyIdentifier('UUID-1'), new OrganizationName('name-1'));
        $partyTwo = new Organization(new PartyIdentifier('UUID-2'), new OrganizationName('name-2'));
        $this->manager->addParty($partyOne)->addParty($partyTwo);
        $this->assertSame([$partyTwo], $this->manager->findPartyByName('name-2'));
    }

    public function testSearchByNameNotFound(): void
    {
        $partyOne = new Organization(new PartyIdentifier('UUID-1'), new OrganizationName('name-1'));
        $partyTwo = new Organization(new PartyIdentifier('UUID-2'), new OrganizationName('name-2'));
        $this->manager->addParty($partyOne)->addParty($partyTwo);
        $this->assertSame([], $this->manager->findPartyByName('name-3'));
    }

    public function testSearchByNameFindMany(): void
    {
        $partyOne = new Organization(new PartyIdentifier('UUID-1'), new OrganizationName('name-1'));
        $partyTwo = new Organization(new PartyIdentifier('UUID-2'), new OrganizationName('name-2'));
        $partyThree = new Organization(new PartyIdentifier('UUID-3'), new OrganizationName('name-2'));
        $this->manager->addParty($partyOne)->addParty($partyTwo)->addParty($partyThree);
        $this->assertEquals([$partyTwo, $partyThree], $this->manager->findPartyByName('name-2'));
    }
}