<?php


class User extends Database
{

    private $pdo;

    private int $id;
    public string $login;
    public string $mail;
    public string $firstname;
    public string $lastname;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function register($firstname, $lastname, $mail, $confirm_mail, $password, $confirm_password, $phone, $country, $birthday)
    {

        if (!empty($firstname) and !empty($lastname) and !empty($mail) and !empty($confirm_mail) and !empty($password) and !empty($confirm_password) and !empty($phone) and !empty($country) and !empty($birthday)) {

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
                                $register = $this->pdo->prepare("INSERT INTO utilisateurs (firstname, lastname, mail, password, phone, country_code, birthday) VALUES (?, ?, ?, ?, ?, ?, ?)");
                                $register->execute(array($firstname, $lastname, $mail, $password, $phone, $country, $birthday));
                                $success = "Votre Compte à été créer";
                            }
                        } else {
                            $erreur = "Vos Mot de Passe ne sont pas identique";
                        }
                    } else {
                        $erreur = "Vos Adresse Mail ne sont pas identique";
                    }
                } else {
                    $erreur = "Votre nom doit contenir 2 a 18 caractères !";
                }
            } else {
                $erreur = "Votre prenom doit contenir 2 a 18 caractères !";
            }
        } else {
            $erreur = "Veuillez remplir tout les champs !";
        }
        if (isset($erreur)) {
            return $erreur;
        } elseif (isset($success)) {
            return $success;
        }
    }

    public function connection($mail, $password)
    {

        if (!empty($mail) and !empty($password)) {
            $getusers = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE mail = ? AND password = ?");
            $getusers->execute(array($mail, $password));
            $usersexist = $getusers->rowCount();

            if ($usersexist == 1) {
                $usersinfo = $getusers->fetch();
                $_SESSION['id'] = $usersinfo['id'];
                $success = "Vous êtes connecté !";
            }
        } else {
            $erreur = "Veuillez remplir tout les champs !";
        }
        if (isset($erreur)) {
            return $erreur;
        } elseif (isset($success)) {
            return $success;
        }
    }

    public function disconnect()
    {
        session_destroy();
        header('Location: ./index.php');
    }

    public function delete()
    {
        $delete = $this->pdo->prepare('DELETE FROM utilisateurs WHERE id = ?');
        $delete->execute(array($_SESSION['id']));
        header('Location: ./index.php');
    }

    public function update($login, $password, $mail, $firstname, $lastname)
    {
        if (!empty($_POST['prenom'])) {
            $prenomlenght = strlen($_POST['prenom']);
            if ($prenomlenght >= 2 && $prenomlenght <= 18) {
                $inserprenom = $this->pdo->prepare("UPDATE utilisateurs SET firstname = ? WHERE id = ?");
                $inserprenom->execute(array($firstname, $_SESSION['id']));
            }
        }

        if (!empty($_POST['nom'])) {
            $nomlenght = strlen($_POST['nom']);
            if ($nomlenght >= 2 && $nomlenght <= 18) {
                $insernom = $this->pdo->prepare("UPDATE utilisateurs SET lastname = ? WHERE id = ?");
                $insernom->execute(array($lastname, $_SESSION['id']));
            }
        }

        if (!empty($_POST['mail'])) {
            $getlogin = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
            $getlogin->execute(array($mail));
            $logincount = $getlogin->rowCount();
            if ($logincount == 0) {
                $inserlogin = $this->pdo->prepare("UPDATE utilisateurs SET mail = ? WHERE id = ?");
                $inserlogin->execute(array($login, $_SESSION['id']));
            }
        }

        if (!empty($_POST['login'])) {
            $loginlenght = strlen($_POST['login']);
            if ($loginlenght >= 2 && $loginlenght <= 18) {
                $getlogin = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE login = ?");
                $getlogin->execute(array($login));
                $logincount = $getlogin->rowCount();
                if ($logincount == 0) {
                    $inserlogin = $this->pdo->prepare("UPDATE utilisateurs SET login = ? WHERE id = ?");
                    $inserlogin->execute(array($login, $_SESSION['id']));
                }
            }
        }

        if (!empty($_POST['password'])) {
            $inserpassword = $this->pdo->prepare("UPDATE utilisateurs SET password = ? WHERE id = ?");
            $inserpassword->execute(array($password, $_SESSION['id']));
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
}
