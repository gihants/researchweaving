<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studies_by_year".
 *
 * @property string $year
 * @property integer $studies
 */
class StudiesByYear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studies_by_year';
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year'], 'safe'],
            [['studies'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'year' => 'Year',
            'studies' => 'Studies',
        ];
    }
}
