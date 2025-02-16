<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Conditions</title>
    <link rel="stylesheet" href="index.css">
<body>

    <!-- Video Background -->
    <div class="video-container">
        <video autoplay loop muted>
            <source src="exercise_1_images/vid_bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Date -->
    <div class="date">
        <?php echo date("l, F j"); ?>
    </div>

    <div class="container">
        <div class="weather-card">
            <h1>WEATHER<br>CONDITIONS</h1>
            
            <?php 
                // Array of weather conditions
                $weather_conditions = ["rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"];

                // Weather icon 
                $weather_icon = "exercise_1_images/sun.png";

                echo "<img src='$weather_icon' alt='Weather Icon' class='weather-icon'>";
                
                // Weather description
                echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had {$weather_conditions[5]} and {$weather_conditions[6]}. 
                Then came {$weather_conditions[1]} with a few {$weather_conditions[2]} and some {$weather_conditions[0]}. 
                At least we didn't get {$weather_conditions[3]} or {$weather_conditions[4]}.</p>"; 
            ?>

        </div>
    </div>

</body>
</html>
