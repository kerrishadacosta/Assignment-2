<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property integer $ID
 * @property string $First_Name
 * @property string $Last_Name
 * @property string $DOB
 * @property string $Gender
 * @property string $Email
 * @property string $Address
 * @property string $Industry
 * @property string $Location
 * @property string $About_me
 * @property string $Professional_Title
 * @property integer $Career_Level
 * @property integer $Communication_Level
 * @property integer $JobRelated_Level
 * @property integer $Organization_Level
 * @property integer $Phone_Number
 * @property string $Website
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['First_Name', 'Last_Name', 'DOB', 'Gender', 'Email', 'Address', 'Industry', 'Location', 'About_me', 'Professional_Title', 'Career_Level', 'Communication_Level', 'JobRelated_Level', 'Organization_Level', 'Phone_Number', 'Website'], 'required'],
            [['First_Name', 'Last_Name', 'Gender', 'Email', 'Address', 'Industry', 'Location', 'About_me', 'Professional_Title', 'Website'], 'string'],
            [['DOB'], 'safe'],
            [['Career_Level', 'Communication_Level', 'JobRelated_Level', 'Organization_Level', 'Phone_Number'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'First_Name' => 'First  Name',
            'Last_Name' => 'Last  Name',
            'DOB' => 'Dob',
            'Gender' => 'Gender',
            'Email' => 'Email',
            'Address' => 'Address',
            'Industry' => 'Industry',
            'Location' => 'Location',
            'About_me' => 'About Me',
            'Professional_Title' => 'Professional  Title',
            'Career_Level' => 'Career  Level',
            'Communication_Level' => 'Communication  Level',
            'JobRelated_Level' => 'Job Related  Level',
            'Organization_Level' => 'Organization  Level',
            'Phone_Number' => 'Phone  Number',
            'Website' => 'Website',
        ];
    }
}
