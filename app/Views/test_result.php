<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Apes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css');?>">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/33e5cd664a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 header">
                Taty Julia's Assessment Test Result Summary
            </div>
        </div>

        <div class="row">
            <div class="col-12 topic">
                <div class="col-12 ">
                    <h5 class="topic-title">Grammar</h5>
                </div>
                <hr class="line">
                <div class="row">
                    <!-- Score Section -->
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <h6 class="score-title">Your Overall Score</h6>
                        <div class="score-section">
                            <div class="progress-bar-circle" id="grammar-progress-bar"></div>
                            <h2 class="score"><?php echo round(count($correct_submitted_grammar)/9*100)?></h2>
                            <p class="correct-answer">Correct Answer</p>
                            <p class="correct-answer"><span class="blue"><?php echo count($correct_submitted_grammar) ?></span> / 9</p>
                        </div>
                    </div>
                    <div class="vr"></div>
                    <!-- Recommendation Program -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Program</h6>
                        <div class="recommendation-program mt-3 p-2">
                            <table class="table table-hover recommendation-table">
                                <thead class="table-header border-bottom">
                                    <th>Program Name</th>
                                    <th class="text-center">Price</th>
                                    <th>Ratings</th>
                                </thead>
                                <tbody class="table-body">
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book1.jpg');?>" alt=""><a href="">Learn English with Lucy 4.0</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book2.jpg');?>" alt=""><a href="">How to Learn English Fast</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book3.jpg');?>" alt=""><a href="">No Worries! English is Fun!</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Recommendation Product -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Product</h6>
                        <div class="recommendation-product mt-3 p-4">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 1</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 2</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 3</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 topic">
                <div class="col-12 ">
                    <h5 class="topic-title">Vocabulary</h5>
                </div>
                <hr class="line">
                <div class="row">
                    <!-- Score Section -->
                    <div class="col-md-3 col-sm-12">
                        <h6 class="score-title">Your Overall Score</h6>
                        <div class="score-section">
                            <div class="progress-bar-circle" id="vocabulary-progress-bar"></div>
                            <h2 class="score"><?php echo round(count($correct_submitted_vocabulary)/8*100)?></h2>
                            <p class="correct-answer">Correct Answer</p>
                            <p class="correct-answer"><span class="blue"><?php echo count($correct_submitted_vocabulary) ?></span> / 8</p>
                        </div>
                    </div>
                    <div class="vr"></div>
                    <!-- Recommendation Program -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Program</h6>
                        <div class="recommendation-program mt-3 p-2">
                            <table class="table table-hover recommendation-table">
                                <thead class="table-header border-bottom">
                                    <th>Program Name</th>
                                    <th class="text-center">Price</th>
                                    <th>Ratings</th>
                                </thead>
                                <tbody class="table-body">
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book1.jpg');?>" alt=""><a href="">Learn English with Lucy 4.0</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book2.jpg');?>" alt=""><a href="">How to Learn English Fast</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book3.jpg');?>" alt=""><a href="">No Worries! English is Fun!</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Recommendation Product -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Product</h6>
                        <div class="recommendation-product mt-3 p-4">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 1</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 2</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 3</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 topic">
                <div class="col-12 ">
                    <h5 class="topic-title">Editing</h5>
                </div>
                <hr class="line">
                <div class="row">
                    <!-- Score Section -->
                    <div class="col-md-3 col-sm-12">
                        <h6 class="score-title">Your Overall Score</h6>
                        <div class="score-section">
                            <div class="progress-bar-circle" id="editing-progress-bar"></div>
                            <h2 class="score"><?php echo round(count($correct_submitted_editing)/5*100)?></h2>
                            <p class="correct-answer">Correct Answer</p>
                            <p class="correct-answer"><span class="blue"><?php echo count($correct_submitted_editing) ?></span> / 5</p>
                        </div>
                    </div>
                    <div class="vr"></div>
                    <!-- Recommendation Program -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Program</h6>
                        <div class="recommendation-program mt-3 p-2">
                            <table class="table table-hover recommendation-table">
                                <thead class="table-header border-bottom">
                                    <th>Program Name</th>
                                    <th class="text-center">Price</th>
                                    <th>Ratings</th>
                                </thead>
                                <tbody class="table-body">
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book1.jpg');?>" alt=""><a href="">Learn English with Lucy 4.0</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book2.jpg');?>" alt=""><a href="">How to Learn English Fast</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book3.jpg');?>" alt=""><a href="">No Worries! English is Fun!</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Recommendation Product -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Product</h6>
                        <div class="recommendation-product mt-3 p-4">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 1</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 2</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 3</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 topic">
                <div class="col-12 ">
                    <h5 class="topic-title">Synthensis and Transformations</h5>
                </div>
                <hr class="line">
                <div class="row">
                    <!-- Score Section -->
                    <div class="col-md-3 col-sm-12">
                        <h6 class="score-title">Your Overall Score</h6>
                        <div class="score-section">
                            <div class="progress-bar-circle" id="synthesis-progress-bar"></div>
                            <h2 class="score"><?php echo round(count($correct_submitted_synthesis)/3*100)?></h2>
                            <p class="correct-answer">Correct Answer</p>
                            <p class="correct-answer"><span class="blue"><?php echo count($correct_submitted_synthesis) ?></span> / 3</p>
                        </div>
                    </div>
                    <div class="vr"></div>
                    <!-- Recommendation Program -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Program</h6>
                        <div class="recommendation-program mt-3 p-2">
                            <table class="table table-hover recommendation-table">
                                <thead class="table-header border-bottom">
                                    <th>Program Name</th>
                                    <th class="text-center">Price</th>
                                    <th>Ratings</th>
                                </thead>
                                <tbody class="table-body">
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book1.jpg');?>" alt=""><a href="">Learn English with Lucy 4.0</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book2.jpg');?>" alt=""><a href="">How to Learn English Fast</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book3.jpg');?>" alt=""><a href="">No Worries! English is Fun!</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Recommendation Product -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Product</h6>
                        <div class="recommendation-product mt-3 p-4">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 1</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 2</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 3</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 topic">
                <div class="col-12 ">
                    <h5 class="topic-title">Grammar Cloze</h5>
                </div>
                <hr class="line">
                <div class="row">
                    <!-- Score Section -->
                    <div class="col-md-3 col-sm-12">
                        <h6 class="score-title">Your Overall Score</h6>
                        <div class="score-section">
                            <div class="progress-bar-circle" id="grammar-cloze-progress-bar"></div>
                            <h2 class="score"><?php echo round(count($correct_submitted_grammar_cloze)/5*100)?></h2>
                            <p class="correct-answer">Correct Answer</p>
                            <p class="correct-answer"><span class="blue"><?php echo count($correct_submitted_grammar_cloze) ?></span> / 5</p>
                        </div>
                    </div>
                    <div class="vr"></div>
                    <!-- Recommendation Program -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Program</h6>
                        <div class="recommendation-program mt-3 p-2">
                            <table class="table table-hover recommendation-table">
                                <thead class="table-header border-bottom">
                                    <th>Program Name</th>
                                    <th class="text-center">Price</th>
                                    <th>Ratings</th>
                                </thead>
                                <tbody class="table-body">
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book1.jpg');?>" alt=""><a href="">Learn English with Lucy 4.0</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book2.jpg');?>" alt=""><a href="">How to Learn English Fast</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                    <tr>
                                        <td><img class="program-image"src="<?= base_url('assets/img/english-book3.jpg');?>" alt=""><a href="">No Worries! English is Fun!</a></td>
                                        <td class="align-middle"><span class="discounted">$15</span>  $12.5</td>
                                        <td class="align-middle"><i class="fa-solid fa-star star"></i> 4.8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Recommendation Product -->
                    <div class="recommendation-section col-sm-12">
                        <h6 class="recommendation-title">Recommendation Product</h6>
                        <div class="recommendation-product mt-3 p-4">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="product">
                                        <img class="product-image me-1 p-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 1</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 2</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="product">
                                        <img class="product-image me-1" src="<?= base_url('assets/img/grammar-book.jpg');?>" alt="">
                                        <div class="product-details">
                                            <h5 class="product-name">English Grammar in Use 3</h5>
                                            <h6 class="product-author">Raymond Murphy</h6>
                                            <p><span class="discounted">$15</span>  $12.5</p>
                                            <p class="mb-2"><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i><i class="fa-solid fa-star star"></i> 4.8 <span class="rating-amount">(4k rating)</span></p>
                                            <button class="btn btn-outline-grey buy-btn"><img class="me-1" src="<?= base_url('assets/img/shopping-cart.svg');?>" alt="">Buy Book</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-next ms-1" style="float:right;">Go to Dashboard</button>
        <button class="btn btn-prev ms-auto mb-5" style="float:right;">Retake Test</button>
            
    </div>
</body>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- ProgressBar JS -->
<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    var stepsize = 100;
    var grammar_bar = new ProgressBar.SemiCircle('#grammar-progress-bar', {
      strokeWidth: 13,
      color: '#4EB7B5',
      trailColor: '#F43064',
      trailWidth: 12,
      easing: 'easeInOut',
      duration: 1400,
      svgStyle: null,
      text: {
        value: '',
        alignToBottom: false
      },
    });

    var vocabulary_bar = new ProgressBar.SemiCircle('#vocabulary-progress-bar', {
      strokeWidth: 13,
      color: '#4EB7B5',
      trailColor: '#F43064',
      trailWidth: 12,
      easing: 'easeInOut',
      duration: 1400,
      svgStyle: null,
      text: {
        value: '',
        alignToBottom: false
      },
    });

    var editing_bar = new ProgressBar.SemiCircle('#editing-progress-bar', {
      strokeWidth: 13,
      color: '#4EB7B5',
      trailColor: '#F43064',
      trailWidth: 12,
      easing: 'easeInOut',
      duration: 1400,
      svgStyle: null,
      text: {
        value: '',
        alignToBottom: false
      },
    });

    var synthesis_bar = new ProgressBar.SemiCircle('#synthesis-progress-bar', {
      strokeWidth: 13,
      color: '#4EB7B5',
      trailColor: '#F43064',
      trailWidth: 12,
      easing: 'easeInOut',
      duration: 1400,
      svgStyle: null,
      text: {
        value: '',
        alignToBottom: false
      },
    });

    var grammar_cloze_bar = new ProgressBar.SemiCircle('#grammar-cloze-progress-bar', {
      strokeWidth: 13,
      color: '#4EB7B5',
      trailColor: '#F43064',
      trailWidth: 12,
      easing: 'easeInOut',
      duration: 1400,
      svgStyle: null,
      text: {
        value: '',
        alignToBottom: false
      },
    });
    
var grammar_score = <?php echo count($correct_submitted_grammar)/9;?>;
var vocabulary_score = <?php echo count($correct_submitted_vocabulary)/8;?>;
var editing_score = <?php echo count($correct_submitted_editing)/5;?>;
var synthesis_score = <?php echo count($correct_submitted_synthesis)/3;?>;
var grammar_cloze_score = <?php echo count($correct_submitted_grammar_cloze)/3;?>;

// put here percente logic out put 
grammar_bar.animate(grammar_score); // Number from 0.0 to 1.0
vocabulary_bar.animate(vocabulary_score);
editing_bar.animate(editing_score);
synthesis_bar.animate(synthesis_score);
grammar_cloze_bar.animate(grammar_cloze_score);


</script>
</html>