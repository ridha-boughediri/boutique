 <!-- <tr>
                        <td><label for="pet-select">Choisir une categotrie et un sous categorie</label></td>
                        <td>
                            
                        <select name="id_categorie">

                        <optgroup selected="selected">un seul choix</optgroup>
                        <?php $categories = new Categorie(); ?>

                        <?php if ($categories->getCate()) : ?>
                        <?php $sous_categories = new Souscategorie(); ?>
                        <?php foreach ($categories->getCate() as $categorie) : ?>


                            <?php $souscate = $sous_categories->Getid($categorie['id_categorie']);
                            var_dump($souscate); ?>

                            <optgroup name="<?= $categorie['id_categorie'] ?>" label="<?= $categorie['nom_categorie'] ?>">
                            <?php foreach ($souscate as $categorie) : var_dump($categorie);?>
                            <option value="<?= $categorie['nom_sous_catégorie'] ?>" name="<?= $categorie['id_sous_catégorie'] ?>" ><?= $categorie['nom_sous_catégorie'] ?></option>


                                </option>
                            <?php endforeach; ?>
                            </optgroup>
                        <?php endforeach; ?>

                        </select>
                        <?php else : ?>
                        <?php endif; ?>           
                    </td>
                        
                    </tr> -->