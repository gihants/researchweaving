<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comparison".
 *
 * @property string $Comp_ID
 * @property string $ES_ID
 * @property string $Study_ID
 * @property string $FirstAuthor
 * @property string $Year
 * @property string $Journal
 * @property integer $Volume
 * @property string $Species_ID
 * @property string $CommonName
 * @property string $Genus
 * @property string $Species
 * @property string $animal
 * @property integer $Model
 * @property string $Strain
 * @property string $Sex
 * @property integer $Repro
 * @property string $FoodSched
 * @property string $Type
 * @property integer $AL
 * @property double $CV1
 * @property double $Prots1
 * @property double $Carbs1
 * @property double $Fats1
 * @property double $Intake
 * @property double $CI1
 * @property double $Age1
 * @property double $N1
 * @property double $LT25contr
 * @property double $LT50contr
 * @property double $LT75contr
 * @property double $CR
 * @property double $CV2
 * @property double $c_nCR
 * @property double $c_CR
 * @property double $CI2
 * @property double $c_aCR
 * @property double $Prots2
 * @property double $Carbs2
 * @property double $Fats2
 * @property double $Age2
 * @property double $N2
 * @property double $Page
 * @property double $Prots
 * @property double $PD25
 * @property double $PD50
 * @property double $PD75
 * @property double $c_LT25_logHR
 * @property double $c_LT25_varlogHR
 * @property double $c_LT50_logHR
 * @property double $c_LT50_varlogHR
 * @property double $c_LT75_logHR
 * @property double $c_LT75_varlogHR
 * @property double $c_LT2550_logHR
 * @property double $c_LT2550_varlogHR
 * @property double $c_LT5075_logHR
 * @property double $c_LT5075_varlogHR
 * @property double $c_all_logHR
 * @property double $c_all_varlogHR
 * @property string $Notes_control
 * @property string $Notes_treatment
 */
class Comparison extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comparison';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Comp_ID', 'ES_ID', 'Study_ID'], 'required'],
            [['Year'], 'safe'],
            [['Volume', 'Model', 'Repro', 'AL'], 'integer'],
            [['CV1', 'Prots1', 'Carbs1', 'Fats1', 'Intake', 'CI1', 'Age1', 'N1', 'LT25contr', 'LT50contr', 'LT75contr', 'CR', 'CV2', 'c_nCR', 'c_CR', 'CI2', 'c_aCR', 'Prots2', 'Carbs2', 'Fats2', 'Age2', 'N2', 'Page', 'Prots', 'PD25', 'PD50', 'PD75', 'c_LT25_logHR', 'c_LT25_varlogHR', 'c_LT50_logHR', 'c_LT50_varlogHR', 'c_LT75_logHR', 'c_LT75_varlogHR', 'c_LT2550_logHR', 'c_LT2550_varlogHR', 'c_LT5075_logHR', 'c_LT5075_varlogHR', 'c_all_logHR', 'c_all_varlogHR'], 'number'],
            [['Comp_ID', 'ES_ID', 'Study_ID', 'Species_ID'], 'string', 'max' => 10],
            [['FirstAuthor', 'animal', 'Strain'], 'string', 'max' => 100],
            [['Journal'], 'string', 'max' => 200],
            [['CommonName', 'Genus', 'Species'], 'string', 'max' => 50],
            [['Sex', 'FoodSched', 'Type'], 'string', 'max' => 5],
            [['Notes_control', 'Notes_treatment'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Comp_ID' => 'Comp  ID',
            'ES_ID' => 'Es  ID',
            'Study_ID' => 'Study  ID',
            'FirstAuthor' => 'First Author',
            'Year' => 'Year',
            'Journal' => 'Journal',
            'Volume' => 'Volume',
            'Species_ID' => 'Species  ID',
            'CommonName' => 'Common Name',
            'Genus' => 'Genus',
            'Species' => 'Species',
            'animal' => 'Animal',
            'Model' => 'Model',
            'Strain' => 'Strain',
            'Sex' => 'Sex',
            'Repro' => 'Repro',
            'FoodSched' => 'Food Sched',
            'Type' => 'Type',
            'AL' => 'Al',
            'CV1' => 'Cv1',
            'Prots1' => 'Prots1',
            'Carbs1' => 'Carbs1',
            'Fats1' => 'Fats1',
            'Intake' => 'Intake',
            'CI1' => 'Ci1',
            'Age1' => 'Age1',
            'N1' => 'N1',
            'LT25contr' => 'Lt25contr',
            'LT50contr' => 'Lt50contr',
            'LT75contr' => 'Lt75contr',
            'CR' => 'Cr',
            'CV2' => 'Cv2',
            'c_nCR' => 'C N Cr',
            'c_CR' => 'C  Cr',
            'CI2' => 'Ci2',
            'c_aCR' => 'C A Cr',
            'Prots2' => 'Prots2',
            'Carbs2' => 'Carbs2',
            'Fats2' => 'Fats2',
            'Age2' => 'Age2',
            'N2' => 'N2',
            'Page' => 'Page',
            'Prots' => 'Prots',
            'PD25' => 'Pd25',
            'PD50' => 'Pd50',
            'PD75' => 'Pd75',
            'c_LT25_logHR' => 'C  Lt25 Log Hr',
            'c_LT25_varlogHR' => 'C  Lt25 Varlog Hr',
            'c_LT50_logHR' => 'C  Lt50 Log Hr',
            'c_LT50_varlogHR' => 'C  Lt50 Varlog Hr',
            'c_LT75_logHR' => 'C  Lt75 Log Hr',
            'c_LT75_varlogHR' => 'C  Lt75 Varlog Hr',
            'c_LT2550_logHR' => 'C  Lt2550 Log Hr',
            'c_LT2550_varlogHR' => 'C  Lt2550 Varlog Hr',
            'c_LT5075_logHR' => 'C  Lt5075 Log Hr',
            'c_LT5075_varlogHR' => 'C  Lt5075 Varlog Hr',
            'c_all_logHR' => 'C All Log Hr',
            'c_all_varlogHR' => 'C All Varlog Hr',
            'Notes_control' => 'Notes Control',
            'Notes_treatment' => 'Notes Treatment',
        ];
    }
}
