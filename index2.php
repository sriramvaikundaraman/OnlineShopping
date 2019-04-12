<html>
  <head>
    <title>Ajax Search Box using PHP and MySQL</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'searcher.php?key=%QUERY',
        limit : 10
    });
});
    </script>
    </head>
  <body>
    <form action="Search.php" method="POST">
     <input type="text" name="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Type your Query">
 </form>
 </body>
 </html>