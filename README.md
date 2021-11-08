# 2021-aug-oopMuppets

## App Architecture 

functionality/properties/purpose

# **APP**

- Main folder

  

- ## PHP and CSS pages (root level)

  - `index.php` 
    - home page 
    - shows all muppets
    - `require_once 'vendor/autoload.php';`
    - `$dbConn = new \App\Classes\Db();`
    - `$db = $dbConn->getDb();`
    - `$allMuppets = \App\Classes\MuppetHydrator::getAllMuppets($db);`
  - `details.php`
    - page to render additional muppet information
    - shows 1 muppet
    - `require_once 'vendor/autoload.php';`
    - `$dbConn = new \App\Classes\Db();`
    - `$db = $dbConn->getDb();`
    - ``$detailMuppet = \App\Classes\MuppetHydrator::getMuppetDetails($db);`
  - `search.php`
    - page to execute search query
    - shows muppets that match search query
    - `require_once 'vendor/autoload.php';`
    - `$dbConn = new \App\Classes\Db();`
    - `$db = $dbConn->getDb();`
    - `$searchMuppets = \App\Classes\MuppetHydrator::searchMuppets($db);`
  - `composer.json`
    - sets up autoloading
  - `src` directory
    - Contains classes
  - `styles.css`
  - `detailsStyles.css`
  - `searchStyles.css`

- ## **Classes** (inside an src folder)

  - `namespace App\Classes;` at the top of each class

  - Db

    - `public function __construct()`
      - Creates database connection when run
    - `public function getDb(): PDO`
      - Getter to access db

  - MuppetOverview

    - Make all relevant values from database protected properties
    - `public function getMuppetId()`
    - Getters for all protected properties

  - MuppetHydrator

    - `public static function getAllMuppets(PDO $db)`
      - Queries db to return all muppets
    - `public static function getMuppetDetails(PDO $db)`
      - Queries db to return details of selected muppet
    - `public static function searchMuppets(PDO $db)`
      - Queries db to return all muppets that match search criteria

  - DisplayMuppets (displays all)

    - `public function displayMuppets(int $id, string $name, string $image, string $debutYear)`
      - Outputs HTML string of `<div>`s containing all muppet information
    - `public function displayMuppetDetails()`
      - Outputs HTML string of a `<div>` containing detailed information for a single muppet
    - `public function displayMuppetSearch(int $id, string $name, string $image, string $debutYear)`
      - Outputs HTML string of `<div>`s containing muppet information for all muppets that match search criteria

  - MuppetDetails

    - Add properties from overview class

    - Add protected property for all database fields

  - MuppetSearch

    - Add protected proerties from overclass
    - Add getters for all properties
    - `$_GET` 
      - Accesses GET information
    - `public function sanitiseInput()`
      - sanitises user input
    - `public function validateInput()`
      - validates the sanitised user input
