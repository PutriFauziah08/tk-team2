<?php 
include_once 'connect.php';

$query = "SELECT id, file_name, title, sts FROM img_banner ORDER BY id ASC";
$result = $connection->query($query);
?>

<style>
    #carouselExampleIndicators {
        width: 100%;
        margin: auto;
        position: relative;
    }
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < $result->num_rows; $i++) : ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" <?= $i == 0 ? 'class="active"' : '' ?>></li>
        <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php if ($result->num_rows > 0) : ?>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <div class="carousel-item <?= $row['id'] == 1 ? 'active' : '' ?>">
                    <img src="images/<?= $row['file_name'] ?>" class="d-block w-100" alt="<?= $row['title'] ?>">
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="carousel-item">
                No images found.
            </div>
        <?php endif; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>