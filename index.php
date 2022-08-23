<?php
    require_once __DIR__.'/vendor/autoload.php';
    require_once 'function.php';
    session_start();
    const DIR = __DIR__;
    use app\Core\Route as Router;
    use app\Controllers\Login as Login;
    use app\Controllers\Home as Home;
    use app\Controllers\Admin as Admin;
    $router = new Router();

    $router
    ->get('/', [Home::class, 'index'])
    ->get('/index', [Home::class, 'index'])
    ->get('/shop',[Home::class, 'shop'])
    ->get('/contact',[Home::class, 'contact'])
    ->get('/ca_nhan',[Home::class, 'ca_nhan'])
    ->post('/ca_nhan',[Home::class, 'ca_nhan'])
    ->get('/ctsp',[Home::class, 'ctsp'])
    ->get('/shop/loc',[Home::class, 'loc_DM'])
    ->get('/cart',[Home::class, 'cart'])
    ->get('/blog',[Home::class, 'blog'])
    ->get('/order',[Home::class, 'order'])
    ->get('/login', [Login::class, 'login'])
    ->post('/login', [Login::class, 'login'])
    ->get('/logout', [Login::class, 'logout'])
    ->post('/register', [Login::class, 'register'])
    ->get('/register', [Login::class, 'register'])
    ->get('/admin',[Admin::class, 'admin'])
    
    ->get('/admin/danh_muc',[Admin::class, 'dm'])
    ->post('/admin/danh_muc',[Admin::class, 'dm'])
    ->get('/admin/danh_muc/danh_sach',[Admin::class, 'dm_ds'])
    ->post('/admin/danh_muc/edit',[Admin::class, 'dm_edit'])
    ->get('/admin/danh_muc/edit',[Admin::class, 'dm_edit'])
    ->get('/admin/danh_muc/delete',[Admin::class, 'dm_delete'])

    ->get('/admin/san_pham',[Admin::class, 'sp'])
    ->post('/admin/san_pham',[Admin::class, 'sp'])
    ->get('/admin/san_pham/danh_sach',[Admin::class, 'sp_ds'])
    ->post('/admin/san_pham/edit',[Admin::class, 'sp_edit'])
    ->get('/admin/san_pham/edit',[Admin::class, 'sp_edit'])
    ->get('/admin/san_pham/delete',[Admin::class, 'sp_delete'])

    ->get('/admin/img',[Admin::class, 'img'])
    ->post('/admin/img',[Admin::class, 'img'])
    ->get('/admin/img/danh_sach',[Admin::class, 'img_ds'])
    ->post('/admin/img/danh_sach',[Admin::class, 'img_ds'])
    ->post('/admin/img/edit',[Admin::class, 'img_edit'])
    ->get('/admin/img/edit',[Admin::class, 'img_edit'])
    ->get('/admin/img/delete',[Admin::class, 'img_delete'])

    ->post('/admin/loai_kh',[Admin::class, 'loai_kh'])
    ->get('/admin/loai_kh',[Admin::class, 'loai_kh'])
    ->get('/admin/loai_kh/danh_sach',[Admin::class, 'loai_kh_DS'])
    ->get('/admin/loai_kh/delete',[Admin::class, 'loai_kh_delete'])
    ->post('/admin/loai_kh/edit',[Admin::class, 'loai_kh_edit'])
    ->get('/admin/loai_kh/edit',[Admin::class, 'loai_kh_edit'])

    ->post('/admin/khach_hang',[Admin::class, 'kh'])
    ->get('/admin/khach_hang',[Admin::class, 'kh'])
    ->get('/admin/khach_hang/danh_sach',[Admin::class, 'kh_ds'])
    ->post('/admin/khach_hang/edit',[Admin::class, 'kh_edit'])
    ->get('/admin/khach_hang/edit',[Admin::class, 'kh_edit'])
    ->get('/admin/khach_hang/delete',[Admin::class, 'kh_delete'])

    ->get('/admin/don_hang',[Admin::class, 'dh'])
    ->get('/admin/don_hang/ct',[Admin::class, 'dh_ct'])
    

    ->get('/api/cart', [Home::class, 'getApi'])
    ->post('/api/oder', [Home::class, 'postApi']);


    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));


    
?>