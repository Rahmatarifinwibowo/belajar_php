<!Doctype html>
<html>
    <head> 
        <title>Kalkulator Sederhana</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST['count'])){
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        $operation = $_POST['operation'];
        switch($operation){
            case 'tambah':
                $hasil=$input1+$input2;
                break;
                case 'kurang':
                    $hasil=$input1-$input2;
                break;
                case 'bagi':
                    $hasil=$input1/$input2;
                break;
                case 'kali':
                    $hasil=$input1*$input2;
                    break;

        }
    }
    ?>
    <div class="calculator">
        <h2 class="judul">KALKULATOR</h2>
        <form method="post" action="index.php">
            <input type="text" name="input1" class="input1" autocomplete="off" placeholder="Masukan Bilangan Pertama..">
            <input type="text" name="input2" class="input2" autocomplete="off" placeholder="Masukan Bilangan Kedua..">
            <select class="opt" name="operation">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="bagi"> : </option>
                <option value="kali"> x </option>
            </select>
            <input type="submit" name="count" value='count' class='button'>
        </form>
        <?php
            if (isset($_POST['count'])){
                ?>
                <input type="text" disabled value="<?php echo $hasil; ?>" class="input">
                <?php }else{?>
                    <input type="text" value="0" class=input><?php }?>
                </div>
                </body>
                </html>

                
            
