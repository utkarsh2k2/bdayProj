<?php

namespace AppBundle\Controller;

use AppBundle\Entity\events;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/home", name="homepage")
     */
    public function indexAction(Request $request) {

        //get the events repository
        $repository = $this->getDoctrine()->getRepository('AppBundle:events');

        $events = new events();

        //get the user_id of the logged in user        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        // Add logic to redirect a non logged in user trying to access this page to home page
        
        
        //set the logged-in user
        $events->setUser($user);
        
        $userId = $events->getUser()->getID();

        //check if the user has already registered or not
        $regEvents = $repository->findOneBy(array('user' => $userId));

        //create form
        $form = $this->createForm(new \AppBundle\Form\eventsType($regEvents), $events);

        $form->handleRequest($request);
        
        //retrieve the choices array for eT1 and eT2
        $eT1Choices = $form->get('eT1')->getConfig()->getOption('choices');
        $eT2Choices = $form->get('eT2')->getConfig()->getOption('choices');

        //intialize the eventname variables
        $eT1Name = '';
        $eT2Name = '';

        if ($regEvents) {

            $et1 = $regEvents->getET1();
            $et2 = $regEvents->getET2();

            //If the user has registered already, display his previously selected options

            //set the eventname based on the value of et1
            foreach ($eT1Choices as $key => $value) {
                if ($et1 == $value) {
                    $eT1Name = $key;
                }
            }

            //set the eventname based on the value of et2
            foreach ($eT2Choices as $key => $value) {
                if ($et2 == $value) {
                    $eT2Name = $key;
                }
            }
        }

        //after submission
        if ($form->isSubmitted()) {

            //retrieve form data
            $formData = $form->getData();

            $ET1 = $formData->getET1();
            $ET2 = $formData->getET2();

            //First check the value entered by the user
            if ($ET1 == null || $ET2 == null) {
                //User did not choose both the events
                $this->container->get('session')->getFlashBag()->add('error', 'Oh oh! It is mandatory to choose an option for all the events');
                return array('form' => $form->createView());
            }

            //retrieve maxlimit parameters from parameters.yml
            $maxPoker = $this->container->getParameter('pokermaxlimit');
            $maxChess = $this->container->getParameter('chessmaxlimit');
            $maxCricket = $this->container->getParameter('cricketmaxlimit');
            $maxMarbles = $this->container->getParameter('marblesmaxlimit');
            $maxFootball = $this->container->getParameter('footballmaxlimit');

            //initialize $eventMaxLim
            $eventMaxLim1 = 0;
            $eventMaxLim2 = 0;

            //set the eventname based on the value of eT1
            foreach ($eT1Choices as $key => $value) {
                if ($ET1 == $value) {
                    $eT1Name = $key;
                }
            }

            //set the eventname based on the value of eT2
            foreach ($eT2Choices as $key => $value) {
                if ($ET2 == $value) {
                    $eT2Name = $key;
                }
            }

            //check to see if the user has registered the same event for eT1 and eT2
            if ($ET1 == $ET2) {
                $this->get('session')->getFlashBag()->set('error', 'You have chosen same events for both time slots! Please choose different ones.');
            }

            //check to see how many users have registered for the opted event(eT1)
            $query1 = $repository->createQueryBuilder('p')
                    ->select('count(p)')
                    ->where('p.eT1 = :eT1')
                    ->setParameter('eT1', $ET1)
                    ->getQuery();
            $a = $query1->getSingleScalarResult();

            //set the $eventMaxLim based on the chosen event for eT1
            if ($ET1 == 1) {
                $eventMaxLim1 = $maxPoker;
            } else if ($ET1 == 2) {
                $eventMaxLim1 = $maxChess;
            } else if ($ET1 == 3) {
                $eventMaxLim1 = $maxCricket;
            } else if ($ET1 == 4) {
                $eventMaxLim1 = $maxMarbles;
            } else if ($ET1 == 5) {
                $eventMaxLim1 = $maxFootball;
            }

            //check to see if the after breakfast event (eT1) is full (ie.has reached the maxlimit)
            if ($a >= $eventMaxLim1) {
                $this->get('session')->getFlashBag()->set('error', 'choose another After Breakfast event, this one is full');
            }

            //check to see how many users have registered for the opted event(eT2)
            $query2 = $repository->createQueryBuilder('p')
                    ->select('count(p)')
                    ->where('p.eT2 = :eT2')
                    ->setParameter('eT2', $ET2)
                    ->getQuery();
            $b = $query2->getSingleScalarResult();

            //set the $eventMaxLim based on the chosen event for eT2
            if ($ET2 == 1) {
                $eventMaxLim2 = $maxPoker;
            } else if ($ET2 == 2) {
                $eventMaxLim2 = $maxChess;
            } else if ($ET2 == 3) {
                $eventMaxLim2 = $maxCricket;
            } else if ($ET2 == 4) {
                $eventMaxLim2 = $maxMarbles;
            } else if ($ET2 == 5) {
                $eventMaxLim2 = $maxFootball;
            }

            //check to see if the after snacks event (eT2) is full (ie.has reached the maxlimit)
            if ($b >= $eventMaxLim2) {
                $this->get('session')->getFlashBag()->set('error', 'choose another After Snacks event, this one is full');
            }

            if (($ET1 != null || $ET2 != null) && ($a < $eventMaxLim1) && ($b < $eventMaxLim2) && ($ET1 != $ET2)) {

                if ($form->isValid()) {

                    //get the entity manager
                    $em = $this->getDoctrine()->getManager();

                    // If the user is registering for the first time (execute the Insert querry)
                    if (!$regEvents) {
                      //$events->setUser($user);
                        $events->setET1($ET1);
                        $events->setET2($ET2);
                        $em->persist($events);
                        $em->flush();
                        //$this->container->get('session')->getFlashBag()->add('success', 'Your regisatration has been confirmed!');
                        //return $this->redirectToRoute('homepage');
                    }

                    //If the user has registered already and want to change his registered events (execute the Update querry)
                    else {
                        $regEvents->setET1($ET1);
                        $regEvents->setET2($ET2);
                        $em->persist($regEvents);
                        $em->flush();
                        //$this->get('session')->getFlashBag()->set('success', 'Your regisatration details have been updated!');
                        //return $this->redirectToRoute('homepage');
                    }
                }
            }
        }

        return $this->render('default/index.html.twig', array(
                    'form' => $form->createView(),
                    'eT1Name' => $eT1Name,
                    'eT2Name' => $eT2Name,
        ));
    }

}
