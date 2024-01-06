<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Jobs</title>
      <link rel="stylesheet" href="site.css" />
      <script src="site.js"></script>     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body id = "body">
      <div class="container">
        <nav id="nav">
          <ul>
            <li><a href="#" class="logo">
              <img src="admin.png">
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="#" onclick="showSection('jobs')">
              <i class="fas fa-home"></i>
              <span class="nav-item">Dashboard</span>
            </a></li>
            <li><a href="#" >
              <i class="fas fa-comment"></i>
              <span class="nav-item">Message</span>
            </a></li>
            <li><a href="#"onclick="showSection('section2')" >
              <i class="fas fa-database"></i>
              <span class="nav-item">Report</span>
            </a></li>
            <li><a href="#" onclick="showSection('subscribers')">
              <i class="fas fa-users"></i>
              <span class="nav-item">Subscribers</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Settings</span>
            </a></li>
    
            <li><a href="#" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>   
    
        <section class="main">
                   
          <section class="section-display" id = "jobs">
            <div class="topbar" id ="topbar">
              <h1 id = "topbar-h1">Dashboard</h1>
              <div class="search-container" id="search-container1">
                <form action="/search">
                  <input id ="search-box1" type="text" class="search-box" placeholder="Search subscribers...">
                  <button type="submit" class="search-button">
                    <i id ="i-search-btn1" class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </form>
              </div>
              <div class="theme-button">
              <a href="#" class = "light" id = 'light' onclick="toggle1Theme('light')" >
              <i class="bi bi-brightness-high-fill"></i>
            </a>
            <a href="#" class = "dark" onclick="toggle1Theme('dark')" >
              <i class="bi bi-moon-fill"></i>
            </a>
              </div>
            </div>
            <div class="main-tasks" id = "main-tasks">
              <div class="card" id= "card1">
                <i id="card1i" class="fa fa-plus" aria-hidden="true"></i>
                <h3 id = "card1h3">Create new Job</h3>
                <button>Add new Job</button>
              </div>
              <div class="card" id= "card2">
                <i id="card2i" class="fa fa-laptop" aria-hidden="true"></i>
                <h3 id = "card2h3">Blog</h3>
                <button>Post new Blog</button>
              </div>
              <div class="card" id= "card3"> 
                <i id="card3i" class="fa-regular fa-file-lines"></i>                 
                <h3 id = "card3h3">Job Applications</h3>                  
                <button>View Applications</button>
              </div>              
            </div>
            <div id = "jobs-list" class="jobs-list">
              <h1 id = "jobs-list-h1">Jobs List</h1>
              <?php
              require_once 'fetchData.php';
              
              $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
              $perPage = 10;
              $jobs = fetchJobs($page, $perPage);
              if ($jobs && is_array($jobs)) {
                echo '<table class="table" >
                <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Industry</th>
                <th>Country</th>
                <th>Company Name</th>
                <th>Company Region</th>
                <th>Salary Range</th>
                <th>Job Description</th>
                <th>Application Date</th>
                <th>Job Requirements</th>
                <th>Application Link</th>
                <th>Action</th>
                </tr>
                </thead>';

                foreach ($jobs as $job) {
                  echo '<tbody>
                  <tr>
                  <td>' . $job->id . '</td>
                  <td>' . $job->name . '</td>
                  <td>' . $job->industry . '</td>
                  <td>' . $job->country . '</td>
                  <td>' . $job->companyName . '</td>
                  <td>' . $job->companyRegion . '</td>
                  <td>' . $job->salaryRange . '</td>
                  <td>' . $job->jobDescription . '</td>
                  <td>' . $job->applicationDate . '</td>
                 <td>' . $job->jobRequirements . '</td>
                 <td><a href="' . $job->applicationLink . '" target="_blank">Apply</a></td>
                 <td><button>Edit</button></td>
                 </tr>
                 </tbody>';
                 }
                 echo '</table>';
                 echo '<div>';
                 if ($page > 1) {
                     echo '<a href="?page=' . ($page - 1) . '">Previous</a>';
                 }
                 echo ' Page ' . $page . ' ';
                 if (count($jobs) == $perPage) {
                     echo '<a href="?page=' . ($page + 1) . '">Next</a>';
                 }
                 echo '</div>';
                } else {
                  echo 'No data available';
                  }
                  ?>
             </div>

          </section>
          <section class="section-display" id = "subscribers">
          <div class="topbar">
              <h1>Subscribers</h1>
              <div class="search-container">
                <form action="/search">
                  <input type="text" class="search-box" placeholder="Search subscribers...">
                  <button type="submit" class="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </form>
               </div>
            </div>          
              <div class="main-tasks">
                <div class="container">
                  <div class="cardbox">
                    <div class="cardtext">
                      <h3>500</h3>
                      <h>Site Views</h>
                    </div>
                    <div class="iconBx">
                      <i class="fa-regular fa-eye"></i>
                    </div>
                  </div>
                  <div class="cardbox">
                    <div class="cardtext">
                      <h3>900</h3>
                      <h>Total Subscribers</h>
                    </div>
                    <div class="iconBx">
                     <i class="fa-solid fa-users"></i>
                    </div>
                  </div>
                  <div class="card">
                    <i class="fa-solid fa-user"></i>
                    <h3>New Subscriber</h3>
                    <button>Add Subscriber</button>
                  </div>
                </div>
              </div>
            <div class="subsribers-list">
              <h1>Subscribers</h1>
              <?php
              require_once 'fetchData.php';
              $users = fetchUsers();
              if ($users && is_array($users)) {
                echo '<table class="table" >
                <thead>
                <tr>
                <th>Id</th>
                <th>Username</th>
               
                <th>Email</th>
                            
                <th>Action</th>
                </tr>
                </thead>';

                foreach ($users as $user) {
                  echo '<tbody>
                  <tr>
                  <td>' . $user->user_id . '</td>
                  <td>' . $user->username . '</td>
                 
                  <td>' . $user->email . '</td>
                           
                 <td><button>Edit</button></td>
                 </tr>
                 </tbody>';
                 }
                 echo '</table>';
                } else {
                  echo 'No data available';
                  }
                  ?>
            </div>

          </section>
         </section>
    </body>
    </html>
 
