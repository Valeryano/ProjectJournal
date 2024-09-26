<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal Web</title>
    
    <style>
        * {
          text-decoration: none;
          margin: 0px;
          padding: 0px;
        }

        body {
          margin: 0px;
          padding: 0px;
          font-family: 'Open Sans', sans-serif;
          background-color: #f2f2f2;
        }

        .wrapper {
          width: 1100px;
          margin: auto;
          position: relative;
          background-color: #ffffff;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo a {
          font-size: 50px;
          font-weight: 800;
          float: left;
          font-family: courier;
          color: #364f6b;
        }

        .logo img {
          width: 180px;
          height: auto;
        }

        .menu {
          float: right;
        }

        nav {
          width: 100%;
          margin: auto;
          display: flex;
          line-height: 80px;
          position: sticky;
          position: -webkit-sticky;
          top: 0;
          background: #333333;
          color: #ffffff;
          z-index: 1;
          border-bottom: 1px solid #fbfbfc;
        }

        nav ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
        }

        nav ul li {
          float: left;
        }

        nav ul li a {
          color: #ffffff;
          font-weight: bold;
          text-align: center;
          padding: 0px 16px 0px 16px;
          text-decoration: none;
          transition: color 0.2s ease;
        }

        nav ul li a:hover {
          color: #cccccc;
          transform: scale(1.1);
        }

        section {
          margin: auto;
          display: flex;
          margin-bottom: 100px;
          background-color: #f7f7f7;
          padding: 20px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
          font-family: 'comic sans ms';
          font-weight: 800;
          font-size: 45px;
          margin-bottom: 20px;
          margin-top: 150px;
          color: #333333;
          width: 100%;
          line-height: 50px;
        }

        a.tbl-biru {
          background: #3f72af;
          border-radius: 20px;
          margin-top: 20px;
          padding: 15px 20px 15px 20px;
          color: #ffffff;
          cursor: pointer;
          font-weight: bold;
          transition: background-color 0.2s ease;
        }

        a.tbl-biru:hover {
          background: #fc5185;
          transform: scale(1.1);
        }

        input[type='text'] {
          padding: 10px;
          border: none;
          border-radius: 20px 20px;
          width: 70%;
          box-sizing: border-box;
          background: #d6d2d4;
          font-size: 16px;
        }

        a.tbl-pink:hover {
          background: #3f72af;
          text-decoration: none;
        }

        p {
          margin: 10px 0px 10px 0px;
          padding: 10px 0px 10px 0px;
        }

        .tengah {
          text-align: center;
          width: 100%;
        }

        .tutor-list {
          width: 100%;
          position: relative;
          display: flex;
          flex-wrap: wrap;
          margin-top: 100px;
        }

        .kartu-tutor {
          width: 20%;
          margin: 0 auto;
        }

        .kartu-tutor img {
          width: 80%;
          border-radius: 50%;
        }

        .kartu-tutor p {
          font-family: 'comic sans ms';
          font-weight: 800;
          font-size: 25px;
          text-align: center;
          color: #364f6b;
        }

        .partner-list {
          width: 100%;
          position: relative;
          display: flex;
          flex-wrap: wrap;
        }

        .kartu-partner {
 width: 10%;
          margin: 0 auto;
          margin-top: 100px;
        }

        .kartu-partner img {
          width: 100px;
          border-radius: 50%;
        }

        #contact {
          background: #dedede;
          padding: 50px 0px 50px 0px;
        }

        .footer {
          width: 100%;
          position: relative;
          display: flex;
          flex-wrap: wrap;
          margin: auto;
        }

        .footer-section {
          width: 60px;
          margin: 0 auto;
          text-align: center;
        }

        .footer-section img {
          max-width: 50px;
          max-height: 50px;
          display: block;
          margin: 0 auto;
        }

        h3 {
          font-family: 'comic sans ms';
          font-weight: 800;
          font-size: 15px;
          margin-bottom: 20px;
          color: #364f6b;
          width: 100%;
          line-height: 50px;
        }

        h4 {
          font-family: 'comic sans ms';
          font-weight: 800;
          font-size: 45px;
          margin-bottom: 90px;
          margin-top: 50px;
          color: #364f6b;
          width: 100%;
          line-height: 20px;
          text-align: center;
        }

        #copyright {
          text-align: center;
          width: 100%;
          padding: 50px 0px 50px 0px;
          margin-top: 50px;
        }

        @media screen and (max-width: 991.98px) {
          .wrapper {
            width: 90%;
          }

          .logo a {
            display: block;
            width: 100%;
            text-align: center;
          }

          nav .menu {
            width: 100%;
            margin: 0;
          }

          nav .menu ul {
            text-align: center;
            margin: auto;
            line-height: 60px;
          }

          nav .menu ul li {
            display: inline-block;
            float: none;
          }

          section {
            display: block;
          }

          section img {
            display: block;
            width: 100%;
            height: auto;
          }

          .kartu-tutor {
            width: 50%;
          }

          .kartu-partner {
            width: 50%;
          }
        }
    </style>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''><img src="https://tse1.mm.bing.net/th?id=OIP.GAkumqNRmvHsir1F6JLTPAHaD4&pid=Api&P=0&h=180" alt="RumahRafif Logo"></a></div>
            <div class="menu">
                <ul>
                    <li><a href="#courses">Background</a></li>
                    <li><a href="#tutors">Creator</a></li>
                    <li><a href="#partners">Content</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161" alt="Gambar Utama">
            <div class="kolom">
                <h2>Find Yours Inspirations Jurnals</h2>
                <form action="#" method="get">
                    <input type="text" placeholder="Cari..." name="search">
                    <button type="submit" class="tbl-pink"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <h2>Background</h2>
                <p>"Web jurnal ini dibuat dengan tujuan memberikan platform yang mudah diakses dan efisien bagi para peneliti untuk berbagi pengetahuan. Desainnya didasarkan pada kebutuhan pengguna untuk navigasi yang intuitif dan pengelolaan konten yang efektif . Semoga web jurnal ini dapat menjadi wadah yang inspiratif bagi perkembangan ilmiah dan pertukaran ide di dunia akademis.</p>
                
                <p><a href="" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/online-learning-isometric-concept_1284-17947.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161"/>
        </section>

        <!-- untuk Creator -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <h2>Creator</h2>
                    <p>Berperan penting dalam pembuatan website jurnals</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="https://st3.depositphotos.com/15648834/17930/v/450/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"/>
                        <p>Valeryano Santosa</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- untuk Content -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <h2>Content</h2>
                    <p>Pilih sesuai content kebutuhan yang ingin kamu cari di bawah ini.</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <a href="http://127.0.0.1:8000/articles/create" class="partner-button">
                            <img src="https://tse3.mm.bing.net/th?id=OIP.qXXuyDlQit070zhG7ePg7AHaHa&pid=Api&P=0&h=180"/>
                            <p>Article</p>
                        </a>
                    </div>
                    <div class="kartu-partner">
                        <a href="http://127.0.0.1:8000/books/create" class="partner-button">
                            <img src="https://icon-library.com/images/library-icon-png/library-icon-png-28.jpg"/>
                            <p>Book</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div id="contact">
            <div class="wrapper">
                <div class="footer">
                    <h4>Contact</h4>

                    <div class="footer-section">
                        <a href="URL_EMAIL">
                            <img src="https://freepngimg.com/download/iphone/64645-icons-computer-email-address-png-file-hd.png">
                            <h3>E-Mail</h3>
                        </a>
                    </div>
                    <div class="footer-section">
                        <a href="URL_WHATSAPP">
                            <img src="https://www.freepnglogos.com/uploads/whatsapp-logo-png-hd-2.png" alt="Whatsapp Icon">
                            <h3>Whatsapp</h3>
                        </a>
                    </div>
                    <div class="footer-section">
                        <a href="URL_INSTAGRAM">
                            <img src="https://www.freepngimg.com/download/logo/69768-logo-computer-layout-instagram-icons-png-file-hd.png" alt="Instagram Icon">
                            <h3>Instagram</h3>
                        </a>
                    </div>
                    <div class="footer-section">
                        <a href="URL_FACEBOOK">
                            <img src="https://www.freeiconspng.com/uploads/facebook-logo-3.png" alt="Facebook Icon">
                            <h3>Facebook</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyright">
            <div class="wrapper">
                &copy; 2024. <b>UMM.</b> All Rights Reserved.
            </div>
        </div>
    </div>
</body>
</html>