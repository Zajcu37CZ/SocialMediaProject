<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/MainPage.css">
    <script src="./JS/jquery-3.7.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <header>  
    <?php
      include "./PHP/navbar.php"
     ?>
  </header>
  <Main>
    <div class='container mt-5'>    
        <h1 class="Area">Choose area</h1>
        <div class="chat-box">
          <div class="chat-header">
            <h3>Chats</h3>
            <button type="button" class="btn btn-primary btn-new-chat">New Chat</button>
          </div>
          <div class="chat-list">
            <ul>
                <a href="#">
                  <div>
                    <img alt="Preview1" src="https://via.placeholder.com/150" style="border-radius: 20%;">
                  </div>
                  <div class="chat-name">
                    <h4><a href="John.php">John Doe</h4>
                    <p>Poslední zpráva byla dne:</p>
                  </div>
                </a>
            </ul>
          </div>
        </div>
    </div>
  </Main>
  <footer>
   <p class="Copy">Všechna práva rezervována</p>
  </footer>
</body>
</html>