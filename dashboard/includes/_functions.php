<?php 
 class Users{
     private $db;
     private $idMaster = 1;
    public function __construct($db){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['user'])){
            $_SESSION['user']=array();
        }
        $this->db=$db;
    }
    function onDelete($item, $table){
        $req = $this->db->prepare("DELETE FROM $table WHERE id = $item");
        try {
            $req->execute();
            return array("status" => 200, "message" => "successfuly deleted !");
        } catch (\Throwable $th) {
            return array("status" => 500, "message" => "erreur serveur");
        }
    }
    // --------------------------- Fonction login ---------- 
    function onSignin($number, $password, $table){
        $req = $this->db->prepare("SELECT * FROM $table WHERE email = ? AND motpasse = ? LIMIT 1");
        try {
            $req->execute([$number, $password]);
            $req = $req->fetchAll();
            if(!empty($req)){
                $this->login($req[0]);
                // var_dump($req);
                return array("status" => 200, "message" => $req);
            }else return array("status"=> 405, "message" => "uknown user"); 
        } catch (\Throwable $th) {
           return array("status" => 500, "message" => "erreur serveur");
        }
    }
    public function login($id_user){
            
                // $select = $this->db->prepare("SELECT * FROM users WHERE id=:id");
                // $select->execute(array('id'=>$id_user));
                // $result =$select->fetch(PDO::FETCH_OBJ);
            if (is_array($id_user)) {
                $result = $id_user;
                // var_dump($result);
                $_SESSION['user']['user_id'] = $result['id'];
                $_SESSION['user']['user_nom'] = $result['nom'];
                $_SESSION['surnom']['user_surnom']= $result['surnom'];
                $_SESSION['user']['user_email'] = $result['email'];
                $_SESSION['user']['user_password'] = $result['motpasse'];
                $_SESSION['user']['niveau'] = $result['role'];
                $_SESSION['user']['security'] = true;
            }

    }
    //------------------------fin fonction-------------------------------

    public function logout()
    {
        session_destroy();
    }




























    public function get_salles($currentPage)
    {
        $offset=$this->offset;
        $limit = ($currentPage * $offset) - $offset;
        $req=$this->query('SELECT * FROM produits  ORDER BY id DESC LIMIT ' .$limit.','.$offset);
        if ($req){
            return $req;
        }else return false;

    }
  

  
}
function comptUtiLISATEUR($db){
    $re = $db->prepare('SELECT COUNT(*) FROM admin');
    $re->execute();
    $re = $re->fetchColumn();
    return (int)$re;
}
function onRetrieveEvent($db, $idsession, $userrole){
    try {  
         $tabOption = [];
    $re = ($userrole === 2) ? $db->prepare('SELECT * FROM _evenement') : $db->prepare('SELECT * FROM _evenement WHERE _idusers = ?');
    $re->execute([$idsession]);
    $re = $re->fetchAll();
    if(empty($re)) return array();
    for($i = 0; $i < count($re); $i++){
       array_push($tabOption, array(($re[$i]['_id'])=>($re[$i]['_nom']))); 
    }
    return $tabOption;
    
} catch(Exception $e) {
    exit('Probleme du fonction onRetrieveEvent');
}  
}
function comptarticle($db){
    $re = $db->prepare('SELECT COUNT(*) FROM articl5');
    $re->execute();
    $re = $re->fetchColumn();
    return (int)$re;
}
function comptEvenemnt($db, $idsession, $userrole){
    $re = ($userrole === 2) ? $db->prepare('SELECT COUNT(*) FROM _evenement') : $db->prepare('SELECT COUNT(*) FROM _evenement WHERE _idusers = ?');
    $re->execute([$idsession]);
    $re = $re->fetchColumn();
    return (int)$re;
}

function comptParticipant($db){
    $re = $db->prepare('SELECT COUNT(*) FROM produits');
    $re->execute();
    $re = $re->fetchColumn();
    return (int)$re;
}
function countcommande_ord($db){
    $re=$db->prepare('SELECT COUNT(*) from commande_ord');
    $re->execute();
    $re=$re->fetchColumn();
    return(int)$re;
}
function countpays($db){
    $re=$db->prepare('SELECT COUNT(*) from pays');
    $re->execute();
    $re=$re->fetchColumn();
    return(int)$re;
}
function comptecommunique($db){
    $re=$db->prepare('SELECT COUNT(*) from _communique');
    $re->execute();
    $re=$re->fetchColumn();
    return(int)$re;
}
function comptelcoaching($db){
    $re=$db->prepare('SELECT COUNT(*) from _coaching');
    $re->execute();
    $re=$re->fetchColumn();
    return(int)$re;
}
function comptVisitor($db){
    $re = $db->prepare('SELECT _idUser FROM _visitor GROUP BY _idUser');
    $re->execute();
    $re = $re->fetchAll();
    return (int)(count($re));
}
function _addVisitedPage($cokkie,$page,$db){
    $re = $db->prepare('INSERT INTO _visitor (_idUser, _page) VALUES (?,?)');
    $re->execute([$cokkie,$page]);
}

function mt_random_float($min, $max) {
    $float_part = mt_rand(0, mt_getrandmax())/mt_getrandmax();
    $integer_part = mt_rand($min, $max - 1);
    return $integer_part + $float_part;
}


function comptcomentaire($db,$id){
    $re = $db->prepare('SELECT COUNT(*) FROM _evenement WHERE _idusers=:id');
    $re->execute(array(
        'id'=>$id
    ));
    $re = $re->fetchColumn();
    return (int)$re;
}


function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();
    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
}
?>

