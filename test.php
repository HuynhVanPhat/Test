<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <table>
        <tr>
            <td>Nhập số tiền</td>
            <td>
                <input type="text" id="txt">
            </td>
        </tr>
        <tr>
            <td>Giá vạn:</td>
            <td id="kq"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" onclick="change()">Đổi</button>
            </td>
        </tr>
        </table>

    <script type="text/javascript">
        function change(){
            let a = document.getElementById('txt').value;
            document.getElementById('kq').innerHTML = a /10000 +" vạn";
        }
    </script>
</body>
</html>