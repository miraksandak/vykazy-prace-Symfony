<?php

namespace App\Form;

use App\Entity\WorkRecord;
use DateInterval;
use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\DataMapperInterface;
use Symfony\Component\Form\Exception\UnexpectedTypeException as ExceptionUnexpectedTypeException;
use Symfony\Component\Form\FormInterface;

class WorkRecordType extends AbstractType implements DataMapperInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'date',
            DateType::class,
            [
            'label' => 'Datum',
            'attr' => [
                'class' => 'form-control mb-3',
            ],
            'widget' => 'single_text',
            'data' => new \DateTime(),
            ]
        );

        $builder->add(
            'startTimeOffset',
            TimeType::class,
            [
            'label' => 'Start Time',
            'attr' => [
                'class' => 'form-control mb-3 timepicker',
            ],
            'widget' => 'single_text',
            ]
        );

        $builder->add(
            'endDate',
            DateType::class,
            [
                'label' => 'End Date',
                'attr' => [
                    'class' => 'form-control mb-3',
                ],
                'widget' => 'single_text',
                'data' => new \DateTime(),
            ]
        );

        $builder->add(
            'endTimeOffset',
            TimeType::class,
            [
            'label' => 'End Time',
            'attr' => [
                'class' => 'form-control mb-3 timepicker',
            ],
            'widget' => 'single_text',
            ]
        );

        $builder->add(
            'department',
            ChoiceType::class,
            [
            'choices' => [
                'AV' => 'AV',
                'IT' => 'IT',
                'PI' => 'PI',
                'Backoffice' => 'Backoffice'
            ],
            'attr' => [
                'class' => 'form-control mb-3',
            ]
            ]
        );

        $builder->add(
            'typeOfWork',
            ChoiceType::class,
            [
            'choices' => [
                'Kancelář' => 'Kancelář',
                'Sklad' => 'Sklad',
                'Schůzka' => 'Schůzka',
                'Produkce' => 'Produkce',
                'Programátor' => 'Programátor',
                'Technik instalace' => 'Technik instalace',
                'Technik obsluha' => 'Technik obsluha',
                'Technik servis' => 'Technik servis',
                'Technik' => 'Technik',
                'Šéftechnik' => 'Šéftechnik',
                'Dovolená' => 'Dovolená'
            ],
            'attr' => [
                'class' => 'form-control mb-3',
            ]
            ]
        );

        $builder->add(
            'description',
            TextareaType::class,
            [
            'attr' => [
                'class' => 'form-control mb-3',
                'rows' => '5',
            ]
            ]
        );

        $builder->add(
            'save',
            SubmitType::class,
            [
                'label' => 'Uložit',
                'attr' => [
                    'class' => 'btn btn-success btn-login text-uppercase fw-bold form-control',
                ],
            ]
        );
        $builder->setDataMapper($this);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
            'data_class' => WorkRecord::class,
            ]
        );
    }

    public function mapDataToForms($viewData, iterable $forms): void
    {
        // there is no data yet, so nothing to prepopulate
        if (null === $viewData) {
            return;
        }
    
        // invalid data type
        if (!$viewData instanceof WorkRecord) {
            throw new ExceptionUnexpectedTypeException($viewData, WorkRecord::class);
        }
    
        /**
         * @var FormInterface[] $forms
        */
        $forms = iterator_to_array($forms);
    
        $startDateTime = $viewData->getStartTime();
        $duration = $viewData->getDuration();
    
        // initialize form field values
        $forms['date']->setData(new DateTime($startDateTime->format('d-m-Y')));
        $forms['startTimeOffset']->setData($viewData->getStartTime());
        $date = DateTime::createFromInterface($viewData->getStartTime());
    
        if ($duration < 0) {
            $method = 'sub';
            $duration = -$duration;
        } else {
            $method = 'add';
        }
    
        $date->$method(new DateInterval(sprintf('PT%dS', $duration)));
    
        $forms['endTimeOffset']->setData($date);
        $forms['department']->setData($viewData->getDepartment());
        $forms['typeOfWork']->setData($viewData->getTypeOfWork());
        $forms['description']->setData($viewData->getDescription());
    
        // Additional logic for handling end date
        $endDate = $viewData->getEndTime();
        $forms['endDate']->setData($endDate ? new DateTime($endDate->format('d-m-Y')) : null);
        $forms['endTimeOffset']->setData($endDate);
    }    

    public function mapFormsToData(iterable $forms, &$viewData): void
    {
        /**
         * @var FormInterface[] $forms
        */
        $forms = iterator_to_array($forms);

        $date = $forms['date']->getData();
        $startTime = $forms['startTimeOffset']->getData();
        $endTime = $forms['endTimeOffset']->getData();

        $startDateTime = new DateTime($date->format('d-m-Y') . ' ' . $startTime->format('H:i:s'));
        $viewData->setStartTime($startDateTime);

        $duration = $endTime->getTimestamp() - $startTime->getTimestamp();
        $viewData->setDuration($duration);

        $viewData->setDepartment($forms['department']->getData());
        $viewData->setTypeOfWork($forms['typeOfWork']->getData());
        $viewData->setDescription($forms['description']->getData());
    }
}
