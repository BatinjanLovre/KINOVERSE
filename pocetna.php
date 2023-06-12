<?php

    session_start();

	if (!isset($_POST['action']) || $_POST['action'] == '') { $_POST['action'] = FALSE; }
		
		if ($_POST['action'] == FALSE) {
			echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>KINOVERSE</title>
                <link rel="stylesheet" href="">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            </head>
            <body style="background-color: black;">
                <!--navbar-->
                <div class="container">
                    <nav class="navbar" style="background-color: #FFC000">
                        <div class="container-fluid">
                            <a class="navbar-brand"><strong>Welcome '. $_SESSION["user"] . ', to KINOVERSE!</strong></a>
                            <div class="fixed-bottom">
                                <a class="btn btn-danger btn-sm" href="index.php" role="button">Log out</a>
                            </div>
                            <form class="d-flex" name="imdbsearch" id="imdbsearch" method="POST">
                                <input id="searchInput" name="searchInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <input type="hidden" name="action" value="TRUE">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                    <!--main-->
                    <div class="container-fluid mb-5">
            
                        <div class="container-sm" style="color: white;"><h3 class="pt-3">MONTHLY RECOMMENDATIONS</h3></div>
                        <div class="row row-cols-3 text-center " style="color: white;">
                            <div class="col mt-3">
                                <div class="col mx-5" style="background-color: #FFC000;">
                                    <a href="https://www.imdb.com/title/tt9362722/"><img src="images/spiderverse.jpg" class="img-fluid border border-warning border-5" alt="spiderverse"></a>
                                    <h5 class="pb-2">Spider-Man: Across the Spider-Verse (2023)</h5>
                                </div>
                            </div>
                            <div class="col mt-3">
                                <div class="col mx-5" style="background-color: #FFC000;">
                                    <a href="https://www.imdb.com/title/tt10366206/"><img src="images/johnwick4.jpg" class="img-fluid border border-warning border-5" alt="johnwick4"></a>
                                    <h5 class="pb-2">John Wick: Chapter 4 (2023)</h5>
                                </div>
                            </div>
                            <div class="col mt-3">
                                <div class="col mx-5" style="background-color: #FFC000;">
                                    <a href="https://www.imdb.com/title/tt6718170/"><img src="images/mario.jpg" class="img-fluid border border-warning border-5" alt="mario"></a>
                                    <h5 class="pb-2">The Super Mario Bros. Movie (2023)</h5>
                                </div>           
                            </div>
                            <div class="col mt-5">
                                <div class="col mx-5" style="background-color: #FFC000;">
                                    <a href="https://www.imdb.com/title/tt6791350/"><img src="images/gotg3.jpg" class="img-fluid border border-warning border-5" alt="gotg3"></a>
                                    <h5 class="pb-2">Guardians of the Galaxy Vol. 3 (2023)</h5>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="col mx-5" style="background-color: #FFC000;">
                                    <a href="https://www.imdb.com/title/tt5971474/"><img src="images/littlemermaid.jpg" class="img-fluid border border-warning border-5" alt="littlemermaid"></a>
                                    <h5 class="pb-2">The Little Mermaid (2023)</h5>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="col mx-5" style="background-color: #FFC000;">
                                    <a href="https://www.imdb.com/title/tt6751668/"><img src="images/parasite.jpg" class="img-fluid border border-warning border-5" alt="parasite"></a>
                                    <h5 class="pb-2">Parasite (2019)</h5>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="col mx-5" style="background-color: #FFC000;">
                                    <a href="https://www.imdb.com/title/tt8936646/"><img src="images/extraction.jpg" class="img-fluid border border-warning border-5" alt="extraction"></a>
                                    <h5 class="pb-2">Extraction (2020)</h5>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="col mx-5" style="background-color: #FFC000;">
                                    <a href="https://www.imdb.com/title/tt2906216/"><img src="images/dnd.jpg" class="img-fluid border border-warning border-5" alt="dnd"></a>
                                    <h5 class="pb-2">Dungeons & Dragons: Honour Among Thieves (2023)</h5>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="col mx-5" style="background-color: #FFC000;">
                                    <a href="https://www.imdb.com/title/tt7985704/"><img src="images/fortune.jpg" class="img-fluid border border-warning border-5" alt="fortune"></a>
                                    <h5 class="pb-2">Operation Fortune: Ruse de Guerre (2023)</h5>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!--footer-->
                    <footer class="text-center text-lg-start" style="background-color: #FFC000">
                    
                        <div class="text-center p-3">
                            © 2023 Copyright:
                            <a class="text-dark" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Lovre Batinjan</a>
                        </div>
                        
                    </footer>
            
                </div>
            
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
                <script src="main.js"></script>
            
            </body>
            </html>';
		} 
		else if ($_POST['action'] == TRUE) {
			
			$key = '3514ef9a';
		
			$url = 'http://www.omdbapi.com/?apikey='.$key.'&t=' . urlencode($_POST['searchInput']);

			$json = file_get_contents($url);
			$_data = json_decode($json,true);

			if (!empty($_data)) {
                echo '
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>KINOVERSE - search movie</title>
                    <link rel="stylesheet" href="">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
                </head>
                <body style="background-color: black;">
                    <!--navbar-->
                    <div class="container">
                        <nav class="navbar" style="background-color: #FFC000">
                            <div class="container-fluid">
                                <a class="navbar-brand"><strong>Welcome '. $_SESSION["user"] . ', to KINOVERSE!</strong></a>
                                <div class="fixed-bottom">
                                    <a class="btn btn-danger btn-sm" href="index.php" role="button">Log out</a>
                                </div>
                                <a class="btn btn-light d-flex" href="pocetna.php" role="button">Back</a>
                            </div>
                        </nav>

                        <!--main-->
                        <div class="container-fluid mb-5">
                        
                        <div class="container-sm" style="color: white;"><h3 class="pt-3">Result of your search</h3></div>
                        <div class="row">
                            <div class="col-4">
                                <img src="' . $_data['Poster'] . '" alt="' . $_data['Title'] . '" class="img-fluid border border-warning border-5">
                            </div>
                            <div class="col-8" style="color: white;">

                                <p><strong>Movie title:</strong> ' . $_data['Title'] . '</p>
                                <p><strong>Year:</strong> ' . $_data['Year'] . '</p>
                                <p><strong>Rated:</strong> ' . $_data['Rated'] . '</p>
                                <p><strong>Released:</strong> ' . $_data['Released'] . '</p>
                                <p><strong>Runtime:</strong> ' . $_data['Runtime'] . '</p>
                                <p><strong>Genre:</strong> ' . $_data['Genre'] . '</p>
                                <p><strong>Director:</strong> ' . $_data['Director'] . '</p>
                                <p><strong>Writer:</strong> ' . $_data['Writer'] . '</p>
                                <p><strong>Actors:</strong> ' . $_data['Actors'] . '</p>
                                <p><strong>Plot:</strong> ' . $_data['Plot'] . '</p>
                                <p><strong>Language:</strong> ' . $_data['Language'] . '</p>
                                <p><strong>Country:</strong> ' . $_data['Country'] . '</p>
                                <p><strong>Awards:</strong> ' . $_data['Awards'] . '</p>
                                <p><strong>Ratings:</strong> ' . $_data['Ratings'][0]['Source'] . ': ' . $_data['Ratings'][0]['Value'] . '</p>
                                <p><strong>imdbRating:</strong> ' . $_data['imdbRating'] . '</p>
                                <p><strong>Production:</strong> ' . $_data['Production'] . '</p>
                                <p><strong>Website:</strong> <a href="' . $_data['Website'] . '">' . $_data['Website'] . '</a></p>

                            </div>
                        </div>
                        
                        </div>
                
                        <!--footer-->
                        <footer class="text-center text-lg-start" style="background-color: #FFC000">
                        
                            <div class="text-center p-3">
                                © 2023 Copyright:
                                <a class="text-dark" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Lovre Batinjan</a>
                            </div>
                            
                        </footer>
                
                    </div>
                
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
                    <script src="main.js"></script>
                
                </body>
                </html>';
			}
			else {
				echo '<p>Something went wrong</p>';
			}
		}
	print '
	</div>';
?>