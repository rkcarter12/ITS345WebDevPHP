<?php


// Class creation for a User with getters and setters
class User {
    private $name="name";
    private $birthdate="1950/01/01"; //yyyy/mm/dd format
    private $age="21";
    private $dept="Accounting";
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * @param mixed $dept
     */
    public function setDept($dept)
    {
        $this->dept = $dept;
    }    
} // End of class User

?>