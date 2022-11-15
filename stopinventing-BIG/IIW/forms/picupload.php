<link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <style>   

    body{
        background-color: turquoise;
    }

    input {
        display: block;
        box-sizing: border-box;
    }
    
    p{
        text-align: center;
        font-size: 50px;
        margin-top: 250px;
        border-bottom: 5px solid black;
    }

    table {  
        border-collapse: collapse;  
    }  

    .inline{   
        display: inline-block;   
           
        margin: 20px 0px;   
    }   
     
    input{   
        height: 34px;
        width: 100%; 
    }

    textarea{
        width: 100%;
    }

    button{
        height: 34px;
        margin: 0 auto;
        background-color:chartreuse;
        border: 2px solid black;
    }

    form {
    margin: auto 40%;
    padding: 50px;
    border: 2px solid black;
    border-radius: 50px;
    background-color:royalblue;
    }

    label{
        color: white;
        font-size: large;
    }

    </style> 
<?php
    if(!isset($_SESSION['id'])){
        echo '<p>A folytatáshoz <a href="./forms/loginform.php">jelentkezzen be!</a></p>';
    }
    else{
        echo '<form action="processors/picupload.php" method="POST" enctype="multipart/form-data">
    
        <label for="file">File (csak képet fogadunk el): </label>
        <input type="file" accept=".jpg,.png,.jpeg,.gif" name="file" id="file"/><br>
    
        <button type="submit">Hozzáadás</button>
    </form>';
    }
?> 
