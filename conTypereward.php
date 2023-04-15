<?php
// Define the reward amounts for each type of content
$reward_video = 1000;
$reward_picture = 200;
$reward_audio = 350;

// Get the input value from the form
$content_type = $_POST["content_type"];

// Calculate the reward based on the type of content
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

// Display the reward
echo "The reward for the content creator is: $" . number_format($reward, 2);
?>

<form method="post">
  Select the type of content:
  <select name="content_type">
    <option value="video">Video</option>
    <option value="picture">Picture</option>
    <option value="audio">Audio</option>
  </select>
  <input type="submit" value="Submit">
</form>
