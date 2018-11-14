<?php
   if(!isset($_POST['submit'])){
        exit("error");
    }
    $bateau_nom=$_POST['bateau_nom'];
    $bateau_pays=$_POST['bateau_pays'];
    $bateau_annee=$_POST['bateau_annee'];
    $bateau_long=$_POST['bateau_long'];
    $bateau_large=$_POST['bateau_large'];
    
    $upfile=$_FILES["bateau_image"];
    $typelist=array("image/jpeg","image/jpg","image/png","image/gif");
    $path="./img/";
    
    if($upfile["error"]>0){
        switch($upfile['error']){
            case 1:
                $info="上传得文件超过了 php.ini中upload_max_filesize 选项中的最大值.";
                break;
            case 2:
                $info="上传文件大小超过了html中MAX_FILE_SIZE 选项中的最大值.";
                break;
            case 3:
                $info="文件只有部分被上传";
                break;
            case 4:
                $info="没有文件被上传.";
                break;
            case 5:
                $info="找不到临时文件夹.";
                break;
            case 6:
                $info="文件写入失败！";break;
        }die("上传文件错误,原因:".$info);
    }
    
    if($upfile['size']>100000){
        die("上传文件大小超出限制");
    }
    
    $fileinfo=pathinfo($upfile["name"]);
    do{ 
        $newfile=date("YmdHis").rand(1000,9999).".".$fileinfo["extension"];
    }while(file_exists($path.$newfile));
    
     if(is_uploaded_file($upfile["tmp_name"])){
            if(move_uploaded_file($upfile["tmp_name"],$path.$newfile)){
                echo "文件上传成功!";

                include('connect.php');
//              $data = addslashes(fread(fopen($bateau_image,"r"),filesize($bateau_image)));
                //将图片的名称和路径存入数据库
                echo $bateau_nom;
                $dir = $path.$newfile;
                echo $dir;
                $sql = "insert into bateau(id,nom,pays,annee,longueur,largeur,path) values (null,'$bateau_nom','$bateau_pays','$bateau_annee','$bateau_long','$bateau_large','$dir')";
                $result = mysqli_query($con,$sql);

                if($result){
                    echo"文件已存储到数据库";
                }
                else{
                    echo"请求失败，请重试";
                }
            }else{
            die("上传文件失败！");
        }
    }else{
    die("不是一个上传文件!");
  }
?>