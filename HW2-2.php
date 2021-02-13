<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Ascii</title>
</head>
<body>
    <h1 align=center>HW2-2:Find Ascii</h1>
    <form action="#" method="post">
        <table align="center" border=0>
            <tr>
                <td>
                    Your Text: 
                </td>
                <td>
                    <input type="text" name="str">
                </td>
            </tr>
            <tr height="60px">
                <td colspan="2" align=center>
                    <button name="submit" type="submit">Submit</button>
                    <button type="reset">clear</button>
                </td>
            </tr>
        </table>
    </form>
    <?php
        $text= [];
        if(isset($_POST['submit'])){
            $temp = $_POST['str'];
            
            for($i =0 ; $i<strlen($temp);$i++){
               $text[] = $temp[$i];
            }
        }
        
        
        function selection_sort($data){
            for($i = 0 ; $i < count($data);$i++){
                $min = $i;
                for($j= $i+1; $j<count($data); $j++){
                    if($data[$j]<$data[$min]){
                        $min = $j;
                    }
                }
                $data = swap($data,$i,$min);
            }
            return $data;
        }
        function swap($data,$i,$min){
            $temp = $data[$min];
            $data[$min] = $data[$i];
            $data[$i] = $temp;
            return $data;
        }

        $result = selection_sort($text);
        ?>

        <center>
        <?php
        for($i = 0 ; $i < count($result);$i++){
            for($j = $i+1 ; $j < count($result);$j++){
                if($result[$i] == $result[$j]){
                    $i++;
                }
            }
            echo '<p>'.$result[$i] . ' : Ascii = ' . ord($result[$i]). '</p>' ;
        }
        
        ?>
        </center>
</body>
</html>