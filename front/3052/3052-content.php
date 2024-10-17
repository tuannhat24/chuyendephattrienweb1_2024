<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3052">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-heading text-uppercase text-center">Our services</h2>
            </div>
        </div>

        <div class="post-grid no-border">
            <div class="row">
                <!-- Service Item 1 -->
                <article class="col-sm-6 col-md-4 service-item">
                    <div class="service-content">
                        <div class="service-image-container">
                            <img width="1920" height="1280" class="service-image" src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/MG_2321.jpg" alt="Mac & PC repair">
                        </div>
                        <div class="service-title-container">
                            <h5 class="service-title">Mac & PC repair</h5>
                        </div>
                    </div>
                </article>

                <!-- Service Item 2 -->
                <article class="col-sm-6 col-md-4 service-item">
                    <div class="service-content">
                        <div class="service-image-container">
                            <img width="1920" height="1280" class="service-image" src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/x-box-1791671_1920.jpg" alt="Game consoles repair">
                        </div>
                        <div class="service-title-container">
                            <h5 class="service-title">Game consoles repair</h5>
                        </div>
                    </div>
                </article>

                <!-- Service Item 3 -->
                <article class="col-sm-6 col-md-4 service-item">
                    <div class="service-content">
                        <div class="service-image-container">
                            <img width="1920" height="1280" class="service-image" src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/MG_2830-wifi.jpg" alt="Wifi problems">
                        </div>
                        <div class="service-title-container">
                            <h5 class="service-title">Wifi problems</h5>
                        </div>
                    </div>
                </article>

                <!-- Service Item 4 -->
                <article class="col-sm-6 col-md-4 service-item">
                    <div class="service-content">
                        <div class="service-image-container">
                            <img width="1920" height="1280" class="service-image" src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/IMG_2719-1.jpg" alt="Water Damage">
                        </div>
                        <div class="service-title-container">
                            <h5 class="service-title">Water Damage</h5>
                        </div>
                    </div>
                </article>

                <!-- Service Item 5 -->
                <article class="col-sm-6 col-md-4 service-item">
                    <div class="service-content">
                        <div class="service-image-container">
                            <img width="1920" height="1280" class="service-image" src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/MG_2915.jpg" alt="Unlocking">
                        </div>
                        <div class="service-title-container">
                            <h5 class="service-title">Unlocking</h5>
                        </div>
                    </div>
                </article>

                <!-- Service Item 6 -->
                <article class="col-sm-6 col-md-4 service-item">
                    <div class="service-content">
                        <div class="service-image-container">
                            <img width="1920" height="1280" class="service-image" src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/pexels-photo-196653.jpeg" alt="Touch screen repair">
                        </div>
                        <div class="service-title-container">
                            <h5 class="service-title">Touch screen repair</h5>
                        </div>
                    </div>
                </article>

            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <a class="btn btn-danger btn-sm text-uppercase" title="Services">See all services</a>
            </div>
        </div>
    </div>
</div>