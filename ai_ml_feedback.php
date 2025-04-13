<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="AI_ML_feedback.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Poetsen+One&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script defer src="AI_ML_feedback.js"></script>
  </head>
  <body>
    <!-- /*header-section*/ -->

    <h1 id="heading" class="poetsen-one-regular">Our Suggestions</h1>
    <div class="information">
      <div id="visible-content">
        <p id="visible-feedback"></p>
      </div>

      <div id="invisible-content">
        <p id="invisible-feedback"></p>
      </div>
      <span id="showMore" style="font-weight: 600">Show More</span>
    </div>

    <div id="level">
      <h1 class="poetsen-one-regular">Beginner Level</h1>
      <div id="knowledge-guide">
        <div class="content">
          <ul class="tech">
            <li>AI: Creating systems that simulate human intelligence.</li>

            <li>
                ML: A subset of AI where systems learn from data.
            </li>

            <li>Learn Python and key libraries (NumPy, Pandas, Matplotlib).</li>

            <li>
                Focus on math: linear algebra, probability, statistics, and calculus.
            </li>

            <li>
                Data collection, cleaning, and preprocessing.
            </li>

            <li>
                Build projects like spam classifiers or recommendation systems.
            </li>

            <li>Explore areas like NLP, Computer Vision, or Reinforcement Learning</li>
          </ul>
          <button id="learnMore" onclick="window.location.href='ai_ml_basic.php'">View Roadmap</button>
        </div>
        <div class="image">
          <img src="ai_ml_basic.jpg" width="600" height="300" />
        </div>
      </div>
    </div>

    
    <div id="level">
      <h1 class="poetsen-one-regular">Advanced Level</h1>
      <div id="knowledge-guide">
        <div class="image">
            <img src="ai_ml_advanced.webp" width="600" height="300" style="background-size:contain" />
        </div>
        <div class="content">
          <ul class="tech">
            <li><span style="font-weight:600">Master Advanced Supervised Learning: </span>Deep dive into gradient boosting (XGBoost, LightGBM), SVMs, and ensemble methods.</li>

            <li><span style="font-weight:600">Explore Unsupervised Learning: </span>Advanced clustering (DBSCAN), anomaly detection, and dimensionality reduction (t-SNE, UMAP).</li>

            <!-- <li><span style="font-weight:600">Reinforcement Learning: </span>Master Q-Learning, DQNs, PPO, and deep reinforcement learning techniques.</li>

            <li><span style="font-weight:600">Deep Learning:  </span>Build expertise in CNNs, RNNs, LSTMs, transformers, and GANs.</li> -->
            
            <!-- <li><span style="font-weight:600">Natural Language Processing (NLP): </span>Master transformers (BERT, GPT), tokenization, and advanced text preprocessing techniques.</li> -->

            <li><span style="font-weight:600">Computer Vision:  </span> Learn advanced models like Faster R-CNN, YOLO, and Vision Transformers (ViT).</li>

            <li><span style="font-weight:600">Model Optimization: </span>Gain proficiency in hyperparameter tuning and model interpretability (SHAP, LIME).</li>

            <li><span style="font-weight:600">AI Ethics: </span>Understand bias detection, fairness, transparency, and accountability in ML models.</li>

            <li><span style="font-weight:600">AI Deployment:</span>Explore scalable systems, cloud-based deployment, and edge computing for AI.</li>

            <li><span style="font-weight:600">Cutting-Edge Research: </span>Deep dive into gradient boosting (XGBoost, LightGBM), SVMs, and ensemble methods.</li>
          </ul>
          <button id="learnMore" onclick="window.location.href='ai_ml_advanced.php'">View Roadmap</button>
        
        
        </div>
      </div>
    </div>
  </body>
</html>
