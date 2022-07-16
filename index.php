<!DOCTYPE html>
<style>
    td {
        width: 200px;
        text-align: center;
    }

    body {
        margin-left: 80px;
        margin-top: 100px;
        background-image: url("background.jpg");
        background-size: 100%;
        opacity: 0.85;
    }

    a {
        text-decoration: none;
        border: 2px solid white;
        padding: 10px;
        color: white;
        background-color: black;
    }

    a:hover {
        color: black;
        background-color: white;
        border: 2px solid black;
    }

    #logo {
        font-size: 20px;
        color: black;
        background-color: white;
        border: 2px solid black;
        width: 480px;
    }

    #option {
        padding-top: 20px;
        border: 2px solid black;
        background-color: white;
    }
    img{
        width: 80px;
        height: 80px;
    }
    #space{
        height: 75px;
    }
    #width{
        width: 20px;
    }
</style>
<html>

<head>
</head>

<body>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td id="logo">
                <p>
                <h1>Logistics System</h1>
                </p>
            </td>
        </tr>
        <tr id="space"></tr>
    </table>
    <table>
    <tr>
        <td></td>
        <td id="option">
            <img src="https://cdn-icons-png.flaticon.com/512/3281/3281275.png" alt="">
            <p>
            <h2><a href="employees.php"> Служители </a></h2>
            </p>
        </td>
        <td id="width"></td>
        <td id="option">
            <img src="https://cdn-icons-png.flaticon.com/512/411/411763.png" alt="">
            <p>
            <h2><a href="vehicles.php"> ППС-та </a></h2>
            </p>
        </td>
        <td id="width"></td>
        <td id="option">
            <img src="https://cdn-icons-png.flaticon.com/512/3639/3639103.png" alt="">
            <p>
            <h2><a href="cargo.php"> Товари </a></h2>
            </p>
        </td>
        <td id="width"></td>
        <td id="option">
            <img src="https://cdn-icons-png.flaticon.com/512/6012/6012670.png" alt="">
            <p>
            <h2><a href="clients.php"> Клиенти </a></h2>
            </p>
        </td>
    </tr>
    </table>
</body>

</html>