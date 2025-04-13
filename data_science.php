<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Science</title>
    <link rel="stylesheet" href="dataScience_style.css">
        <style>
            body {
              margin: 0;
              background-color: #397abad5; /* blue background */
              overflow: hidden;
              font-family: Arial, sans-serif;
              color: white;
            }
        
            .logo {
              position: absolute;
              height: 80px;
              opacity: 0.5;
              z-index: -1;
              filter: brightness(5) invert(1); /* turns logos white */
            }
        
            /* Random movement animations */
            @keyframes float1 {
              0% { transform: translate(0, 0); }
              100% { transform: translate(100vw, -100vh); }
            }
        
            @keyframes float2 {
              0% { transform: translate(0, 0); }
              100% { transform: translate(-100vw, 100vh); }
            }
        
            @keyframes float3 {
              0% { transform: translate(0, 0); }
              100% { transform: translate(50vw, -120vh); }
            }
            @keyframes float4 {
      0% { transform: translate(0, 0); }
      100% { transform: translate(-80vw, 80vh); }
    }

    .app {
      position: relative;
      z-index: 1;
      text-align: center;
      padding-top: 100px;
    }
  </style>
</head>
<body>
    
  <!-- White, moving logos -->
  <img class="logo" src="/BYTEVERSE_PROJECT/images/AI&ML.png" 
  style="top: 10%; left: 10%; animation: float1 12s linear infinite;">
  
<img class="logo" src="/BYTEVERSE_PROJECT/images/WebDev.png" 
  style="top: 30%; left: 80%; animation: float2 22s linear infinite;">
  
<img class="logo" src="/BYTEVERSE_PROJECT/images/blockchain.png" 
  style="top: 60%; left: 20%; animation: float3 27s linear infinite;">
  
<img class="logo" src="/BYTEVERSE_PROJECT/images/dataScience.png" 
  style="top: 50%; left: 60%; animation: float4 17s linear infinite;">
  
<img class="logo" src="/BYTEVERSE_PROJECT/images/WebDev.png" 
  style="top: 20%; left: 40%; animation: float1 37s linear infinite;">
           
    <div class="app">
        <h1>Welcome To  Quiz</h1>
        <div class="quiz">
            <h2 id="question">Question starts</h2>
            <div id="answer-buttons">
                <button class="btn">Answer 1</button>
                <button class="btn">Answer 2</button>
                <button class="btn">Answer 3</button>
                <button class="btn">Answer 4</button>
            </div>
            <button id="next-btn">Next</button>
        </div>
    </div>
    

  <script type="module" src="DataScience_script.js"></script>
</body>
</html>