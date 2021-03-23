<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Employees".
 *
 * @property string $firstName
 * @property string $lastName
 * @property string $Company
 * @property string|null $email
 * @property string|null $phone
 *
 * @property Companies $company
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'Company'], 'required'],
            [['firstName', 'lastName', 'Company'], 'string', 'max' => 255],
            [['email', 'phone'], 'string', 'max' => 512],
            [['lastName'], 'unique'],
            [['Company'], 'exist', 'skipOnError' => true, 'targetClass' => Companies::className(), 'targetAttribute' => ['Company' => 'Name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'Company' => 'Company',
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Companies::className(), ['Name' => 'Company']);
    }
}
