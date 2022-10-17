<!DOCTYPE html>

<html>

    <head>
        <title>calculator</title>
    </head>

    <body>
        <h1>calculator</h1>
        <form action="operation.php" method="post">
            <input type="integer" name="num1" id="num1">
            <select name="operator" id="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="integer" name="num2" id="num2">
            <button type="submit">calculate</button>
        </form>
    </body>

</html>