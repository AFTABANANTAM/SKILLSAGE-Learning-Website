<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Timeline Design | upCoding</title>
    <!-- Font Awesome Icons CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="roadmap.css" />
  </head>
  <body>
    <!-- Container -->
    <div class="container">
      <!-- Vertical line -->
      <div class="vertical-line"></div>
      <!-- Box -->
      <div class="box box-left">
        <i class="fa-solid fa-chart-line"  style=" color: black;
        border: 4px solid black;"></i>
        <div class="info">
          <h2>Foundation-Programming & Math</h2>
          <ul>
            <li>Python Programming Basics<br>
                Variables, Loops, Functions, Data Structures (Lists, Dicts), OOP
            </li>
            <li>Mathematics for Data Science
                <ul>
                    <li>Linear Algebra: Vectors, Matrices</li>
                    <li>Probability & Statistics: Mean, Variance, Distributions</li>
                    <li>Basic Calculus: Derivatives (for ML understanding)</li>
                </ul>
            </li>
          </ul>
          <a href="dataScienceresource.php">Go for Sources...</a>
        </div>
      </div>
      <div class="box box-right">
        <i class="fa-solid fa-database" style="  color: rgb(20, 20, 224);
  border: 4px solid rgb(20, 20, 224);"></i>
        <div class="info">
          <h2>Data Handling & Analysis</h2>
          <ul>
            <li>NumPy: Arrays, Mathematical operations</li>
            <li>Pandas: DataFrames, Cleaning, Merging, Filtering</li>
            <li>Working with Files: CSV, Excel, JSON</li>
            <li>Handling Missing or Corrupt Data</li>
          </ul>
          <a href="dataScienceresource.php">Go for Sources...</a>
        </div>
      </div>
      <div class="box box-left">
        <i class="fa-solid fa-chart-column" style="color: #f31559;
        border: 4px solid #f31559;"></i>
        <div class="info">
          <h2>Data Visualization & EDA</h2>
          <ul>
            <li>Matplotlib & Seaborn: Line plots, Histograms, Heatmaps</li>
            <li>Plotly / Altair (optional): Interactive dashboards</li>
            <li>Exploratory Data Analysis (EDA)</li>
            <li>Correlations, Outliers, Trends</li>
            <li>Feature selection, distributions</li>
          </ul>
          <a href="dataScienceresource.php">Go for Sources...</a>
        </div>
      </div>
    </div>
  </body>
</html>