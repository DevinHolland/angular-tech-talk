<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questions Controller
 *
 * @property \App\Model\Table\QuestionsTable $Questions
 */
class QuestionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('questions', $this->Questions->find('all', [
                'contain' => ['Answers']
            ])
        );

        $this->set('_serialize', ['questions']);
    }
}
