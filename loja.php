 <!DOCTYPE html>
 <html lang="pt">
   <head>
     <meta charset="utf-8">
     <title> Loja Pop's</title>
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/reset.css">
     <link rel="stylesheet" href="css/arielle.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="js/jquery.js"></script>
     <script src="js/event.js"></script>
     <script src="js/effects.js"></script>
   </head>
   <body>
       <header><?php require_once 'header.php'; ?></header>
       <div class="principal">
         <div class="area-brindes">
           <a href="carrinho.php">
              <div class="carrinho-compras"></div>
           </a>


           <div class="caixa-produtos-brindes">
             <div class="card-imagem-brinde">
               <img src="img/brinde_quadro.jpg" alt="">
             </div>

             <div class="descricao-brinde">
               <p> Quadro 7Up Vintage </p>
               <span> R$ 30,90</span>
               <input type="submit" name="btnCompra" Value="Comprar">
             </div>
           </div>

           <div class="caixa-produtos-brindes">
             <div class="card-imagem-brinde">
               <img src="img/brinde-relogio.jpg" alt="">
             </div>

             <div class="descricao-brinde">
               <p> Relógio Grapette </p>
               <span> R$ 35,00 </span>
               <input type="submit" name="btnCompra" Value="Comprar">
             </div>
           </div>

           <div class="caixa-produtos-brindes">
             <div class="card-imagem-brinde">
               <img src="img/brinde-grapette.jpg" alt="">
             </div>

             <div class="descricao-brinde">
                <p> Caixa Grapette </p>
               <span> R$ 44,90 </span>
               <input type="submit" name="btnCompra" Value="Comprar">
             </div>
           </div>
         </div>
       </div>
       <footer> <?php require_once 'footer.html' ?></footer>
   </body>
 </html>
