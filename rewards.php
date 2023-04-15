<?php
// Define the values for each factor
$contentType = "video"; // type of content
$ageGroup = "18-24"; // demographic of the audience
$engagementScore = 500;
$audienceScore = 200;
$metricsScore = 300;

// Define the weightings for each factor
$wContentType = 0.35;
$wAgeGroup = 0.2;
$wEngagement = 0.2;
$wAudience = 0.15;
$wMetrics = 0.1;

// Calculate the reward using the formula
$reward = ($contentType == "video" ? 1000 : 500) * $wContentType + ($ageGroup == "18-24" ? 750 : 500) * $wAgeGroup + $engagementScore * $wEngagement + $audienceScore * $wAudience + $metricsScore * $wMetrics;

// Display the reward
echo "The reward for the content creator is: $" . number_format($reward, 2);
?>
