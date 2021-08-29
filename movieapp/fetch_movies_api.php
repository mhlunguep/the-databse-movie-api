<!--Fetch movies using the api---->

<?php
    for($i=1; $i<4; $i++)
    {
        $url = "https://api.themoviedb.org/3/discover/movie?&api_key=2c54718cf1125f2b96651d5ba2f13cfa&language=en-US&page=$i";

        $img_url = 'https://image.tmdb.org/t/p/w300';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
        "Accept: application/json",
        "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyYzU0NzE4Y2YxMTI1ZjJiOTY2NTFkNWJhMmYxM2NmYSIsInN1YiI6IjYxMjM4MGExZmNmOTA3MDA3NGQxMDhjNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.EG4H1QQoi5hqbcl-9T_citjAqdsbWBvAzbwdae0YtQs",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        $response_data = json_decode($resp);

        $movie_data = $response_data->results;

        //var_dump($movie_data);

        include "config.php"; 

        //check if movie does not exist in databse, save it  
        //Save movie data in database
        foreach($movie_data as $movie)
        {
            $sql = "INSERT INTO movies (
                            movie_title, 
                            movie_release_date, 
                            movie_poster)
                        VALUES ( 
                            '$movie->original_title', 
                            '$movie->release_date',
                            '<img src=$img_url$movie->poster_path>' 
                            
                    )";
            if ($conn->query($sql) === TRUE) {
              //  echo "created successfully"."<br>";
             } else {
                // echo "Error: " . $sql . "<br>" . $conn->error."<br>";
             }
        }
        $conn->close();
  
    }
     
?>