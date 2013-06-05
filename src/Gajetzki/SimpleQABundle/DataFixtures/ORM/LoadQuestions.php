<?php

namespace Gajetzki\SimpleQABundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gajetzki\SimpleQABundle\Entity\Question;

class LoadQuestionData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
       $questions_in = array(
           '1.	Which of the following will NOT add john to the users array?',
           '2.	What would the following code print to the browser? Why?',
           '3.	What is the difference between a reference and a regular variable? How do you pass by reference and why would you want to?',
           '4.	What functions can you use to add library code to the currently running script?',
           '5.	What is the difference between foo() & @foo()?',
           '6.	How do you debug a PHP application?',
           '7.	What does === do? What’s an example of something that will give true for ‘==’, but not ‘===’?',
           '8.	How would you declare a class named “myclass” with no methods or properties?',
           '9.	How would you create an object, which is an instance of “myclass”?',
           '12.	What function would you use to redirect the browser to a new page?',
           '13.	What function can you use to open a file for reading and writing?',
           '14.	What does the following code do? Explain what\'s going on there.',
           '15.	Given a line of text $string, how would you write a regular expression to strip all the HTML tags from it?',
           '16.	Design a function to print out the grade-school multiplication table up to 12x12'
       );

       foreach ($questions_in as $question_in)
       {
           $question = new Question;
           $question->setText($question_in);
           $manager->persist($question);

       }

       $manager->flush();

    }
}