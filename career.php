<?php
$generalCareer = $_GET['general'] ?? "Choose On Your Own";

$careers = [
    'Engineering & Technology' => ['Software Engineer', 'Data Scientist', 'AI Engineer', 'Mechanical Engineer', 'Civil Engineer', 'Electrical Engineer', 'Robotics Engineer', 'Aerospace Engineer', 'Game Developer', 'Cybersecurity Analyst'],
    'Creative & Design' => ['UI/UX Designer', 'Graphic Designer', 'Product Designer', 'Fashion Designer', 'Interior Designer', 'Animation & VFX Artist'],
    'Arts & Media' => ['SEO Specialist', 'Digital Marketer', 'Content Strategist', 'Journalist', 'News Anchor', 'Social Media Manager', 'Film Director', 'Public Relations (PR) Specialist', 'Photographer'],
    'Medical' => ['Doctor', 'Nurse', 'Pharmacist', 'Physiotherapist', 'Nutritionist/Dietitian', 'Biotechnologist', 'Veterinary Doctor'],
    'Business & Management' => ['Chartered Accountant (CA)', 'Investment Banker', 'Financial Analyst', 'Business Manager', 'Digital Marketer', 'Entrepreneur', 'Human Resource Manager', 'Hotel Manager'],
    'Law & Government Services' => ['Lawyer', 'Civil Services', 'Judge', 'Bank PO', 'Indian Army Officer', 'Indian Navy Officer', 'Indian Air Force Officer', 'Public Policy Analyst'],
    'Sciences & Research' => ['Physicist', 'Chemist', 'Environmental Scientist', 'Forensic Scientist', 'Astronomer', 'Mathematician', 'Microbiologist', 'Genetic Engineer'],
    'Travel & Hospitality' => ['Air Hostess / Cabin Crew', 'Travel Blogger', 'Hotel Manager', 'Tour Guide'],
    'Fitness & Lifestyle' => ['Fitness Trainer', 'Yoga Instructor', 'E-Sports Player', 'Influencer / YouTuber']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($generalCareer) ?> Careers</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <h1>Explore Career Opportunities</h1>
    <div class="general-careers-container">
        <?php foreach ($careers as $category => $subCareers): ?>
            <h2><?= htmlspecialchars($category) ?></h2>
            <div class="subcareers-container">
                <?php foreach ($subCareers as $subCareer): ?>
                    <a href="details.php?general=<?= urlencode($category) ?>&sub=<?= urlencode($subCareer) ?>">
                        <?= htmlspecialchars($subCareer) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
