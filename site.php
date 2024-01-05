<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Jobs</title>
      <link rel="stylesheet" href="site.css" />
      <script src="site.js"></script>     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="admin.png">
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="#" onclick="showSection('jobs')">
              <i class="fas fa-home"></i>
              <span class="nav-item">Dashboard</span>
            </a></li>
            <li><a href="#" onclick="showSection('section1')">
              <i class="fas fa-comment"></i>
              <span class="nav-item">Message</span>
            </a></li>
            <li><a href="#"onclick="showSection('section2')" >
              <i class="fas fa-database"></i>
              <span class="nav-item">Report</span>
            </a></li>
            <li><a href="#" onclick="showSection('section3')">
              <i class="fas fa-users"></i>
              <span class="nav-item">Subscribers</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a></li>
    
            <li><a href="#" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>   
    
        <section class="main">
                   
          <section class="section-display1" id = "jobs">
          
              <div class="main-tasks">
                <div class="card">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <h3>Create new Job</h3>
                 
                  <button>Add new Job</button>
                </div>
                <div class="card">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                  <h3>Blog</h3>
                 
                  <button>Post new Blog</button>
                </div>
                <div class="card">                 
                    <i class="fa-regular fa-file-lines"></i>                 
                  <h3>Job Applications</h3>                  
                  <button>View Applications</button>
                </div>              
              </div>

            
      
         
            <div class="jobs-list">
              <h1>Jobs List</h1>
              <table class="table">
                <thead>
                    <tr>
                      <th><?php echo $user->id; ?></th>
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
                  </thead>
                  <tbody>
                    <tr >
                      <td>01</td>
                      <td>Mechanic</td>
                      <td>Automotive Industry</td>
                      <td>UAE</td>
                      <td>General Motors</td>
                      <td>Dubai(UAE)</td>
                      <td>300-500(USD)</td>
                      <td>Fulltime</td>
                      <td>01-29-24</td>
                      <td>Passport</td>
                      <td><a href="https://www.jobs.site.com">visit site</a></td>
                      <td><button>Edit</button></td>
                    </tr>
                    <tr > 
                        <td>01</td>
                        <td>Mechanic</td>
                        <td>Automotive Industry</td>
                        <td>UAE</td>
                        <td>General Motors</td>
                        <td>Dubai(UAE)</td>
                        <td>300-500(USD)</td>
                        <td>Fulltime</td>
                        <td>01-29-24</td>
                        <td>Passport</td>
                        <td><a href="https://www.jobs.site.com">visit site</a></td>
                        <td><button>Edit</button></td>
                      </tr>
                      
                      <tr >
                        <td>01</td>
                        <td>Mechanic</td>
                        <td>Automotive Industry</td>
                        <td>UAE</td>
                        <td>General Motors</td>
                        <td>Dubai(UAE)</td>
                        <td>300-500(USD)</td>
                        <td>Fulltime</td>
                        <td>01-29-24</td>
                        <td>Passport</td>
                        <td><a href="https://www.jobs.site.com">visit site</a></td>
                        <td><button>Edit</button></td>
                      </tr>
                    
                      <tr >
                        <td>01</td>
                        <td>Mechanic</td>
                        <td>Automotive Industry</td>
                        <td>UAE</td>
                        <td>General Motors</td>
                        <td>Dubai(UAE)</td>
                        <td>300-500(USD)</td>
                        <td>Fulltime</td>
                        <td>01-29-24</td>
                        <td>Passport</td>
                        <td><a href="https://www.jobs.site.com">visit site</a></td>
                        <td><button>Edit</button></td>
                      </tr>                
                </tbody>
              </table>
            </div>
          </section>
         <!-- display_jobs.php -->

<?php

require_once 'fetchData.php';

// Replace 'your_api_endpoint' with the actual endpoint


$jobs = fetchJobs();

if ($jobs && is_array($jobs)) {
    echo '<table class="table" border="1">
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
} else {
    echo 'No data available';
}
?>

    </body>
    </html>
 
