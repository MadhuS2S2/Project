<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title>Chat</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .message {
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
    }

    .user-message {
      background-color: #cce6ff;
    }

    .bot-message {
      background-color: #e6ffe6;
    }

    .message p {
      margin: 0;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="message user-message">
      <p>Hey There!</p>
    </div>
    <div id="chat-log"></div>
    <div>
      <input type="text" id="user-input" placeholder="Type your message">
      <button onclick="sendMessage()">Send</button>
    </div>
  </div>

  <script>
    function sendMessage() {
      var userInput = document.getElementById("user-input");
      var userMessage = userInput.value;

      if (userMessage.trim() !== "") {
        var chatLog = document.getElementById("chat-log");
        var userMessageDiv = document.createElement("div");
        userMessageDiv.className = "message user-message";
        userMessageDiv.innerHTML = "<p>" + userMessage + "</p>";
        chatLog.appendChild(userMessageDiv);

        // Simulate bot's response (replace with your own logic)
        var botMessageDiv = document.createElement("div");
        botMessageDiv.className = "message bot-message";
        botMessageDiv.innerHTML = "<p>Hi.</p>";
        chatLog.appendChild(botMessageDiv);

        userInput.value = "";
      }
    }
  </script>
</body>
</html>