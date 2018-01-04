            <!DOCTYPE html>
            <html>
            <head>
                <title>Burger code</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link rel="stylesheet" href="general.css">
                <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            </head>
            <body>
                <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span>Burger code<span class="glyphicon glyphicon-cutlery"></span></h1>

                <!--MAIN DIV-->
                <div class="container admin">
                    <div class="row">
                        <h1><strong>Liste des items</strong>
                            <a href="insert.php" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Ajouter</a></h1>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Prix</th>
                                        <th>Catégories</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require 'database.php';
                                    $db = Database::connect();
                                    $statement = $db->query('SELECT items.id, items.name, items.description, items.price, categories.name AS category FROM items LEFT JOIN categories');
                                    while ($item= $statement ->fetch())
                                    {
                                                echo '<tr>';
                                                echo '<td>' . $item ['name'] .  '</td>';
                                                echo '<td>' . $item ['description'] .  '</td>';
                                                echo '<td>' . $item ['price'] .  '</td>';
                                                echo '<td>' . $item ['category'] .  '</td>';
                                                echo '<td width=300>';
                                                echo '<a  class="btn btn-default" href="view.php?id= ' .  $item ['id']  . ' ''>
                                                <span class="glyphicon glyphicon-eye-open"></span> voir </a>' ;

                                                echo '<a  class="btn btn-primary" href="update.php?id= ' . $item['id']  . ' ''>
                                                <span class="glyphicon glyphicon-pencil"></span>modifier</a>' ;

                                                echo '<a class="btn btn-danger" href="delete.php?id='  . $item['id']  . ' ''>
                                                <span class="glyphicon glyphicon-remove"></span> supprimer </a>' ;
                                                 echo '</td>';
                                                echo '</tr>' ;
                                    }

                                    ?>

                                    </tbody>
                                    </table>

                                    <!--END ROW-->
                                    </div>

                                    <!--END MAIN DIV-->
                                    </div>




                                    </body>
                                    </html>
