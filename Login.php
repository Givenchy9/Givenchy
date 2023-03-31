<?php
//Session_start();

if(empty($_SESSION)){
    if(isset($_POST['submit'])){
        if($_POST['acc'] == 'wachtwoord' && $_POST['ww'] == 'wachtwoord')
            {
                $_SESSION['ingelogd'] = "ja";
                header(header: 'Location: ../GG/HOME/HomeZ.php');
            }
        } 
    } 
?>
<style>
    body{
        background-color: wheat;
        /* background-image: url("Foto/beautiful-orange-color-gradient-background-free-vector.jpg"); */
        background-repeat: no-repeat;
        background-size: cover;
    }
    #main{   
        margin-top: 9000px;
        margin: auto;
        padding-left: 10px;
        background-color: white;
        width: 180px;
        height: 200px;
        border: solid lightblue 5px;
        opacity: 0%;
        transition: 3s;
    }
    #acc{
        border: solid lightblue 3px;
        border-radius: 10px;
    }
    #ww{
        border: solid lightblue 3px;
        border-radius: 10px;
    }
    #submit{
        border-radius: 20px;
        background-color: lightblue;
        width: 170px;
    }
    label{
        color: black;
    }
    img{
        width: 100%;
        height: 100%;
    }
    button{
        margin-left: 45%;
        margin-top: 100px;
        background-color: lightblue;
        width: 150px;   
        opacity: 100%;
        height: 100px;
    }
    #lock{
        height: 50px;
        width: 50px;
        margin: auto;
    }
    img{
        height: 50px;
        width: 50px;
        margin: auto;
    }
    .front-img{
        position: absolute;
    }
    .front-img:hover{
        position: absolute;
        opacity: 0%;
    }
    .back-img{
        position: absolute;
    }
    #lock .back:hover{
        opacity: 0%;
    }
</style>
<script>
    function myFunction(){
        document.getElementById("main").style.marginTop = "200px";
        document.getElementById("main").style.opacity = "100%";
        document.getElementById("button").style.opacity = "0%";
    }
</script>
<body>
    <main id="main">
    <div id="lock">
        <img class="front-img" src="../GG/HOME/Extra/Foto/Home/Schermafbeelding 2023-03-28 102439.png">
        <img class="back-img" src="../GG/HOME/Extra/Foto/Home/Schermafbeelding 2023-03-28 102433.png">
    </div>
        <form action="" method= "post">
            <label>account</label><br>
            <input id="acc" name="acc" type="text" placeholder="account"><br><br>   
            <label>wachtwoord</label>
            <input id="ww" name="ww" type="password" placeholder="wachtwoord"><br><br>  
            <input id="submit" type="submit" name="submit" value="login">
        </form>
    </main>
    <button id="button" onclick="myFunction()">Login</button>
<body>


