<?php

namespace App\Core\Form;

use App\Core\Form\Fields\Email;
use App\Core\Form\Fields\EmailDisabled;
use App\Core\Form\Fields\ImageFile;
use App\Core\Form\Fields\Numeric;
use App\Core\Form\Fields\NumericDisabled;
use App\Core\Form\Fields\Text;
use App\Core\Form\Fields\Textslug;
use App\Core\Form\Fields\TextDisabled;
use App\Core\Form\Fields\Textarea;
use App\Core\Form\Fields\TextareaSimple;
use App\Core\Form\Fields\Image;
use App\Core\Form\Fields\ImageCrop;
use App\Core\Form\Fields\Radio;
use App\Core\Form\Fields\RadioDisabled;
use App\Core\Form\Fields\Select;
use App\Core\Form\Fields\MultipleSelectProducts;
use App\Core\Form\Fields\File;
use App\Core\Form\Fields\Hidden;
use App\Core\Form\Fields\Datetime;
use App\Core\Form\Fields\SelectDisabled;
use App\Core\Form\Fields\Link;
use App\Core\Form\Fields\Line;
use App\Core\Form\Fields\MultipleSelect;
use App\Core\Form\Fields\ImageFileNoCrop;

final class FormGenerator
{

    private $configFileName = 'form';
    private $fieldsMap = [
        'numeric' => Numeric::class,
        'numericDisabled' => NumericDisabled::class,
        'text' => Text::class,
        'textslug' => Textslug::class,
        'textDisabled' => TextDisabled::class,
        'textarea' => Textarea::class,
        'textareaSimple' => TextareaSimple::class,
        'email' => Email::class,
        'emailDisabled' => EmailDisabled::class,
        'image' => Image::class,
        'imageFile' => ImageFile::class,
        'imageCrop' => ImageCrop::class,
        'file' => File::class,
        'radio' => Radio::class,
        'radioDisabled' => RadioDisabled::class,
        'select' => Select::class,
        'selectDisabled' => SelectDisabled::class,
        'hidden' => Hidden::class,
        'datetime' => Datetime::class,
        'link' => Link::class,
        'line' => Line::class,
        'multipleSelectProducts' => MultipleSelectProducts::class,
        'multipleSelect' => MultipleSelect::class,
        'imageFileNoCrop' => ImageFileNoCrop::class,
    ];

    public function generate( $config, array $defaultData = [] )
    {
        $data = (array) config($this->generateConfigFileName($config));
        $form = new Form($data['name'], $data['description'], $data['editor'], $data);
        $loopsInfo = [];
        if (isset($data['orderToShow']) && is_array($data['orderToShow'])) {

            foreach ($data['orderToShow'] as $order) {
                if ($order == "generals") {
                    $info = $this->addDataGenerals($data, $form, $defaultData);
                    $form = $info[0];
                    $loopsInfo = $info[1];
                } elseif ($order == "lenguages") {
                    $form = $this->addDataLenguagues($data, $form, $defaultData);
                } elseif ($order == "dataShow") {
                    $form = $this->addSpecialData($data, $form, $defaultData, $loopsInfo);
                }
            }
        } else {
            $form = $this->addDataToForm($data, $form, $defaultData);
        }


        return $form;
    }

    private function addDataToForm( $data, $form, $defaultData )
    {
        //ADD LENGUAGES DATA
        $formWithLanguagues = $this->addDataLenguagues($data, $form, $defaultData);

        //ADD GENERALS DATA
        $info = $this->addDataGenerals($data, $formWithLanguagues, $defaultData);
        $formWithGenerals = $info[0];
        $loopsInfo = $info[1];

        //ADD SPECIAL DATA
        $formwithSpecialData = $this->addSpecialData($data, $formWithGenerals, $defaultData, $loopsInfo);

        return $formwithSpecialData;
    }

    private function addDataLenguagues( $data, $form, $defaultData )
    {
        if (isset($data['lenguages'])) {
            foreach ($data['lenguages'] as $key => $value) {
                foreach ($value['fields'] as $name => $fieldData) {
                    $name = $key . '[' . $name . ']';
                    $field = $this->generateField($name, $defaultData, $fieldData);
                    $form->addField('lenguages[' . $key . ']', $field);
                }
            }
            $form->addDataShow('lenguages', false);
        }
        return $form;
    }

    private function addDataGenerals( $data, $form, $defaultData )
    {
        $loopsInfo = [];
        foreach ($data['fields'] as $name => $fieldData) {
            $field = $this->generateField($name, $defaultData, $fieldData);

            if (strpos($name, "cant_") !== false) {
                $loopsInfo[$name] = $field->value();
            }
            $form->addField('generals', $field);
        }

        $loopGenerals = isset($data["loop"]) ? $data["loop"] : false;
        $form->addDataShow('generals', $loopGenerals);

        return [$form, $loopsInfo];
    }

    private function addSpecialData( $data, $form, $defaultData, $loopsInfo )
    {
        if (isset($data['dataShow']) && is_array($data['dataShow'])) {
            foreach ($data['dataShow'] as $otherData) {
                $loopOtherData = isset($data[$otherData]["loop"]) ? isset($data[$otherData]["loop"]) : false;
                if (isset($data[$otherData]['fields'])) {
                    if ($loopOtherData) {
                        if (isset($loopsInfo['cant_' . $otherData]) && $loopsInfo['cant_' . $otherData] > 0) {
                            for ($i = 0; $i < $loopsInfo['cant_' . $otherData]; $i++) {
                                foreach ($data[$otherData]['fields'] as $name => $fieldData) {
                                    $name = $otherData . '[' . $i . '][' . $name . ']';
                                    $field = $this->generateField($name, $defaultData, $fieldData, $loopOtherData);
                                    $form->addField($otherData, $field);
                                }
                            }
                        }
                    } else {
                        foreach ($data[$otherData]['fields'] as $name => $fieldData) {
                            $name = $otherData . '[' . $name . ']';
                            $field = $this->generateField($name, $defaultData, $fieldData);
                            $form->addField($otherData, $field);
                        }
                    }
                } else {
                    foreach ($data[$otherData] as $key => $values) {
                        if ($values['fields']) {
                            foreach ($values['fields'] as $name => $fieldDataAux) {
                                $name = $otherData . '[' . $key . '][' . $name . ']';
                                $field = $this->generateField($name, $defaultData, $fieldDataAux, $loopOtherData);

                                $form->addField($otherData, $field);
                            }
                        }
                    }
                }

                $form->addDataShow($otherData, $loopOtherData);
            }
        }

        return $form;
    }

    private function generateConfigFileName( $config )
    {
        return $this->configFileName . '.' . $config;
    }

    private function getValue( array $data, $name )
    {
        $value = false;
        $originName = $name;
        $dataAux = explode('[', $name);

        
        if (count($dataAux) > 1 && count($dataAux) < 3) {
            $name = str_replace('[', '', $dataAux[0]);
            $secondname = str_replace(']', '', $dataAux[1]);
            if (isset($data[$name][$secondname])) {
                $value = $data[$name][$secondname];
            }
        } else if (count($dataAux) > 2) {
            $name = str_replace('[', '', $dataAux[0]);
            $secondname = str_replace(']', '', $dataAux[1]);
            $thirdname = str_replace(']', '', $dataAux[2]);

            if (isset($data[$name][$secondname][$thirdname])) {
                $value = $data[$name][$secondname][$thirdname];
            }
        }
        
        if (empty($value)) {
            if ((!empty($data[$name]) && !is_array($data[$name])) ) { // || (!empty($data[$name]) && $name == 'product_id_related' )
                $value = $data[$name];
            } else if (!empty($data[$originName]) && is_array($data[$originName])) {
                $value = $data[$originName];
            }
        }

        return $value;
    }

    private function fieldClass( $type )
    {
        if (!array_key_exists($type, $this->fieldsMap)) {
            throw new FieldNotSupportedException($type);
        }

        return $this->fieldsMap[$type];
    }

    private function generateField( $name, $defaultData, Array $fieldData )
    {
        $title = $fieldData['title'];
        $description = $fieldData['description'];
        $rules = isset($fieldData['rules']) ? $fieldData['rules'] : NULL;
        $value_dafault = isset($fieldData['value']) ? $fieldData['value'] : NULL;
        $value = empty($value_dafault) ? $this->getValue($defaultData, $name) : $value_dafault;

        $fieldClass = $this->fieldClass($fieldData['type']);

        return new $fieldClass($name, $title, $description, $value, $rules);
    }

}
