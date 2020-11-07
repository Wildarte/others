<!DOCTYPE html>
<html>
<head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <script src="https://cdn.tiny.cloud/1/pv90zh0q73jzb1i7pdf5zok9k604t63oemprk09c7evkx7ju/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <style>
    iframe{
      width: 100vh;
      height: 50vh;
    }
  </style>
</head>
<body>
    
  <form method="post" action="">
    <pre>
      <textarea name="content" id="text" style="min-height: 60vh;">
        Welcome to TinyMCE!
      </textarea>
      <script>
        tinymce.init({
          selector: '#text',
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name'
        });
      </script>
    </pre>
    <input type="submit" value="Terminar">
    
  </form>
  <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $text = $_POST['content'];

      $article = fopen("artigo.php", "w") or die("Não foi possível criar o artigo");
      $header = "<?php include 'header.html'; ?>";
      fwrite($article, $header);
      
      $content = $text;
      fwrite($article, $content);
      $footer = "<?php include 'footer.html'; ?>";
      fwrite($article, $footer);
      
      echo "<p>Artigo criado acesse através do link: <a href='artigo.php'>artigo</a></p>";
      
    }

  ?>
</body>
</html>