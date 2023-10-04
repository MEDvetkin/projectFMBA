<?php
// Load resumes data (replace this with your actual data source)
$resumes = include('resumes.php');

// Get user selections
$selectedAddress = $_POST['address'];
$selectedEducation = $_POST['education'];
$selectedExperience = $_POST['experience'];

// Initialize an array to store filtered resumes
$filteredResumes = [];

// Filter resumes based on user selections
foreach ($resumes as $resume) {
    if (
        ($selectedAddress === 'any' || $resume['address'] === $selectedAddress) &&
        ($selectedEducation === 'any' || $resume['education'] === $selectedEducation) &&
        ($selectedExperience === 'any' || $resume['experience'] === $selectedExperience)
    ) {
        $filteredResumes[] = $resume;
    }
}

// Display filtered resumes
foreach ($filteredResumes as $resume) {
    echo '<h2>' . $resume['name'] . '</h2>';
    echo '<p>Address: ' . $resume['address'] . '</p>';
    echo '<p>Education: ' . $resume['education'] . '</p>';
    echo '<p>Experience: ' . $resume['experience'] . '</p>';
}

// You can also save the filtered results to a file or perform other actions as needed.
?>