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
                <div class="cms-edit">
                    <div class="row">
                        <div class="col-lg-9 col-sm-12">
                            <form action="#" class="page-edit-form">
                                <div class="edit-inputs d-flex">
                                    <div class="animated-input">
                                        <input type="text" required>
                                        <label>Page name;*</label>
                                    </div>
                                    <div class="animated-input eye">
                                        <input type="text" required>
                                        <label>Section title:*</label>
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                </div>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                <div class="image-upload">
                                    <p>Image : *</p>
                                    <img src="./assets/images/image.svg" alt="">
                                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                </div>
                                <div class="edit-btns d-flex">
                                    <button class="edit-primary">Add FAQ</button>
                                    <button class="edit-secondary">Remove Section</button>
                                    <button class="edit-secondary">Add Section</button>
                                </div>
                                <button class="primary-btn">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<?php include "includes/footer.php"; ?>