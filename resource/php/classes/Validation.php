<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.01.16
 * Time: 12:21
 * @param $array
 * @param $key
 * @param null $default
 * @return null
 */
trait Validation
{
    public function getValue($array, $key, $default = null)
    {
        if (!empty($array[$key])) {
            $value = $array[$key];
        } else {
            $value = $default;
        }
        return $value;
    }

    public function validateRequired($value)
    {
        if (!is_string($value)) {
            return !empty($value);
        }
        return array(mb_strlen($value, 'utf-8') > 0);
    }

    public function validateStr($value)
    {
        return gettype($value) === 'string';
    }

    public function validateLen($value, $len)
    {
        if (is_array($value) || is_object($value)) {
            echo 'Wrong input data';
            return false;
        }
        return mb_strlen(strval($value), 'UTF-8') >= $len;
    }

    public function validateNonAlphanumeric($value)
    {
        if (is_array($value) || is_object($value)) {
            echo 'Wrong input data';
            return false;
        }
        return (bool)preg_match('/[^а-яa-z0-9\s]/i', trim($value));
    }

    public function displayErrors($errors, $field)
    {
        $fieldErrors = getValue($errors, $field, []);
        $output = '';
        foreach ($fieldErrors as $value) {
            $output .= sprintf('<p class="errors">%s</p>', htmlentities($value));
        }
        return $output;
    }

    public function options($data, $selected)
    {
        $html = '';

        foreach ($data as $key => $value) {
            $html .= sprintf(
                '<option value="%s" %s>%s</option>',
                $key,
                $key == $selected ? 'selected="selected"' : '',
                $value
            );
        }
        return $html;
    }

    public function radios($data, $checked, $name, $type = 'checkbox')
    {
        $html = '';
        if (!is_array($checked)) {
            $checked = [$checked];
        }

        foreach ($data as $value => $label) {
            $id = $name . '_' . $value;
            $html .= sprintf(
                '<label for="%s"><input type="%s" name="%s" value="%s" id="%1$s">%s</label>',
                $id,
                $type,
                $name,
                $value,
                in_array($value, $checked) ? 'checked="checked"' : '',
                $label
            );
        }

        return $html;
    }

    public function getFieldClass($errors, $field)
    {
        return !empty($errors[$field]) ? 'error' : '';
    }

    public function validateLongerOrEqualString($value, $length)
    {
        return mb_strlen(strval($value), 'UTF-8') >= $length;
    }

    public function numberFromString($value)
    {
        preg_match_all('!\d+!', $value, $matches);
        return $matches;
    }

    public function confirmPassword($field1, $field2)
    {
        if (md5($field1) === md5($field2)) {
            return md5($field2);
        } else {
            return false;
        }
    }
}