<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="blockchain_feedback.css" />
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
    <script defer src="blockchain_feedback.js"></script>
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
            <li> <span style="font-weight:600">Understand What Blockchain Is</span>
              Learn the basic concept: a decentralized, immutable digital ledger.</li>

            <li><span style="font-weight:600">Learn How Blockchain Works</span>
              Study blocks, chains, hashing, consensus mechanisms, and mining.
            </li>

            <li><span style="font-weight:600">Understand Cryptography Basics</span>Public/private keys, digital signatures, and encryption (SHA-256).</li>

            <li><span style="font-weight:600">Explore Bitcoin</span>
              The first blockchain application. Learn how it works and why it matters.
            </li>

            <li><span style="font-weight:600">Learn Solidity (Ethereum’s Programming Language)</span>
              Write and deploy basic smart contracts using Solidity.
            </li>

            <li><span style="font-weight:600">Use Development Tools</span>
              Get familiar with tools like Remix, MetaMask, and Truffle.
            </li>

            <li><span style="font-weight:600">Build a Simple DApp (Decentralized App)</span>Create a basic blockchain app like a voting system or token contract.</li>
          </ul>
          <button id="learnMore" onclick="window.location.href='blockchain_basic.php'">View Roadmap</button>
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
          <img src="advanced_image.png" width="600" height="300" />
        </div>
        <div class="content">
          <ul class="tech">
            <li><span style="font-weight:900">Master Blockchain Architecture:</span>
              Understand consensus algorithms in depth: PoW, PoS, DPoS, PBFT, and newer models like PoH (Solana) and explore scalability solutions: sharding, sidechains, and rollups.
            </li>

            <li><span style="font-weight:900">Advanced Smart Contract Development:</span>
               Implement dynamic routing, deep linking, and navigation stacks.
            </li>

            <li><span style="font-weight:900">Authentication & Authorization:</span>
              Write secure and optimized smart contracts in Solidity.
             </li>

             <li><span style="font-weight:900">Explore Layer 2 Solutions:</span>
              Dive into Layer 2 scaling technologies like Optimistic Rollups, zk-Rollups, Arbitrum, and Polygon.
             </li>

             <li><span style="font-weight:900">Decentralized Finance (DeFi):</span>
              Study protocols like Uniswap, Aave, Compound, and Curve
             </li>


             <li><span style="font-weight:900">NFTs & Token Standards:</span>
              Explore ERC-721, ERC-1155, and token economics.Build and deploy NFT projects and marketplaces.
            </li>

            <li><span style="font-weight:900">Contribute to Open Source & Stay Current:</span>
              Follow whitepapers, research papers, and community updates (e.g., Ethereum Foundation, Crypto Twitter, Devcon).
            </li>
          </ul>
          <button id="learnMore" onclick="window.location.href='blockchain_advanced.php'">View Roadmap</button>
        </div>
      </div>
    </div>

    
  </body>
</html>
