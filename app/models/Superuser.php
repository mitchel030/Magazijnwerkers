<?php
class Superuser
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Selects all data from table 'assortment' and returns the resultSet
  public function getAssortment()
  {
    $this->db->query("SELECT * FROM assortment");

    $result = $this->db->resultSet();

    return $result;
  }

  // Function to sanitize form inputs and put it in the database 
  public function placeOrder($name, $link, $description)
  {
    // Sanitizing strings using filter_var (php build-in function)
    $n = filter_var($name, FILTER_SANITIZE_STRING);
    $l = filter_var($link, FILTER_SANITIZE_STRING);
    $d = filter_var($description, FILTER_SANITIZE_STRING);

    // SQL Statement from sanitized strings
    $sql = "INSERT INTO `order` 
                        (`id`, `product`, `link`, `description`, `status`) 
                VALUES  (NULL, '$n', '$l', '$d', 'New');";

    // Prepare sql statement
    $this->db->query($sql);
    // Execute sql statement
    $this->db->execute();

    // Return an array with a css variable and display message
    if ($this->db->rowCount() === 1) {
      return [
        "message" => "Order has been placed successfully!",
        "css" => "superuser--order alert alert-success"
      ];
    } else {
      return [
        "message" => "Order has not been placed. Please try again later.",
        "css" => "superuser--order alert alert-danger"
      ];
    }
  }
}
