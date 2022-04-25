<?php


class User extends DataBase
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


    public function register($firstname, $lastname, $mail, $confirm_mail, $password, $confirm_password, $phone, $city, $postal_code, $birthday)

    {

        if (isset($firstname) and isset($lastname) and isset($mail) and isset($confirm_mail) and isset($password) and isset($confirm_password) and isset($phone) and isset($city) and isset($postal_code) and isset($birthday) and $birthday != '0000-00-00') {

            $firstnamelenght = strlen($firstname);

            if ($firstnamelenght >= 2 && $firstnamelenght <= 18) {

                $lastnamelenght = strlen($lastname);

                if ($lastnamelenght >= 2 && $lastnamelenght <= 18) {

                    if ($mail == $confirm_mail) {

                        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                            if ($password == $confirm_password) {
                                $getmail = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
                                $getmail->execute(array($mail));
                                $getmailcount = $getmail->rowCount();
                                if ($getmailcount == 0) {
                                    $register = $this->connect()->prepare("INSERT INTO utilisateurs (firstname, lastname, mail, password, phone, city, postal_code, birthday, avatar, admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                    $register->execute(array($firstname, $lastname, $mail, $password, $phone, $city, $postal_code, $birthday, 'avatar.png', 0));
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
                            $erreur = "Votre E-mail n'est pas correct";
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




    public function connection($mail, $password)
    {

        if (isset($mail) and isset($password)) {
            $getmail = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
            $getmail->execute(array($mail));
            $mailcount = $getmail->rowCount();

            if ($mailcount == 1 and filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $getusers = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE mail = ? AND password = ?");
                $getusers->execute(array($mail, $password));
                $usersexist = $getusers->rowCount();

                if ($usersexist == 1) {
                    $usersinfo = $getusers->fetch();
                    $_SESSION['id'] = $usersinfo['id_utilisateur'];
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
        $delete = $this->connect()->prepare('DELETE FROM utilisateurs WHERE id_utilisateur = ?');
        $delete->execute(array($_SESSION['id']));
        header('Location: ./index.php');
    }


    public function update($firstname, $lastname, $mail, $password, $phone, $avatarname, $avatartype, $avatartmp_name, $avatarerror, $avatarsize)
    {
        $getallinfos = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE id_utilisateur = ?");
        $getallinfos->execute(array($_SESSION['id']));
        $getallinfosinfo = $getallinfos->fetch();

        if (!empty($firstname) && $getallinfosinfo['firstname'] != $firstname) {
            $firstnamelenght = strlen($_POST['firstname']);
            if ($firstnamelenght >= 2 && $firstnamelenght <= 18) {
                $updatefirstname = $this->connect()->prepare("UPDATE utilisateurs SET firstname = ? WHERE id_utilisateur = ?");
                $updatefirstname->execute(array($firstname, $_SESSION['id']));
                $successfirst = "Votre prenom a bien été modifié !";
                // return $successfirst;
            } else {
                $erreurfirst = "Votre prenom est soit trop court ou soit trop long !";
                // return $erreurfirst;
            }
        } else {
            $erreurfirst = "Votre prenom n'a pas été modifié !";
            // return $erreurfirst;
        }

        if (!empty($lastname) && $getallinfosinfo['lastname'] != $lastname) {
            $lastnamelenght = strlen($_POST['lastname']);
            if ($lastnamelenght >= 2 && $lastnamelenght <= 18) {
                $updatelastname = $this->connect()->prepare("UPDATE utilisateurs SET lastname = ? WHERE id_utilisateur = ?");
                $updatelastname->execute(array($lastname, $_SESSION['id']));
                $successname = "Votre nom a bien été modifié !";
                // return $successname;
            } else {
                $erreurname = "Votre nom est soit trop court ou soit trop long !";
                // return $erreurname;
            }
        } else {
            $erreurname = "Votre nom n'a pas été modifié !";
            // return $erreurname;
        }

        if (!empty($mail) && $getallinfosinfo['mail'] != $mail) {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $getmail = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
                $getmail->execute(array($mail));
                $mailcount = $getmail->rowCount();
                if ($mailcount == 0) {
                    $updatemail = $this->connect()->prepare("UPDATE utilisateurs SET mail = ? WHERE id_utilisateur = ?");
                    $updatemail->execute(array($mail, $_SESSION['id']));
                    $successmail = "Votre E-mail a bien été modifié !";
                    // return $successmail;
                } else {
                    $erreurmail = "Nous n'avons pas pu changé votre E-mail !";
                    // return $erreurmail;
                }
            } else {
                $erreur = "Votre E-mail n'est pas correct";
                return $erreur;
            }
        } else {
            $erreurmail = "Votre E-mail n'a pas été modifié !";
            // return $erreurmail;
        }

        if (!empty($password) && $getallinfosinfo['password'] != $password && $password != 'da39a3ee5e6b4b0d3255bfef95601890afd80709') {
            $updatepassword = $this->connect()->prepare("UPDATE utilisateurs SET password = ? WHERE id_utilisateur = ?");
            $updatepassword->execute(array($password, $_SESSION['id']));
            $successpass = "Votre mot de passe a bien été modifié !";
            // return $successpass;
        } else {
            $erreurpass = "Votre mot de passe n'a pas été modifié !";
            // return $erreurpass;
        }

        if (!empty($phone) && $getallinfosinfo['phone'] != $phone) {
            $updatephone = $this->connect()->prepare("UPDATE utilisateurs SET phone = ? WHERE id_utilisateur = ?");
            $updatephone->execute(array($phone, $_SESSION['id']));
            $successphone = "Votre numero de téléphone a bien été modifié !";
            // return $successphone;
        } else {
            $erreurphone = "Votre numero de téléphone n'a pas été modifié !";
            // return $erreurphone;
        }

        if (isset($_FILES['file'])) {
            $tailleMax = 2097152;
            $extensionsValide = array('jpg', 'jpeg', 'gif', 'png');

            if ($avatarsize <= $tailleMax) {
                $extensionUpload = strtolower(substr(strrchr($avatarname, '.'), 1));
                if (in_array($extensionUpload, $extensionsValide)) {
                    // $chemin = "../img/avatar/" . $_SESSION['id'] . "." . $extensionUpload;
                    $chemin = "../views/img/avatar/" . $_SESSION['id'] . "." . $extensionUpload;
                    $resultat = move_uploaded_file($avatartmp_name, $chemin);
                    if ($resultat) {
                        $nameofavatar = $_SESSION['id'] . "." . $extensionUpload;
                        $modavatar = $this->connect()->prepare("UPDATE utilisateurs SET avatar = ? WHERE id_utilisateur = ?");
                        $modavatar->execute(array($nameofavatar, $_SESSION['id']));
                        $successfile = "Votre photo de profil a bien été modifié !";
                        // return $successfile;
                    } else {
                        $erreurfile = "Il y a eu une erreur pendant l'importation du fichier !";
                        // return $erreurfile;
                    }
                } else {
                    $erreurfile = "Votre photo de profil doit être au format jpg jpeg gif ou png !";
                    // return $erreurfile;
                }
            } else {
                $erreurfile = "Votre photo de profil ne doit pas dépasser 2 mo !";
                // return $erreurfile;
            }
        } else {
            $erreurfile = "Votre photo de profil n'a pas été modifié !";
            // return $erreurfile;
        }

        if (isset($successfirst)) {
            $messfirst = $successfirst;
        } elseif (isset($erreurfirst)) {
            $messfirst = $erreurfirst;
        }
        if (isset($successname)) {
            $messname = $successname;
        } elseif (isset($erreurname)) {
            $messname = $erreurname;
        }
        if (isset($successmail)) {
            $messmail = $successmail;
        } elseif (isset($erreurmail)) {
            $messmail = $erreurmail;
        }
        if (isset($successpass)) {
            $messpass = $successpass;
        } elseif (isset($erreurpass)) {
            $messpass = $erreurpass;
        }
        if (isset($successphone)) {
            $messphone = $successphone;
        } elseif (isset($erreurphone)) {
            $messphone = $erreurphone;
        }
        if (isset($successfile)) {
            $messfile = $successfile;
        } elseif (isset($erreurfile)) {
            $messfile = $erreurfile;
        }

        return  $messfirst . ',' . $messname . ',' . $messmail . ',' . $messpass . ',' . $messphone . ',' . $messfile;
    }










    public function isConnected()
    {
        if (isset($_SESSION['id'])) {
            return true;
        } else {
            return false;
        }
    }



    public function getClient()
    {


        $sql = "SELECT * FROM utilisateurs";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }






    public function getAllInfos($getid)
    {
        $getallinfos = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE id_utilisateur = ?");
        $getallinfos->execute(array($getid));
        $getallinfosinfo = $getallinfos->fetch();
        return $getallinfosinfo;
    }



    public function getFirstname($firstname)
    {
        $getfirstname = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE firstname = ?");
        $getfirstname->execute(array($firstname));
        $getfirstnameinfo = $getfirstname->fetch();
    }

    public function getLastname($lastname)
    {
        $getlastname = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE lastname = ?");
        $getlastname->execute(array($lastname));
        $getlastnameinfo = $getlastname->fetch();
    }

    public function getmail($mail)
    {
        $getmail = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
        $getmail->execute(array($mail));
        $getmailinfo = $getmail->fetch();
    }

    public function getPhone($phone)
    {
        $getphone = $this->connect()->prepare("SELECT * FROM utilisateurs WHERE phone = ?");
        $getphone->execute(array($phone));
        $getphoneinfo = $getphone->fetch();
    }

    public function forgetPassword($forgetmail, $getid)
    {
        if (!empty($forgetmail)) {

            if (filter_var($forgetmail, FILTER_VALIDATE_EMAIL)) {
                $mailexist = $this->connect()->prepare('SELECT * FROM utilisateurs WHERE mail = ?');
                $mailexist->execute(array($forgetmail));
                $mailexist_count = $mailexist->rowCount();
                if ($mailexist_count == 1) {
                    $user = $mailexist->fetch();
                    // $_SESSION['recup_mail'] = $forgetmail;
                    $recup_code = "";
                    for ($i = 0; $i < 8; $i++) {
                        $recup_code .= mt_rand(0, 9);
                    }

                    $recup_insert = $this->connect()->prepare('INSERT INTO recuperation(mail, code, id_utilisateur) VALUES (?, ?, ?)');
                    $recup_insert->execute(array($forgetmail, $recup_code, $getid));

                    $from = "thehavana@gmail.com";
                    $to = $forgetmail;
                    $subject = "Récupération de mot de passe - Havana";
                    $message = '
                                            <html>
                                            <head>
                                             <title>Récupération de mot de passe - Havana</title>
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
                                                        A bientôt sur <a href="">Havana</a> !
                                                        
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
                    mail($to, $subject, $message, $headers);

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

// 
