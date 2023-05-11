<!DOCTYPE HTML>
<html lang="en">  

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sivan Dolev, Hila Cohen ,Shahar Shtokhamer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/config.css">

</head>

<body>
    <header>
       <nav class="navbar navbar-expand-lg" style="background-color: #ffe3bd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="https://www.dogstrust.org.uk/images/400x300/assets/2022-04/dog2.png" width="120" height="80" alt=""></a>
        <a class="navbar-brand" href="#">AdoptMe</a>
        
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../../index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/Addoption.html">Adoption</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/Foster.html">Foster</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/Contact.html">Contact</a>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
     
    
          
    
              
                </nav>
        </header>

        <main>
            
           
<?php
$servername = "localhost";
$username = "shaharst_shahar";
$password = "sh984321";
$dbname = "shaharst_dogs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "select counter , name, age, breed, img, gender from details";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
   
     echo "<style>
     table { text-align:right;
             background-color:white;
             border: 2px blue solid;
            }
     
     tr { color: red;
          border: 2px blue solid;
          align-items: left;

        }
     td { color: red;
         border: 2px blue solid;
        align-items: right;
        }
 
     body,html{ height: 100%;
    background-color:  #fafafa;}

*{box-sizing: border-box; margin: 0px;}


    p{
        text-align: center;
    }
    footer {
        text-align: center;
        color: white;
        width: 100%;
        background-color: #ffe9e3; 
        clear: both;
    
      }
      
      footer {
    text-align: center;
    background-color: #ffe9e3; 
 
  }
    .logo{
        width: 3%;
        height: 3%;
    }
    h2{
        color: lightsalmon;
        text-align: center;
    }
    #container{
        display: flex;
        align-items: center;
        justify-content: center;
         height:20%;
        
    }
    .image{
        float:left;
        width:33%;
        height:100%;
    }
    .text{
        font-size:20px;
        text-align: center;
    }
    
    
    #Addoption{
        background-color: DarkSalmon;
        align-items: center;

}
       
    
 }
     </style>
  
     ";
     // output data of each row
     while($row = $result->fetch_assoc()) 
     {
          
           echo "
        <h2>Details about the dog: </h2>

                   <p> <tr>
                        <td>  name:  </td 
                        <td>" . $row["name"]. " </td> <br> <br>
                    </tr>
                    <tr>
                        <td>  age:  </td> 
                        <td>" . $row["age"]. "</td> <br> <br>
                    </tr>
                    <tr>
                        <td>  brand: </td> 
                        <td>" . $row["breed"]. "</td> <br> <br>
                    </tr>
                    <tr>
                        <td> gender:</td> 
                        <td>" . $row["gender"]. "</td> <br> <br>
                    </p> </tr
                        
                     

                        
                    ";
           
           
     }
     echo "</table>";
}else 
{
     echo "0 results";
}

?>    

                        
<srction>
   <div id="container">
    <p>
        Oli is a highly intelligent and energetic breed known for its trainability and loyalty. He is a young, active dog who would make a great companion for someone who enjoys outdoor activities and is willing to provide him with plenty of exercise and mental stimulation. Border Collies are excellent at obedience and agility training, and Oli would thrive in a home where he can learn new things and bond with his owner. He is also a loving and affectionate breed, known for their strong bond with their human family, and would make a great addition to any household as a loving and loyal companion. Adopting Oli would bring a lot of joy and companionship to your life, and you would also be giving him a loving forever home.
    </p>
     </div>
    <p>
                                <img src="../../img/dog1.jpg" >
                                <img src="../../img/oli1.jpeg" >
                                <img src="../../img/oli2.jpg" >
      <br> <br>
   
    
</section>
            
            
            
     
           <button id="Addoption" class="btn btn-primary btn-md" type="submit">To Addoption!</button>
    
            
            
            
</main>
 
   <footer>
     
      <img class="logo"src="../../img/facebook-square-color-icon.png" width="50" height="50" alt="">
      <img class="logo"src="../../img/instegram-icon.png" width="50" height="50" alt="">
      <img class="logo"src="../../img/WhatsApp.svg.png"  width="50" height="50" alt="" >
       <p> Email: <a href="mailto:hege@example.com">hege@example.com</a> <br>
         
    </footer>

   <script>
        var button = document.getElementById("Addoption");
        button.addEventListener("click", function() 
        {
            window.location.href="../html/Contact.html"; 
        });
    </script>
 
</body>
</html>