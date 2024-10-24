<?php

namespace Sanchit\LaravelCustomFields\Traits;

use Sanchit\LaravelCustomFields\Models\CustomField;
use Sanchit\LaravelCustomFields\Models\CustomFieldResponse;

trait HasCustomFields
{
    public function customFields()
    {
        return $this->morphMany(CustomField::class, 'model');
    }

    public function customFieldResponses()
    {
        return $this->morphMany(CustomFieldResponse::class, 'model');
    }

    public function addCustomField(array $fieldData)
    {
        return $this->customFields()->create($fieldData);
    }

    public function updateCustomField($fieldId, array $fieldData)
    {
        return $this->customFields()->where('id', $fieldId)->update($fieldData);
    }

    public function deleteCustomField($fieldId)
    {
        return $this->customFields()->where('id', $fieldId)->delete();
    }

    public function saveCustomFieldResponse($fieldId, $value)
    {
        return $this->customFieldResponses()->updateOrCreate(
            ['custom_field_id' => $fieldId],
            ['value' => $value]
        );
    }

    public function withCustomFields()
    {
        $this->load(['customFields', 'customFieldResponses']);
        return $this;
    }
}
