<?php

namespace AppBundle\Controller;

use AppBundle\Entity\events;
//use AppBundle\Entity\eventtype;
use AppBundle\Entity\users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller {

    /**
     * @Route("/home", name="homepage")
     */
    public function indexAction(Request $request) {
        $events = new events();

        $form = $this->createFormBuilder($events)
                ->add('eT1', ChoiceType::class, array(
                    'choices' => array(
                        'Poker' => 1,
                        'Chess' => 2,
                        'Cricket' => 3,
                        'Marbles' => 4,
                        'Football' => 5,
                    ),
                    'choices_as_values' => true,
                    'expanded' => true,
                    'multiple' => false,
                    'label' => 'Choose After Breakfast Event',
                ))
                ->add('eT2', ChoiceType::class, array(
                    'choices' => array(
                        'Poker' => 1,
                        'Chess' => 2,
                        'Cricket' => 3,
                        'Marbles' => 4,
                        'Football' => 5,
                    ),
                    'choices_as_values' => true,
                    'expanded' => true,
                    'multiple' => false,
                    'label' => 'Choose After Snacks Event',
                ))
                ->add('save', SubmitType::class, array('label' => 'Submit'))
                ->getForm();

        if ($request->isMethod('POST')) {
            $form->submit($request);

            $user = $this->container->get('security.context')->getToken()->getUser();
            $events->setUser($user);

//            $events = $this->getDoctrine()
//        ->getRepository('AppBundle:events')
//        ->findBy(array('eT1' => '1'));
//            
//             $user_id = $events->getUser()->getId();
//            var_dump($user_id);
//            exit;
            
            $repository = $this->getDoctrine()
    ->getRepository('AppBundle:events');

//            $events = $repository->findBy(
//    array('user_id' => 'Keyboard'),
//    array('price' => 'ASC')
//);
            if ($form->isValid()) {
                // perform some action, eg. persisting the data to database...
                $user1 = $this->container->get('security.context')->getToken()->getUser();
                $events->setUser($user1);
                //var_dump($singleUser);
                //exit;
                //$events->setuserID($id);


                $em = $this->getDoctrine()->getManager();

                // tells Doctrine you want to (eventually) save the Product (no queries yet)
                $em->persist($events);

                // actually executes the queries (i.e. the INSERT query)
                $em->flush();
                return $this->redirectToRoute('homepage');
            }
        }

        return $this->render('default/index.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
