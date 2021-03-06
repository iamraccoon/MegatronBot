<?php
namespace models\glossary;

/**
 * This is the model class for table "glossaryErrorsType"
 *
 * @property integer $id
 * @property integer $code
 * @property string $name
 */
class GlossaryErrorsType extends Glossary
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
        ];
    }
}
