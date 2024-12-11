<!doctype html>
<html lang="en">
  <head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="php-string-function">
    <meta name="description" content="PHP provides a variety of string functions to manipulate and analyze strings. Here are some commonly used PHP string functions along with brief descriptions">
    <meta name="keywords" content="php-string-function,echo,print,chunk_split,explode,md5,sha1,str_increment,str_word_count,str_repeat,str_ireplace,str_shuffle,str_split,strip-tags,stripos,strlen,substr_count,substr_replace,trim,wordwrap,utf8_decode,utf8_encode">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="3 days">
    <meta name="author" content="Montasir Alam">
    <title>php-string-function</title>
    <!--favicon link-->
    <link rel="icon" type="image/png" href="images/php-logo.png">
    <!--css links-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
    <div class="1"><h1>echo print</h1>
    <?php
        function textMessage(){   
          echo"Hello, World!";
          print"Hello, World!";
        }
        textMessage()
    ?>
    </div>
    <div> <h1>chunk_split</h1>
      <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo chunk_split($data,5,"...");
      ?>
    </div>
    <div><h1>explode</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          print_r(explode(" ", $data));
      ?>
    </div>
    <div><h1>md5</h1>
    <?php 
          $pass = "Hello World!";
          echo $pass."</br>";
          echo md5($pass) ;
      ?>
    </div>
    <div><h1>sha1</h1>
    <?php 
          $pass = "Hello World!";
          echo $pass."</br>";
          echo sha1($pass) ;
      ?>
    </div>
    <div><h1>printf</h1>
    <?php 
          $pass = "Hello World!";
          echo $pass."</br>";
          printf($pass) ;
      ?>
    </div>
    <div><h1>str_increment</h1>
    <?php 
          $pass = "montasir";
          echo $pass."</br>";
          echo str_increment($pass) ;
      ?>
    </div>
    <div><h1>str_word_count</h1>
    <?php 
          $data = "loram ipsam hello i am a doctor";
          echo $data."</br>";
          echo (str_word_count($data)) ;
          print_r (str_word_count($data,1)) ;
      ?>
    </div>
    <div><h1>str_repeat</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo str_repeat($data , 7) ;
      ?>
    </div>
    <div><h1>str_ireplace</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo str_ireplace( "world","loram ipsam" , $data );
      ?>
    </div>
    <div><h1>str_shuffle</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo str_shuffle($data );
      ?>
    </div>
    <div><h1>str_split</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          print_r (str_split($data ));
      ?>
    </div>
    <div><h1>strip-tags</h1>
    <?php 
          $data = '<H4>Hello World!</H4>';
          echo $data."</br>";
          echo strip_tags($data);
      ?>
    </div>
    <div> <h1>stripos</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo stripos($data, "World");
      ?>
    </div>
    <div> <h1>strlen</h1>
    <?php 
          $data = "Hello World!";
          echo $data."</br>";
          echo strlen($data);
      ?>
    </div>
    <div> <h1>substr_count</h1>
    <?php 
          $data = "Hello World loram ipsam hello i am a doctor!";
          echo $data."</br>";
          echo substr_count($data, "l");
      ?>
    </div>
    <div> <h1>substr_replace</h1>
    <?php 
          $data = "Hello World loram ipsam hello i am a doctor !";
          echo $data."</br>";
          echo substr_replace($data, "doctor" ,  -2, );
      ?>
    </div>
    <div> <h1>trim</h1>
    <?php 
          $data = "Hello World loram ipsam hello i am a doctor !";
          echo $data."</br>";
          $trimmed = trim($data, 'HdWr');
          var_dump($trimmed);
          ?>
    </div>
    <div> <h1>wordwrap</h1>
    <?php 
          $data = "Hello World loram ipsam hello i am a doctor !";
          echo $data."</br>";
          $newtext = wordwrap($data, 10, "<br />\n");
          echo $newtext;
    ?>
    </div>
    </div>
    <!--js links-->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>