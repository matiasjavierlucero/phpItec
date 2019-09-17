<html>
    <head>
        <style>
            table, th, td {
            border: 1px solid black;
            }
            #tabla {
                float: left;
                width: 50%;
            }
        </style>
    </head>
    <body>        
        <h1> ARCHIVOS  </h1>
        <table id="tabla" >
            <tr>
                <th>NAME</th>
                <th>SIZE</th> 
                <th>UPDATED</th> 
            </tr>
            <?php
                $files = scandir ('C:\xampp\htdocs\Itec\php');
                foreach ($files as $file){
                    if ($file !== '.' && $file !== '..'){
                        $ext = pathinfo ($file,PATHINFO_EXTENSION);
                        $resultado[$ext][] = $file;
                    } 
                }
                foreach($resultado as $item) { 
                    foreach($item as $key => $value)  { 
//                        echo "\n". "--->>>".$value. "\n";  
            ?>        
            <tr>
                <td><?php echo  $value ?></td>
                <td><?php echo filesize($value) . ' bytes' ?></td>
                <td><?php echo date ("F d Y H:i:s.", filemtime($value)) ?></td>
            </tr>
            <?php
                    }
                }
            ?>
        </body>        
    </table>
</html>