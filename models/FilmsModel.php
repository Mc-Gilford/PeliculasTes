<?php
class FilmsModel /*extends Model implements IModel*/{
        
    private $id;
    private $name; 
    private $description;
    private $genre;
    private $date;
    private $poster;
        public function __construct(){

            $this->db = Conectar::conexion();
            $this->datos= array();
            $this->actors= array();
            $this->directors= array();
            $this->id = "";
            $this->name = ""; 
            $this->description = "";
            $this->genre = "";
            $this->date = "";
            $this->poster= "";
        } 
        public function getAll(){
            error_log("Get all ejecutando");
            
                $sql = "SELECT * FROM films";
                $res = $this->db->query($sql);
                while($row = $res->fetch_assoc())
                {
                    $item = new FilmsModel();
                    $item->setId($row['filmId']);
                    $item->setName($row['name']);
                    $item->setDescription($row['description']);
                    $item->setGenre($row['genre']);
                    $item->setDate($row['date']);
                    $this->datos[]= $row;
                }
                
                return $this->datos;
        }
        
        public function getActors($filmId){
                $items=[];/*
                $query = $this->prepare("SELECT A.name, F.name FROM actors A , 
                films F, register_films R WHERE R.filmId = F.filmId 
                AND R.actorId = A.actorId AND R.filmId=:filmId");*/
                
                $this->actors = null;
                $sql="SELECT actors.name FROM actors , 
                films , register_films  WHERE register_films.filmId = films.filmId 
                AND register_films.actorId = actors.actorId AND register_films.filmId=$filmId";
                $res = $this->db->query($sql);
                /*$query->execute([
                    "filmId" -> $filmId
                ]);*/
                while($row = $res->fetch_assoc())
                {
                   /* $item = $p['name'];
                    array_push($items,$item);    */       
                    $this->actors[]= $row["name"];          
                }
                $str =implode(", ",$this->actors);
                return $str;
        }
        

        public function getDirectors($filmId){
            $this->directors = null;
            $sql="SELECT directors.name FROM directors , 
                films , register_films  WHERE register_films.filmId = films.filmId 
                AND register_films.directorId = directors.directorId AND register_films.filmId=$filmId";
                $res = $this->db->query($sql);
                /*$query->execute([
                    "filmId" -> $filmId
                ]);*/
                while($row = $res->fetch_assoc())
                {
                   /* $item = $p['name'];
                    array_push($items,$item);    */       
                    $this->directors[]= $row["name"];          
                }
                $str =implode(", ",$this->directors);
                return $str;
            /*$items = [];
            try{
                $query = $this->prepare("SELECT D.name, F.name 
                FROM directors D , films F, register_films R 
                WHERE R.filmId = F.filmId AND 
                R.directorId = D.directorId AND R.filmId=:filmId;");
                $query->execute([
                    "filmId" -> $filmId
                ])
                while($p = $query->fetch(PDO::FETCH_ASSOC)){
                    $item = $p['name'];
                    array_push($items,$item);
                }
                return $items;
            }catch(PDOException $e){
                error_log("Error al ejecutar query GET Directors");
                return false;
            }*/
        }
        
        public function setId($id){$this->id=$id;}
        public function setName($name){$this->name=$name;}
        public function setDescription($description){$this->description=$description;}
        public function setGenre($genre){$this->genre=$genre;}
        public function setDate($date){$this->date=$date;}
        public function setPoster($poster){$this->poster=$poster;}
        
        public function getId(){return $this->id;}
        public function getName(){return $this->name;}
        public function getDescription(){return $this->description;}
        public function getGenre(){return $this->genre;}
        public function getDate(){return $this->date;}
        public function getPoster(){return $this->poster;}

}
?>