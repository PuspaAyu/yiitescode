<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus".
 *
 * @property int $id_bonus
 * @property string $emp_code
 * @property int $month
 * @property int $year
 * @property double $salary
 * @property double $bonus
 * @property double $total
 */
class Bonus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_code', 'month', 'year', 'salary'], 'required'],
            [['month', 'year'], 'integer'],
            [['salary', 'bonus', 'total'], 'number'],
            [['emp_code'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bonus' => 'Id Bonus',
            'emp_code' => 'Emp Code',
            'month' => 'Month',
            'year' => 'Year',
            'salary' => 'Salary',
            'bonus' => 'Bonus',
            'total' => 'Total',
        ];
    }
}
