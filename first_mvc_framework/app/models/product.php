<?php
namespace App\Models;

class Product
{
    private $id;
    private $company;
    private $address;
    private $number;
    private $plz;
    private $place;
    private $mail;
    private $phone;
    private $ok;
    private $okFirst;
    private $status;


    /*
     * @param $title
     * @param $description
     * @param $price
     * @param $sku
     */
    public function __construct()
    {

    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }


    public function getCompany()
    {
        return $this->company;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getPlz()
    {
        return $this->plz;
    }

    public function getPlace()
    {
        return $this->place;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getOk()
    {
        return $this->ok;
    }

    public function getOkFirst()
    {
        return $this->okFirst;
    }

    public function getStatus()
    {
        return $this->status;
    }

    // SET METHODS
    public function setCompany(string $company)
    {
        $this->company = $company;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    public function setNumber(string $number)
    {
        $this->number = $number;
    }

    public function setPlz(string $plz)
    {
        $this->plz = $plz;
    }

    public function setPlace(string $place)
    {
        $this->place = $place;
    }

    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function setOk(string $ok)
    {
        $this->ok = $ok;
    }

    public function setOkFirst(string $okFirst)
    {
        $this->okFirst = $okFirst;
    }

    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    // CRUD OPERATIONS
    public function getById(int $id)
    {
        $conn =new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $outputs = null;

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM customer WHERE id = $id";
        try {
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $outputs = $row;
                }
            }
            // Setters
            $this->id = $outputs['id'];
            $this->setCompany($outputs['companyName']);
            $this->setAddress($outputs['address']);
            $this->setNumber($outputs['number']);
            $this->setPlz($outputs['plz']);
            $this->setPlace($outputs['place']);
            $this->setMail($outputs['mail']);
            $this->setPhone($outputs['phone']);
            $this->setOk($outputs['ok']);
            $this->setOkFirst($outputs['okFirst']);
            $this->setStatus($outputs['status']);

            $customer = null;
        } catch (\Exception $e) {

        }

        return $outputs;
    }

    public function readAll() : array
    {
        $conn =new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $outputs = [];

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM customer";
        try {
            $result = $conn->query($sql);
        } catch (\Exception $e) {

        }


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $outputs[] = $row;
            }
        }

        $conn->close();
        return $outputs;
    }

    public function searchAll(string $q = "") : array
    {
        $conn = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $outputs = [];

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        if (isset($_POST['search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);

            $sql = "SELECT * FROM customer WHERE companyName LIKE '%$search%' or phone LIKE '%$search%' or mail LIKE '%$search%' or ok LIKE '%$search%'";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die("query failed: " . mysqli_error($conn));
            }

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    array_push($outputs, $row);
                }
            }
        }

        $conn->close();
        return $outputs;
    }

    public function update($id)
    {
        $conn =new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $outputs = [];

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT *  FROM customer WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $outputs[] = $row;
            }
        } else {
            $outputs[0] = 'no Results';
        }

        $conn->close();
        return $outputs;
    }

    /*
     *
     */
    public function delete(int $id)
    {
        $conn = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM `customer` WHERE id=$id";


        if ($conn->query($sql) === TRUE) {
            return true;
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    }

    public function save()
    {
        $conn = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        $id = $this->getId();
        $companyName = $this->getCompany();
        $address = $this->getAddress();
        $streetNumber = $this->getNumber();
        $plz = $this->getPlz();
        $place = $this->getPlace();
        $mail = $this->getMail();
        $phone = $this->getPhone();
        $ok = $this->getOk();
        $okFirst = $this->getOkFirst();
        $status = $this->getStatus();

        if($id) {

            $sql = "UPDATE customer SET `companyName`='$companyName',`address`='$address',`number`='$streetNumber',
                `plz`='$plz',`place`='$place', `mail`='$mail',`phone`='$phone',`ok`='$ok',`okFirst`='$okFirst',`status`='$status' WHERE id=$id";

        } else {

            $sql = "INSERT INTO `customer`(`companyName`, `address`, `number`, `plz`, `place`, `mail`, `phone`,
                   `ok`,`okFirst`,`status`) VALUES ('$companyName', '$address', '$streetNumber', '$plz', '$place', '$mail', '$phone','$ok','$okFirst','$status')";
        }

        try {
            if (!$conn->query($sql) === TRUE) {
                echo "Error updating record: " . $conn->error;
            }

            header("location: ../products");

        } catch (\Exception $e) {
            print_r($e->getMessage());
        } finally {
            $conn->close();
        }
    }


    public function create()
    {
        $conn =new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $outputs = [];

        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        }


        $sql = "INSERT *  FROM customer";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $outputs[] = $row;
            }
        }

        $conn->close();
        return $outputs;
    }
}