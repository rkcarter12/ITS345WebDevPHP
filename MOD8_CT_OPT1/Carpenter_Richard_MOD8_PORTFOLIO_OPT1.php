<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MOD8 Portfolio Project: Option #1</title>
</head>
    <body>
    <?php
    class User {
        private $name;
        private $birthdate; //yyyy/mm/dd format
        private $age;
        private $dept;
      
        public function getName()
        {
            return $this->name;
        }
    
        
        public function getBirthdate()
        {
            $this->date = new DateTime('2021/01/01');
            return $this->date;
        }
    
        
        public function getAge()
        {
            return $this->age;
        }
    
        
        public function getDept()
        {
            return $this->dept;
        }
    
        
        public function setName($name)
        {
            $this->name = $name;
        }
    
        
        public function setBirthdate($birthdate)
        {
            $this->birthdate = $birthdate;
        }
    
        
        public function setAge($age)
        {
            $this->age = $age;
        }
    
        
        public function setDept($dept)
        {
            $this->dept = $dept;
        }
        
        
        
    }
	?>
    </body>
</html>