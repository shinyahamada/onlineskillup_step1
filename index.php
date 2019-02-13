<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>PHPのサンプル</title>
  </head>
  <body>
    <?php
      if(isset($_POST['comment']) && isset($_POST['user_name']) && isset($_POST['user_email'])){
        $name = $_POST['user_name'];
        $mail = $_POST['user_email'];
        $comment = htmlspecialchars($_POST['comment']);
        print("Your message is 「 ${comment} 」です" );
        print("Your name is 「 ${name} 」です" );
        print("Your e-mail is 「 ${mail} 」です" );
      }else{
    ?>

    <p>コメントして下さい</p>
    <form class="" action="index.php" method="POSt">
      <input type="" name="comment" placeholder="comment" value="">
      <input type="text" name="user_name" placeholder="name" value="">
      <input type="text" name="user_email" placeholder="e-mail" value="">

      <input type="submit" name="" value="submit">
    </form>

    <?php
      }
     ?>
  </body>
</html>
