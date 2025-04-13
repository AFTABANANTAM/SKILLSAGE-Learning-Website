$(document).ready(function () {
    let params = new URLSearchParams(window.location.search);
    let score = parseInt(params.get("score")); // Ensure it's treated as a number
  
    $("#invisible-content").hide();
  
    // Beginner Level: Score 0–4
    if (score >= 0 && score <= 5) {
      document.getElementById(
        "visible-feedback"
      ).innerHTML = `<p>Data science is a deep and rewarding field, and it’s totally normal to find some parts challenging at first. Focus on understanding the basics, go at your own pace, and keep practicing. Your effort matters more than your score right now. Keep learning — you’ve got this!</p>
              <p>Refer this: 👇</p>
  <ul class="info">
      <li> <span style="font-weight:600">Learn Python</span>
              Start with basic coding: variables, loops, functions.</li>

            <li><span style="font-weight:600">Understand Math Basics</span>
              Focus on statistics, probability, and simple linear algebra.
            </li>
</ul>`;
  
      document.getElementById("invisible-feedback").innerHTML = 
   `<ul class="info">
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
    </ul>`;
    }
  
    // Intermediate Level: Score 5–8
    else if (score >= 5 && score <= 10) {
      document.getElementById(
        "visible-feedback"
      ).innerHTML = `<p>You're off to an excellent start in your data science journey. Your strong performance shows dedication and curiosity — two of the most important traits in this field. Keep building on what you’ve learned, take on small projects, and don’t be afraid to dive into more challenging topics. The future is full of data, and you’re on the right path!.</p>
              <p>Refer this: 👇</p>
  <ul class="info">
      <li><span style="font-weight:900">Advanced Machine Learning:</span>
              Master ensemble methods: Random Forest, XGBoost, LightGBM, CatBoost.
            </li>

            <li><span style="font-weight:900">Deep Learning:</span>
              Implement dynamic routing, deep linking, and navigation stacks and work with TensorFlow or PyTorch.
            </li>
  </ul>`;
  
      document.getElementById("invisible-feedback").innerHTML = 
      `<ul class="info">
      li><span style="font-weight:900">Natural Language Processing (NLP):</span>
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

  </ul>`;
    }
  

  
    // Toggle functionality
    $("#showMore").click(function () {
      if ($("#invisible-content").is(":visible")) {
        $("#invisible-content").slideUp(500);
        $("#showMore").text("Show More");
      } else {
        $("#invisible-content").slideDown(500);
        $("#showMore").text("Show Less");
      }
    });
  });
  