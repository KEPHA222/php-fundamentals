<?php

// $name = 'Brad';
// $age = 40;
// $has_kids = false;
// $cash_on_hand = 20.75;

// var_dump ($cash_on_hand);

// echo $name . ' is ' . $age . ' years old';

// echo "${name} is ${age} years old";

// define('HOST', 'localhost');
// define('DB_NAME', 'dev_db');

// echo DB_NAME;

// $numbers = [1,44,23,56];
// $fruits = array('apple', 'orange', 'pear');


// print_r($fruits);

// $people = [[
//     'first_name' => 'Brad',
//     'last_name' => 'Traversy',
//     'email' => 'brad@gmail.com'
// ],
// [
//     'first_name' => 'Kepha',
//     'last_name' => 'Motari',
//     'email' => 'kepha@gmail.com'
// ],
// [
//     'first_name' => 'John',
//     'last_name' => 'Doe',
//     'email' => 'john@gmail.com'
// ]
// ];
// echo $person['email'];
// var_dump(json_encode($people));

// $posts = ['First Post', 'Second Post', 'Third Post'];

// $firstPost = $posts[0] ?? null;

// echo $firstPost;

// $x = 1;

// do {
//     echo 'Number ' .  $x . '<br>';
//     $x++;
// } while($x <= 5);

// foreach($posts as $index => $post) {
//     echo $index + 1 . ' - ' . $post . '<br>';
// }


// $person = [
//     'first_name' => 'Brad',
//     'last_name' => 'Traversy',
//     'email' => 'Brad@gmail.com'
// ];

// foreach($person as $key => $value) {
//     echo "$key - $value <br>";
// }

// function registerUser() {
//     echo 'Userr registered';
// }

// registerUser();

// function sum($n1, $n2) {
//     return $n1 + $n2;
// }

// $number = sum(5, 5);

// echo $number;


// $multiply = fn($n1, $n2) => $n1 * $n2;

// echo $multiply(9,9);

// $fruits = ['apple', 'orange', 'pear'];

// echo count($fruits);

// var_dump(in_array('apples', $fruits));
// $fruits[] = 'grape';
// array_push($fruits, 'blueberryy', 'tomatoes');
// array_unshift($fruits, 'mango');

// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[2]);

// $chunked_array = array_chunk($fruits, 3);

// print_r($chunked_array);

// print_r($fruits);

// $arr1 = [1,2,3];
// $arr2 = [4,5,6];

// $arr3 = array_merge($arr1, $arr2);
// $arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

// $a = ['green', 'red', 'yellow'];
// $b = ['avacado', 'apple', 'banana'];

// $c = array_combine($a, $b);

// print_r($c);

// $numbers = range(1, 40);

// $newNumbers = array_map(function($number) {
//     return "Number ${number}";
// }, $numbers);

// print_r($newNumbers);

// $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

// print_r ($lessThan10);

// $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

// var_dump($sum);

// printf('%s likes %s', 'Brad', 'code');

// var_dump($_SERVER);

/*
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Kepha&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="name">Name: </label>
            <input type='text' name="name" >
        </div>
        <div>
            <label for="age">Age: </label>
            <input type='text' name="age" >
        </div>
        <input type="submit" value="Submit" name="submit" />
</form>

*/

/*
if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="name">Name: </label>
            <input type='text' name="name" >
        </div>
        <div>
            <label for="age">Age: </label>
            <input type='text' name="age" >
        </div>
        <input type="submit" value="Submit" name="submit" />
</form>
*/

//Set cookie
// setcookie('name', 'Brad', time() + 86400 * 30);

// if(isset($_COOKIE['name'])) {
//     echo $_COOKIE['name'];
// }

// setcookie('name', '', time() - 86400);

/*
session_start();

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    
   $password = $_POST['password'];

   if($username == 'john' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-crash/extras/dashboard.php');
   } else {
    echo 'Incorrent Login';
   }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="username">Username: </label>
            <input type='text' name="username" >
        </div>
        <div>
            <label for="password">Password: </label>
            <input type='password' name="password" >
        </div>
        <input type="submit" value="Submit" name="submit" />
</form>
*/

// $file = 'extras/users.txt';

// if(file_exists($file)) {
//     // echo readfile($file);
//     $handle = fopen($file, 'r');
//     $contents = fread($handle, filesize($file));
//     fclose($handle);
//     echo $contents; 
// } else {
//     $handle = fopen($file, 'w');
//     $contents = 'Alice' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
//     fwrite($handle, $contents);
//     fclose($handle);
// }

/*
if(isset($_POST['submit'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

    if(!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";

        //Get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        //Validate file ext
        if(in_array($file_ext, $allowed_ext)) {
            if($file_size <= 1000000) {
                move_uploaded_file($file_tmp, $target_dir);

                $message = '<p style="color: green;">File uploaded</p>';
            } else {
                $message = '<p style="color: red;">File is too large</p>';
            } 
        }
            else {
                $message = '<p style="color: red;">Invalid file type</p>';
            }
        }


    } else {
        $message = '<p style="color: red;" >Please choose a file</p>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
Select image to upload: 
<input type="file" name="upload">
<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>

*/

// function inverse($x) {
//     if(!$x) {
//         throw new Exception('Division by Zero');
//     }

//     return 1/$x;
// }

// try {
//     echo inverse(5);
//     echo inverse(0);
// } catch (Exception $e) {
//     echo 'Caught Exception', $e->getMessage(), ' ';
// } finally {
//     echo 'First Finally';
// }

// try {
//     echo inverse(0);
// } catch (Exception $e) {
//     echo 'Caught Exception', $e->getMessage(), ' ';
// } finally {
//     echo 'First Finally';
// }

// echo 'Hello World';

class User {
    // Properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;
    
    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name) {
        $this->name = $name;
}

function get_name() {
    return $this->name;
}
}
$user1 = new User('Brad', 'brad@gmail.com', '2232');


// $user1->set_name('motari');

//Instatiate a user object
// $user1->name = 'Kepha';
// $user1->email = 'motari1@gmail.com';
// $user1->password = '12password';

// $user1->name = 'Brad';
// echo $user1 -> name;

// var_dump($user1);

// echo $user1->name;
// echo $user1->email;

// Inheritence
class Employee extends User{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '4223', 'Manager');

echo $employee1->get_title();