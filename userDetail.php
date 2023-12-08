<?php include "includes/head.php"; ?>
<!-- <?php include "includes/header.php"; ?> -->

<body>
    <div class="mainWrapper">
    <?php include "includes/aside.php"; ?>
        <main class="main">
            <div class="container-fluid w-100">
            <?php include "includes/header.php"; ?>
                <div class="row p-35">
                    <div class="col-12">
                        <div class="tabs">
                            <div class="tabs-links">
                                <a href="#">
                                    <h4 class='active'>Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                                </a>
                                <a href="#">
                                    <h4>User <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                                </a>
                                <a href="#">
                                    <h4>User Detail <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="userDetailContent">
                    <div class="row">
                        <div class="col-12">
                            <div class="user-cover">
                                <img src="./assets/images/userDtail-cover.png" alt="" class="w-100">
                                <div class="user-profile">
                                    <img src="./assets/images/user-profile.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-40">
                        <div class="col-lg-6 col-sm-12">
                            <div class="user-form">
                                <form action="#">
                                    <div class="animated-input">
                                        <input type="text" required>
                                        <label>UserName</label>
                                    </div>
                                    <div class="animated-input eye">
                                        <input type="text" required>
                                        <label>Email</label>
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                    <div class="btns">
                                        <button class="subs">Suscribe</button>
                                        <button class="n-subs">Non Subscribed</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<?php include "includes/footer.php"; ?>