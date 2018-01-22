<?php
require "database.php";

$nameError = $descriptionError= $priceError = $categoryError = $imageError= $name = $description = $price = $category = $image= "";

if(!empty($_POST))
{
   $name = checkInput($_POST['name']);
   $description = checkInput($_POST['description']);
   $price= checkInput($_POST['price']);
   $category =checkInput($_POST['category']);
   $image =checkInput($_FILES['image']['name']);
   $imagePath ='images/' .basename($image);
   $imageExtension = pathinfo($imagePath,PATHINFO_EXTENSION);
    $isSucces = true;
    $isUploadSucces = false;
  }

if(empty($name))
{
  $nameError ='ce champ ne peut pas ëtre vide';
  $isSucces =false;
}
if(empty($description))
{
  $descriptionError ='ce champ ne peut pas ëtre vide';
  $isSucces =false;
}
if(empty($price))
{
  $priceError ='ce champ ne peut pas ëtre vide';
  $isSucces =false;
}

if(empty($category))
{
  $categoryError ='ce champ ne peut pas ëtre vide';
  $isSucces =false;
}

if(empty($name))
{
  $nameError ='ce champ ne peut pas ëtre vide';
  $isSucces =false;
}


if(empty($image))
{
  $imageError ='ce champ ne peut pas ëtre vide';
  $isSucces =false;
}
//dans le cas de téléchagrgement on check les paramètres de l'image
      else
      {
         $isUploadSucces =true;
          if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif")
          {
              $imageError ='les fichiers autorisée sont: .jpeg, .png, .gif';
              $isUploadSucces = false;
          }

           if (file_exists($imagePath)) {

              $imageError ='le fichier existe déjà';
              $isUploadSucces = false;

           }








      }













function  checkInput ($data)
{
  $data= trim($data);
  $data= stripslashes($data);
  $data= htmlspecialchars($data);
  return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
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
                          <h1><strong>Insert un item</strong></h1>
<form class="form" action="insert.php" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for ="nom">Nom </label>
<input type="text"class="form-control" id="name" name="name" placeholder="nom" value="<?php echo $name;?>">
<span class="help-inline"><?php echo $nameError; ?></span>
 </div>


<div class="form-group">
<label for ="name">Description:</label>
<input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $description;?>">
<span class="help-inline"><?php echo $descriptionError; ?></span>
</div>


<div class="form-group">
<label for ="price">Prix:</label>
<input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Prix" value="<?php echo $price;?>">
<span class="help-inline"><?php $priceError; ?></span>
</div>

<div class="form-group">
<label for ="category">Catégories</label>

<select class="form-control" id="category" name="category" placeholder="Menus">

<?php
$db = Database::connect();
foreach($db->query('SELECT * FROM categories') as $row)
{
      echo '<option value="'.$row['id']. '">' .$row['name']. '</option>';
}
Database::disconnect();
?>
</select>


<span class="help-inline"><?php $categoryError; ?></span>
</div>


<!-- <div class="form-group">
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

-->
  </form>

  <div class="form-actions">
    <button type="submit" class="btn btn-succes"><span class="glyphicon glyphicon-pencil">Ajouter</span></button>
    <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left">Retour</span></a>
  </div>
</div>

</div>
</body>
</html>
