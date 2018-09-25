<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country_codes_of_first_authors".
 *
 * @property string $study_id
 * @property string $country
 * @property string $country_code
 */
class CountryCodesOfFirstAuthors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country_codes_of_first_authors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['study_id', 'country'], 'required'],
            [['study_id'], 'string', 'max' => 10],
            [['country'], 'string', 'max' => 20],
            [['country_code'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'study_id' => 'Study ID',
            'country' => 'Country',
            'country_code' => 'Country Code',
        ];
    }
}
