<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Companies".
 *
 * @property string $Name
 * @property string|null $Email
 * @property string|null $Logo
 * @property string|null $Website
 *
 * @property Employees[] $employees
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Companies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 255],
            [['Email', 'Website'], 'string', 'max' => 512],
            [['Logo'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'minHeight' => 100,'minWidth' => 100],
            [['Name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Name' => 'Name',
            'Email' => 'Email',
            'Logo' => 'Logo',
            'Website' => 'Website',
        ];
    }

    /**
     * Gets query for [[Employees]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employees::className(), ['Company' => 'Name']);
    }
}
