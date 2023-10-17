<!-- App Bottom Menu -->

<div class="appBottomMenu">

    <a href="<?= site_url($this->uri->segment('1').'/index') ?>" class="item">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>Home</strong>
        </div>
    </a>
    <a href="<?= site_url($this->uri->segment('1').'/about') ?>" class="item">
        <div class="col">
            <ion-icon name="information-circle-outline"></ion-icon>
            <strong>About Us</strong>
        </div>
    </a>
    <a href="<?= site_url($this->uri->segment('1').'/service') ?>" class="item">
        <div class="col">
            <ion-icon name="copy-outline"></ion-icon>
            <strong>Services</strong>
        </div>
    </a>
    <a href="<?= site_url($this->uri->segment('1').'/catalogue') ?>" class="item">
        <div class="col">
            <ion-icon name="reader-outline"></ion-icon>
            <strong>Catalogue</strong>
        </div>
    </a>
    <a href="<?= site_url($this->uri->segment('1').'/gallery') ?>" class="item">
        <div class="col">
            <ion-icon name="images-outline"></ion-icon>
            <strong>Gallery</strong>
        </div>
    </a>
    <a href="<?= site_url($this->uri->segment('1').'/payments') ?>" class="item">
        <div class="col">
            <ion-icon name="card-outline"></ion-icon>
            <strong>Payments</strong>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->