<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta name="description" content="Thanks for purchasing Huge. If you need any support, please contact with us.">
    <meta name="author" content="uttaraitpark">
    <meta name="copyright" content="uttaraitpark">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= asset("css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?= asset("css/tree-viewer.css")?>">
    <link rel="stylesheet" href="<?= asset("css/style_admin.css")?>">
</head>

<body>

    <div class="wrapper">
        <div class="left-side">
            <div class="logo">
                <img src="<?= asset("img/logo.png")?>" alt="" />
            </div>
            <div class="left-content">
                <ul role="tablist">
                    <li class="active"><a href="/admin" ><span><i class="fa fa-home"></i></span>Admin</a></li>
                    <li><a href="/admin/danh_muc" ><span><i class="fa fa-folder"></i></span>Danh Mục</a></li>
                    <li><a href="/admin/san_pham" ><span><i class="fa fa-code"></i></span>Sản Phẩm</a></li>
                    <li><a href="/admin/img" ><span><i class="fa fa-code"></i></span>List_Img</a></li>
                    <li><a href="/admin/loai_kh" ><span><i class="fa fa-code"></i></span>Nhóm Khách Hàng</a></li>
                    <li><a href="/admin/khach_hang" ><span><i class="fa fa-slideshare"></i></span>Khách Hàng</a></li>
                    <li><a href="/admin/don_hang" ><span><i class="fa fa-support"></i></span>Đơn Hàng</a></li>
                </ul>
            </div>
            
        </div>
        <div class="right-side">
        <?php require_once './views/'.$view.".php"?>
        </div>
    </div>
    <script src="<?= asset("js/jquery-3.1.0.min.js")?>"></script>
    <script src="<?= asset("js/bootstrap.min.js")?>"></script>
    <script src="<?= asset("jsjstree.min.js")?>"></script>
    <script src="<?= asset("js/jstree.active.js")?>"></script>
    <script src="<?= asset("js/main.js")?>"></script>
</body>

</html>