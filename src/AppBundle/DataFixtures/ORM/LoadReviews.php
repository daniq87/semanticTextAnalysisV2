<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Review;

/**
 * Load Reviews by default
 *
 * @author Daniel
 */
class LoadReviews extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $this->createReview($manager,"Found this hotel by reading over tripadvisor while planning a little beach getaway. Really good price by the beach. James the front desk manager was really fun, he made our stay more fun than we thought it would be. We are going to come back with our friends soon.");
        $this->createReview($manager,"Across the road from Santa Monica Pier is exactly where you want to be when visiting Santa Monica, as well as not far from lots of shops and restaurants/bars.Hotel itself is very new & modern, rooms were great. Comfortable beds & possibly the best shower ever!");
        $this->createReview($manager,"I have stayed here 4 or 5 times while visiting LA. Despite travelling all over the world and staying in some of the best international hotels ( for work), Hotel Caliornia is one of my absolute favourites. Perfect location, right on the beach. I love the way you can just open your door and be outside, no elevators, corridors big glass windows. The ambience is so nice, retro perfect. As for the staff, I have had consistently superb service, with much more personal service and attention to detail than is usual in bigger hotels. Aaron and Katy were just two who have been exemplary this time but really everyone is terrific. Can't recommend it highly enough.");
        $this->createReview($manager,"Terrible. Old, not quite clean. Lost my reservation, then \"found\" a smaller room, for the same price, of course. Noisy. Absolutely no parking, unless you luck out for the $10 spaces (of which there are 12). Water in bathroom sink would not turn off. Not hair dryer, no iron in room. Miniscule shower- better be thin to use it!");
        $this->createReview($manager,"I was excited to stay at this Hotel. It looked cute and was reasonable. It turned out to be terrible. We were woken up both mornings at 5:45 AM by noisy neighbors. The shower was clogged up...the room was sooooo small we kept tripping over each other. The saving grace was the pool at the Loews next door. I wish we had paid an extra $50 and stayed at a nicer place. This motel should cost no more than $99 a night.");
        $this->createReview($manager,"The location is perfect but the room is very small.");

    }

    private function createReview($manager, $description) {
        $review = new Review();
        $review->setDescription($description);

        $manager->persist($review);
        $manager->flush();
    }

    public function getOrder() {
        return 0;
    }

}

