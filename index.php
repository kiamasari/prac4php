<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Класс Cookie</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Информация о печенье</h1>
    <div class="cookie-info">
        <?php

        class Cookie
        {

            private $types = [];


            public function setType($type)
            {

                $validTypes = [
                    'шоколадное' => 'Сладкое печенье с кусочками шоколада.',
                    'ванильное' => 'Нежное печенье с ароматом ванили.',
                    'ореховое' => 'Печенье с добавлением орехов для хруста.',
                    'кокосовое' => 'Печенье с кокосовой стружкой для тропического вкуса.'
                ];

                if (array_key_exists($type, $validTypes)) {
                    $this->types[] = $validTypes[$type];
                } else {
                    throw new Exception("Недопустимый тип печенья.");
                }
            }

            public function getTypes()
            {
                return $this->types;
            }
        }


        try {
            $cookie = new Cookie();
            $cookie->setType('шоколадное');
            $cookie->setType('ванильное');

            echo "Типы печенья: <br>";
            foreach ($cookie->getTypes() as $type) {
                echo $type . "<br>";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        ?>
    </div>
</body>

</html>