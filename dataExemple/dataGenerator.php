<?php

/**
 *l'objectif de cette classe et de pouvoir créer une base de donnée factice avec
* $Basededonne = new Data
 */
class Data
{
  private $_books = [];
  private $_admins = [];
  private $_age = [ '0-3' , '3-7' , '7-11', '11-18', "18-21"];
  private $_img = ['img1.jpg','img2.jpg','img3.jpg','img4.jpg','img5.jpg','img6.jpg','img7.jpg','img8.jpg','img9.jpg','img10.jpg','img11.jpg'];


  //constructeur d'un objet unique : le tableau avec les données
 public function __construct(int $booksNumber, int $adminsNumber)
  {
    //création du tableau des livres
    for ($i=1; $i <= $booksNumber ; $i++) {
      $this->_books[$i] = $this->BookGenerator($i,$booksNumber);
    }
    //création du tableau des Admins
    for ($i=1; $i <= $adminsNumber ; $i++) {
      $this->_admins[$i] = $this->AdminGenerator($i);
    }
  }
  //on utilisera cette methode statique pour créer l'instance unique

  //GETERS :

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
  // retourne le tableau des differentes tranches d'ages
  public function Age()
  {
      return $this->_age ;
  }

  //GETTERS BY ID
  //pour les livres
  public function SelectBook($id)
  {
      $books = $this->Books();
      return $books[$id];
      # code...
  }
  //pour les admins
  public function SelectAdmin($id)
  {
      $admins =  $this->Admins;
      return $admins[$id];
      # code...
  }
  //renvoie un tableau avec  @number  livres aléatoires ayant l'age demandé (en string)
  public function BooksByAge( $age, $number)
  {
      $result = [];
      $books = $this->_books;
      shuffle($books);

        foreach ( $books as $book) {
            if (($book['age']== $age) && (count($result)) < $number)// on rempli que jusqu'a ce que le nombre de livre a prendre soit atteint.
            {
                $result[] = $book;
            }
        }
      return $result;
  }

  //LES METHODES PRIVEES : Les Rouages de la classe

//retrourne un tableau associatif contenant 1 livre unique
  private function BookGenerator(int $x, $booksNumber)
  {
    return array(
      'id' => $x,
      'title' => ('Harry Potter '. $x) ,
      'author'=> ('J. K. Rowling n°' . $x),
      'category'=> $this->Category($x,$booksNumber),
      'age'=> $this->AgePref($x,$booksNumber),
      'img' => $this->ImageAssignation(),
      'date' => 2000 + $x,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
    );
  }

//retourne le tableau associatif des admins
  private function AdminGenerator(int $x)
  {
    return array(
      'id' => $x,
      'name' => ('Monique '. $x) ,
      'password'=> 'pelardon',
    );
  }

  //méthode utilisée pour mettre une image aléatoire a chaque livre (choisie parmis le tableau img des attributs de classe)
    private function ImageAssignation(){
        $imglist = $this->_img ;
        shuffle($imglist);
        return './img/couv/' . $imglist[0] ;
    }

    // prends l'id du livre et le nombre total de livres à créer et renvoie la catégorie (string)
    private function Category($x, $booksNumber)
    {//on crée un tableau avec toutes nos catégories
        $cat = [ 'interactif' , 'artistique' , 'éducatif', 'Materialisme dialectique'];
        //on determine le nombre de livres a placer dans chacunes en fonction du nombre total de livres à créer
        //on renvoie la catégorie du livre en fonction de son ID
        return $cat[rand(0, (count($cat) -1))];
    }

// prends l'id du livre et le nombre total de livres à créer et renvoie l'age recommandé' (string)
    private function AgePref($x, $booksNumber)
    {//on crée un tableau avec toutes nos catégories
        $age = $this->_age;
        //on determine le nombre de livres a placer dans chacunes des tranches d'age en fonction du nombre total de livres à créer
        $numberOfBoofWeHaveToPlaceInEachAge = intval( $booksNumber / count($age) + 1);
        //on renvoie la catégorie du livre en fonction de son ID
        return $age[(round( $x / $numberOfBoofWeHaveToPlaceInEachAge))];
    }
}




//TESTS
// //
//  $data = new Data(20,1);
// //var_dump($data->Books());
//
// print "ET MAINTENANT LES TESTS DES FONCTIONS";
// var_dump($data->BooksByAge('0-3', 4));
//
// Tests validés ()
