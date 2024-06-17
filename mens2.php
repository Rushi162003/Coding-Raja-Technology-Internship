<!DOCTYPE html>
<html>

<head>
    <title>City Sorter</title>
    <script>
        function updateCities() {
            var state = document.getElementById("state").value;
            var cities = <?php echo json_encode(getCitiesByState()); ?>;

            var citySelect = document.getElementById("city");
            citySelect.innerHTML = "";

            cities[state].forEach(function(city) {
                var option = document.createElement("option");
                option.text = city;
                citySelect.add(option);
            });
        }

        function getCitiesByState() {
            return <?php echo json_encode(getCitiesByState()); ?>;
        }
    </script>
</head>


<body>
    <label for="state">Select a state:</label>
    <select id="state" onchange="updateCities()">
        <option value="">---Select catagory---</option>
        <?php
        $servename = "localhost";
        $username = "root";
        $password = "";
        $database = "e-commerce";
        $conn = new mysqli($servename, $username, $password, $database);
        $sql1 = "SELECT DISTINCT catagory FROM products";
        $result1 = mysqli_query($conn, $sql1);
        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                $cat = $row['catagory'];
        ?>
                <option id="shirt" name="" value="<?php echo $cat; ?>"> <?php echo $cat; ?></option> <br>
        <?php
            }
        }
        ?>
    </select>

    <br>

    <label for="city">Select a city:</label>
    <select id="city">
        <!-- Options will be populated dynamically based on selected state -->
    </select>
</body>

</html>

<?php
$servename = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($servename, $username, $password, $database);
$sql1 = "SELECT DISTINCT product FROM products WHERE product='$cat'";
$result1 = mysqli_query($conn, $sql1);
if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $cat = $row['catagory'];
?>
        <option value="<?php echo $cat ?>"><?php echo $cat ?></option>
<?php
    }
}

function getCitiesByState()
{
    // Define cities by state
    $cities1 = array();
    
$servename = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($servename, $username, $password, $database);
    $sql1 = "SELECT DISTINCT product FROM products WHERE product='$cat'";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            // $cat = $row['catagory']; 
            $cities1 = $row['product'];
        }
    }
    // $cities = array(
    //     "kids" => array("Los Angeles", "San Francisco", "San Diego"),
    //     "mens" => array("New York City", "Buffalo", "Rochester"),
    //     "women" => array("New York City", "Buffalo", "Rochester"),
    //     "electronics" => array("New York City", "Buffalo", "Rochester"),
    //     "bags & luggage" => array("New York City", "Buffalo", "Rochester"),
    //     // Add more states and cities as needed
    // );

    return $cities;
}
?>