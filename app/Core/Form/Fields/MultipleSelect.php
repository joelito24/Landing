<?php

namespace App\Core\Form\Fields;

final class MultipleSelect extends AbstractField
{

    public function render()
    {
        $options = $this->generateOptions();
       
        return "<select multiple class='form-control' name='{$this->name()}[]'>{$options}</select>";
    }

    private function generateOptions()
    {
        $dataFunction = $this->description();
        $data = $dataFunction();
        

        //$data[0] = 'Selecciona';
        $options = '';
        function isJson($string) {
            json_decode($string);
            return (json_last_error() == JSON_ERROR_NONE);
        }
        foreach ($data as $key => $name) {
            $selected = '';
            if (isJson($this->value())){
               $jsonArray = json_decode($this->value());
            if (is_array($jsonArray) && in_array($key, $jsonArray)) {
                $selected = 'selected="selected"';
                //dd($jsonArray, $data);
            }

            }
            if (is_array($this->value()) && in_array($key, $this->value())) {
                $selected = 'selected="selected"';
            }
            $value = $key != 0 ? $key : "";
            $options .= "
                <option
                value='{$value}'
                {$selected}>
                {$name}</option>
            ";
        }
        return $options;
    }

}
