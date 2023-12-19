<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyTelkomedika | Landing Page</title>
    {{-- fonts --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    {{-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"
 /> --}}
    {{-- tailwind css --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>      
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* .ui-datepicker-week-end {
            background-color: #000;
        } */

        .ui-datepicker {
            border-radius: 10px;
            box-shadow: 2px 7px 15px 8px rgba(208,208,208,0.1);
            -webkit-box-shadow: 2px 7px 15px 8px rgba(208,208,208,0.1);
            -moz-box-shadow: 2px 7px 15px 8px rgba(208,208,208,0.1);
            border: 1px solid rgba(0,0,0,0.1) !important;
        }

        .ui-datepicker-header {
            background-color: white;
            border: none;
            border-bottom: 1px solid rgba(0,0,0,0.2);
        }

        /* .ui-datepicker-calendar td {
            border-radius: 50%;
            aspect-ratio: 1/1;
        } */

        .ui-datepicker-calendar .ui-state-selectable a {
            background-color: #4caf50;
            color: #fff;
        }

        /* Gaya untuk tanggal yang tidak dapat dipilih */
        .ui-datepicker-calendar .ui-state-disabled a {
            background-color: #e57373;
            color: #fff;
        }

        .dropdown-open {
            opacity: 1 !important;
            pointer-events: auto !important;
            top: 3.5rem !important;
            /* transform: scale(1) !important; */
        }

        .btn-toggle{
            width: 60px;
            height: 60px;
            background-color: #E81C23;
            position: fixed;
            bottom: 20px;
            right: 50px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            cursor: pointer;
            transition: all 0.2s ease; 
            font-size: 16px;
            }

            .btn-toggle div {
            position: absolute;
            }

            .btn-toggle div:first-child {
            opacity: 1;
            display: grid;
            place-items: center;
            transition: all 0.2s ease; 
            }

            .btn-toggle div:last-child {
            opacity: 0;
            display: grid;
            place-items: center;
            transition: all 0.2s ease; 
            }

            body.show-modal .btn-toggle {
            transform: rotate(90deg);
            transition: all 0.2s ease; 
            }

            body.show-modal .btn-toggle div:first-child {
            opacity: 0;
            transition: all 0.2s ease; 
            }

            body.show-modal .btn-toggle div:last-child {
            opacity: 1;
            transition: all 0.2s ease; 
            }

            .chatbot {
            position: fixed;
            width: 420px;
            /* height: 500px; */
            border-radius: 15px;
            bottom: 90px;
            right: 50px;
            background-color: white;
            overflow: hidden;
            transform: scale(0.5);
            opacity:0;
            pointer-events: none;
            transition: all 0.2s ease; 
            transform-origin: bottom right;
            box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
            }

            body.show-modal .chatbot {
            transform: scale(1);
            opacity:1;
            transform-origin: bottom right;
            transition: all 0.2s ease; 
            pointer-events : auto;
            }

            .chatbot header {
            text-align: center;
            padding: 12px 0;
            background-color: #ED1C24;
            color: white;
            font-size: 18px;
            font-weight: 600;
            }

            .chatbox-container {
            /* background-color: blue; */
            background-color: white;
            overflow-y: auto;
            height: 470px;
            padding: 0 20px;
            padding-bottom: 20px;
            margin-bottom: 50px;
            }

            .chatbot :where(.chatbox-container, textarea)::-webkit-scrollbar {
            width: 6px;
            }
            .chatbot :where(.chatbox-container, textarea)::-webkit-scrollbar-track {
            background: #fff;
            border-radius: 25px;
            }
            .chatbot :where(.chatbox-container, textarea)::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 25px;
            }

            .chat-list {
            display: flex;
            align-items: flex-end;
            gap: 6px;
            margin-top: 20px;
            }

            .chat-list.from-bot {
            justify-content: flex-start;
            }

            .img-hidden {
            opacity: 0;
            }

            .chat-list.from-bot.no-margin-top {
            margin-top: 4px;
            }

            .chat-list.from-user {
            flex-direction: row-reverse;
            justify-content: flex-start;
            }

            .chat-list div {
            width: 35px;
            aspect-ratio : 1/1;
            border-radius: 50%;
            background-color: #1EC639;
            display: grid;
            place-items: center;
            margin-bottom: 4px;
            } 

            .chat-list.from-bot p {
            display: block;
            background: #f2f2f2;
            padding: 12px 16px;
            border-radius: 10px 10px 10px 0;
            max-width: 80%;
            }

            .chat-list.from-bot p span {
            font-weight: 600;
            }

            .chat-list.from-user p {
            max-width: 80%;
            display: block;
            background: rgba(237, 28, 36,1);
            color: white;
            padding: 12px 16px;
            border-radius: 10px 10px 0 10px;
            }

            .input-container {
            display: flex;
            gap: 5px;
            position: absolute;
            bottom: 0;
            width: 100%;
            background: #fff;
            padding: 0 20px;
            border-top: 1px solid #ddd;
            }

        .input-container textarea {
            height: 50px;
            width: 100%;
            border: none;
            outline: none;
            resize: none;
            max-height: 120px;
            padding: 15px 15px 15px 0;
            font-size: 0.95rem;
            font-family: 'Poppins', sans-serif;
        }

        .input-container img {
            margin-top: 10px;
        }

        .option {
            display: flex;
            gap: 4px;
            flex-direction: column;
            align-items: flex-start;
            padding-left: 45px;
            margin-top: 4px
        }

        .option a {
            text-decoration: none;
            color: #1EC639;
            padding: 10px;
            border-radius: 10px;
            background-color: rgba(30, 198, 57,0.1);
            font-size: 12px;
            font-weight: 600;
            transition: all 0.2s ease; 
        }

        .option a:hover {
            opacity: 0.7;
            transition: all 0.2s ease; 
        }
        
        .send {
            cursor: pointer;
            transition: all 0.2s ease; 
        }

        .send:hover {
            opacity: 0.7;
            transition: all 0.2s ease; 
        }

        .disable-user-input {
            opacity: 0.3;
            pointer-events: none;
        }

        .pulse {
        animation: pulse 0.5s infinite ease-in-out alternate;
        }

        .chat-list img {
            padding-left: 1px;
        }
        @keyframes pulse {
            from { transform: scale(0.8); }
            to { transform: scale(1.2); }
        }
    </style>
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <main class="flex bg-[#F3FBFF] min-h-screen">
        {{-- sidebar --}}
        @include('partials.sidebar')
        
        {{-- main content --}}
        <section class="flex-1 px-8 py-6">
            @yield('content')
        </section>
    </main>

    <div class="btn-toggle">
        <div class="btn-toggle-open">
          <img src="/chatbot-toggle-icon.svg" alt="">
        </div>
        <div class="btn-toggle-close">
          <img src="/chatbot-toggle-close-icon.svg" alt="">
        </div>
      </div>
    
      <div class="chatbot">
        <header>
          <p>MyTelkomedika</p>
        </header>
        <ul class="chatbox-container">
          <div>
            <li class="chat-list from-bot">
              <div>
                <img src="/chatbot-icon.svg" alt="">
              </div>
              <p>
                <span>
                  Selamat datang di TelkoMedika! 🌟
                </span>
                <br>
                One Stop Health Care For Telyutizen
                <br>
                <br>
                Ada yang bisa saya bantu?
              </p>
            </li>
            <div class="option">
              <a class="option-choice" data-option="layanan" href="#">Layanan Telkomedika</a>
              <a class="option-choice" data-option="pembayaran" href="#">Pembayaran</a>
              <a class="option-choice" data-option="ai" href="#">AI Consule</a>
            </div>
          </div>
          {{-- <li class="chat-list from-user">
            <p>
              saya mengalami pusing mual dan meriang, berikan saya penyebab dan saran nya
              saya mengalami pusing mual dan meriang, berikan saya penyebab dan saran nya
            </p>
          </li> --}}
        </ul>
        <div class="input-container disable-user-input">
          <textarea rows="1" placeholder="Ketik pesan..."></textarea>
          <div class="send">
            <img src="/send-icon.svg" alt="">
          </div>
        </div>
      </div>

    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script>
        const btnToggle = document.querySelector(".btn-toggle");
        const chatBox = document.querySelector(".chatbox-container")
        const chatInput = document.querySelector(".input-container textarea")
        const inputInitHeight = chatInput.scrollHeight;
        const sendBtn = document.querySelector(".send");
        const textArea = document.querySelector(".input-container textarea")
        const inputContainer = document.querySelector(".input-container")
        let options = document.querySelectorAll(".option-choice")
        let chooseFromBody = true;
        let userMessage = null;
      
        const optionMaster = `
            <div class="option">
                <a class="option-choice" data-option="layanan" href="#">Layanan Telkomedika</a>
                <a class="option-choice" data-option="pembayaran" href="#">Pembayaran</a>
                <a class="option-choice" data-option="ai" href="#">AI Consule</a>
            </div>
        `;
      
        const tanyaUlangElement = `
        <li class="chat-list from-bot no-margin-top">
              <div>
                <img src="/chatbot-icon.svg" alt="">
              </div>
              <p>
                Ada lagi yang ingin ditanyakan?
              </p>
            </li>
        `
      
        const addOptionToChatBox = (optionContent) => {
          const optionElement = `<li class="chat-list from-bot">
              <div class="img-hidden">
                <img src="/chatbot-icon.svg" alt="">
              </div>
              <p>
                <span>${optionContent.title}</span>
                <br>
                <br>
                ${optionContent.content}
              </p>
            </li>`;
          chatBox.innerHTML += optionElement;
        };
      
        function addUserChat(msg) {
          const optionElement = ` <li class="chat-list from-user">
              <p>
                ${msg}
              </p>
            </li>`;
          chatBox.innerHTML += optionElement;
          chatBox.scrollTo({
            top: chatBox.scrollHeight,
            behavior: 'smooth'
          });
        }
      
        btnToggle.addEventListener('click', () => {
          document.body.classList.toggle('show-modal');
        });
      
        chatInput.addEventListener('input', () => {
          chatInput.style.height = `${inputInitHeight}px`;
          chatInput.style.height = `${chatInput.scrollHeight}px`;
        });
      
        document.body.addEventListener( 'click', function ( event ) {
          switch (event.target.dataset.option) {
              case 'layanan':
                addOptionToChatBox({
                  title: 'Layanan TelkoMedika! ✨',
                  content: `
                  1. Poli Umum 
                  <br> 
                  Melayani konsultasi dan pemeriksaan untuk penyakit umum dengan gejala umum
                  <br><br>
                  2. Poli Mata
                  <br>
                  Melayani konsultasi dan pemeriksaan untuk penyakit umum dengan gejala umum
                  <br><br>
                  3. Poli Gigi
                  <br>
                  Melayani konsultasi dan pemeriksaan untuk penyakit umum dengan gejala umum
                  <br>
                  <br>
                  Jadi, jangan ragu ya untuk dateng ke Telkomedika!
                  `
                });
                chatBox.innerHTML += tanyaUlangElement;
                chatBox.innerHTML += optionMaster;
                chatBox.scrollTo({
                  top: chatBox.scrollHeight,
                  behavior: 'smooth'
                });
                options = document.querySelectorAll(".option-choice");
                break;
              case 'pembayaran':
                addOptionToChatBox({
                  title: 'Pembayaran! ✨',
                  content: `Biaya konsultasi dan pemeriksaan di Telkomedika bersifat Gratis!,             
                  <br>
                  biaya hanya dikenakan apabila pemeriksaan yang dilakukan memerlukan alat khusus atau melakukan operasi
                  <br>
                  <br>
                  Jadi jangan terlalu khawatir ya soal biaya!`
                });
                chatBox.innerHTML += tanyaUlangElement;
                chatBox.innerHTML += optionMaster;
                chatBox.scrollTo({
                  top: chatBox.scrollHeight,
                  behavior: 'smooth'
                });
                options = document.querySelectorAll(".option-choice");
                break;
              case 'ai':
              addOptionToChatBox({
                  title: 'AI Consule! ✨',
                  content: `Disini kamu bisa bertanya kepada AI mengenai hal - hal kesehatan!            
                  <br>
                  `
                });
                chatBox.innerHTML += `
                <li class="chat-list from-bot no-margin-top">
                  <div>
                    <img src="/chatbot-icon.svg" alt="">
                  </div>
                  <p>
                    Kalau kamu bingung nanya apa, bisa tanya tips kesehatan, khasiat makanan, penyakit tertentu, dan lain - lain yang berkaitan dengan kesehatan yaa!
                    <br>
                    <br>
                    Silahkan dicoba! ✨
                  </p>
                </li>
                `
                chatBox.scrollTo({
                  top: chatBox.scrollHeight,
                  behavior: 'smooth'
                });
                inputContainer.classList.remove('disable-user-input')
                break;
              default:
                break;
            }
        });
      
        sendBtn.addEventListener('click', () => {
          msg = textArea.value.trim(); // Get user entered message and remove extra whitespace
          if(!msg) return;
          console.log(textArea.value)
          textArea.value = "";
          textArea.height = "50px";
      
          addUserChat(msg)
          inputContainer.classList.add('disable-user-input')
          userMessage = msg;
      
          setTimeout(() => {
              // Display "Thinking..." message while waiting for the response
              chatBox.innerHTML += `
              <li class="chat-list from-bot">
                  <div>
                    <img src="/chatbot-icon.svg" class="pulse" alt="">
                  </div>
                  <p class="loading">
                    Tunggu sebentar ya...
                  </p>
                </li>
              `;
              chatBox.scrollTo(0, chatBox.scrollHeight)
              const loading = document.querySelectorAll('.loading')
              generateResponse(Array.from(loading)[loading.length - 1]);
          }, 600);
      
        })
      
        const API_KEY = "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";
      
        const generateResponse = (chatElement) => {
          // setTimeout(() => {
          //   chatElement.textContent = "yey ini hasilnya";
          // }, 1000);
      
          let gptContent = "Analisis teks berikut terlebih dahulu, jika konteksnya kesehatan, makanan, penyakit, gejala penyakit, anjuran penyakit, penyakit maka tampilkan pesan sesuai yang diminta jika tidak kembalikan 'maaf saya rasa pesan anda tidak mengenai kesehatan harap berikan pesan yang sesuai.'" + userMessage
      
          const API_URL = "https://api.openai.com/v1/chat/completions";
      
          // Define the properties and message for the API request
          const requestOptions = {
              method: "POST",
              headers: {
                  "Content-Type": "application/json",
                  "Authorization": `Bearer ${API_KEY}`
              },
              body: JSON.stringify({
                  model: "gpt-3.5-turbo",
                  messages: [{role: "user", content: userMessage + " pastikan maksimal sekitar 150 kata"}],
              })
          }
      
          // Send POST request to API, get response and set the reponse as paragraph text
          fetch(API_URL, requestOptions).then(res => res.json()).then(data => {
              chatElement.innerHTML = data.choices[0].message.content.replace(/\n/g, '<br>');
          }).catch(() => {
              chatElement.classList.add("error");
              chatElement.innerHTML = "Oops! Something went wrong. Please try again.";
          }).finally(() => {
              chatBox.scrollTo(0, chatBox.scrollHeight)
              inputContainer.classList.remove('disable-user-input')
      
              const allLoadingElement = Array.from(document.querySelectorAll('.loading'));
      
              allLoadingElement[allLoadingElement.length - 1].previousElementSibling.querySelector('img').classList.remove('pulse') 
          });
      }
      
        function handleInputUser(msg) {
          console.log(msg)
          
        }
      </script>
</body>
</html>
