<?php

namespace Quack\Form\Dto;

class FormEntryDTO {
    private int $id;
    private string $email;
    private string $firstName;
    private string $lastName;
    private string $dateOfBirth;
    private string $phoneNumber;

    public function __construct(
        int $id,
        string $email,
        string $firstName,
        string $lastName,
        string $dateOfBirth,
        string $phoneNumber
    ) {
        $this->set_id($id);
        $this->set_email($email);
        $this->set_firstName($firstName);
        $this->set_lastName($lastName);
        $this->set_dateOfBirth($dateOfBirth);
        $this->set_phoneNumber($phoneNumber);
    }

    public function get_id() {
        return $this->id;
    }

    public function set_id(int $id) {
        $this->id = $id;

        return $this;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_email(string $email) {
        $this->email = $email;

        return $this;
    }

    public function get_firstName() {
        return $this->firstName;
    }

    public function set_firstName(string $firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    public function get_lastName() {
        return $this->lastName;
    }

    public function set_lastName(string $lastName) {
        $this->lastName = $lastName;

        return $this;
    }

    public function get_dateOfBirth() {
        return $this->dateOfBirth;
    }

    public function set_dateOfBirth(string $dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function get_phoneNumber() {
        return $this->phoneNumber;
    }

    public function set_phoneNumber(string $phoneNumber) {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
