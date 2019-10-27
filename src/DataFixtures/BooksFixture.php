<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Books;
class BooksFixture extends Fixture

{
    public function load(ObjectManager $manager)
    {
		for ($i=1;$i<=10;$i++) {
			$book = new Books();
			$book->setTitle(sprintf('example%d', $i));  
			$manager->persist($book);
		}
        $manager->flush();
    }
}

