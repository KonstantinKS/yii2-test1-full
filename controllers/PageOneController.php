<?php

declare(strict_types=1);

namespace app\controllers;

use app\models\factoryMethod\DialogInterface;
use app\models\factoryMethod\WebDialog;
use app\models\factoryMethod\WindowsDialog;
use app\models\replaceTypeCodeWithClass\BloodGroup;
use app\models\replaceTypeCodeWithClass\Person;
use app\models\replaceTypeCodeWithStateStrategy\Employee as EmployeeAlias;
use app\models\replaceTypeCodeWithSubclasses\Employee;
use Yii;
use yii\web\Controller;

/**
 * Контроллер страниц категории One
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class PageOneController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $person = new Person();
        var_dump($person->getBloodGroup());
        var_dump($person->getBloodTypeDesignation());
        $person->setBloodGroup(BloodGroup::AB());
        var_dump($person->getBloodGroup());
        var_dump($person->getBloodTypeDesignation());
        print_r($person);

        $person2 = new Person(BloodGroup::A());
        var_dump($person2->getBloodGroup());
        var_dump($person2->getBloodTypeDesignation());
        print_r($person2);
        die;

        return $this->render('index');
    }

    public function actionEmployee(): void
    {
        $employee = Employee::newEmployee(Employee::JOB_TYPE_ENGINEER);
        print_r($employee);
        var_dump($employee->getJobType());

        $employee = Employee::newEmployee();
        print_r($employee);
        var_dump($employee->getJobType());
    }

    public function actionDialog(): void
    {
        $dialog = $this->initializeDialog(1);
        $dialog->render(null, 'red');
        $dialog = $this->initializeDialog(2);
        $dialog->render();
    }

    private function initializeDialog(int $id): DialogInterface
    {
        switch ($id) {
            case 1:
                return new WindowsDialog();
            case 2:
            default:
                return new WebDialog();
        }
    }

    public function actionStateStrategy(): void
    {
        $employee = new EmployeeAlias();
        print_r($employee->getJobType());
        $jobType = (string) Yii::$app->request->get('jobType');
        $employee->setJobType($jobType);
        print_r($employee->getJobType());
    }
}
