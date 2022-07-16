<!DOCTYPE html>
<style>
    html{
        background-image: url("warehouse.jpg");
        background-size: 100%;
    }
    #logo {
        padding-top: 30px;
        padding-bottom: 30px;
    }
    td {
        width: 300px;
        text-align: center;
    }
    body{
        margin-left: 250px;
        margin-top: 80px;
        background-color: white;
        border: 2px solid black;
        width: 950px;
        opacity: 0.85;
        display: none;
    }
    footer {
        margin-left: 50px;
        color: black;
        background-color: white;
        width: 840px;
        padding-top: 40px;
        padding-bottom: 40px;
        margin-left: 85px;
        font-size: large;
    }
    a{
        text-decoration: none;
    }
    #option{
        text-decoration: none;
        border: 2px solid white;
        padding: 10px;
        color: white;
        background-color: black;
    }
    #option:hover{
        color: black;
        background-color: white;
        border: 2px solid black;
    }
    img{
        width: 100px;
        height: 100px;
    }
    #h{
        border: 2px solid black;
        width: 57px;
        padding: 2px;
    }
    #h:hover{
        color: darkgray;
		background-color: whitesmoke;
    }
</style>
<html>

<head>
<script src="jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("body").fadeIn("slow");
    });
</script>
</head>

<body>
    <form method="POST">
        <table>
            <tr>
                <td></td>
                <td id="logo">
                <img src="https://cdn-icons-png.flaticon.com/512/3639/3639103.png" alt="">
                <h2>Товари</h2><hr>
            </td>
            </tr>
            <tr>
                <td>
                    <p>
                    <h3><a href="cargo_add.php" id="option"> Добави товар </a></h3>
                    </p>
                </td>
                <td>
                    <p>
                    <h3><a href="cargo_show.php" id="option"> Всички товари </a></h3>
                    </p>
                </td>
            </tr>
        </table>
    </form>
</body>
<footer>
    <p><a href="index.php" id="h"> Начало </a></p>
</footer>

</html>