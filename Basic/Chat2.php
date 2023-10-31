<!DOCTYPE html>
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

    .sender1-message {
      background-color: #cce6ff;
    }

    .sender2-message {
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
    <div id="chat-log"></div>
    <div>
      <input type="text" id="sender1-input" placeholder="Sender 1's message">
      <button onclick="sendMessage('sender1')">Send</button>
    </div>
    <div>
      <input type="text" id="sender2-input" placeholder="Sender 2's message">
      <button onclick="sendMessage('sender2')">Send</button>
    </div>
  </div>

  <script>
    function sendMessage(sender) {
      var userInput;

      if (sender === "sender1") {
        userInput = document.getElementById("sender1-input");
      } else if (sender === "sender2") {
        userInput = document.getElementById("sender2-input");
      }

      var userMessage = userInput.value;

      if (userMessage.trim() !== "") {
        var chatLog = document.getElementById("chat-log");
        var userMessageDiv = document.createElement("div");

        if (sender === "sender1") {
          userMessageDiv.className = "message sender1-message";
        } else if (sender === "sender2") {
          userMessageDiv.className = "message sender2-message";
        }

        userMessageDiv.innerHTML = "<p>" + userMessage + "</p>";
        chatLog.appendChild(userMessageDiv);

        userInput.value = "";
      }
    }
  </script>
</body>
</html>
