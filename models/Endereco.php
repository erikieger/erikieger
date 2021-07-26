<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property int $id
 * @property string|null $cep
 * @property string|null $logradouro
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cep', 'logradouro'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cep' => 'Cep',
            'logradouro' => 'Logradouro',
        ];
    }

    public function getEnderecoPorCEP($cep){
        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "Accept: text/plain\r\n"
            ]
        ];

        $context = stream_context_create($opts);

        return file_get_contents("http://cep.la/$cep", false, $context);
    }

    public function getEnderecoPorLogradouro($logradouro){
        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "Accept: text/plain\r\n"
            ]
        ];

        $context = stream_context_create($opts);

        return file_get_contents("http://cep.la/$logradouro", false, $context);
    }


}
