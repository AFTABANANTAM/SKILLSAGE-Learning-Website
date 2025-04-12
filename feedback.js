$(document).ready(function () {
    let params = new URLSearchParams(window.location.search);
    let score = parseInt(params.get("score")); // Ensure it's treated as a number
  
    $("#invisible-content").hide();
  
    // Beginner Level: Score 0–4
    if (score >= 0 && score <= 5) {
      document.getElementById(
        "visible-feedback"
      ).innerHTML = `<p>You're just starting your journey into blockchain, and that's great! Start by understanding blockchain basics: decentralization, blocks, and mining. Experiment with crypto wallets and testnets. Learn Solidity for smart contracts and explore decentralized apps (DApps). Stay updated with resources like CryptoZombies, Coursera, and GitHub. Focus on security, join communities, and practice building projects for hands-on experience.</p>
              <p>Refer this: 👇</p>
  <ul class="info">
      <<li> <span style="font-weight:600">Understand What Blockchain Is</span>
              Learn the basic concept: a decentralized, immutable digital ledger.</li>

            <li><span style="font-weight:600">Learn How Blockchain Works</span>
              Study blocks, chains, hashing, consensus mechanisms, and mining.
            </li>
  </ul>`;
  
      document.getElementById("invisible-feedback").innerHTML = 
   `<ul class="info">
      <li><span style="font-weight:600">Understand Cryptography Basics</span>Public/private keys, digital signatures, and encryption (SHA-256).</li>

            <li><span style="font-weight:600">Explore Bitcoin</span>
              The first blockchain application. Learn how it works and why it matters.
            </li>

    </ul>`;
    }
  
    // Intermediate Level: Score 5–8
    else if (score > 5 && score <= 10) {
      document.getElementById(
        "visible-feedback"
      ).innerHTML = `<p>You have in-depth knowledge of blockchain, now you need to dive into building and optimizing decentralized applications (DApps) using frameworks like Hardhat or Truffle. Master blockchain scaling solutions (e.g., Layer 2, sharding), explore consensus mechanisms (e.g., Proof of Stake, Proof of Authority), and contribute to open-source blockchain projects. Stay current with protocol upgrades and cross-chain interoperability.</p>
              <p>Refer this: 👇</p>
  <ul class="info">
      <li><span style="font-weight:900">Master Blockchain Architecture:</span>
              Understand consensus algorithms in depth: PoW, PoS, DPoS, PBFT, and newer models like PoH (Solana) and explore scalability solutions: sharding, sidechains, and rollups.
            </li>

            <li><span style="font-weight:900">Advanced Smart Contract Development:</span>
               Implement dynamic routing, deep linking, and navigation stacks.
            </li>
  </ul>`;
  
      document.getElementById("invisible-feedback").innerHTML = 
      `<ul class="info">
      <li><span style="font-weight:900">Explore Layer 2 Solutions:</span>
              Dive into Layer 2 scaling technologies like Optimistic Rollups, zk-Rollups, Arbitrum, and Polygon.
             </li>

             <li><span style="font-weight:900">Decentralized Finance (DeFi):</span>
              Study protocols like Uniswap, Aave, Compound, and Curve
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
  