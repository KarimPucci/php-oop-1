<?php
//var_dump($movies);
?>

<body>

  <main>

    <div class="container">

      <div class="row py-5">

        <?php foreach ($movies as $movie) : ?>

          <div class="col-6 mb-5">
            <div class="card">
              <img src="<?php echo $movie->poster ?>" class="card-img-top" alt="<?php echo $movie->title ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title ?></h5>
                <h3 class="card-title">Generi</h3>
                <ul>
                  <?php foreach ($movie->genres as $genre) : ?>
                    <li><?php echo $genre->name ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>

        <?php endforeach; ?>


      </div>

    </div>

  </main>

</body>