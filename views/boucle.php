<?php

require_once("../includes/class.autoload.inc.php");

?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Dropdown Category Subcategory List in PHP MySQL using ajax - Tutsmake.COM</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-primary">Dynamic Dropdown Category Subcategory List in PHP MySQL using ajax - Tutsmake.COM</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">

                                <tr>
                                    <td><label for="pet-select">Choisir une categotrie</label></td>
                                    <td>

                                        <select name="id_categorie" class="samir" id="per1">
                                            <option selected="selected">un seul choix</option>
                                            <?php $categories = new Categorie(); ?>

                                            <?php if ($categories->getCate()) : ?>
                                                <?php foreach ($categories->getCate() as $categorie) : ?>
                                                    <option value="<?= $categorie['id_categorie'] ?>"><?= $categorie['nom_categorie'] ?></option>

                                                <?php endforeach; ?>
                                            <?php else : ?>
                                            <?php endif; ?>
                                        </select>
                                    </td>

                                </tr>
                                <label for="CATEGORY-DROPDOWN">Category</label>
                                <select class="form-control" id="category-dropdown">
                                    <option value="">Select Category</option>
                                    <?php
                                    require_once "db.php";
                                    $result = mysqli_query($conn, "SELECT * FROM categories where parent_id = 0");
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row["category"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="SUBCATEGORY">Sub Category</label>
                                <select class="form-control" id="sub-category-dropdown">
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
            $('.samir').on('click', function() {
                var category_id = $(this).value;
                alert(category_id);
                // $.ajax({
                //     url: "fetch-subcategory-by-category.php",
                //     type: "POST",
                //     data: {
                //         category_id: category_id
                //     },
                //     cache: false,
                //     success: function(result) {
                //         $("#sub-category-dropdown").html(result);
                //     }
                // });
            });
    </script>
</body>

</html>