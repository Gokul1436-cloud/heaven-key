<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects - Heaven Key </title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="./assets/image/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" href="./assets/image/favicon.png">

    <?php include('./includes/head.php'); ?>
</head>

<body>

    <div class="page-wrap">

        <?php include('./includes/header.php'); ?>

        <main>

            <!-- sub banner -->
            <section>
                <div class="subbanner-inner" style="background-image: url('./assets/image/banner/sub-banner-6.png')">
                    <div class="container-fluid">
                        <div class="sub-banner-title sub-banner-projet">
                            <h2 class="text-center">Tala the sound of nature</h2>
                        </div>

                        <div class="breadcrumbs projet-breadcrumbs">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#" class="sub-active">Tala</a></li>
                            </ul>
                        </div>
                        <!-- <div class="subbanner-para">
                            <p>Making every step of your home journey joyful and worry-free.</p>
                        </div> -->
                        <div class="sub-banner-overlay">

                        </div>
                    </div>
                </div>
            </section>


            <!-- product gallery  -->
            <section>
                <div class="project-inner project-detail-inner">
                    <div class="container-fluid">

                        <div class="comming-soon">
                            <img src="./assets/image/comming-soon.png" class="img-fluid" alt="">
                        </div>

                    </div>

                    <div class="product-detail-overlay-1">
                        <img src="./assets/image/shapes/music-1.png" class="img-fluid" alt="">
                    </div>
            </section>

            <style>
                .comming-soon img{
                    width: 100%;
                    height: auto; 
                    border-radius: 30px;

                }
                .comming-soon{
                    width: 100%;
                    height: auto;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    /* padding: 70px; */
                }
            </style>





        </main>

        <?php include('./includes/footer.php'); ?>

    </div>
    <?php include('./includes/script.php'); ?>

</body>

</html>