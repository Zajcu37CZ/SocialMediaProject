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
    <?php
     include "./PHP/navbar.php"
    ?>
    <div class='container mt-5'>    
        <h1 class="Area">Choose area</h1>
        <div class="chat-box">
          <div class="chat-header">
            <h3>Chats</h3>
            <button type="button" class="btn btn-primary btn-new-chat">New Chat</button>
          </div>
          <div class="chat-list">
            <ul>
              <li>
                <a href="#">
                  <div class="chat-avatar">
                    <img src="https://via.placeholder.com/150" alt="Avatar">
                  </div>
                  <div class="chat-name">
                    <h4>John Doe</h4>
                    <p>Last message: 12:00 PM</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="chat-avatar">
                    <img src="https://via.placeholder.com/150" alt="Avatar">
                  </div>
                  <div class="chat-name">
                    <h4><a href="John.html">Jane Doe</a></h4>
                    <p>Last message: 11:00 AM</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="chat-avatar">
                    <img src="https://via.placeholder.com/150" alt="Avatar">
                  </div>
                  <div class="chat-name">
                    <h4>Mary Smith</h4>
                    <p>Last message: 10:00 AM</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </div>
</body>
</html>