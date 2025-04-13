<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="DSfeedback.css" />
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
    <script defer src="DSfeedback.js"></script>
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
            <li> <span style="font-weight:600">Learn Python</span>
              Start with basic coding: variables, loops, functions.</li>

            <li><span style="font-weight:600">Understand Math Basics</span>
              Focus on statistics, probability, and simple linear algebra.
            </li>

            <li><span style="font-weight:600">Work with Data</span>Use Pandas and NumPy to clean and explore data.</li>

            <li><span style="font-weight:600">Visualize Data</span>
              Create charts and graphs using Matplotlib or Seaborn.
            </li>

            <li><span style="font-weight:600">Learn Machine Learning</span>
              Start with basic models like linear regression and decision trees.
            </li>

            <li><span style="font-weight:600">Evaluate Your Models</span>
              Use real datasets from Kaggle or UCI to practice
            </li>

            <li><span style="font-weight:600">Build Real Projects</span>Use real datasets from Kaggle or UCI to practice</li>
          </ul>
          <button id="learnMore" onclick="window.location.href='datasciencebasic.php'">View Roadmap</button>
        </div>
        <div class="image">
          <img src="basic_image.jpg" width="600" height="300" />
        </div>
      </div>
    </div>

    <div id="level">
      <h1 class="poetsen-one-regular">Advanced Level</h1>
      <div id="knowledge-guide">
        <div class="image">
          <img src="advanced_image.webp" width="600" height="300" />
        </div>
        <div class="content">
          <ul class="tech">
            <li><span style="font-weight:900">Advanced Machine Learning:</span>
              Master ensemble methods: Random Forest, XGBoost, LightGBM, CatBoost.
            </li>

            <li><span style="font-weight:900">Deep Learning:</span>
              Implement dynamic routing, deep linking, and navigation stacks and work with TensorFlow or PyTorch.
            </li>

            <li><span style="font-weight:900">Natural Language Processing (NLP):</span>
              Learn text preprocessing, TF-IDF, word embeddings (Word2Vec, GloVe) and Explore transformers and fine-tuning BERT, GPT models.
             </li>

             <li><span style="font-weight:900">Time Series Analysis:</span>
              Understand ARIMA, SARIMA, Prophet, and LSTM for forecasting and feature engineering for temporal data
             </li>

             <li><span style="font-weight:900">Big Data Tools:</span>
              Use Spark, Hadoop, or Dask for large-scale data processing and understand distributed computing and parallelization
             </li>


             <li><span style="font-weight:900">Experiment Tracking & Model Management:</span>
              Use tools like MLflow, Weights & Biases, or DVC and keep track of experiments, hyperparameters, and model artifacts
            </li>

            <li><span style="font-weight:900">Database Integration:</span>
               Connect to cloud databases like Firebase Firestore or local storage like Realm or Room.
            </li>
          </ul>
          <button id="learnMore" onclick="window.location.href='datascienceadvance.php'">View Roadmap</button>
        </div>
      </div>
    </div>
  </body>
</html>
