<?php
require("partions/nav.php");
// Call data file It array file
require("./data/Data.php");
?>

<div class="mt-4 p-5 bg-primary text-white rounded">
  <h1>Profile</h1>
  <p>This is CV Profile For company</p>
</div>
<div class="row">
    <?php foreach ($items as $item): ?>
    <div class="col-sm-3">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="./img/profil.png" alt="test image">
            <div class="card-body">
                <h4 class="card-title"><?php echo $item['name']; ?></h4>
                <p class="card-text"><?php echo $item['work']; ?></p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
    </div>
    <?php endforeach?>


</div>
<!-- use this to display information -->
<?php
require("partions/footer.php");
?>