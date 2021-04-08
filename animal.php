<?php


class animal
{

    /* Properties of animal list class */

    private $animalName;
    private $animalType;
    private $animalAge;
    private $animalSize;
    private $animalActions = array('eat','sleep','move');


    /* methods of animal list class */

    public function __construct($animalName, $animalType, $animalAge, $animalSize, $animalActions)
    {
        $this->setAnimalName($animalName);
        $this->setAnimalType($animalType);
        $this->setAnimalAge($animalAge);
        $this->setAnimalSize($animalSize);
        $this->setAnimalAction($animalActions);
    }


    public function setAnimalName($Name)
    {
        $this->animalName = $Name;
    }

    public function getAnimalName()
    {
        return $this->animalName;
    }

    public function setAnimalType($Type)
    {
        $this->animalType = $Type;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }

    public function setAnimalAge($Age)
    {
        $this->animalAge = $Age;
    }

    public function getAnimalAge()
    {
        return $this->animalAge;
    }

    public function setAnimalSize($Size)
    {
        $this->animalSize = $Size;
    }

    public function getAnimalSize()
    {
        return $this->animalSize;
    }

    public function setAnimalAction($action)
    {

        if ($action === $this->animalActions[0] || $action === $this->animalActions[1] || $action === $this->animalActions[2]){
            $this->animalActions = $action;

        } else {
            $this->animalActions = 'error in animal action';
        }

    }

    public function getAnimalAction()
    {
        return $this->animalActions;
    }


}