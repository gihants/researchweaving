<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "study_info".
 *
 * @property string $study_ID
 * @property string $FirstAuthor
 * @property string $title
 * @property string $Country
 * @property string $Year
 * @property string $Journal
 * @property int $Volume
 */
class StudyInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'study_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['study_ID'], 'required'],
            [['Year'], 'safe'],
            [['Volume'], 'integer'],
            [['study_ID'], 'string', 'max' => 10],
            [['FirstAuthor'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 2000],
            [['Country'], 'string', 'max' => 20],
            [['Journal'], 'string', 'max' => 200],
            [['study_ID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'study_ID' => 'Study  ID',
            'FirstAuthor' => 'First Author',
            'title' => 'Title',
            'Country' => 'Country',
            'Year' => 'Year',
            'Journal' => 'Journal',
            'Volume' => 'Volume',
        ];
    }
}
