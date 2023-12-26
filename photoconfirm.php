<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./manageroder.css">
    <link rel="stylesheet" href="./css/base.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
    include "id_tho.php";
?>
<?php
    include "connect.php";
?>
<?php 
    $connect = new connect;
    $select_thanhtoancoctho = $connect -> select_thanhtoancoctho($id_tho); //
    $select_thanhtoancoctt = $connect -> select_thanhtoancoctt($id_tho);
?>

<div class="row">
<?php
                                    if($select_thanhtoancoctho){
                                        while($result = $select_thanhtoancoctho->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];    
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $ma_thanhtoancoc = $result['ma_thanhtoancoc'];

                                            
                                ?>
                        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/<?php echo $anhtho  ?>" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        <?php echo $tentho ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        <?php echo $diadiem ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        <?php echo $thoigian ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong><?php  echo $ma_thanhtoancoc ?></strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong><?php echo $phongcach ?></strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong><?php echo $gia ?></strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        <em>Đơn đợi khách hàng thanh toán</em>
                    </span>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

                        <?php 
                                        }
                                    }

?>
                        
                        <?php
                                    if($select_thanhtoancoctt){
                                        while($result = $select_thanhtoancoctt->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];    
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $mathanhtoancoctt = $result['mathanhtoancoctt'];

                                            
                                ?>
                        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/<?php echo $anhtho  ?>" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        <?php echo $tentho ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        <?php echo $diadiem ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        <?php echo $thoigian ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong><?php  echo $mathanhtoancoctt ?></strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong><?php echo $phongcach ?></strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong><?php echo $gia ?></strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        <em>Đơn đợi khách hàng thanh toán</em>
                    </span>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

                        <?php 
                                        }
                                    }

?>               
                    
</div>

    <!-- <div class="content">
        

        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/avatar2.jpg" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Nguyễn Thị Yến Nhi
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Quận 3, TP.Hồ Chí Minh
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093346</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh sinh nhật</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>1.000.000</strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        <em>Đơn đợi khách hàng thanh toán</em>
                    </span>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/avatar3.jpg" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Võ Văn Luân
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Quận 10, TP.Hồ Chí Minh
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093347</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh đám cưới</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>8.000.000</strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        <em>Đơn đợi khách hàng thanh toán</em>
                    </span>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/avatar9.jpg" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Phạm Yến Như
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Studio Wiwi
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093348</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh mẹ và bé</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>500.000</strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        <em>Đơn đợi khách hàng thanh toán</em>
                    </span>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/avatar6.jpg" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Nguyễn Bảo Hân
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Quận 9, TP.Hồ Chí Minh
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093348</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh hiện đại</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>500.000</strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        <em>Đơn đợi khách hàng thanh toán</em>
                    </span>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/avatar8.jpg" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Bùi Thị Yến Nhi
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Bình Dương
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093350</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh giải bóng đá cấp thành</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>2.000.000</strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        <em>Đơn đợi khách hàng thanh toán</em>
                    </span>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>
    </div> -->
</body>
</html>