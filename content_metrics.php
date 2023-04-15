
<form method="post">
  Select the type of content:
  <select name="content_type">
    <option value="video">Video</option>
    <option value="picture">Picture</option>
    <option value="audio">Audio</option>
  </select><br>

  Select the audience gender:
  <input type="radio" name="audience_gender" value="male">Male
  <input type="radio" name="audience_gender" value="female">Female<br>

  Select the audience age group:
  <input type="radio" name="audience_age" value="18-24">18-24
  <input type="radio" name="audience_age" value="25-34">25-34
  <input type="radio" name="audience_age" value="35-44">35-44
  <input type="radio" name="audience_age" value="45+">45+<br>

  Enter the audience engagement metric (between 0 and 1):
  <input type="text" name="audience_engagement"><br>

  <input type="submit" value="Submit">
</form>


<?php
// Define the reward amounts for each type of content
$reward_video = 1000;
$reward_picture = 500;
$reward_audio = 250;

// Define the reward multiplier for each demographic group
$multiplier_male = 1.5;
$multiplier_female = 2.0;
$multiplier_age_18_24 = 1.2;
$multiplier_age_25_34 = 1.5;
$multiplier_age_35_44 = 1.8;
$multiplier_age_45_plus = 2.0;

// Get the input values from the form
$content_type = $_POST["content_type"];
$audience_gender = $_POST["audience_gender"];
$audience_age = $_POST["audience_age"];
$audience_engagement = $_POST["audience_engagement"];

// Calculate the reward based on the type of content, audience demographics, and engagement metrics
if ($content_type == "video") {
    $reward = $reward_video;
} elseif ($content_type == "picture") {
    $reward = $reward_picture;
} elseif ($content_type == "audio") {
    $reward = $reward_audio;
} else {
    // If the content type is not valid, set the reward to 0
    $reward = 0;
}

if ($audience_gender == "male") {
    $reward *= $multiplier_male;
} elseif ($audience_gender == "female") {
    $reward *= $multiplier_female;
}

if ($audience_age == "18-24") {
    $reward *= $multiplier_age_18_24;
} elseif ($audience_age == "25-34") {
    $reward *= $multiplier_age_25_34;
} elseif ($audience_age == "35-44") {
    $reward *= $multiplier_age_35_44;
} elseif ($audience_age == "45+") {
    $reward *= $multiplier_age_45_plus;
}

$reward *= $audience_engagement;

// Display the reward
echo "The reward for the content creator is: $" . number_format($reward, 2);
?>

