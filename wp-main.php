<!DOCTYPE html>
<html>
  <head>
    <title>Tehtris Rework</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="stylesheet" href="style/chatbot.css" />
    <link rel="stylesheet" href="style/navbar.css" />
    <link rel="stylesheet" href="style/searchBar.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body class="arimo">
    <div class="main_container">
      <div class="main_colors">
        <h2>Trois couleurs principales:</h2>
        <div class="colors">
          <div class="color_1"></div>
          <div class="color_2"></div>
          <div class="color_3"></div>
        </div>
      </div>
      <!-- Search engine component -->
      <div class="">
        <h2>Composant retravaillé N°1: [fonctionnalité technique]</h2>
        <p>
          Un search engine qui permet à l'utilisateur de faire une recherche
          globale sur le site même puisqu'il sera relié directement à la base de
          données. (Sur cet example on dispose d'un gain de place puisqu'il faut
          cliquer sur l'icone pour que l'input se déploie)
        </p>
        <div class="search_container">
          <div class="search_wrapper">
            <input
              type="text"
              class="search_input"
              placeholder="Recherche..."
            />
            <svg
              class="search_icon"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
          </div>
        </div>
      </div>

      <hr />

      <!-- Chatbot component -->
      <div class="">
        <h2>Composant retravaillé N°2: [fonctionnalité technique UI]</h2>
        <p>
          Un chatbot qui aiguille un utilisateur qui a des questions biens
          précises à poser sur les produits proposés ou encore sur certaines
          fonctionnalités du site.
        </p>
        <div id="chatbot" class="chatbot">
          <div id="chat_window" class="chat_window hidden">
            <div class="chat_header">
              <h3>Notre Assistant</h3>
              <button id="close_chat" class="close_button">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M18 6 6 18" />
                  <path d="m6 6 12 12" />
                </svg>
              </button>
            </div>
            <div id="messages" class="messages"></div>
            <div class="chat_input">
              <input
                type="text"
                id="user_input"
                placeholder="Poser moi une question..."
              />
              <button id="send_message">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="m22 2-7 20-4-9-9-4Z" />
                  <path d="M22 2 11 13" />
                </svg>
              </button>
            </div>
          </div>
          <button id="toggle_chat" class="chat_toggle">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path
                d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
              />
            </svg>
          </button>
        </div>
      </div>

      <hr />

      <!-- Navbar component -->
      <div class="header_navbar">
        <h2>Bonus Composant retravaillé N°3: [fonctionnalité UI/UX]</h2>
        <p>
          Une navbar intuitive et simplifiée avec un menu déroulant à
          l'horizontale ou verticale avec moins de links et sublinks, étant
          donné la masse de données dans la navbar actuelle l'idée serait de se
          concerté avec le/la chef/fe de projet et le/la designer pour créer une
          nouvellle architecture et un nouveau design au goût du jours.
        </p>
        <div class="header_content">
          <img
            src="media/tehtris_logo.svg"
            alt="tehtris logo"
            height="100px"
            width="180px"
          />
          <div class="btn_cell">
            <button
              id="menu_toggle"
              class="menu_toggle"
              aria-label="Toggle navigation menu"
            >
              <img src="media/menu_navbar.svg" alt="Menu" class="menu_icon" />
            </button>
            <button
              id="contacts_toggle"
              class="contacts_toggle"
              aria-label="Contacts Toggle"
            >
              <img
                src="media/contacts_navbar.svg"
                alt="Contacts"
                class="contacts_icon"
              />
            </button>
          </div>
        </div>
        <nav id="nav_panel" class="nav_panel">
          <ul class="nav_list">
            <li class="nav_item"><a href="#" class="nav_link">XDR AI</a></li>
            <li class="nav_item"><a href="#" class="nav_link">TEHTRIS</a></li>
            <li class="nav_item"><a href="#" class="nav_link">Services</a></li>
            <li class="nav_item">
              <a href="#" class="nav_link">Partenaires</a>
            </li>
            <li class="nav_item">
              <a href="#" class="nav_link">Entreprise</a>
            </li>
            <li class="nav_item">
              <a href="#" class="nav_link">Ressources</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <script src="script/searchBarScript.js"></script>
    <script src="script/chatbotScript.js"></script>
    <script src="script/navbar.js"></script>
  </body>
</html>
