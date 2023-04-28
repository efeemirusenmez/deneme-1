<?php
include('database/dbconnect.php');
?>

<html>
  <head>
  <title>üye kayit</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- mobil uyumlu kod -->
        <meta name="viewport" content ="width=device-width, initial-scale=1"/>

        <meta name="description" content="kedicik form "/>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"><!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </head>
  <body>
    <?php
//print_r($_POST);

    if( @$_POST['submit_control'] == 77 )
    
    {
      //  echo "geliyor";
        

            $username=@$_POST["username"];
            $password =@$_POST["password"];
             

            if( $username=="") $k_hatalar .= "ad yaziniz.";    
            if( $password=="") $k_hatalar .= "mail yaziniz.";
            
            if($k_hatalar!=""){
                echo $k_hatalar;
            }

            else if(@$_POST["k_password"]==@$_POST["k_password2"]) 
            {
                $ssss="INSERT INTO users(username, password) 
                VALUES(
                     '".$username."',
                     '".$password."',
                     '".md5($password)."'
                                )";
                    
                
                $conn->query($ssss);
                    
                echo "<span style='color:green;'>Formunuz basarili.</span>";
                print_r($_POST);
                
            }
            else echo "Şifre hatali";
            
    }
    ?>
    <br>
    <h2 style="text-align:center">moNkeFT</h2>
    <div class="cotainer p-5">
        <div class="card p-5">
        
        <form   action="index.php?sayfa=login_post" method="POST">

            <input type="hidden" name="submit_control" value="77">
            <form action="index.php?sayfa=iletisim_post" method="post" class="login ozellogin">
          
            <div class="mb-3">
                <label for="üadi">Username </label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username" value="<?php echo @$_POST["username"]?>">   
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"placeholder="password" value="<?php echo @$_POST["password"]?>">
            </div>
                      
            
            <button type="submit" class="btn btn-primary" id="kgonder" name="k_gonder" >Send</button>
            <button  type="reset" class="btn btn-primary" >Reset</button>
           
        </form> 

        </div>
    </div>

   </body>
</html>
