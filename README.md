<ul>
   <li> 1. Поднимаем контейнер </li>
   <li> 2. Запускаем сидеры: php artisan db:seed </li>
   <li> 3. Запускается на порту localhost:8803 </li>

   <li> Маршруты API. Отдельно продукты: http://localhost:8803/api/product?sort_by=price&sort_order=desc&page=1&category=22 </li>

   <li> Основной каталог: http://localhost:8803/api/group?category=2&page=1 <br> 
       также работают все get параматры ?sort_by=price&sort_order=desc&page=1&category=22 
   </li>

</ul>