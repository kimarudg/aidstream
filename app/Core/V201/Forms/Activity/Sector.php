<?php namespace App\Core\V201\Forms\Activity;

use App\Core\Form\BaseForm;

/**
 * Class Sector
 * @package App\Core\V201\Forms\Activity
 */
class Sector extends BaseForm
{
    /**
     * builds the activity sector form
     */
    public function buildForm()
    {
        $this
            ->add(
                'vocabulary',
                'select',
                [
                    'choices' => $this->getCodeList('SectorVocabulary', 'Activity'),
                    'attr'    => ['class' => 'form-control sector_vocabulary']
                ]
            )
            ->add(
                'sector_select',
                'select',
                [
                    'choices' => $this->getCodeList('Sector', 'Activity'),
                    'label'   => 'Sector',
                    'wrapper' => ['class' => 'form-group sector_select']
                ]
            )
            ->add(
                'sector_text',
                'text',
                [
                    'label'   => 'Sector',
                    'wrapper' => ['class' => 'form-group hidden sector_text']
                ]
            )
            ->getPercentage()
            ->getNarrative('sector_narrative')
            ->addAddMoreButton('add', 'sector_narrative')
            ->addRemoveThisButton('remove');
    }
}
