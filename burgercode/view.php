<<<<<<< HEAD
<?php
require "database.php";
=======
  <?php
  require "database.php";
>>>>>>> 63f07a927b9501595e5ec925f393e049e08c10c0

if (!empty($_GET['id']))
{

  $id =checkInput($_GET['id']);
}


<<<<<<< HEAD
$db = Database::connect();
$statement = $db->prepare('SELECT items.id, items.name, items.description, items.price,items.image categories.name AS category FROM items LEFT JOIN categories ON items.category =categories.id WHERE items.id=?');


$statement->execute(array($id));
$item = $statement ->fetch();
Database::disconnect();
=======
  $db = Database::connect();
  $statement = $db->prepare('SELECT * FROM items WHERE items.id=?');


  $statement->execute([$id]);
  $item = $statement->fetch();
  Database::disconnect();
>>>>>>> 63f07a927b9501595e5ec925f393e049e08c10c0


function  checkInput ($data)
{
  $data= trim($data);
<<<<<<< HEAD
  $data= stripslaches($data);
  $data= htmlspacialchars($data);
=======
  $data= stripslashes($data);
  $data= htmlspecialchars($data);
>>>>>>> 63f07a927b9501595e5ec925f393e049e08c10c0
  return $data;
}

?>

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

<<<<<<< HEAD
    <div class="row">
      <div class="col-sm-6">
        <h1><strong>Voir un item</strong></h1>
        <br>
        <form>
          <div class="form-group">
            <label>Nom : </label><?php echo '' . $item['name']; ?>
          </div>

          <div class="form-group">
            <label>Description: </label><?php echo '' . $item['description']; ?>
          </div>

          <div class="form-group">
            <label>Prix : </label><?php echo '' .number_format((float)$item['price'],2,'.',''); ?>
          </div>

          <div class="form-group">
            <label>Catégorie : </label><?php echo '' . $item['category']; ?>
          </div>

          <div class="form-group">
            <label>Image : </label><?php echo '' . $item['image']; ?>
          </div>
        </form>
        <div class="form-actions">
          <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left">Retour</span></a>
        </div>


      </div>

      <div class="col-sm-6 site">
        <div class="thumbnail">
          <img src="<?php echo '../images/' . $item['image'];?>" alt="..">
          <div class="price"><?php echo '' .number_format((float)$item['price'],2,'.',''); ?> </div>
          <div class="caption">
            <h4>Menu classic</h4>
            <p>burger salalde frite </p>
            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>commander</a>
          </div>
        </div>
=======
                      <div class="row">
                        <div class="col-sm-6">
                        <h1><strong>Voir un item</strong></h1>
                          <br>
                              <form>
                                <div class="form-group">
                                  <label>Nom : </label><?= '' . $item['name']; ?>
                                </div>

                                <div class="form-group">
                                  <label>Description: </label><?= '' . $item['description']; ?>
                                </div>

                                <div class="form-group">
                                  <label>Prix : </label><?= '' .number_format((float)$item['price'],2,'.','') . ' €' ;?>
                                </div>

                                <div class="form-group">
                                  <label>Catégorie : </label><?= '' . $item['category']; ?>
                                </div>

                                <div class="form-group">
                                  <label>Image : </label><?= '' . $item['image']; ?>
                                </div>
                              </form>
                              <div class="form-actions">
                                <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left">Retour</span></a>
                              </div>


                      </div>
                       <div class="col-sm-6 site">
                        <div class="thumbnail">
                          <img src="<?= './images/' . $item['image'];?>" alt="..">
                          <div class="price"><?='' .number_format((float)$item['price'],2,'.','') . ' €';?> </div>
                        <div class="caption">
                          <h4>Menu classic</h4>
                          <p>burger salalde frite </p>
                           <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>commander</a>
                        </div>
                        </div>
>>>>>>> 63f07a927b9501595e5ec925f393e049e08c10c0

      </div>





















    </div>
  </body>
  </html>
