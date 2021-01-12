<?php 
    $stringBasic="/^[A-Za-z-\D]+$/";
    $error = array();
    $notGood="ce n'est pas bon !";
    
          // verification de genre
          if(!empty($_POST['gender'])){
            $gender = $_POST['gender'];
            $gender = trim(filter_var($gender, FILTER_SANITIZE_STRING));
            if(!preg_match($stringBasic , $gender)){
                $error['gender'] = $notGood;
            }
        }

        // verification de name
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $name = filter_var($name, FILTER_SANITIZE_STRING);
            if(!preg_match($stringBasic , $name)){
                $error['name'] = $notGood;
            }
        } 

            // verification de firstname
        if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
            $firstname = $_POST['firstname'];
            $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
            if(!preg_match($stringBasic , $firstname)){
                $error['firstname'] = $notGood;
            }
        }
        //  verification de age 
        if(!empty($_POST['age'])){
            $age = $_POST['age'];
            $age = trim(filter_var($age, FILTER_SANITIZE_STRING));
    }

        // verification de enterprise
        if(isset($_POST['enterprise'])){
            $enterprise = $_POST['enterprise'];
            $enterprise = filter_var($enterprise, FILTER_SANITIZE_STRING);
            if(!preg_match($stringBasic , $enterprise)){
                $error['enterprise'] = $notGood;
            }
        } 

    
?>    