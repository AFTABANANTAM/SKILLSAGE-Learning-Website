$(document).ready(function () {
    let params = new URLSearchParams(window.location.search);
    let score = parseInt(params.get("score")); // Ensure it's treated as a number
  
    $("#invisible-content").hide();
  
    // Beginner Level: Score 0–5
    if (score >= 0 && score <= 5) {
      document.getElementById(
        "visible-feedback"
      ).innerHTML = `<p>Start by exploring <b>Beginner-friendly</b> tutorials and courses. Consistent practice is key—build small projects to gain hands-on experience and reinforce your learning. Experiment with different datasets to understand how different algorithms work. Stay curious and keep learning progressively!</p>
              <p>Refer this: 👇</p>
  <ul class="info">
      <li><span style="font-weight:600">💎Understand AI and ML Basics:</span>
          <ul class="sub-info">
              <li>👉 <b>AI</b>: Creating systems that simulate human intelligence.</li>
              <li>👉 <b>ML</b>: A subset of AI where systems learn from data.</li>
              <li>👉 Learn Python and key libraries (NumPy, Pandas, Matplotlib).</li>
          </ul>
      </li>
      <li><span style="font-weight:600">💎Core Data Science Concepts:</span>
          <ul class="sub-info">
            <li>👉 Data collection, cleaning, and preprocessing.</li>
            <li>👉 Exploratory Data Analysis (EDA).</li>
          </ul>  
      </li>
  </ul>`;
  
      document.getElementById("invisible-feedback").innerHTML = `<ul class="info">
      <li><span style="font-weight:600">💎Deepen Your Knowledge:</span>
          <ul class="sub-info">
              <li>👉 Learn about deep learning and neural networks (CNNs, RNNs).</li>
              <li>👉 Try building small interactive features (e.g., to-do list or quiz app).</li>
          </ul>
      </li>
      <li><span style="font-weight:600">💎Learn essential tools:</span>
          <ul class="sub-info">
              <li>👉 Use Visual Studio Code as your code editor.</li>
              <li>👉 Explore TensorFlow and PyTorch.</li>
          </ul>
      </li>
      <li><span style="font-weight:600">💎Stay Updated</span>
          <ul class="sub-info">
              <li>👉 Join AI/ML communities, read research papers, and contribute to open-source projects.</li>
          </ul>
      </li>
  </ul>`;
    }
  

    //advanced level : level(6-10)
    else if (score >= 6 && score <= 10) {
      document.getElementById(
        "visible-feedback"
      ).innerHTML = `<p>For<b>advanced learners</b>in AI/ML, deepen your expertise by exploring complex models like deep learning and reinforcement learning. Master frameworks such as TensorFlow or PyTorch. Focus on advanced topics like generative adversarial networks (GANs), natural language processing (NLP), and AI ethics. Continue building real-world projects, contributing to research, and refining your skills with cutting-edge techniques.</p>
              <p>Refer this: 👇</p>
  <ul class="info">
      <li><span style="font-weight:600">💎Master Core Machine Learning Algorithms:</span>
          <ul class="sub-info">
              <li>👉 Advanced Supervised Learning: Gradient Boosting (XGBoost, LightGBM), SVMs, ensemble methods.</li>
              <li>👉 Unsupervised Learning: Advanced clustering (DBSCAN, hierarchical), anomaly detection, and dimensionality reduction (t-SNE, UMAP).</li>
          </ul>
      </li>
      <li><span style="font-weight:600">💎Deep Learning Mastery:</span>
          <ul class="sub-info">
              <li>👉 Neural Networks: Understanding and building deep neural networks, CNNs, RNNs, LSTMs, and transformers.</li>
              <li>👉 Advanced Topics: GANs (Generative Adversarial Networks), attention mechanisms, and self-supervised learning.</li>
          </ul>
      </li>
  </ul>`;
  
      document.getElementById("invisible-feedback").innerHTML = `<ul class="info">
      <li><span style="font-weight:600">💎Computer Vision:</span>
          <ul class="sub-info">
              <li>👉 Learn Node.js with Express, or Python with Django/Flask.</li>
              <li>👉 Understand REST APIs, databases, and basic authentication.</li>
          </ul>
      </li>
      <li><span style="font-weight:600">💎Work with tools:</span>
          <ul class="sub-info">
              <li>👉 Advanced NLP Models: Transformers, BERT, GPT, and T5 architectures.</li>
              <li>👉 Preprocessing and Tokenization: Advanced techniques in text normalization, stemming, lemmatization, and Word2Vec/Glove embeddings.</li>
          </ul>
      </li>
      <li><span style="font-weight:600">💎Explore Cutting-Edge Areas:</span>
          <ul class="sub-info">
              <li>👉 AutoML and Neural Architecture Search (NAS): Automating model selection and hyperparameter tuning.</li>
              <li>👉 Quantum Machine Learning: Understanding quantum computing principles and how they apply to ML algorithms.</li>
          </ul>
      </li>
  </ul>`;
    }
  
    
    // Toggle functionality
    $("#showMore").click(function () {
      if ($("#invisible-content").is(":visible")) {
        $("#invisible-content").slideUp(5000);
        $("#showMore").text("Show More");
      } else {
        $("#invisible-content").slideDown(5000);
        $("#showMore").text("Show Less");
      }
    });
  });
  