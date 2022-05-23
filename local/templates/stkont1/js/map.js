setTimeout(function(){
    var elem = document.createElement('script');
    elem.type = 'text/javascript';
    elem.src = 'https://api-maps.yandex.ru/2.1/?apikey=7f1cfca7-b63e-455b-9c7b-64905eee2b19&lang=ru_RU&onload=getYaMap';
    document.getElementsByTagName('body')[0].appendChild(elem);
  }, 1000);
  function getYaMap(){
    ymaps.ready(function () {
            var myMap = new ymaps.Map('map-1', {
                center: [55.69880183080383,37.778468433349545],
                zoom: 9
            }, {
                searchControlProvider: 'yandex#search'
            }),
    
    
            myPlacemark_1 = new ymaps.Placemark([55.79504356892862,38.19818049999996], {
                hintContent: 'г. Старая Купавна, ул. Дорожная, д. 12К, стр. 2',
                // balloonContent: 'Это красивая метка'
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                iconImageHref: '/img/geo.svg',
                // Размеры метки.
                iconImageSize: [50, 74],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-5, -68]
            });

            var myPlacemark_3 = new ymaps.Placemark([55.543949,37.763746], {
                hintContent: 'г. Видное, Белокаменное шоссе, 18Б',
                // balloonContent: 'Это красивая метка'
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                iconImageHref: '/img/geo.svg',
                // Размеры метки.
                iconImageSize: [50, 74],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-5, -68]
            });


            var myMap_2 = new ymaps.Map('map-2', {
                center: [54.708488441868354,55.88588347550958],
                zoom: 11
            }, {
                searchControlProvider: 'yandex#search'
            }),
    
    
            myPlacemark_2 = new ymaps.Placemark([54.745519,55.975577], {
                hintContent: 'г.Уфа, ул.Кировоградская, 37',
                // balloonContent: 'Это красивая метка'
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                iconImageHref: '/img/geo.svg',
                // Размеры метки.
                iconImageSize: [50, 74],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-5, -68]
            });

            var myPlacemark_4 = new ymaps.Placemark([54.688305,55.800579], {
                hintContent: 'г. Уфа, ул.Майкопская, 56',
                // balloonContent: 'Это красивая метка'
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#image',
                // Своё изображение иконки метки.
                iconImageHref: '/img/geo.svg',
                // Размеры метки.
                iconImageSize: [50, 74],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-5, -68]
            });
           

      myMap.geoObjects
          .add(myPlacemark_1).add(myPlacemark_3)
 

          myMap_2.geoObjects
          .add(myPlacemark_2).add(myPlacemark_4)
  });
}


$('.map-2__container span, .map-1__container span').click(function(){
    $(this).hide();
});