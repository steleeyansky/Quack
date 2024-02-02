<?php 

namespace Quack\Form\Validation;

class FormValidator {
    
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validateName($name) {
        return preg_match("/^[a-zA-Z\s]+$/", $name);
    }

    public static function validateDateOfBirth($dateOfBirth) {
        $date = \DateTime::createFromFormat('Y-m-d', $dateOfBirth);
        return $date && $date->format('Y-m-d') === $dateOfBirth;
    }

    public static function validatePhoneNumber($phoneNumber) {
        return preg_match("/^\+?[0-9]{10,15}$/", $phoneNumber);
    }

    public static function validateAll($data, &$errors) {
        $isValid = true;

        if (empty($data['email']) || !self::validateEmail($data['email'])) {
            $errors['email'] = 'The Email is not valid.';
            $isValid = false;
        }

        if (empty($data['first_name']) || !self::validateName($data['first_name'])) {
            $errors['first_name'] = 'The First Name is not valid.';
            $isValid = false;
        }

       
        if (empty($data['last_name']) || !self::validateName($data['last_name'])) {
            $errors['last_name'] = 'The Last Name is not valid.';
            $isValid = false;
        }

       
        if (empty($data['date_of_birth']) || !self::validateDateOfBirth($data['date_of_birth'])) {
            $errors['date_of_birth'] = 'The Date of Birth is not valid.';
            $isValid = false;
        }

        if (empty($data['phone_number']) || !self::validatePhoneNumber($data['phone_number'])) {
            $errors['phone_number'] = 'The Phone Number is not valid.';
            $isValid = false;
        }

        return $isValid;
    }
}
