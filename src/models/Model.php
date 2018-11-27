<?php
/**
 * @link https://github.com/simialbi/yii2-schema-org
 * @copyright Copyright (c) 2017 Simon Karlen
 * @license MIT
 */

namespace simialbi\yii2\schemaorg\models;

use yii\helpers\StringHelper;

/**
 * Class Model
 * @package simialbi\yii2\schemaorg\models
 * @author Simon Karlen <simi.albi@outlook.com>
 */
class Model extends \yii\base\Model
{
    /**
     * @var string identifier of this model (rendered as @id)
     */
    public $id;

    /**
     * Converts the model into an array for usage in ld+json.
     *
     * This method will first identify which fields to be included in the resulting array by calling [[resolveFields()]].
     * It will then turn the model into an array with these fields. If `$recursive` is true,
     * any embedded objects will also be converted into arrays.
     *
     * If the model implements the [[Linkable]] interface, the resulting array will also have a `_link` element
     * which refers to a list of links as specified by the interface.
     *
     * @param array $fields the fields being requested. If empty, all fields as specified by [[fields()]] will be returned.
     * @param array $expand the additional fields being requested for exporting. Only fields declared in [[extraFields()]]
     * will be considered.
     * @param bool $recursive whether to recursively return array representation of embedded objects.
     *
     * @return array the array representation of the object
     */
    public function toJsonLDArray($fields = [], $expand = [], $recursive = true)
    {
        return array_merge([
            '@context' => 'http://schema.org'
        ], $this->toArray($fields, $expand, $recursive));
    }

    /**
     * @inheritdoc
     */
    public function toArray(array $fields = [], array $expand = [], $recursive = true)
    {
        $array = array_filter(parent::toArray($fields, $expand, $recursive), function ($item) {
            return !is_null($item);
        });
        $keys = array_keys($array);
        $values = array_values($array);

        foreach ($keys as &$key) {
            $key = str_replace('_', '-', $key);
        }

        return array_combine($keys, $values);
    }

    /**
     * @inheritdoc
     */
    public function fields()
    {
        $fields = array_merge(
            parent::fields(),
            [
                '@id' => 'id',
                '@type' => function () {
                    return StringHelper::basename(static::class);
                }
            ]
        );

        unset($fields['id']);

        return $fields;
    }
}