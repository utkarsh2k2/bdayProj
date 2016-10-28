<?php 

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class eventsType extends AbstractType {

    protected $events;

    public function __construct($events) {
        $this->events = $events;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {

            if (!empty($this->events)){
           if($this->events->getET1() == null){
                $et1 = '';   
           }
           else {
               $et1 = $this->events->getET1();
           }
           if($this->events->getET2() == null){
                $et2 = '';   
           }
           else {
               $et2 = $this->events->getET2();
           }
            }
            else {
           $et1 = '';
           $et2 = '';
            }
            
        $builder->add('eT1', ChoiceType::class, array(
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
                    'data' => $et1,
//                    'mapped' => $map1,
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
                    'data' => $et2,
//                    'mapped' => $map2,
                ))
                ->add('save', SubmitType::class, array('label' => 'Submit'));
    }

//     public function getDefaultOptions(array $options) {
//        return array('csrf_protection' => false);
//    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\events',
        ));
    }

}
