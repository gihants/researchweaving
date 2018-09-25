<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "experiments_per_study".
 *
 * @property string $study_id
 * @property int $experiments
 */
class ExperimentsPerStudy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'experiments_per_study';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['study_id'], 'required'],
            [['experiments'], 'integer'],
            [['study_id'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'study_id' => 'Study ID',
            'experiments' => 'Experiments',
        ];
    }
}
