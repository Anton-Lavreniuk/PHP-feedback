<?php include 'inc/header.php'; ?>

<?php
    //Connect to the database and retrieve feedback
    $sql = 'SELECT * FROM feedback';
    //$conn is included in the database.php file, which is included in the header.php
    $result = mysqli_query($conn, $sql);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
        <h2>What our users say</h2>
        <?php
        //If no feedback is available
        if(empty($feedback)):

        ?><p class="text-danger">No Feedback!</p>
            <?php
            endif;
                ?>
<?php
foreach ($feedback as $item):
?>
        <div class="card my-3 w-75">
            <div class="card-body text-center">
               <?php    echo $item['body']?>
                <div class="text-secondary mt-2">
                    By <?php echo $item['name']?> on <?php echo $item['date']?>
                </div>
            </div>
        </div>
    <?php
    endforeach;
        ?>


<?php include 'inc/footer.php'; ?>