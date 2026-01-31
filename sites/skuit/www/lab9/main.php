<?php

class Book {
   
    public string $title;
    public string $author;
    public int $year;
    
    
    public function getInfo(): string {
        return "Название: {$this->title}, Автор: {$this->author}, Год: {$this->year}";
    }
}


echo "<h2>Часть 1: Базовый класс Book</h2>";
$book1 = new Book();
$book1->title = "Война и мир";
$book1->author = "Лев Толстой";
$book1->year = 1869;

$book2 = new Book();
$book2->title = "Преступление и наказание";
$book2->author = "Фёдор Достоевский";
$book2->year = 1866;

echo $book1->getInfo() . "<br>";
echo $book2->getInfo() . "<br>";


echo "<h2>Часть 2: Класс Book с конструктором</h2>";

class BookWithConstructor {
    public string $title;
    public string $author;
    public int $year;
    
    public function __construct(string $title, string $author, int $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    
    public function getInfo(): string {
        return "Название: {$this->title}, Автор: {$this->author}, Год: {$this->year}";
    }
    
    public function isOld(): bool {
        $currentYear = date('Y');
        return ($currentYear - $this->year) > 50;
    }
}

$books = [
    new BookWithConstructor("Мастер и Маргарита", "Михаил Булгаков", 1967),
    new BookWithConstructor("1984", "Джордж Оруэлл", 1949),
    new BookWithConstructor("Гарри Поттер и философский камень", "Дж. К. Роулинг", 1997)
];

foreach ($books as $book) {
    echo $book->getInfo() . "<br>";
}

echo "<h2>Часть 3: Проверка на старые книги</h2>";
foreach ($books as $book) {
    if ($book->isOld()) {
        echo "Книга '{$book->title}' является старой (больше 50 лет)<br>";
    } else {
        echo "Книга '{$book->title}' не является старой<br>";
    }
}

echo "<h2>Часть 4: Класс Student</h2>";

class Student {
    public string $name;
    public int $age;
    public float $grade;
    private string $studentId; 
    
    public function __construct(string $name, int $age, float $grade, string $studentId) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
        $this->studentId = $studentId;
    }
    
    public function getStudentInfo(): string {
        return "Студент: {$this->name}, Возраст: {$this->age}, Оценка: {$this->grade}";
    }
    
    public function isExcellentStudent(): bool {
        return $this->grade >= 4.5;
    }
    
    public function getStudentId(): string {
        return $this->studentId;
    }
}

$students = [
    new Student("Иван Иванов", 20, 4.8, "ST001"),
    new Student("Мария Петрова", 21, 4.2, "ST002"),
    new Student("Алексей Сидоров", 19, 3.9, "ST003")
];

foreach ($students as $student) {
    echo $student->getStudentInfo() . "<br>";
    echo "ID студента (через геттер): " . $student->getStudentId() . "<br>";
    if ($student->isExcellentStudent()) {
        echo "{$student->name} - отличник<br>";
    } else {
        echo "{$student->name} - не отличник<br>";
    }
    echo "<br>";
}

echo "<h2>Ответы на вопросы:</h2>";
echo "1. Класс - это шаблон или чертеж для создания объектов.<br>";
echo "2. Объект - это экземпляр класса.<br>";
echo "3. Свойство - это переменная, принадлежащая классу или объекту.<br>";
echo "4. Метод - это функция, принадлежащая классу или объекту.<br>";
echo "5. Оператор new создает новый объект класса.<br>";
echo "6. Конструктор - это специальный метод, который вызывается при создании нового объекта.<br>";
echo "7. Ключевое слово \$this ссылается на текущий объект.<br>";
echo "8. Public - доступно везде, private - только внутри класса, protected - внутри класса и его потомков.<br>";
echo "9. Да, один класс может создавать множество объектов.<br>";
echo "10. Нет, объект не может существовать без класса.<br>";
?>