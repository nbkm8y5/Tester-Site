<?php

/**
 * Form Handler Class
 * Checks all post from a form and runs through various tests for vailidation
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class FormHandler {

    private $firstName = '';
    private $firstNameError = '';
    private $lastName = '';
    private $lastNameError = '';
    private $email = '';
    private $emailError = '';
    private $comments = '';
    private $commentsError = '';
    private $valid = false;
    private $firstNameValid = false;
    private $lastNameValid = false;
    private $emailValid = false;
    private $commentValid = false;

    /**
     * Form Handler Constructor
     * @param type $firstName
     * @param type $lastName
     * @param type $email
     * @param type $comments
     */
    function __construct($firstName, $lastName, $email, $comments) {
        $this->firstName = $firstName;
        $this->testFirstName();
        $this->lastName = $lastName;
        $this->testLastName();
        $this->email = $email;
        $this->testEmail();
        $this->comments = $comments;
        $this->testComments();
    }

    /**
     * This function vailidates the first name
     * @param type $firstName
     */
    public function testFirstName() {
        if (isset($this->firstName)) {
            if (!preg_match("/^[a-zA-Z ]*$/", $this->firstName)) {
                $this->firstNameValid = false;
                $this->firstNameError = "Only letters and white space allowed in first name.";
            } else {
                $this->firstName = $this->test_input($this->firstName);
                $this->firstNameValid = true;
            }
        } else {
            $this->firstNameValid = false;
            $this->firstNameError = "First name is required.";
        }
    }

    /**
     * This function validates the last name
     * @param type $lastName
     */
    public function testLastName() {
        if (isset($this->lastName)) {
            if (!preg_match("/^[a-zA-Z ]*$/", $this->lastName)) {
                $this->lastNameValid = false;
                $this->lastNameError = "Only letters and white space allowed in last name.";
            } else {
                $this->lastName = $this->test_input($this->lastName);
                $this->lastNameValid = true;
            }
        } else {
            $this->lastNameValid = false;
            $this->lastNameError = "Last name is required.";
        }
    }

    /**
     * This function validates the email
     * @param type $email
     */
    public function testEmail() {
        if (isset($this->email)) {
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->emailValid = false;
                $this->emailError = "Invalid email format";
            } else {
                $this->email = $this->test_input($this->email);
                $this->emailValid = true;
            }
        } else {
            $this->emailValid = false;
            $this->emailError = "Email address is required.";
        }
    }

    /**
     * This function validates the comments for possible hacking
     * @param type $comments
     */
    public function testComments() {
        if (isset($this->comments)) {
            $this->commentValid = true;
            $this->comments = $this->test_input($this->comments);
        } else {
            $this->commentValid = false;
            $this->commentsError = "Please provide a comment.";
        }
    }

    /**
     * This function returns the first name
     * @return type
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * This function returns the first name error
     * @return type
     */
    function getFirstNameError() {
        return $this->firstNameError;
    }

    /**
     * This function returns the last name
     * @return type
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * This function returns the last name error
     * @return type
     */
    function getLastNameError() {
        return $this->lastNameError;
    }

    /**
     * This function returns the full name
     * @return type
     */
    public function getFullName() {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    /**
     * This function returns the email
     * @return type
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * This function retirns the email errors
     * @return type
     */
    public function getEmailError() {
        return $this->emailError;
    }

    /**
     * This function returns the user comments
     * @return type
     */
    public function getComments() {
        return $this->comments;
    }

    /**
     * This fnction returns the comments error
     * @return type
     */
    public function getCommentsError() {
        return $this->commentsError;
    }

    /**
     * This function tests the data for possible hacking attempts
     * @param type $data
     * @return type
     */
    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }

    /**
     * Tests all boolean for all validation
     */
    public function testFullValidation() {
        if ($this->firstNameValid && $this->lastNameValid && $this->emailValid && $this->commentValid) {
            $this->valid = true;
        } else {
            $this->valid = false;
        }
    }

    /**
     * Returns true or false for full input validation
     * @return type
     */
    public function getValid() {
        return $this->valid;
    }

}
