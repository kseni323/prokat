@extends('header')

@section('main_content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда автомобилей</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main/app.css"/>
</head>
</head>

<body>
    <div class="hero-section">
        <div class="content"> 
            <h1>Найдите лучший автомобиль</h1>
            <p>Ваши путешествия начинаются здесь</p>
            <a href="#" class="btn">Вход в личный кабинет</a>
        </div>
    </div>

    <div class="container marketing"> 
    <div class="section-title"> Какие услуги мы предлагаем нашим клиентам</div>
    <div class="row text-center">
        <div class="col-lg-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
  <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276"/>
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z"/>
         </svg>
            <h2 class="fw-normal">Краткосрочная аренда</h2>
            <p>Идеально подходит для тех, кто нуждается в автомобиле на несколько дней или недель.</p>
        </div>
        <div class="col-lg-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bus-front" viewBox="0 0 16 16">
  <path d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9s3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44 44 0 0 0 8 4m0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44 44 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43 43 0 0 0 8 3"/>
  <path d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A44 44 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2zM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A43 43 0 0 1 8 1"/>
</svg>
            <h2 class="fw-normal">Долгосрочная аренда</h2>
            <p>Отличный вариант для длительных путешествий или временной замены вашего автомобиля.</p>
        </div>
        <div class="col-lg-4">
           <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
  <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.5 4.5 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.5 3.5 0 0 1 8 11.5a3.5 3.5 0 0 1-3.032-1.75M7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A3 3 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.2 4.2 0 0 0 8 5c-.35 0-.69.04-1 .116"/>
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0"/>
</svg>
            <h2 class="fw-normal">Аренда автомобилей класса люкс</h2>
            <p>Для тех, кто предпочитает передвигаться с комфортом и стилем.</p>
        </div>
    </div>
</div>



<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" style="width: 1233px;">
    <div class="image">
      <img src="https://rentmotors.ru/img/e413350a-8112-4f8b-b143-a2e67dec3bdb/bmw-x7.png?fm=jpg&amp;q=80&amp;fit=max&amp;crop=1016%2C413%2C1%2C133" alt="Hyundai Elantra" class="bg-gradient-to-r from-black-1 to-transparent">
    </div>
    <div class="gradient"></div>
  <div class="container relative md:absolute right-0 bottom-16 md:bottom-28 lg:bottom-36 xl:bottom-48 left-0 h-72 md:h-auto">
    <div class="grid">
      <div class="font-semibold text-2xl md:text-[32px] xl:text-5xl col-span-full">
        BMW X7
      </div>
      <div class="grid grid-cols-2 col-span-4 row-start-2 gap-6 text-sm xl:text-base">
        <div class="flex items-center">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8C0 3.58172 3.58172 0 8 0H24C28.4183 0 32 3.58172 32 8V24C32 28.4183 28.4183 32 24 32H8C3.58172 32 0 28.4183 0 24V8Z" fill="#ffffff29"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.9995 16.1024C25.9932 16.7203 25.9296 17.3391 25.8079 17.9509C25.4574 19.7127 24.6397 21.3441 23.4449 22.6765C23.4307 22.6923 23.4165 22.708 23.4022 22.7238C21.5729 24.7364 18.934 26 16 26C13.0902 26 10.4708 24.7572 8.64336 22.7735C8.62812 22.757 8.61294 22.7404 8.59782 22.7238C7.37977 21.3828 6.54672 19.7336 6.19214 17.9509C6.06441 17.3087 6.00066 16.6588 6.00001 16.0103C5.99867 14.6999 6.25491 13.3955 6.76122 12.1732C7.5181 10.3459 8.79983 8.78412 10.4443 7.6853C12.0888 6.58649 14.0222 6 16 6C17.9778 6 19.9112 6.58649 21.5557 7.6853C23.2002 8.78412 24.4819 10.3459 25.2388 12.1732C25.7329 13.3662 25.9889 14.6373 25.9997 15.9159C25.9999 15.9439 26 15.9719 26 15.9999C26 16.0341 25.9998 16.0683 25.9995 16.1024ZM23.658 17.3599C23.3923 18.8566 22.6938 20.2426 21.6489 21.3467C21.0493 20.3898 20.2163 19.6011 19.2282 19.0545C18.24 18.508 17.1292 18.2216 16 18.2222C14.8708 18.2216 13.76 18.508 12.7719 19.0545C11.7837 19.6011 10.9507 20.3898 10.3511 21.3467C9.30622 20.2426 8.60774 18.8566 8.342 17.3599C8.07626 15.8633 8.25492 14.3215 8.85589 12.9253C9.45686 11.529 10.4538 10.3395 11.7235 9.50366C12.9932 8.66786 14.4799 8.22242 16 8.22242C17.5201 8.22242 19.0069 8.66786 20.2765 9.50366C21.5462 10.3395 22.5432 11.529 23.1441 12.9253C23.7451 14.3215 23.9237 15.8633 23.658 17.3599ZM13.643 16.1348C14.2681 16.7599 15.1159 17.1111 16 17.1111C16.8841 17.1111 17.7319 16.7599 18.357 16.1348C18.9821 15.5096 19.3333 14.6618 19.3333 13.7777C19.3333 12.8937 18.9821 12.0458 18.357 11.4207C17.7319 10.7956 16.8841 10.4444 16 10.4444C15.1159 10.4444 14.2681 10.7956 13.643 11.4207C13.0179 12.0458 12.6667 12.8937 12.6667 13.7777C12.6667 14.6618 13.0179 15.5096 13.643 16.1348Z" fill="#ffffff"></path>
          </svg>

          <div class="ml-2">7 пассажиров</div>
        </div>

        <div class="flex items-center">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8C0 3.58172 3.58172 0 8 0H24C28.4183 0 32 3.58172 32 8V24C32 28.4183 28.4183 32 24 32H8C3.58172 32 0 28.4183 0 24V8Z" fill="#ffffff29"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.894 11.4582C13.031 10.2108 14.6407 9.5 16.3284 9.5H23.4992C23.7753 9.5 23.9992 9.72386 23.9992 10V15.5L8.21008 15.5L11.894 11.4582ZM23.9992 18.1822C23.9992 17.7094 23.6159 17.3262 23.1431 17.3262H21.5501C21.0773 17.3262 20.6941 17.7094 20.6941 18.1822C20.6941 18.655 21.0773 19.0383 21.5501 19.0383H23.1431C23.6159 19.0383 23.9992 18.655 23.9992 18.1822ZM16.3284 7.5C14.0781 7.5 11.9318 8.44779 10.4159 10.1109L5.70184 15.2829C5.16539 15.8715 5.02922 16.7222 5.35518 17.4488L7.98845 23.3186C8.31093 24.0375 9.02538 24.5 9.81324 24.5H23.9992C25.1037 24.5 25.9992 23.6046 25.9992 22.5V10C25.9992 8.61929 24.8799 7.5 23.4992 7.5H16.3284Z" fill="#ffffff"></path>
          </svg>

          <div class="ml-2">5 двери</div>
        </div>

        <div class="flex items-center">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8C0 3.58172 3.58172 0 8 0H24C28.4183 0 32 3.58172 32 8V24C32 28.4183 28.4183 32 24 32H8C3.58172 32 0 28.4183 0 24V8Z" fill="#ffffff29"></path>
            <path d="M22 26C22 26.5523 21.5523 27 21 27C20.4477 27 20 26.5523 20 26V25.5H12V26C12 26.5523 11.5523 27 11 27C10.4477 27 10 26.5523 10 26V25.5C8.895 25.5 8 24.605 8 23.5L8 12C8 10.895 8.395 10 9.5 10H12V6C12 5.448 12.448 5 13 5H19C19.552 5 20 5.448 20 6V10H22C23.105 10 24 10.895 24 12V23.5C24 24.605 23.105 25.5 22 25.5V26ZM14 15C14 14.4477 13.5523 14 13 14C12.4477 14 12 14.4477 12 15V20.5C12 21.0523 12.4477 21.5 13 21.5C13.5523 21.5 14 21.0523 14 20.5V15ZM20 15C20 14.4477 19.5523 14 19 14C18.4477 14 18 14.4477 18 15V20.5C18 21.0523 18.4477 21.5 19 21.5C19.5523 21.5 20 21.0523 20 20.5V15ZM18 7H14V10H18V7Z" fill="#ffffff"></path>
          </svg>

          <div class="ml-2">4 чемоданы</div>
        </div>

        <div class="flex items-center">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8C0 3.58172 3.58172 0 8 0H24C28.4183 0 32 3.58172 32 8V24C32 28.4183 28.4183 32 24 32H8C3.58172 32 0 28.4183 0 24V8Z" fill="#ffffff29"></path>
            <path d="M16 8C17.4972 8 18.9331 8.59 19.9918 9.6402C21.0504 10.6904 21.6452 12.1148 21.6452 13.6H22.5113C22.7144 13.6 22.9101 13.6761 23.0592 13.8129C23.2082 13.9498 23.2997 14.1375 23.3153 14.3384L23.9976 23.1384C24.0141 23.3499 23.9451 23.5593 23.806 23.7204C23.6669 23.8816 23.4689 23.9813 23.2557 23.9976L23.1936 24H8.80645C8.59257 24 8.38744 23.9157 8.2362 23.7657C8.08497 23.6157 8 23.4122 8 23.2L8.00242 23.1384L8.68468 14.3384C8.70032 14.1375 8.79181 13.9498 8.94087 13.8129C9.08993 13.6761 9.28558 13.6 9.48871 13.6H10.3548C10.3548 12.1148 10.9496 10.6904 12.0083 9.6402C13.0669 8.59 14.5028 8 16 8ZM17.6129 17.6C17.6129 17.1582 17.2547 16.8 16.8129 16.8H15.1871C14.7453 16.8 14.3871 17.1582 14.3871 17.6C14.3871 18.0418 14.7453 18.4 15.1871 18.4H16.8129C17.2547 18.4 17.6129 18.0418 17.6129 17.6ZM16 10.0365C14.0901 10.0366 12.4424 11.5843 12.3955 13.6H19.5946C19.5945 11.5394 17.898 10.0798 16 10.0365Z" fill="#ffffff"></path>
          </svg>

          <div class="ml-2">5 сумки</div>
        </div>

        <div class="flex items-center">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8C0 3.58172 3.58172 0 8 0H24C28.4183 0 32 3.58172 32 8V24C32 28.4183 28.4183 32 24 32H8C3.58172 32 0 28.4183 0 24V8Z" fill="#ffffff29"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4103 10.5668C24.2722 10.3277 23.9664 10.2457 23.7273 10.3838L22.3232 11.1944L22.6042 10.1456C22.6757 9.87889 22.5174 9.60472 22.2507 9.53325L21.2847 9.27443C21.018 9.20296 20.7438 9.36125 20.6724 9.62798L19.8988 12.515L19.8958 12.5258L19.8735 12.6087L17 14.2678V10.9498L19.182 8.76777C19.3773 8.5725 19.3773 8.25592 19.182 8.06066L18.4749 7.35355C18.2796 7.15829 17.9631 7.15829 17.7678 7.35355L17 8.12134V6.5C17 6.22386 16.7761 6 16.5 6H15.5C15.2239 6 15 6.22386 15 6.5V8.12115L14.2323 7.3534C14.037 7.15814 13.7204 7.15814 13.5251 7.3534L12.818 8.06051C12.6228 8.25577 12.6228 8.57235 12.818 8.76761L14.9322 10.8818L14.9394 10.8891L15 10.9497V14.2681L12.1265 12.6091L11.3279 9.62841C11.2564 9.36168 10.9822 9.20339 10.7155 9.27486L9.74957 9.53368C9.48284 9.60515 9.32454 9.87931 9.39602 10.146L9.67706 11.1949L8.2728 10.3842C8.03365 10.2461 7.72786 10.328 7.58979 10.5672L7.08979 11.4332C6.95172 11.6723 7.03365 11.9781 7.2728 12.1162L8.67677 12.9268L7.62811 13.2078C7.36138 13.2793 7.20308 13.5534 7.27456 13.8202L7.53338 14.7861C7.60485 15.0528 7.87902 15.2111 8.14575 15.1396L11.0313 14.3665L11.0437 14.3633L11.1265 14.3411L13.9997 16L11.1546 17.6426L8.17419 16.844C7.90746 16.7726 7.63329 16.9309 7.56182 17.1976L7.303 18.1635C7.23153 18.4303 7.38982 18.7044 7.65655 18.7759L8.70509 19.0568L7.27279 19.8838C7.03364 20.0219 6.9517 20.3277 7.08978 20.5668L7.58978 21.4328C7.72785 21.672 8.03364 21.7539 8.27279 21.6158L9.70526 20.7888L9.42419 21.8378C9.35272 22.1045 9.51101 22.3787 9.77774 22.4501L10.7437 22.709C11.0104 22.7804 11.2846 22.6221 11.356 22.3554L12.1296 19.4684C12.1307 19.4648 12.1317 19.4612 12.1326 19.4576L12.1549 19.3745L15 17.7319V21.0175L12.818 23.1995C12.6227 23.3948 12.6227 23.7114 12.818 23.9066L13.5251 24.6137C13.7204 24.809 14.037 24.809 14.2322 24.6137L15 23.8459V25.5C15 25.7761 15.2239 26 15.5 26H16.5C16.7761 26 17 25.7761 17 25.5V23.8461L17.7678 24.6139C17.963 24.8091 18.2796 24.8091 18.4749 24.6139L19.182 23.9068C19.3772 23.7115 19.3772 23.3949 19.182 23.1997L17.0678 21.0855L17.0606 21.0782L17 21.0176V17.7322L19.8452 19.3749L20.6439 22.3555C20.7154 22.6222 20.9895 22.7805 21.2563 22.709L22.2222 22.4502C22.4889 22.3787 22.6472 22.1046 22.5757 21.8378L22.2947 20.7891L23.7273 21.6162C23.9664 21.7543 24.2722 21.6723 24.4103 21.4332L24.9103 20.5672C25.0484 20.328 24.9664 20.0222 24.7273 19.8842L23.2948 19.0571L24.3436 18.7761C24.6104 18.7046 24.7687 18.4305 24.6972 18.1637L24.4384 17.1978C24.3669 16.9311 24.0927 16.7728 23.826 16.8442L20.9405 17.6174L20.9281 17.6206L20.8451 17.6428L17.9997 16L20.8737 14.3407L23.8542 15.1394C24.1209 15.2108 24.3951 15.0525 24.4666 14.7858L24.7254 13.8199C24.7969 13.5531 24.6386 13.279 24.3718 13.2075L23.3232 12.9265L24.7273 12.1158C24.9664 11.9778 25.0484 11.672 24.9103 11.4328L24.4103 10.5668Z" fill="#ffffff"></path>
          </svg>
                      <div class="ml-2">Кондиционер</div>
                    </div>

        <div class="flex items-center">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 8C0 3.58172 3.58172 0 8 0H24C28.4183 0 32 3.58172 32 8V24C32 28.4183 28.4183 32 24 32H8C3.58172 32 0 28.4183 0 24V8Z" fill="#ffffff29"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5 8.5C11.5 9.52516 10.883 10.4062 10 10.792V15H15V10.792C14.117 10.4062 13.5 9.52516 13.5 8.5C13.5 7.11929 14.6193 6 16 6C17.3807 6 18.5 7.11929 18.5 8.5C18.5 9.52516 17.883 10.4062 17 10.792V15H22V11C22 10.9317 22.0068 10.865 22.0199 10.8006C21.1263 10.4194 20.5 9.53284 20.5 8.5C20.5 7.11929 21.6193 6 23 6C24.3807 6 25.5 7.11929 25.5 8.5C25.5 9.53284 24.8737 10.4194 23.9801 10.8006C23.9932 10.865 24 10.9317 24 11V15V17V21C24 21.5523 23.5523 22 23 22C22.4477 22 22 21.5523 22 21V17H17V21.208C17.883 21.5938 18.5 22.4748 18.5 23.5C18.5 24.8807 17.3807 26 16 26C14.6193 26 13.5 24.8807 13.5 23.5C13.5 22.4748 14.117 21.5938 15 21.208V17H10V21.208C10.883 21.5938 11.5 22.4748 11.5 23.5C11.5 24.8807 10.3807 26 9 26C7.61929 26 6.5 24.8807 6.5 23.5C6.5 22.4748 7.11705 21.5938 8 21.208L8 10.792C7.11705 10.4062 6.5 9.52516 6.5 8.5C6.5 7.11929 7.61929 6 9 6C10.3807 6 11.5 7.11929 11.5 8.5Z" fill="#ffffff"></path>
          </svg>

          <div class="ml-2">АКПП</div>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="reservation_section" style="padding:50px 0px" id="reserve">
	<div class="container">
		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<form method="POST" action="reserve.php" id="reservation_form" class="car-reservation-form"><div class="text_header"><span>
							Найдите свой автомобиль
						</span></div> <div><div class="form-group"><label for="pickup_location">Место получения</label> <input type="text" name="pickup_location" placeholder="Кольцовская, 54" class="form-control"> <!----></div> <div class="form-group"><label for="return_location">Место возврата</label> <input type="text" name="return_location" placeholder="Кольцовская, 54" class="form-control"> <!----></div> <div class="form-group"><label for="pickup_date">Дата аренды</label> <input type="date" min="2024-10-02" name="pickup_date" class="form-control"> <!----></div> <div class="form-group"><label for="return_date">Дата возврата</label> <input type="date" min="2024-10-03" name="return_date" class="form-control"> <!----></div> <button type="submit" name="reserve_car" class="btn sbmt-bttn">Бронируйте мгновенно</button></div></form>
			</div>
		</div>
	</div>
</section>

<section class="contact-section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-padding">
                <div class="contact-info">
                    <h2>
                        Get in touch with us &amp; 
                        <br>send us message today!
                    </h2>
                    <p>
                        Getting dressed up and traveling with good friends makes for a shared, unforgettable experience.
                    </p>
                    <h3>
                        198 West 21th Street, Suite 721 
                        <br>
                        New York, NY 10010
                    </h3>
                    <ul>
                        <li>
                            <span style="font-weight: bold">Email:</span> 
                            contact@yahyacarrental.com
                        </li>
                        <li>
                            <span style="font-weight: bold">Phone:</span> 
                            +88 (0) 101 0000 000
                        </li>
                        <li>
                            <span style="font-weight: bold">Fax:</span> 
                            +88 (0) 202 0000 001
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="contact-form">
                    <div id="contact_ajax_form" class="contactForm">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="contact_send" class="contact_send_btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="widget_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <a class="navbar-brand" href=""><ya-tr-span data-index="123-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="drive" data-translation="drive" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">drive</ya-tr-span><span style="color:#04DBC0"><ya-tr-span data-index="123-1" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Go" data-translation="Вперед" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Go</ya-tr-span></span><ya-tr-span data-index="123-2" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="" data-translation="" data-ch="0" data-type="trSpan" style="visibility: inherit !important;"> </ya-tr-span></a>
                    <p><ya-tr-span data-index="113-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Путешествие с хорошими друзьями подарит вам незабываемые впечатления. " data-translation="Путешествие с хорошими друзьями подарит вам незабываемые впечатления. " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Путешествие с хорошими друзьями подарит вам незабываемые впечатления. </ya-tr-span></p>
                    <ul class="widget_social">
                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fab fa-google-plus-g fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3><ya-tr-span data-index="102-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Контактная информация" data-translation="Контактная информация" data-ch="0" data-type="trSpan" style="visibility: inherit !important;" data-selected="false">Контактная информация</ya-tr-span></h3>
                    <ul class="contact_info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i><ya-tr-span data-index="103-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="962 Fifth Avenue, 3rd Floor New York, NY10022 " data-translation="962 Пятая авеню, 3 этаж, Нью-Йорк, NY10022 " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Воронеж, ул.Колисниченко,15</ya-tr-span></li>
                        <li>
                            <i class="far fa-envelope"></i><ya-tr-span data-index="104-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="contact@barbershop.com " data-translation="contact@barbershop.com " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">contact@carrental.com </ya-tr-span></li>
                        <li>
                            <i class="fas fa-mobile-alt"></i>+7 (654) 128-09-87
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3><ya-tr-span data-index="105-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Расслыка" data-translation="Рассылка" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Расслыка</ya-tr-span></h3>
                    <p style="margin-bottom:0px"><ya-tr-span data-index="106-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Don't miss a thing! " data-translation="Не пропустите ни одной детали! " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Ничего не пропустите!</ya-tr-span><ya-tr-span data-index="106-1" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Sign up to receive daily deals" data-translation="Подпишитесь, чтобы получать ежедневные предложения" data-ch="0" data-type="trSpan" style="visibility: inherit !important;"> Подпишитесь, чтобы получать ежедневные предложения</ya-tr-span></p>
                    <div class="subscribe_form">
                        <form action="#" class="subscribe_form" novalidate="true">
                            <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Почта...">
                            <button type="submit" class="submit"><ya-tr-span data-index="107-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Подписаться" data-translation="Подписка" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">ПОДПИСАТЬСЯ</ya-tr-span></button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




</body>

@endsection