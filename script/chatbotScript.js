document.addEventListener("DOMContentLoaded", () => {
  const chatWindow = document.getElementById("chat_window");
  const toggleChat = document.getElementById("toggle_chat");
  const closeChat = document.getElementById("close_chat");
  const messagesContainer = document.getElementById("messages");
  const userInput = document.getElementById("user_input");
  const sendMessage = document.getElementById("send_message");

  addMessage("Bonjour, comment puis-je vous aider?", true);

  toggleChat.addEventListener("click", () => {
    chatWindow.classList.remove("hidden");
  });

  closeChat.addEventListener("click", () => {
    chatWindow.classList.add("hidden");
  });

  function sendUserMessage() {
    const message = userInput.value.trim();
    if (message) {
      addMessage(message, false);
      userInput.value = "";

      setTimeout(() => {
        addMessage("Reponse auto, pas de backend", true);
      }, 1000);
    }
  }

  function addMessage(text, isBot) {
    const messageDiv = document.createElement("div");
    messageDiv.classList.add("message");
    messageDiv.classList.add(isBot ? "bot" : "user");
    messageDiv.textContent = text;
    messagesContainer.appendChild(messageDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
  }

  sendMessage.addEventListener("click", sendUserMessage);

  userInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter" && !e.shiftKey) {
      e.preventDefault();
      sendUserMessage();
    }
  });
});
