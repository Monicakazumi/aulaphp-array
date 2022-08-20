<?php 
  include "header.php";
  include "dados.php";

  // echo "<pre>"; // para formatação de um paragrafo

  // print_r($series); //conteudo de um array - como se chama um array

  // echo "</pre>"; // final da formatação
?>

<main>
  <h1>Séries em Destaque:</h1>
  <div class="grid">
    <?php 
      $i = 0;
      //randomizar o array - bagunçar
      shuffle($series);

      foreach($series as $serie){ //para chamar os arrays
        $i++;
        if($i > 4) break;

        $id = $serie["id"];
        $nome = $serie["nome"];
        $imagem = $serie["imagem"];

        echo "<div class= 'coluna'>
          <img src='imagens/{$imagem}'>
          <p><strong>{$nome}</strong></p>
          <p>
            <a href='serie.php?id={$id}'>
              Detalhes
            </a>
          </p>
        </div>";
      }
    ?>
  </div>
</main>

<?php include "footer.php"; ?>