<?php


class Couleur extends DataBase
{

    private $pdo;

    private int $id;
    public string $firstname;
    public string $lastname;
    public string $mail;
    public string $confirm_mail;
    public string $password;
    public string $confirm_password;
    public string $phone;
    public string $country;
    public string $birthday;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function register($firstname, $lastname, $mail, $confirm_mail, $password, $confirm_password, $phone, $country, $birthday)
    {

        if (isset($firstname) and isset($lastname) and isset($mail) and isset($confirm_mail) and isset($password) and isset($confirm_password) and isset($phone) and isset($country) and isset($birthday)) {

            $firstnamelenght = strlen($firstname);

            if ($firstnamelenght >= 2 && $firstnamelenght <= 18) {

                $lastnamelenght = strlen($lastname);

                if ($lastnamelenght >= 2 && $lastnamelenght <= 18) {

                    if ($mail == $confirm_mail) {

                        if ($password == $confirm_password) {
                            $getmail = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
                            $getmail->execute(array($mail));
                            $getmailcount = $getmail->rowCount();
                            if ($getmailcount == 0) {
                                $register = $this->pdo->prepare("INSERT INTO utilisateurs (firstname, lastname, mail, password, phone, country_code, birthday, avatar) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                                $register->execute(array($firstname, $lastname, $mail, $password, $phone, $country, $birthday, 'avatar.png'));
                                $success = "Votre Compte à été créer";
                                return $success;
                            } else {
                                $erreur = "Veuillez vous connecter !";
                                return $erreur;
                            }
                        } else {
                            $erreur = "Vos Mot de Passe ne sont pas identique";
                            return $erreur;
                        }
                    } else {
                        $erreur = "Vos Adresse Mail ne sont pas identique";
                        return $erreur;
                    }
                } else {
                    $erreur = "Votre lastname doit contenir 2 a 18 caractères !";
                    return $erreur;
                }
            } else {
                $erreur = "Votre firstname doit contenir 2 a 18 caractères !";
                return $erreur;
            }
        } else {
            $erreur = "Veuillez remplir tout les champs !";
            return $erreur;
        }
    }
















    public function connect($mail, $password)
    {

        if (isset($mail) and isset($password)) {
            $getmail = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
            $getmail->execute(array($mail));
            $mailcount = $getmail->rowCount();

            if ($mailcount == 1) {
                $getusers = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE mail = ? AND password = ?");
                $getusers->execute(array($mail, $password));
                $usersexist = $getusers->rowCount();

                if ($usersexist == 1) {
                    $usersinfo = $getusers->fetch();
                    $_SESSION['id'] = $usersinfo['id'];
                    $success = "Vous êtes connecté !";
                    return $success;
                } else {
                    $erreur = "Vos informations sont incorrect !";
                    return $erreur;
                }
            } else {
                $erreur = "E-Mail incorrect !";
                return $erreur;
            }
        } else {
            $erreur = "Veuillez remplir tout les champs !";
            return $erreur;
        }
    }














    public function disconnect()
    {
        session_destroy();
        $url = $_SERVER['PHP_SELF'];
        header("Refresh:0;" . $url);
    }











    public function delete()
    {
        $delete = $this->pdo->prepare('DELETE FROM utilisateurs WHERE id = ?');
        $delete->execute(array($_SESSION['id']));
        header('Location: ./index.php');
    }











    public function update($firstname, $lastname, $mail, $password, $phone, $avatarname, $avatartype, $avatartmp_name, $avatarerror, $avatarsize)
    {
        // if (!empty($firstname)) {
        if ($firstname != '') {
            $firstnamelenght = strlen($_POST['firstname']);
            if ($firstnamelenght >= 2 && $firstnamelenght <= 18) {
                $updatefirstname = $this->pdo->prepare("UPDATE utilisateurs SET firstname = ? WHERE id = ?");
                $updatefirstname->execute(array($firstname, $_SESSION['id']));
            }
        }

        if (!empty($lastname)) {
            $lastnamelenght = strlen($_POST['lastname']);
            if ($lastnamelenght >= 2 && $lastnamelenght <= 18) {
                $updatelastname = $this->pdo->prepare("UPDATE utilisateurs SET lastname = ? WHERE id = ?");
                $updatelastname->execute(array($lastname, $_SESSION['id']));
            }
        }

        if (!empty($mail)) {
            $getmail = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
            $getmail->execute(array($mail));
            $mailcount = $getmail->rowCount();
            if ($mailcount == 0) {
                $updatemail = $this->pdo->prepare("UPDATE utilisateurs SET mail = ? WHERE id = ?");
                $updatemail->execute(array($mail, $_SESSION['id']));
            }
        }

        if (!empty($password) && $password != '') {
            $updatepassword = $this->pdo->prepare("UPDATE utilisateurs SET password = ? WHERE id = ?");
            $updatepassword->execute(array($password, $_SESSION['id']));
        }

        if (!empty($phone)) {
            $updatephone = $this->pdo->prepare("UPDATE utilisateurs SET phone = ? WHERE id = ?");
            $updatephone->execute(array($phone, $_SESSION['id']));
        }

        if (isset($_FILES['file'])) {
            $tailleMax = 2097152;
            $extensionsValide = array('jpg', 'jpeg', 'gif', 'png');

            if ($avatarsize <= $tailleMax) {
                $extensionUpload = strtolower(substr(strrchr($avatarname, '.'), 1));
                if (in_array($extensionUpload, $extensionsValide)) {
                    $chemin = "../img/avatar/" . $_SESSION['id'] . "." . $extensionUpload;
                    $resultat = move_uploaded_file($avatartmp_name, $chemin);
                    if ($resultat) {
                        $modavatar = $this->pdo->prepare('UPDATE utilisateurs SET avatar = ? WHERE id = ?');
                        $modavatar->execute(array($_SESSION['id'] . "." . $extensionUpload, $_SESSION['id']));
                        $success = "Votre photo de profil a bien été modifié";
                        return $success;
                    } else {
                        $erreur = "Il y a eu une erreur pendant l'importation du fichier";
                        return $erreur;
                    }
                } else {
                    $erreur = "Votre photo de profil doit être au format jpg jpeg gif ou png";
                    return $erreur;
                }
            } else {
                $erreur = "Votre photo de profil ne doit pas dépasser 2 mo !";
                return $erreur;
            }
        }
    }










    public function isConnected()
    {
        if (isset($_SESSION['id'])) {
            return true;
        } else {
            return false;
        }
    }










    public function getAllInfos($getid)
    {
        $getallinfos = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE id = ?");
        $getallinfos->execute(array($getid));
        $getallinfosinfo = $getallinfos->fetch();
        return $getallinfosinfo;
    }



    public function getFirstname($firstname)
    {
        $getfirstname = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE firstname = ?");
        $getfirstname->execute(array($firstname));
        $getfirstnameinfo = $getfirstname->fetch();
    }

    public function getLastname($lastname)
    {
        $getlastname = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE lastname = ?");
        $getlastname->execute(array($lastname));
        $getlastnameinfo = $getlastname->fetch();
    }

    public function getmail($mail)
    {
        $getmail = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
        $getmail->execute(array($mail));
        $getmailinfo = $getmail->fetch();
    }

    public function getPhone($phone)
    {
        $getphone = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE phone = ?");
        $getphone->execute(array($phone));
        $getphoneinfo = $getphone->fetch();
    }

    public function getAllCountry()
    {
        $getallcountry = $this->pdo->prepare("SELECT * FROM country");
        $getallcountry->execute();
        $getallcountryinfo = $getallcountry->fetchall();
        return $getallcountryinfo;
    }


    public function forgetPassword($forgetmail)
    {
        if (!empty($forgetmail)) {

            if (filter_var($forgetmail, FILTER_VALIDATE_EMAIL)) {
                $mailexist = $this->pdo->prepare('SELECT * FROM utilisateurs WHERE mail = ?');
                $mailexist->execute(array($forgetmail));
                $mailexist_count = $mailexist->rowCount();
                if ($mailexist_count == 1) {
                    $user = $mailexist->fetch();
                    // $_SESSION['recup_mail'] = $forgetmail;
                    $recup_code = "";
                    for ($i = 0; $i < 8; $i++) {
                        $recup_code .= mt_rand(0, 9);
                    }

                    $recup_insert = $this->pdo->prepare('INSERT INTO recuperation(mail, code, id_utilisateur) VALUES (?, ?, ?)');
                    $recup_insert->execute(array($forgetmail, $recup_code, $user['id']));

                    $from = "lifeinwall@liwco.com";
                    $to = $forgetmail;
                    $subject = "Récupération de mot de passe - LiFEiNWaLL";
                    $message = '
                                            <html>
                                            <head>
                                             <title>Récupération de mot de passe - LiFe In WaLL</title>
                                             <meta charset="utf-8" />
                                            </head>
                                            <body>
                                             <font color="#aeb8ff";>
                                                 <div align="center">
                                                <table width="600px">
                                                     <tr>
                                                     <td>
                                                        
                                                        <div align="center">Bonjour <b>' . $user['firstname'] . ' ' . $user['lastname'] . '</b>,</div>
                                                        Voici votre code de récupération: <b>' . $recup_code . '</b>
                                                        A bientôt sur <a href="https://lifeinwall.alwaysdata.net">LiFe In WaLL</a> !
                                                        
                                                     </td>
                                                     </tr>
                                                     <tr>
                                                     <td align="center">
                                                        <font size="2">
                                                         Ceci est un email automatique, merci de ne pas y répondre
                                                        </font>
                                                     </td>
                                                     </tr>
                                                </table>
                                                 </div>
                                             </font>
                                            </body>
                                            </html>
                                             ';
                    $headers = "De :" . $from;
                    mb_send_mail($to, $subject, $message, $headers);

                    $success = "E-mail envoyé";
                    return $success;
                } else {
                    $erreur = "L'Adresse Mail n'existe pas";
                    return $erreur;
                }
            } else {
                $erreur = "Adresse mail incorrect";
                return $erreur;
            }
        } else {
            $erreur = "Veuillez entrer votre adresse mail !";
            return $erreur;
        }
    }
}
