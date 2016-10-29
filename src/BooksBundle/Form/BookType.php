<?php

namespace BooksBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
                    'label' => 'Название',
                ))
                ->add('publicationYear', 'text', array(
                    'label' => 'Год публикации',
                ))
                ->add('author', 'text', array(
                    'label' => 'Автор',
                ))
                ->add('category', EntityType::class, array(
                    'class' => 'BooksBundle:Category',
                    'choice_label' => 'name',
                    'label' => 'Категория',
                ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BooksBundle\Entity\Book'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'booksbundle_book';
    }


}
