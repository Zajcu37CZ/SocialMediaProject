<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/MainPage.css">
    <link rel="stylesheet" href="./CSS/John.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <div class='container mt-5'>    
        <h1 class="Area">Game name</h1>
        <div class="chat-box" >
          <div class="chat-header">
          <button class="Deletion">Delete game</button>
          </div>
          <div class="chat-list">
          <input class="zprava_input" name="Name" placeholder="Jméno" type="text">
          <br>
          <br>
          <input class="zprava_input" name="Zprava" placeholder="Zpráva" type="text">
          <br>
          <br>
          <button class="Send" onclick="send()">Odeslat</button>

          <?php
          //(!mysql_select_db("chat")) // vybere databázi

          ?>
          <style>
            .Chat{
                background-color: black;
                opacity: 0.9;
                margin-left: 500px;
                color: white;

            }
            .zprava_input{
            margin-left: 460px;
            }
          </style>
          

