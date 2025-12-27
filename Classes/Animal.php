<?php

class Animal 
{
    private $id;
    private $nom;
    private $espece ;
    private $alimentation ;
    private $image ;
    private $paysorigine ;
    private $descriptioncourte ;
    private $id_habitat ;

    

    public function __construct($id , $nom , $espece , $alimentation, $image , $paysorigine , $descriptioncourte ,$id_habitat)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->espece=$espece;
        $this->alimentation=$alimentation;
        $this->image=$image;
        $this->paysorigine=$paysorigine;
        $this->descriptioncourte=$descriptioncourte;
        $this->id_habitat=$id_habitat;
    }

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getEspece(){
        return $this->espece;
    }
    public function getAlimentation(){
        return $this->alimentation;
    }
    public function getImage(){
        return $this->image;
    }
    public function getPaysOrigine(){
        return $this->paysorigine;
    }
    public function getDescriptionCourte(){
        return $this->descriptioncourte;
    }
    public function getIdHabitat(){
        return $this->id_habitat;
    }


    // setters

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setespece($espece){
        $this->espece = $espece;
    }
    public function setAlimentation($alimentation){
        $this->alimentation = $alimentation;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setPaysOrigine($paysorigine){
        $this->paysorigine = $paysorigine;
    }
    public function setDescriptionCourte($descriptioncourte){
        $this->descriptioncourte = $descriptioncourte;
    }
    public function setIdHabitat($id_habitat){
        $this->id_habitat = $id_habitat;
    }

    public function ajouter() {}
    public function modifier($id) {}
    public function supprimer($id) {}

    

    public static function getAll(PDO $pdo){
        $sql = "SELECT * from animaux order by id ";
        $stmt = $pdo->query($sql);
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $animals[] = new Animal($row["id"],$row["nom"],$row["espece"],$row["alimentation"],$row["image"],$row["paysorigine"],$row["descriptioncourte"],$row["id_habitat"]);

        }
        return $animals;
    }
}

?>


