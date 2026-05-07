<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = ($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_assoc($query);

    if($data){

    $_SESSION['user'] = $data;

    echo "<script>window.location='index.php'</script>";

}
}
?>

<form method="POST">
  <div class="mb-3">
    <label>Username</label>
    <input type="text" name="username" class="form-control">
  </div>

  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
  </div>

  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>