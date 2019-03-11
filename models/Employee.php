<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id_emp
 * @property string $emp_code
 * @property string $emp_name
 * @property string $birth_date
 * @property string $address
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_code', 'emp_name', 'birth_date', 'address'], 'required'],
            [['birth_date'], 'safe'],
            [['emp_code'], 'string', 'max' => 12],
            [['emp_name'], 'string', 'max' => 40],
            [['address'], 'string', 'max' => 240],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_emp' => 'Id Emp',
            'emp_code' => 'Emp Code',
            'emp_name' => 'Emp Name',
            'birth_date' => 'Birth Date',
            'address' => 'Address',
        ];
    }
}
