<?php
class Student
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Request article function
  public function requestArticle($product, $amount, $reason) {
    $p = $product;
    $a = $amount;
    $r = $reason;

    //SQL Statement
    $sql = "INSERT INTO `request` 
                            (`id`,
                             `product`, 
                             `amount`, 
                             `description`) 
                            VALUES 
                            (NULL, 
                            '$p', 
                            '$a', 
                            '$r');";


    // Prepare sql statement
    $this->db->query($sql);

    // Execute sql statement
    $this->db->execute();

    // Check if query is executed (1 row made)
    if ($this->db->rowCount() === 1)
    {
        // This happens if query is executed successfully
        return "Success";
    } else {
        // This happens if query fails
        return "Failed";
    }
  }

  // Function personalInfo retrieves data from table Person based on email address in table Login
  public function personalInfo() {
    $email = "student@test.nl";

  //SQL Statement
  $sql = "SELECT `LOG`.Email, `PER`.* FROM `login` as `LOG`
          -- Inner join table personlogin ON LoginId
          INNER JOIN `personlogin` as `PL`
          ON `PL`.LoginId = `LOG`.LoginId
          -- Inner join table person ON PersonId
          INNER JOIN `person` as `PER`
          ON `PER`.PersonId = `PL`.PersonId
          -- Select based on email
          WHERE `LOG`.Email = '$email';
          ";

  // Prepare sql statement
  $this->db->query($sql);
  // Returns 1 data row
  $data = $this->db->single();
  // Return data
  return $data;
}
}
?>
