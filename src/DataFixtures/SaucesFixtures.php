<?php

namespace App\DataFixtures;

use App\Entity\Sauce;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SaucesFixtures extends Fixture
{
	private const SAUCE_REFERENCE = 'Sauce';

	public function load(ObjectManager $manager): void
	{
		$names = [
			'Blanche',
			'Mayonnaise',
			'Ketchup',
			'Barbecue',
			'Biggy',
			'Andalouse',
			'Algérienne',
			'Burger',
			'Biggy',
			'Marocaine',
			'Curry',
		];

		foreach($names as $key => $name) {
			$sauce = new Sauce();
			$sauce->setName($name);
			$manager->persist($sauce);
			$this->addReference(self::SAUCE_REFERENCE . $key, $sauce);
		}

		$manager->flush();
	}
}
