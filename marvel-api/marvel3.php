<html>
<head>

  <?php 
   http://gateway.marvel.com/v1/public/comics?ts=1&apikey=43634ab5f5b50782274a50ec7e7d9811&hash=4761558e45170642234948dc70f24c20
   include('js/main.php');
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
	
#conteudo{
 display:inline;
float:left;
margin:10px;
margin-top:50px;


}

</style>


   
    <link rel="stylesheet" href="css/style.css">
<title>Marvel</title>
    
</head>

<body>
<div class="container">



<h1 class="text-center">Marvel</h1>  
<p class="lead text-center" id="message"></p>



<?php 
  $i=1;

foreach ($result as $key) {
         
		$img = $data['results'][$i]['thumbnail']['path'].'.jpg';
		$title = $data['results'][$i]['title'];

$i++;

	# code...
 ?>

  
  <div class="col-md-3" id="conteudo">
  	
  	<img src="<?php echo $img ?>" width="190" alt="">
          <h4><?php echo $title ?></h4>
 
 <p class="text-center"></p>
  </div>



<?php } ?>



</div>
<footer class="footer" id="footer">
  

</footer>





	




<div id="footer">
	
</div>



</body>

</html>


