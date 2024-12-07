<?php




//task 1
// class Author{
//     private $name,$email,$gender;
    
//     public function __construct($name, $email, $gender) {
//         $this->name = $name;
//         $this->email = $email;
//         $this->gender = $gender;
//     }
    
//     function getname(){
//  return $this->name;
//     }

//     function getemail(){
//         return $this->email;
//     }

//     function setname($name){
//         $this->name=$name;
//     }

//     function setemail($email){
//         $this->email=$email;
//     }
  
    
//     function getgender(){
//         return  $this->gender ;
//     }

// function tostring(){
// return "Author[name=$this->name,email=$this->email,gender=$this->gender]";
// }

//     }
//  $author = new Author("J.K. Rowling", "jk.rowling@example.com", 'F');
//  echo $author->tostring();





//task2
// class Author{
// private $name,$email,$gender;

// public function __construct($name, $email, $gender) {
//     $this->name = $name;
//     $this->email = $email;
//     $this->gender = $gender;
// }

// public function toString() {
// return "Author[name={$this->name},email={$this->email},gender={$this->gender}]";
// }

// }

// class Book{
//   private $name,$price;
//   private $qty=0;
//   private Author $author;

//   function __construct($name,Author $author,$price,$qty=0 ){
// $this->name=$name;
// $this->price=$price;
// $this->qty=$qty;
// $this->author = $author;
// }
//   function getname(){
//     echo $this->name;
//   }
//   function getauthor(){
//    echo $this->author ;
//   }
//   function getprice(){
//     echo $this->price;
//   }
//   function setprice($price){
//     $this->price=$price;
//   }
//   function qty(){
//    echo $this->qty;
//   }
//   function setqty($qty){
//     $this->qty=$qty;
//   }


//   function toString(){
//    echo "Book[name={$this->name},Author[{$this->author->toString()}],price={$this->price},qty={$this->qty}]";
// }
// }

// $author = new Author("J.K. Rowling", "jk.rowling@example.com", 'F');
// $book = new Book("Harry Potter", $author, 39.99, 100);
// $book->toString();









///////////// problem in task3
// class Author {
//     private $name, $email, $gender;

//     public function __construct($name, $email, $gender) {
//         $this->name = $name;
//         $this->email = $email;
//         $this->gender = $gender;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getEmail() {
//         return $this->email;
//     }

//     public function getGender() {
//         return $this->gender;
//     }
// }

// class Book {
//     private $name, $price;
//     private $qty = 0;
//     private array $authors; // Allow multiple authors

//     public function __construct($name, array $authors, $price, $qty = 0) {
//         $this->name = $name;
//         $this->authors = $authors;
//         $this->price = $price;
//         $this->qty = $qty;
//     }

//     public function getAuthor() {
//         echo "<pre>";
//         return($this->authors);
//         echo "</pre>";
//     }

//     public function getAuthorNames() {
//         foreach ($this->authors as $author) {
//             echo "Author Name: " . $author->getName() . "<br>";
//         }
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getPrice() {
//         return $this->price;
//     }

//     public function setPrice($price) {
//         $this->price = $price;
//     }

//     public function getQty() {
//         return $this->qty;
//     }

//     public function setQty($qty) {
//         $this->qty = $qty;
//     }
//      function toString(){
//    echo "Book[name={$this->name},Author[{$this->authors}],price={$this->price},qty={$this->qty}]";
// }
// }

// // Create authors
// $authors = [];
// $authors[] = new Author("Ahmed", "aa@example.com", 'M');
// $authors[] = new Author("Khaled", "a@example.com", 'M');
// $authors[] = new Author("Ali", "cc@example.com", 'M');

// // Create a book with multiple authors
// $book1 = new Book("Harry Potter", $authors, 39.99, 100);
// $book1->toString();

// // Get authors
// // $book1->getAuthor();
// // $book1->getAuthorNames();







//task4

// class Author {
//     private $name;
//     private $email;

//     public function __construct($name, $email) {
//         $this->name = $name;
//         $this->email = $email;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getEmail() {
//         return $this->email;
//     }

//     public function setEmail($email) {
//         $this->email = $email;
//     }

//     public function __toString() {
//         return "Author[name=" . $this->name . ",email=" . $this->email . "]";
//     }
// }

// class Book {
//     private $isbn;
//     private $name;
//     private $author;
//     private $price;
//     private $qty = 0;

//     public function __construct($isbn, $name, $author, $price, $qty = 0) {
//         $this->isbn = $isbn;
//         $this->name = $name;
//         $this->author = $author;
//         $this->price = $price;
//         $this->qty = $qty;
//     }

//     public function getIsbn() {
//         return $this->isbn;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getAuthor() {
//         return $this->author;
//     }

//     public function getPrice() {
//         return $this->price;
//     }

//     public function setPrice($price) {
//         $this->price = $price;
//     }

//     public function getQty() {
//         return $this->qty;
//     }

//     public function setQty($qty) {
//         $this->qty = $qty;
//     }

//     public function getAuthorName() {
//         return $this->author->getName();
//     }

//     public function __toString() {
//         return "Book[isbn=" . $this->isbn .
//                ",name=" . $this->name .
//                "," . $this->author .
//                ",price=" . $this->price .
//                ",qty=" . $this->qty . "]";
//     }
// }

// $author = new Author("J.K. Rowling", "jk.rowling@example.com");
// $book = new Book("978-0747532743", "Harry Potter", $author, 39.99, 10);

//  echo $author->__toString();

















//task 5
// trait circle {
//     private $radius=1.0;
//     private $color="red";
//     function circle($radius,$color){
//         $this->color=$color;
//         $this->radius=$radius;
//     }

//     public function getradius() {
//         return $this->radius;
//     }

//     public function setradius($radius) {
//         $this->radius=$radius;

//     }

//     public function getcolor() {
//         return $this->color;
//     }

//     public function getarea(){
//         return "area of cycile is:  ".$this->radius*$this->radius*3.14;
//     }
//     function tostring(){
//         return "Circle[reduis=$this->radius , color=$this->color]";
//     }
// }

// class clyndir {
// use circle;
// private $hight;
// function __construct($radius,$color,$hight){
//     $this->hight=$hight;
//  $this->circle($radius,$color);
// }

// function gethight(){
//     return $this->hight;
// }
// function sethight($hight){
//      $this->hight=$hight;
// }
// function getvolum(){
//     return $this->radius*$this->radius*3.14*$this->hight ;
// }
// function getarea(){
// return ("area is:  ".(2*3.14*$this->radius*$this->hight)+(2*3.14*$this->radius*$this->radius));
// }
// }

// $c1=new clyndir(2,"black",3);
// echo $c1->getcolor()."<br>";
// echo $c1->getvolum()."<br>";
// echo $c1->getarea()."<br>";
















//task 6
// abstract class person{
// private $name,$address;
// function __construct($name,$address){
//     $this->address=$address;
//     $this->name=$name;
// }
// function getname(){
//     return $this->name ;
// }

// function getaddress(){
//     return $this->address ;
// }
// function setaddress($address){
//     $this->address=$address;
// }
//  abstract function tostring();
// }

// class student extends person{
//     private $program ,$year, $fee;
//     function __construct($name,$address,$program ,$year, $fee){
//      parent::__construct($name,$address);
//         $this->program=$program;
//         $this->year=$year;
//         $this->fee=$fee;    
//     }
//     function getprogram(){
//         return $this->program ;
//     }
//     function setprogram($program){
//         $this->program=$program;
//     }

//     function getyear(){
//         return $this->year ;
//     }
//     function setyear($year){
//         $this->year=$year;
//     }

//     function setfee($fee){
//         $this->fee=$fee;
//     }
//     function getfee(){
//         return $this->fee ;
//     }
// function tostring(){
// return "Student[Person[name ={$this->getname()},address ={$this->getaddress()},program= {$this->getprogram()} ,year ={$this->getyear()},fee ={$this->fee}]]<br>";
// }
// }

// class staff extends person{
//     private $school,$pay;
//     function __construct($name,$address,$school,$pay){
//         parent::__construct($name,$address);
//         $this->school=$school;
//         $this->pay=$pay;
//     }
//     function getschool(){
//         return $this->school ;
//     }
//     function setschool($school){
//         $this->school=$school;
//     }

//     function getpay(){
//         return $this->pay ;
//     }

//     function setpay($pay){
//         $this->pay=$pay;
//     }

//     function tostring(){
//     return "Student[Person[name ={$this->getname()},address ={$this->getaddress()},school={$this->getschool()} ,pay ={$this->getpay()}]] <br>";
//         }
// }
// $staff1=new staff("khaled","22 ahmed mostafa","ahmed oraby","19000");
// $student1=new student("youssef","23 mohamed ali","cs" ,"2022","200000");
// echo $student1->tostring();
// echo $staff1->tostring();












//task 7
// interface Shape {
//     public function getcolor();
//     public function setcolor($color);
//     public function isfilled();
//     public function setfilled($filled);
//     public function tostring();
// }

// class Circle implements Shape {
//     private $radius = 1.0;
//     private $color = "red"; // Default value
//     private $filled = true; // Default value

//     public function __construct($radius, $color, $filled) {
//         $this->radius = $radius;
//         $this->color = $color;
//         $this->filled = $filled;
//     }

//     public function getcolor() {
//         return $this->color;
//     }

//     public function setcolor($color) {
//         $this->color = $color;
//     }

//     public function isfilled() {
//         return $this->filled;
//     }

//     public function setfilled($filled) {
//         $this->filled = $filled;
//     }

//     public function getradius() {
//         return $this->radius;
//     }

//     public function setradius($radius) {
//         $this->radius = $radius;
//     }

//     public function getarea() {
//         return "Area of circle is: " . ($this->radius * $this->radius * 3.14);
//     }

//     public function getperimeter() {
//         return "Perimeter of circle is: " . (2 * $this->radius * 3.14);
//     }

//     public function tostring() {
//         return "Circle[Shape[color={$this->getcolor()}, filled={$this->isfilled()}, radius={$this->radius}]]";
//     }
// }


// class Rectangle implements Shape{
//     private $color = "red"; 
//     private $filled = true; 
//     private $width = 1.0; 
//     private $length = 1.0;
//     public function __construct($width,$length,$color, $filled) {
//         $this->color = $color;
//         $this->filled = $filled;
//         $this->width = $width;
//         $this->length = $length;
//     }


//     public function getwidth() {
//      return $this->width;
//     }

//     public function setwidth($width) {
//         $this->width = $width;
//     }

//     public function getlength() {
//         return $this->length;
//     }

//     public function setlength($length) {
//         $this->length =$length;
//     }


//     public function getcolor() {
//         return $this->color;
//     }

//     public function setcolor($color) {
//         $this->color = $color;
//     }

//     public function isfilled() {
//         return $this->filled;
//     }

//     public function setfilled($filled) {
//         $this->filled = $filled;
//     }

//     public function tostring() {
//         return "Rectangle[Shape[color={$this->getcolor()}, filled={$this->isfilled()}, width= {$this->getwidth()}, length={$this->getlength()} ]]";
//     }

// }

// class Squre extends Rectangle{
//     private $color = "red"; 
//     private $filled = true; 
//     private $side; 
//     public function __construct($side,$color, $filled) {
//         $this->color = $color;
//         $this->filled = $filled;
//         $this->side = $side;
//         parent::setlength($side);
//         parent::setwidth($side);
//     }
 
//     public function setwidth($side) {
//         parent::setwidth($side);
//         parent::setlength($side);
//         $this->side = $side;
//     }
//     public function setlength($side) {
//         parent::setwidth($side);
//         parent::setlength($side);
//         $this->side = $side;
//     }

//     public function getside() {
//         return $this->side;
//     }
//     public function getcolor() {
//         return $this->color;
//     }

//     public function setcolor($color) {
//         $this->color = $color;
//     }

//     public function isfilled() {
//         return $this->filled;
//     }

//     public function setfilled($filled) {
//         $this->filled = $filled;
//     }

//     public function tostring() {
//         return "Squre[Rectangle[Shape[color={$this->getcolor()}, filled={$this->isfilled()}, width= {$this->getwidth()}, length={$this->getlength()} ]]]";
//     }

// }

// $c1 = new Circle(3,"blue", true);
// echo $c1->tostring()."<br>";
// $re = new Rectangle(5,6,"blue", true);
// echo $re->tostring()."<br>";
// $sq1=new Squre(3,"red", true);
// echo $sq1->tostring()."<br>";
?>