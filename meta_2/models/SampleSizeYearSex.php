<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sample_size_year_sex".
 *
 * @property string $study_id
 * @property string $sex
 * @property double $treatment_group_sample_size
 * @property string $year
 */
class SampleSizeYearSex extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sample_size_year_sex';
    }

    public static function primaryKey()
    {
        return ['study_id'];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['study_id'], 'required'],
            [['treatment_group_sample_size'], 'number'],
            [['year'], 'safe'],
            [['study_id'], 'string', 'max' => 10],
            [['sex'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'study_id' => 'Study ID',
            'sex' => 'Sex',
            'treatment_group_sample_size' => 'Treatment Group Sample Size',
            'year' => 'Year',
        ];
    }
}
