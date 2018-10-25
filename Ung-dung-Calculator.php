<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>

<form  method="post">
    <div>
        <h2>Calculator</h2>
        <input type="text" name="a" placeholder="a"/><br/>
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select><br/>
        <input type="text" name="b" placeholder="b"/><br/>
        <input type="submit" value="Result"/>
    </div>
    <?php
    $result = 0;
    $a = $_POST['a'];
    $b = $_POST['b'];
    $operator = $_POST['operator'];
    try{
        switch ($operator){
            case ('+'):
                $result = $a + $b;
                break;
            case ('-'):
                $result = $a - $b;
                break;
            case ('*'):
                $result = $a * $b;
                break;
            case ('/'):
                if ($b == 0){
                    throw new Exception('Ngu qua');
                }
                $result = $a/$b;
                break;
        }
        echo $result;
    } catch (Exception $e){
         echo $e->getMessage();
    }
    ?>
</form>
</body>
</html>