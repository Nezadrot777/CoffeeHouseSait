<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    подключаем файл стилей css-->
    <link rel="stylesheet" href="assets/css/style.css">
    
<!--    добавим шрифты-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">

    <title>Кофейня</title>
</head>
<body>
   
<!--   шапка сайта-->
   <div class='header'> 
      <div class='container'>
       <div class='header-line'>
          
<!--          вставляем логотип-->
           <div class='header-logo'>
               <img src="assets/images/coffee.png" alt="">
           </div>
           
<!--          создание меню перехода на другие страницы -->
          <div class='nav'>
              <a class='nav-item' href="index.php">ГЛАВНАЯ</a>
              <a class='nav-item' href="price.html">МЕНЮ</a>
              <a class='nav-item' href="about.html">О НАС</a>
          </div> 
          
<!--          вставим иконку (кнопку) корзины-->
          <div class='cart'>
              <a href="price.html">
                  <img class='cart-img' src="assets/images/cart.png" alt="">
              </a>    
          </div>
          
<!--          вставим иконку телефона и сам номер-->
          <div class='phone'>
            <div class='phone-holder'>
              <div class='phone-img'>
                  <img src="assets/images/phone.png" alt="">
              </div>
                <div class='number'><a class='num' type="tel" href='about.html'>+7-919-191-32-01</a>
                </div>
            </div>
<!--          сделаем текст под номером телефона-->
             <div class='phone-text'>
                 Свяжитесь с нами для <br> бронирования или <br> заполните специальную форму
             </div>
          </div>
      
<!--      сделаем кнопку "заказ столика"-->
         <div class='btn'>
             <a class='button' href='forma.html'>Забронировать</a>
         </div>
         
<!--          меню мобильной версии  -->         
         <div class='kofee-menu'>
           
            <button id='kofee'>
             <img src="assets/images/menu.png" alt="">
            </button>
            
           <div id='menu' class='kofee-slide disp'>
               <a class='nav-item block' href="index.php">ГЛАВНАЯ</a>
               <a class='nav-item block' href="price.html">МЕНЮ</a>
               <a class='nav-item block' href="about.html">О НАС</a>
           </div>
            
         </div>
      
       </div>
       
       <div class='header-down'>
       
<!--      сделаем заголовок, подзаголовок и кнопку  -->
          <div class='header-title'>
              Добро пожаловать в
          
            <div class='header-subtitle'>
                Нашу кофейню
            </div>
                  
            <div class='header-suptitle'>
                ДОМ ЛУЧШЕГО КОФЕ
            </div>
                  
            <div class='header-btn'>
                <a href='price.html' class='header-button'>ОСНОВНОЕ МЕНЮ</a>
            </div>
          
          </div>
          
       </div>
       
    </div> 
          
   </div>
   
<!--   создадим карточку с рекламой-->
   <div class='cards'>
      <div class='container'>
         
         <div class='cards-holder'>
          
           <div class='card'>
               <div class='card-image'>
                   <img class='card-img' src="assets/images/card.png">
               </div>
               
               <div class='card-title'>
                  Магическая <span> Атмосфера</span> 
               </div>
               
               <div class='card-desc'>
                   В нашей кофейне царит магическая атмосфера
                   наполненная вкусными ароматами
               </div>
           </div>
           
           <div class='card'>
               <div class='card-image'>
                   <img class='card-img' src="assets/images/card.png">
               </div>
               
               <div class='card-title'>
                  Лучшее качество <span> КОФЕ</span> 
               </div>
               
               <div class='card-desc'>
                   Высокое качество и уникальный вкус.
               </div>
           </div>
           
           <div class='card'>
               <div class='card-image'>
                   <img class='card-img' src="assets/images/card.png">
               </div>
               
               <div class='card-title'>
                  Недорогой <span> КОФЕ</span> 
               </div>
               
               <div class='card-desc'>
                   Цены Вас порадуют
               </div>
           </div>
          
        </div>   
             
      </div> 
   </div>
   
  
<!--   создадим блок с блюдами-->
   <div class='black-block'>
      
      <div class='container'>
      
          <div class='block-holder'>

    <!--       блок с текстом-->
           <div class='left'>
               <div class='left-title'>
                   Посетите одну из самых <br> приятных кофеен
               </div>

               <div class='left-text'>
                   Только на этой недели капучинно с шоколадным сиропом со скидкой.
               </div>
           </div>

    <!--       блок с кнопкой-->
           <div class='right'>
               <div class='right-button'>
                   <a href='forma.html' class='right-btn'>Забронировать</a>
               </div>
           </div>
       
       </div>
       
     </div>
       
   </div>
   


<!--           отзыв-->  
   <div class='coment'>
       
       <div class='container'>
           
           <div class='coment-text'>
               Я надалго запомню День рождения, который мы провели в этой кофейне! Частичка прекрасной Италии. Отдельное спасибо за комплимент в виде торта. Обязательно буду рекомендовать эту кофейню своим друзьм и родственникам.
           </div>
           
           <div class='coment-image'>
              <img src="assets/images/face.png" class='coment-img'>
           </div>
           
           <div class='coment-type'>
               Посетитель
           </div>
           
           <div class='coment-name'>
               Константин
           </div>
           
       </div>
       
   </div>
   
   
<!--   галерея -->
   <div class='galery'>
       
       <div class='container'>
           
          <div class='galery-title'>
              Галерея <span> Блюд</span>
          </div> 
          
          <div class='galery-content'>
              
              <div class='galery-left'>
                  
                  <div class='galery-up'>
                      <img class='img-gal high' src="assets/images/galery-1.jpg">
                  </div>
                  
                  <div class='galery-down'>
                      <img class='img-gal' src="assets/images/galery-2.jpg">
                      <img class='img-gal' src="assets/images/galery-3.jpg">
                  </div>
                  
              </div>
              
              <div class='galery-right'>
                  
                  <div class='galery-up'>
                      <img class='img-gal' src="assets/images/galery-4.jpg">
                      <img class='img-gal' src="assets/images/galery-6.jpg">
                  </div>
                  
                  <div class='galery-down'>
                      <img class='img-gal high' src="assets/images/galery-5.jpg">
                  </div>
                  
              </div>
              
          </div>
           
       </div>
       
   </div>
   
<!--   баристы-->
   <div class='cook'>
       
       <div class='container'>
           
           <div class='cook-title'>
               Наши <span> Баристы</span>
           </div>
           
           <div class='cook-content'>
               <img src="assets/images/barista-1.jpg">
               <img src="assets/images/barista-2.jpg">
               <img src="assets/images/barista-3.jpg">
           </div>
           
       </div>
       
   </div>
   
<!--   футер-->
   <div class='footer'>
        Coryright 2023   
   </div>
   
<!--путь к файлу app.js  -->
<script src='assets/js/app.js'></script>
   
    
</body>
</html>