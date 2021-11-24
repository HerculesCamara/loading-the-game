 <?php   

include('conexao.php');

$busc = mysqli_query($con, "select * from noticia");

while($linha = mysqli_fetch_assoc($busc)){
  {
    echo  '<tr class="even pointer">';                            
    echo   '<td class=" "><a href="">'.$linha['idnoticia'].'</a></td>';
    echo   '<td class=" ">'.$linha['data'].'</td>';
    echo   '<td class=" ">'.$linha['autor'].'</td>';
    echo   '<td class=" last"><a href="">'.$linha['titulo'].'</a></td>';
    echo   '</tr>';
  }                           
  }
  mysqli_close($con);
?>