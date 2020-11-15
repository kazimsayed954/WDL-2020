
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <style>
        .order_div {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative; 
          }
          .order_greet h1{
              text-align: center;
              font-size: 50px; 
              font-weight: bolder; 
              background-color: #f7b42c;
              background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);
              -webkit-background-clip: text;-webkit-text-fill-color: transparent;

          }
          .order_details{
            position: absolute;
            top: 30%;

          }

          .order_at p{
              font-family: sans-serif;
              font-size: 23px;
          }
          .order_stat{
            font-family: sans-serif;
            font-size: 18px;
          }

      </style>
    <title>Order</title>
  </head>
  <body class="text-center">
    <div class="order_div ">
    

      
      <?php
           include 'connect.php';
           session_start();
           if(isset($_POST['order_cart'])){
            $userId = $_SESSION['id'];
            $sql="SELECT * FROM `orders` WHERE `userId` = '$userId'";
            $res = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($res);
            if ($rows > '0') {
              while ($row = mysqli_fetch_assoc($res)) {

                ?>

                <div class="order_details">
                  <div class="order_greet">
                    <h1>Thank You For Shopping With Us.</h1>
                      </div>
                        <div>
                              
                          <div class="d-flex flex-row order_at pt-2 justify-content-center"><p class="mr-3">Order-id : <?php echo $row['order_id']; ?>,</p><p>Order-Date : 30 Sep 2020</p></div>
                            <div class="order_stat d-flex flex-column justify-content-center ">
                              <span>You have ordered <?php echo $row['count_items']; ?> items </span>
                              <p class="mt-1">Mode of Payment : <b><?php echo $row['mode_payment']; ?></b>  </p>
                            </div>
                          </div>
                        </div>
     <?php
              }
            }
          }
                
         
      ?>



    </div>
    





    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>