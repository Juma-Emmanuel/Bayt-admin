<?php
require_once 'models.php';



   


function fetchUser() {  
    $apiUrl = "http://127.0.0.1:8080/user/";
    $response = file_get_contents($apiUrl);    
    $userData = json_decode($response, true);    
    if ($userData !== null) {  
        
       
        $user = new User(
            $userData['user_id'],
             $userData['username'],
              $userData['full_name'],
                $userData['email'],
                 $userData['address'],
                 );
        return $user;
    } else {
        
        return null;
    }
 }
function fetchUsers() {
    $apiUrl = 'http://127.0.0.1:8081/users/';
    $response = file_get_contents($apiUrl);

  
    

    $users = [];
    foreach ($usersData as $userData) {
        $user = new User(
            $userData['id'],
            $userData['username'],
           
            $userData['email'],
                     
        );

        $users[] = $user;
    }

    return $users;
   
}
function fetchJobs($page = 1, $perPage = 1){
    $apiEndpoint = 'http://127.0.0.1:8080/jobs/';
    $data = file_get_contents($apiEndpoint);
    $jobsData = json_decode($data, true);
    $usersData = json_decode($response, true);
    $start = ($page - 1) * $perPage;
    $end = $start + $perPage;
    $jobsData = array_slice($jobsData, $start, $perPage);

    $jobs = [];
    foreach ($jobsData as $jobData) {
        $job = new Job(
            $jobData['id'],
            $jobData['name'],
            $jobData['industry'],
            $jobData['country'],
            $jobData['companyName'],
            $jobData['companyRegion'],
            $jobData['salaryRange'],
            $jobData['jobDescription'],
            $jobData['applicationDate'],
            $jobData['jobRequirements'],
            $jobData['applicationLink']
        );

        $jobs[] = $job;
    }

    return $jobs;
}

?>
