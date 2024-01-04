<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    body {
  font-family: 'Syne Mono', Monospace;
  background-image: Url(https://media.wired.com/photos/5c9d35c635d3fb65db9a33b7/191:100/pass/Culture_Matrix_DigitalRain.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
:root {
    --shade: rgba(0, 200, 0, 0.8);

}

#title {
  background-color: green;
  border-style: solid;
    border-color: black;
    border-width: 5px;
    text-align: center;
    
  
}
#description {
  background-color: var(--shade);
  opacity: 90%;
}
.background-shade {
   margin: auto;
   width: 80%;
   border-radius: 5px;
   background-color: var(--shade);
   animation: pulse 5s infinite;
}
@keyframes pulse {
  50% {box-shadow: 5px 5px 10px rgba(0, 200, 0, 0.9)}
}
#survey-form {
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    height: 700px;
    background-color: ;
    border-color: ;
    border-width: 10px;
    border-style: ;
    padding: 30px;
    margin: 20px;
}
.form {
  background-color: ;
  opacity: 100% !important;
  
  border-width: ;
  border-style: ;
  font-size: 20px;
  
}

#comments {
  min-height: 120px;
  width: 100%;
  
  
}
.submit-b {
    
  width: 300px;
  height: 60px;
 
  background: red;
  border-radius: 2px;
  cursor: not-allowed;
}

</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h1 id= "title" class="text-light">
  BOOST </h1>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Syne+Mono">



  <!-- <p id="description"> In this course I will teach you how easy it can be to hack. There are so many ways to hack and so many ways to utilize informantion that people gladly give out on a dialy basis. To access this course please first fill out this quick form so I can send you any updates in the future.
    THANKS!
  </p> -->
  
<div class="background-shade">
<form action="" method="post">

<center>
<div class="form-group col-md-4">
  <label for=""></label>
  <input type="text" class="form-control" name="link" id="" aria-describedby="helpId" placeholder="Enter Your Link" required>

  <label for=""></label>
  <input type="number" class="form-control" name="number" id="" aria-describedby="helpId" placeholder="Enter Your boost amount" required>

</div>


<button type="submit" class="btn btn-danger m-5" name="sub">Boom 😝</button>




    
</center>

<div style="height:auto;width:100%"></div>

</form>






<?php






if(isset($_POST['sub'])){

  ?>

  
<center>

<div class="progress">

<!-- Progress bar holder -->
<div id="progress" style="width:100%;border:1px solid #ccc;" class="progress-bar progress-bar-striped progress-bar-animated bg-danger"></div>

</div>
<!-- Progress information -->
<div id="information" style="color:#ffffff" > </div>

<br>  
<br>  
<br>  
<br>  


</center>
  <form action="" method="post">
<button type="submit" class="btn btn-danger m-5" name="stop">Stop 😝</button>
</form>

<?php

  $link = $_POST['link'];
  $number = $_POST['number'];




// Total processes
// $total = 10;
// Loop through process
for($i=0; $i<=$number; $i++){
    // Calculate the percentation
    $percent = intval($i/$number * 100)."%";

    if(isset($_POST['stop'])){

      break;
    }

    ?>

<iframe src="<?php echo  $link  ?>" frameborder="0"  style="height:200px;width:200px" ></iframe>

<?php
    
    // Javascript for updating the progress bar and information
    echo '<script language="javascript">
    document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#00ff00;\">&nbsp;</div>";
    document.getElementById("information").innerHTML="'.$i.' row(s) processed.";
    </script>';
    

// This is for the buffer achieve the minimum size in order to flush data
    echo str_repeat(' ',1024*64);
    

// Send output to browser immediately
    flush();
    

// Sleep one second so we can see the delay
    sleep(1);
}
// Tell user that the process is completed
echo '<script language="javascript">

document.getElementById("information").innerHTML="Process completed";


</script>';

}
            
        
?>


</div>

  


<?php

?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


