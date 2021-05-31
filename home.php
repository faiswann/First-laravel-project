<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="css/stylehome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="content">
        <div class="container">
            <div class="content-grid">
                <div class="content-item">
                    <a href="#"><img src="https://venturebeat.com/wp-content/uploads/2018/04/evga-gtx-1080-100663485-orig.png?fit=400%2C259&strip=all" width="200px" height="120px"></a>
                    <h1>GRAPHIC CARD</h1>
                    <p>กาจจอประมวลผล สำหรับเล่นเกมส์</p>
                </div>
                <div class="content-item">
                    <a href="#"><img src="https://store.hp.com/app/assets/images/uploads/prod/how-to-overclock-pc-cpu-hero1534383854365.jpg" width="200px" height="120px" ></a>
                    <h1>CPU</h1>
                    <p>หน่วยประมวลผลกลาง</p>
                </div>
                <div class="content-item">
                    <a href="#"><img src="https://purepng.com/public/uploads/large/purepng.com-ramelectronicsram-941524673871z6dnm.png" width="200" height="120" ></a>
                    <h1>RAM</h1>
                    <p>ที่จัดเก็บข้อมูลสำรอง</p>
                </div>
                <div class="content-item">
                    <a href="#"><img src="https://pngimage.net/wp-content/uploads/2018/06/psu-png-5.png" width="200" height="120"></a>
                    <h1>PSU</h1>
                    <p>ตัวจ่ายไฟ</p>
                </div>
            </div>
            <div class="content-meet">
                <h1>สินค้าแนะนำ</h1>
            </div>
            <div class="img-grid">
                <div class="img-item">
                    <a href="#"><img src="img/gtx1080ti.png" alt=""></a>
                    <h2>GTX1080TI</h2>
                    <p>ยอดฮิต</p>
                </div>
                <div class="img-item">
                    <a href="#"><img src="img/gtx1070ti.png" alt=""></a>
                    <h2>GTX1070TI</h2>
                    <p>แรงงง!</p>
                </div>
                <div class="img-item">
                    <a href="#"><img src="img/gtx1070.png" alt=""></a>
                    <h2>GTX1070</h2>
                    <p>ราคาย่อมเยา</p>
                </div>
                <div class="img-item">
                    <a href="#"><img src="img/gtx980ti.png" alt=""></a>
                    <h2>GTX980TI</h2>
                    <p>รุ่นเก๋า</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-item">
                    <form action="contact.php" method="post" id="contact">
                        <h1>ติดต่อ Support</h1>
                    <input type="text" name="username" placeholder="Username"required><br>
                    <textarea name="textarea" cols="35" rows="15" placeholder="Messages 180 word" required maxlength="180"  ></textarea>
                    <input type="submit" name="btn" value="SUBMIT">
                    </form>
                </div>
                <div class="footer-item">
                    <h2>CONTACT</h2>
                    <h3>Admin</h3>
                    <p>Support Time 24/7</p>
                    <img src="https://media2.giphy.com/media/RgiHShSuquAuY/giphy.gif?cid=790b76115cd43c51514a7543632cc237&rid=giphy.gif" width="400" height="300" >
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>COPY RIGHT BY.PAWIN</p>
        </div>
    </footer>
</body>
</html>