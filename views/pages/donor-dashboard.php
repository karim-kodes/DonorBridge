<?php
// Start session
session_start();

// Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../public/Css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    />
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="../../public/Js/main.js"></script>
  </head>
  <body class="admin-dashboard">
    <div class="Dashboard">
      <div class="sidebar">
        <div class="logo">
          <img src="../../public/Images/logo.png" alt="DonorBridge Logo" />
          <div class="btns">
            <i class="fa-solid fa-bars active"></i>
            <i class="fa-solid fa-xmark close"></i>
          </div>
        </div>
        <div class="side-links">
          <div class=" link" >
            <i class="fa-solid fa-gauge"></i>
            <a href="/" class="current" >Dashboard</a>
          </div>

          <div class="link">
            <i class="fa-solid fa-circle-dollar-to-slot"></i>
            <a href="/">Donations</a>
          </div>
          <div class="link">
            <i class="fa-solid fa-clipboard-list"></i>
            <a href="/">Requests</a>
          </div>
          <div class="link">
            <i class="fa-solid fa-chart-pie"></i>
            <a href="/">Reports</a>
          </div>
          <div class="link">
            <i class="fa-solid fa-gear"></i>
            <a href="/">Settings</a>
          </div>
          <div class="link last-child">
            <i class="fa-solid fa-right-from-bracket"></i>
            <a href="../../controllers/logout.php">Logout</a>
          </div>
        </div>
      </div>
      <!-- MAIN CONTENT -------------------- -->
      <div class="main">
        <div class="Welcome-msg">
          <p>Welcome back, <span><?php echo htmlspecialchars($_SESSION['user_name']); ?> 👋</span></p>
          <div class="right-btns">
            <div class="search">
              <input type="search" placeholder="Search....." />
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <button><a href="../../controllers/logout.php">Log Out</a></button>
          </div>
        </div>
        <div class="top-cards">
          <div class="card">
            <p>Total Donations</p>
            <h2>$5,450</h2>
          </div>
          <div class="card">
            <p>Active Donors</p>
            <h2>120</h2>
          </div>
          <div class="card">
            <p>Pending Requests</p>
            <h2>34</h2>
          </div>
          <div class="card">
            <p>Completed Donations</p>
            <h2>87</h2>
          </div>
        </div>
        <!-- FIRST CONTAINER //////////////////////// -->
        <div class="row">
          <div class="quick-actions">
            <h3>Quick Actions</h3>
            <div class="buttons">
              <button>
                <i class="fa-solid fa-money-check-dollar"></i>
                <a href="/donate">Donate Money</a>
              </button>
              <button>
                <i class="fa-solid fa-box-open"></i>
                <a href="/donate">Donate Goods</a>
              </button>
              <button>
                <i class="fa-solid fa-handshake"></i>
                <a href="/donate">Donate Services</a>
              </button>
              <button>
                <i class="fa-solid fa-clock-rotate-left"></i>
                <a href="/donate">View My Donations</a>
              </button>
            </div>
          </div>
          <div class="donation-table">
            <h3>Your Recent Donations</h3>
            <table class="recent-donations">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Date</th>
                  <th>Quantity</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Money</td>
                  <td>2025-10-01</td>
                  <td>$100</td>
                  <td><span class="status completed">Completed</span></td>
                </tr>
                <tr>
                  <td>Goods</td>
                  <td>2025-09-20</td>
                  <td>10 Blankets</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>Services</td>
                  <td>2025-09-15</td>
                  <td>Teaching</td>
                  <td><span class="status approved">Approved</span></td>
                </tr>
                <tr>
                  <td>Money</td>
                  <td>2025-09-15</td>
                  <td>$200</td>
                  <td><span class="status completed">Completed</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="requests">
            <h3>Your Requests</h3>
            <div class="requests-details">
              <div class="person">
                <div class="name">
                  <i class="fa-solid fa-user"></i>
                  <div class="username">
                    <p>You</p>
                    <span>10 Picnic Baskets</span>
                  </div>
                </div>
                <button><a href="/request">View</a></button>
              </div>
              <p class="description">Free food items for the local shelter</p>
              <div class="date">2025-01-03</div>
            </div>
            <div class="requests-details">
              <div class="person">
                <div class="name">
                  <i class="fa-solid fa-user"></i>
                  <div class="username">
                    <p>You</p>
                    <span>7 blankets </span>
                  </div>
                </div>
                <button><a href="/request">View</a></button>
              </div>
              <p class="description">Free blankets for the needy orphanages</p>
              <div class="date">2025-07-01</div>
            </div>
            <div class="ctas">
              <button><a href="/request">Send a request</a></button>
              <a href="my-requests">View All</a>
            </div>
          </div>
          <div class="campaigns">
            <h3>Ongoing Campaigns</h3>
            <div class="campaign-container">
              <div class="campaign">
                <div class="top">
                  <p>Feed the Hungry</p>
                  <p>70%</p>
                </div>
                <div class="progress"></div>
              </div>
              <div class="campaign">
                <div class="top">
                  <p>Save the Enviroment</p>
                  <p>70%</p>
                </div>
                <div class="progress"></div>
              </div>
              <div class="campaign">
                <div class="top">
                  <p>Education For All</p>
                  <p>70%</p>
                </div>
                <div class="progress"></div>
              </div>
            </div>
          </div>
          <div class="impacts">
            <h3>Impacts</h3>
            <div class="impacts-cards">
              <div class="impact">
                <div class="left">
                  <i class="fa-solid fa-circle-dollar-to-slot"></i>
                  <p>Total donations</p>
                </div>
                <h2>$12,900</h2>
              </div>
              <div class="impact">
                <div class="left">
                  <i class="fa-solid fa-box-open"></i>
                  <p>Goods/Services</p>
                </div>
                <h2>180</h2>
              </div>
              <div class="impact">
                <div class="left">
                  <i class="fa-solid fa-users"></i>
                  <p>People helped</p>
                </div>
                <h2>200+</h2>
              </div>
            </div>
          </div>
          <div class="reports">
            <h3>Reports</h3>
            <div class="impact-graph">
              <canvas id="donationChart"></canvas>
            </div>
          </div>
        </div>

        <!-- SECOND CONTAINER /////////////////////////// -->
      </div>
    </div>
  </body>
</html>
