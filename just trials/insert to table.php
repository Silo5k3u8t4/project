<?php
    $servername = "localhost";
    $username = "polyprep";
    $password = "poly@321";
    $dbname = "quizdat";
    $quizData = array(
        array(
            "question" => "What is Functional Dependency represented by?",
            "options" => array("Arrow sign", "Equal sign", "Plus sign", "Minus sign"),
            "correct" => "Arrow sign"
        ),
        array(
            "question" => "Which of Armstrong's Axioms involves a set of attributes and its subset?",
            "options" => array("Reflexive rule", "Augmentation rule", "Transitivity rule", "All of the above"),
            "correct" => "Reflexive rule"
        ),
        array(
            "question" => "What type of Functional Dependency always holds?",
            "options" => array("Non-trivial FD", "Trivial FD", "Completely non-trivial FD", "None of the above"),
            "correct" => "Trivial FD"
        ),
        array(
            "question" => "What is the first rule for a table to be in the First Normal Form (1NF)?",
            "options" => array("All columns should have unique names", "It should only have single(atomic) valued attributes/columns", "The order in which data is stored does not matter", "Each attribute must contain only a single value from its pre-defined domain"),
            "correct" => "It should only have single(atomic) valued attributes/columns"
        ),
        array(
            "question" => "Which of the following is NOT a content type under the web course according to 1NF?",
            "options" => array("HTML", "PHP", "ASP", "Java"),
            "correct" => "Java"
        ),
        array(
            "question" => "What does the Second Normal Form (2NF) require in addition to 1NF?",
            "options" => array("No Partial Dependency", "Unique column names", "Single(atomic) valued attributes/columns", "Data stored in alphabetical order"),
            "correct" => "No Partial Dependency"
        ),
        array(
            "question" => "What is the key and only prime key in the Student_Detail relation?",
            "options" => array("Stu_Name", "City", "Stu_ID", "Zip"),
            "correct" => "Stu_ID"
        ),
        array(
            "question" => "Which of the following is a condition for a table to be in BCNF?",
            "options" => array("It must be in 2nd Normal Form", "It must have a primary key", "It must be in 3rd Normal Form and every functional dependency X → Y, X should be a super Key", "All attributes must be unique"),
            "correct" => "It must be in 3rd Normal Form and every functional dependency X → Y, X should be a super Key"
        ),
        array(
            "question" => "What is the main advantage of a mobile database?",
            "options" => array("Limited access to data", "Can only be accessed with a password", "Can be accessed from anywhere using a mobile database", "Requires physical connection to access data"),
            "correct" => "Can be accessed from anywhere using a mobile database"
        ),
        array(
            "question" => "Which of the following is NOT listed as an advantage of mobile databases in the image?",
            "options" => array("Seamless delivery process", "Data encryption", "Synchronized with multiple devices", "Very little support and maintenance"),
            "correct" => "Very little support and maintenance"
        ),
        array(
            "question" => "What allows the transfer of data between the mobile database and the main database?",
            "options" => array("Mobile Data", "Communication Link", "Corporate Server", "Laptop"),
            "correct" => "Communication Link"
        ),
        array(
            "question" => "What does SQL stand for?",
            "options" => array("Simple Query Language", "Structured Question Language", "Structured Query Language", "System Query Language"),
            "correct" => "Structured Query Language"
        ),
        array(
            "question" => "In what year was SQL recognized by the American National Standards Institute (ANSI)?",
            "options" => array("1986", "1987", "1990", "2000"),
            "correct" => "1990"
        ),
        array(
            "question" => "What is the main advantage of a mobile database?",
            "options" => array("Limited access to data", "Can only be accessed with a password", "Can be accessed from anywhere using a mobile database", "Requires physical connection to access data"),
            "correct" => "Can be accessed from anywhere using a mobile database"
        )
    );
    $No = 1;
$conn2 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$updateStmt = $conn2->prepare("INSERT INTO dbms (No, question, opt_A, opt_B, opt_C, opt_D, correct) VALUES (:No, :question, :opt_A, :opt_B, :opt_C, :opt_D, :correct)");

foreach ($quizData as $questionArray) {
    $question = $questionArray["question"];
    $options = $questionArray["options"];
    $correct = $questionArray["correct"];
    
    // Extracting options from the options array
    $optA = $options[0];
    $optB = $options[1];
    $optC = $options[2];
    $optD = $options[3];
    
    // Binding parameters and executing the query
    $updateStmt->bindParam(':No', $No);
    $updateStmt->bindParam(':question', $question);
    $updateStmt->bindParam(':opt_A', $optA);
    $updateStmt->bindParam(':opt_B', $optB);
    $updateStmt->bindParam(':opt_C', $optC);
    $updateStmt->bindParam(':opt_D', $optD);
    $updateStmt->bindParam(':correct', $correct);
    
    $updateStmt->execute();
    
    $No++; // Incrementing question number for the next question
}

?>