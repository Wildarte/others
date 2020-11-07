<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId"><br><Br>

    <label for="">email</label>
    <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId"><br><br>

    <label for="">website</label>
    <input type="text" name="website" id="" class="form-control" placeholder="" aria-describedby="helpId"><br><br>

    <label for="">comment</label>
    <input type="text" name="comment" id="" class="form-control" placeholder="" aria-describedby="helpId"><br><br>

    <label for="">gender</label>
    <input type="text" name="gender" id="" class="form-control" placeholder="" aria-describedby="helpId"><br><br>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
