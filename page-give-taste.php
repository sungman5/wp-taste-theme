<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Noto+Sans+KR:wght@100;300;400;500;700&family=Noto+Serif+KR:wght@200;300;400;500;600&display=swap">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css">
    <link rel="stylesheet" type="text/css" href="https://beautifulfund.org/wp-content/themes/beautifulfund/style.css">
    <title>아름다운재단 기부문화캠페인</title>
</head>
<meta property="og:title" content="아름다운재단 기부문화캠페인 당신의 기부는 어떤 맛인가요?">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/insight-living/il-meta-thumbnail.jpg">
<meta property="og:url" content="<?php home_url(); ?>/give-taste">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/give-taste.css">
<script src="<?php echo get_template_directory_uri() ?>/js/give-taste.js" defer></script>

<div id="give-taste" data-url="<?php echo get_template_directory_uri() ?>">
    <canvas id="bubble-canvas"></canvas>
    <div class="gt-header">
        <p>기부문화캠페인</p>
    </div>
    <section class="gt-section" id="gt-0">
        <p class="gt-title">
            당신의 기부는<br>
            <span>어떤 맛인가요?</span>
        </p>
        <div class="gt-scroll">
            <p>스크롤을 내려주세요</p>
            <div class="gt-scroll-frame">
                <div class="gt-scroll-gage"></div>
            </div>
        </div>
    </section>
    <section class="gt-section" id="gt-1">
        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/r5WLXZspD1M?si=rhAQGLEEIDv3gAdQ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>
    <section class="gt-section" id="gt-2">
        <div class="gt-msg-background">
            <p class="gt-message">우리는 어떤 마음을 담아 기부합니다.</p>
        </div>
        <div class="gt-msg-background">
            <p class="gt-message">하지만 마음은 눈에 보이지 않아요.</p>
        </div>
        <div class="gt-msg-background">
            <p class="gt-message">
                마음을 누군가에게 말한다는 건 어색합니다.<br>
                쑥쓰럽기도 하고, 남들의 시선이 신경쓰이기도 하죠.
            </p>
        </div>
    </section>
    <section class="gt-section" id="gt-3">
        인터뷰 페이지
    </section>
    <section class="gt-section" id="gt-4">
        <div class="gt-msg-background">
            <p class="gt-message">
                우리는 기부 그리고 나누는 마음에 대해
                조금 더 편안하고 즐겁게 이야기할 수 있으면 좋겠습니다.
            </p>
        </div>
        <div class="gt-msg-background">
            <p class="gt-message">어쩌면 그 순간이 건강한 기부문화의 시작이 될 거에요.</p>
        </div>
        <div class="gt-msg-background">
            <p class="gt-message">
                누군가에게는 자부심,<br>
                누군가에게는 희망,<br>
                또 누군가에게는 아픔
            </p>
        </div>
        <div class="gt-msg-background">
            <p class="gt-message">당신의 기부는, 어떤 맛인가요?</p>
        </div>
    </section>
    <section class="gt-section" id="gt-5">
        <ul class="gt-check-sticker">
            <li>
                <label class="gt-sticker-btn" for="gt-hope">
                    <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_1.png" alt="">
                </label>
                <input class="gt-checkbox" type="checkbox" id="gt-hope">
            </li>
            <li>
                <label class="gt-sticker-btn" for="gt-thanks">
                    <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_2.png" alt="">
                </label>
                <input class="gt-checkbox" type="checkbox" id="gt-thanks">
            </li>
            <li>
                <label class="gt-sticker-btn" for="gt-cheer">
                    <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_3.png" alt="">
                </label>
                <input class="gt-checkbox" type="checkbox" id="gt-cheer">
            </li>
            <li>
                <label class="gt-sticker-btn" for="gt-responsibility">
                    <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_4.png" alt="">
                </label>
                <input class="gt-checkbox" type="checkbox" id="gt-responsibility">
            </li>
            <li>
                <label class="gt-sticker-btn" for="gt-compassion">
                    <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_5.png" alt="">
                </label>
                <input class="gt-checkbox" type="checkbox" id="gt-compassion">
            </li>
            <li>
                <label class="gt-sticker-btn" for="gt-happy">
                    <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_6.png" alt="">
                </label>
                <input class="gt-checkbox" type="checkbox" id="gt-happy">
            </li>
        </ul>
    </section>
    <section class="gt-section" id="gt-6">
        기부하기 버튼
    </section>
    <section class="gt-section" id="gt-7">
        외부링크
    </section>
</div>
</html>