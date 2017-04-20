<?php

/**
 *l'objectif de cette classe et de pouvoir créer une base de donnée factice avec
* $Basededonne = new Data
 */
class Data
{
  private $_books = [];
  private $_admins = [];


  //constructeur d'un objet unique : le tableau avec les données
  function __construct(int $booksNumber, int $adminsNumber)
  {


    //création du tableau des livres
    for ($i=0; $i < $booksNumber ; $i++) {
      $this->_books[$i] = $this->BookGenerator($i);
    }
    //création du tableau des Admins
    for ($i=0; $i < $adminsNumber ; $i++) {
      $this->_admins[$i] = $this->AdminGenerator($i);
    }

  }

  //retourne la table des livres
  public function Books()
  {
    return $this->_books;
  }

   //retourne le tableau associatif des admins
  public function Admins()
  {
    return $this->_admins;
  }

//retrourne un tableau associatif contenant 1 livre unique
  private function BookGenerator(int $x)
  {
    return array(
      'id' => $x,
      'title' => ('Harry Potter '. $x) ,
      'author'=> ('J. K. Rowling n°' . $x),
      'img' => ('./../img/img'.$x.'.png'),
      'date' => 2000 + $x,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
    );
  }

  //retrourne un tableau associatif contenant 1 administrateur unique
    private function AdminGenerator(int $x)
    {
      return array(
        'id' => $x,
        'name' => ('Monique '. $x) ,
        'password'=> 'pelardon',
      );
    }
}

//TESTS

// $data = new Data(5,1);
// var_dump($data);

//Tests validés (du premier coup!!!)
