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
                                    <h4>Feedbacks Management</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-wrapper">
                    <div class="row">
                        <div class="col-lg-5 col-sm-12">
                            <form action="#" class="feedback-form">
                                <div class="animated-input">
                                    <input type="text" required>
                                    <label>UserName</label>
                                </div>
                                <div class="animated-input eye">
                                    <input type="text" required>
                                    <label>Email</label>
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                                <div class="animated-input">
                                    <input type="text" required>
                                    <label>Date</label>
                                </div>
                                <div class="animated-input">
                                    <input type="text" required>
                                    <label>Subject</label>
                                </div>
                                <textarea name="" id="" cols="30" rows="10" class="feedback-text"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<?php include "includes/footer.php"; ?>