<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studies_per_country".
 *
 * @property string $country
 * @property string $country_code
 * @property int $studies
 */
class StudiesPerCountry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studies_per_country';
    }

    public static function primaryKey()
    {
        return ['country'];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['studies'], 'integer'],
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
            'country' => 'Country',
            'country_code' => 'Country Code',
            'studies' => 'Studies',
        ];
    }
}
