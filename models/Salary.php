<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salary".
 *
 * @property int $id_salary
 * @property string $emp_code
 * @property int $month
 * @property int $year
 * @property double $salary
 */
class Salary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_code', 'month', 'year', 'salary'], 'required'],
            [['month', 'year'], 'integer'],
            [['salary'], 'number'],
            [['emp_code'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_salary' => 'Id Salary',
            'emp_code' => 'Emp Code',
            'month' => 'Month',
            'year' => 'Year',
            'salary' => 'Salary',
        ];
    }
}
