<!-- Job.php -->

<?php

class Job{
    public $id;
    public $name;
    public $industry;
    public $country;
    public $companyName;
    public $companyRegion;
    public $salaryRange;
    public $jobDescription;
    public $applicationDate;
    public $jobRequirements;
    public $applicationLink;

    public function __construct($id, $name, $industry, $country, $companyName, $companyRegion, $salaryRange, $jobDescription, $applicationDate, $jobRequirements, $applicationLink)
    {
        $this->id = $id;
        $this->name = $name;
        $this->industry = $industry;
        $this->country = $country;
        $this->companyName = $companyName;
        $this->companyRegion = $companyRegion;
        $this->salaryRange = $salaryRange;
        $this->jobDescription = $jobDescription;
        $this->applicationDate = $applicationDate;
        $this->jobRequirements = $jobRequirements;
        $this->applicationLink = $applicationLink;
    }


}
?>
