<?php




$user = "root";     //DB Username
$pass = "";         //DB password
$host = "localhost";
$dbname = "chat";





function findAll(): array
{
    try {
        $dsn ='mysql:host=' . $host . ';dbname=' . $dbname;
        //echo $dsn (Data Source Name);
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //PDO(PHP Data Object) Start connection
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION         //Return Error
        );
    
        $dbh = new PDO($dsn, $user, $pass, $options); 
        //var_dump($dbh);
        echo "Connexion établie !";
    
        } catch (PDOException $e)   {
            print "Erreur connection !: " . $e->getMessage() . "<br/>";
            die();
                                    }
    
    try { $query = 'SELECT chat.pseudo, chat.content, chat.date FROM `message`'; 
        var_dump($query)
         
            $req = $dbh->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $tab = $req->fetchAll(); 
            $req->closeCursor();
        
}
    //die($query); 
    

    // Coder ici

/**
 * Ajouter un message dans la base de données
 */
function create(array $post): void
{
    $db = getDBConnection();

    // Coder ici
}

/**
 * Connection à la base de donnéess
 */
function getDBConnection(): PDO
{
    // Coder ici
}
