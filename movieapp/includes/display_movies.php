<?php

if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 9;
    $start_from = ($page-1)*$num_per_page;
    // Retrieve all the data from the table
    $query = "select * from movies limit $start_from,9";
    $result = mysqli_query($conn,$query);

?>    
  <main>
    <div class ="container text-center">
            <h1 class="text-white text-center my-4"> The Movie Database API</h1>
            <hr width="50%" align="center">
                            
            <?php
                $i = 0; $trEnd = 0;
                //fetch data from database and display 
                while ($row=mysqli_fetch_assoc($result)){
                    if($i == 0){ 
                        echo '<div class="movie">';
                    }
                    echo '<div class="movie-img">'.$row['movie_poster'].'</div>',
                    '<div class="movie-info">',
                            '<h3>'.$row['movie_title'].'</h3>'.'<br>', 
                            '<p>'.$row['movie_release_date'].'</p>',
                                '<form action="add-to-favorite.php">
                        <button type="submit" class="btn-fav"><i class="fa fa-heart"></i>Favorite</button></form>'.
                         '</div>';
                    if($i == 2){
                        $i = 0; $trEnd = 1;
                    }else{
                        $trEnd = 0; $i++;
                    }
                    if($trEnd == 1) {       
                        echo '</div>';
                    }
                }
                if($trEnd == 0) echo '</div>';
            ?>
        
    </div>    
</main>
        <div class="text-center my-4">
        <?php 
        //pagiation buttons
                $pr_query = "select * from movies ";
                $pr_result = mysqli_query($conn,$pr_query);
                
                
                $total_page = ceil(45/$num_per_page);

                if($page>1)
                {
                    echo "<a href='index.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
                }

                
                for($i=1;$i<$total_page;$i++)
                {
                    echo "<a href='index.php?page=".$i."' class='btn btn-primary'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='index.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
                }
        
        ?>    
        </div>
</body>
