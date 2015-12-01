
   <?php      
     header('Content-type: text/html; charset=utf-8');
        // Задание 1
          
        $name='Олег';   
        $age=34;
        echo 'Меня зовут '. $name. "\n";
        echo 'Мне '. $age. ' года'. "\n";
        unset ($name, $age);
        
            // Задание 2

        define('gorod', 'Покров');
        if ('gorod'){
           echo 'Я живу в городе ',gorod, "\n";
           }else{
           echo 'Ошибка';
           }
        //define('gorod', 'Moskva');
   
             // Задание 3
        echo "\n";
        $book= array('title' => '" Нос "', 'autor' => 'Н.В. Гоголь', 'pages' => '250');
        echo 'Недавно я прочитал книгу ',$book['title'],' , написанную автором ',$book['autor'],',', "\n";
        echo 'я осилил все ',$book['pages'],' cтраниц. Мне она очени понравилась.', "\n";
       

            // Задание 4
        
        $book1= array('title' => '"Хамелион"', 'autor' => 'А.П. Чехов', 'pages' => '130');
        $book2= array('title' => '"Евгений Онегин"', 'autor' => 'А.С. Пушкин', 'pages' => '280');
        $books= array($book1,$book2);
        
        //print_r($books);
                
        echo "\n", 'Недавно я прочитал две книги: ', $books[0]['title'],' и ',$books[1]['title'],', ', "\n";
        echo 'написанные соответственно авторами: ',$books[0]['autor'],' и ',$books[1]['autor'],'.', "\n";
        echo 'я осилил в сумме ',$books[0]['pages'] + $books[0]['pages'],' cтраниц, не ожидал от себя подобного.', "\n";
        
               
       ?>