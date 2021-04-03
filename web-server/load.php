<script>
    <?php
        $data = file_get_contents("bike-data.json");
        echo "var bike_data = ". $data .";";
    ?>
</script>

<?php echo "load";?>