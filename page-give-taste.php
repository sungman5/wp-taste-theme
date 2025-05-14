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

<meta property="og:title" content="아름다운재단 기부문화캠페인 - 당신의 기부는 어떤 맛인가요?">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/give-taste/give-taste-thumbnail.png">
<meta property="og:url" content="<?php home_url(); ?>/give-taste">
<link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-favicon.png">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/give-taste.css">
<script src="<?php echo get_template_directory_uri() ?>/js/give-taste.js" defer></script>

<div id="give-taste" data-url="<?php echo get_template_directory_uri() ?>">
    <canvas id="bubble-canvas"></canvas>
    <a href="https://join.beautifulfund.org/1month_give-taste/" target="_blank" id="gt-floating-donation-web">
        <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-btn-donate-fix.svg" alt="">
    </a>
    <div class="gt-go-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
            <path d="M205.66,138.34a8,8,0,0,1-11.32,11.32L136,91.31V224a8,8,0,0,1-16,0V91.31L61.66,149.66a8,8,0,0,1-11.32-11.32l72-72a8,8,0,0,1,11.32,0ZM216,32H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path>
        </svg>
        <p>처음으로</p>
    </div>
    <a href="https://beautifulfund.org/" class="gt-header">
        <img id="gt-bf-logo" src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-bf-logo.svg"
             alt="아름다운재단 로고">
        <img id="gt-bf-logo-mobile"
             src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-bf-logo-mobile.svg" alt="아름다운재단 모바일 로고">
        <p>아름다운재단 기부문화캠페인</p>
    </a>
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
            <p class="gt-message">하지만 마음은 <br class="gt-only-mobile-show">눈에 보이지 않아요.</p>
        </div>
        <div class="gt-msg-background">
            <p class="gt-message">
                마음을 누군가에게 말한다는 건 어색합니다.<br>
                쑥스럽기도 하고, 남들의 시선이 신경쓰이기도 하죠.
            </p>
        </div>
    </section>
    <section class="gt-section" id="gt-3">
        <p>
            그래서 기부에 대한 <br class="gt-only-mobile-show">내 마음 레시피로 만든<br>
            <span>기부주스</span>로 이야기를 들어보았습니다.
        </p>
        <div class="gt-interview-list">
            <div class="gt-interview-item">
                <img class="gt-rotate-text"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-rotate-text.svg" alt="">
                <img class="gt-interview-img"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-interview-1.png" alt="">
                <p>
                    우리 아이가 앞으로 살아갈 세상이 희망으로 가득하길 바라며 사랑과 응원을 골랐습니다.
                    이 조합 괜찮은 것 같아요.
                </p>
            </div>
            <div class="gt-interview-item">
                <img class="gt-rotate-text"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-rotate-text.svg" alt="">
                <img class="gt-interview-img"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-interview-2.png" alt="">
                <p>
                    저는 희망과 고마움을 골랐어요.<br>
                    마음 키워드가 엄마랑 저랑 하나도 안겹쳐서 너무 신기해요.
                    사람들이 다양한 감정으로
                    기부한다는 것을 새삼 깨달았어요.
                </p>
            </div>
            <div class="gt-interview-item">
                <img class="gt-rotate-text"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-rotate-text.svg" alt="">
                <img class="gt-interview-img"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-interview-3.png" alt="">
                <p>
                    저는 주스에 동정심을 너무 많이 넣어서 그런지 너무 달아서 먹기 힘드네요.😅
                    기쁜 마음으로, 즐거운 마음으로,
                    불쌍히 여기는 마음으로 기부하는 것 같아요.
                </p>
            </div>
            <div class="gt-interview-item">
                <img class="gt-rotate-text"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-rotate-text.svg" alt="">
                <img class="gt-interview-img"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-interview-4.png" alt="">
                <p>
                    기부에서 오는 뿌듯함, 행복도 있고,
                    많은 분들이 서로 고마움이나 미안함도 느낄 것 같아서 복합적인 마음을 담았어요.
                    기부에 대한 생각이 들어가서 그런가 맛있네요.
                </p>
            </div>
            <div class="gt-interview-item">
                <img class="gt-rotate-text"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-rotate-text.svg" alt="">
                <img class="gt-interview-img"
                     src="<?php echo get_template_directory_uri() ?>/img/give-taste/gt-interview-5.png" alt="">
                <p>
                    기부를 자주 하는 편은 아니라<br>
                    미안함을 많이 추가했어요.
                </p>
            </div>
        </div>
    </section>
    <section class="gt-section" id="gt-4">
        <div class="gt-msg-background">
            <p class="gt-message">
                우리는 기부 그리고<br class="gt-only-mobile-show"> 나누는 마음에 대해<br>
                조금 더 편안하고 즐겁게<br class="gt-only-mobile-show"> 이야기할 수 있으면 좋겠습니다.<br>
                어쩌면 그 순간이 건강한 기부문화의 시작이 될 거예요.
            </p>
            <!--            <p class="gt-message"></p>-->
        </div>
        <!--        <div class="gt-msg-background">-->
        <!--        </div>-->
        <div class="gt-msg-background">
            <p class="gt-message">
                누군가에게는 자부심,<br>
                누군가에게는 희망,<br>
                또 누군가에게는 아픔
            </p>
        </div>
        <div class="gt-msg-background">
            <p class="gt-message">당신의 기부는,<br class="gt-only-mobile-show"> 어떤 맛인가요?</p>
        </div>
    </section>
    <section class="gt-section" id="gt-5">
        <div class="gt-check-sticker">
            <p>
                3가지 마음을 선택해<br>
                나만의 기부주스를 만들어보세요.
            </p>
            <ul>
                <li>
                    <label class="gt-sticker-btn" for="gt-hope">
                        <img id="gt-sticker-hope" class="gt-sticker"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_1.png" alt="희망 스티커">
                        <img class="gt-checked-mark"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/check-fat-fill.svg"
                             alt="체크 스티커">
                    </label>
                    <input class="gt-checkbox" type="checkbox" id="gt-hope">
                </li>
                <li>
                    <label class="gt-sticker-btn" for="gt-thanks">
                        <img id="gt-sticker-thanks" class="gt-sticker"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_2.png" alt="감사 스티커">
                        <img class="gt-checked-mark"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/check-fat-fill.svg"
                             alt="체크 스티커">
                    </label>
                    <input class="gt-checkbox" type="checkbox" id="gt-thanks">
                </li>
                <li>
                    <label class="gt-sticker-btn" for="gt-cheer">
                        <img id="gt-sticker-cheer" class="gt-sticker"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_3.png" alt="응원 스티커">
                        <img class="gt-checked-mark"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/check-fat-fill.svg"
                             alt="체크 스티커">
                    </label>
                    <input class="gt-checkbox" type="checkbox" id="gt-cheer">
                </li>
                <li>
                    <label class="gt-sticker-btn" for="gt-duty">
                        <img id="gt-sticker-duty" class="gt-sticker"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_4.png"
                             alt="책임감 스티커">
                        <img class="gt-checked-mark"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/check-fat-fill.svg"
                             alt="체크 스티커">
                    </label>
                    <input class="gt-checkbox" type="checkbox" id="gt-duty">
                </li>
                <li>
                    <label class="gt-sticker-btn" for="gt-compassion">
                        <img id="gt-sticker-compassion" class="gt-sticker"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_5.png"
                             alt="동정심 스티커">
                        <img class="gt-checked-mark"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/check-fat-fill.svg"
                             alt="체크 스티커">
                    </label>
                    <input class="gt-checkbox" type="checkbox" id="gt-compassion">
                </li>
                <li>
                    <label class="gt-sticker-btn" for="gt-happy">
                        <img id="gt-sticker-happy" class="gt-sticker"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/sticker_6.png" alt="행복 스티커">
                        <img class="gt-checked-mark"
                             src="<?php echo get_template_directory_uri() ?>/img/give-taste/check-fat-fill.svg"
                             alt="체크 스티커">
                    </label>
                    <input class="gt-checkbox" type="checkbox" id="gt-happy">
                </li>
            </ul>
            <div class="gt-make-juice">
                <!--                <input id="gt-username" type="text" placeholder="이름을 입력하세요">-->
                <button id="gt-make-button">주스 만들기</button>
            </div>
        </div>
        <div id="gt-show-result">
            <div class="gt-show-juice">
                <img id="gt-juice-img" src="<?php echo get_template_directory_uri() ?>/img/give-taste/juice-6.jpg"
                     alt="">
                <div class="gt-show-options">
                    <button id="gt-show-btn-save">
                        저장
                    </button>
                    <button id="gt-show-btn-close">
                        닫기
                    </button>
                </div>

            </div>
        </div>
    </section>
    <section class="gt-section" id="gt-6">
        <p class="gt-6-headline">
            기부에 대한 이야기들이 <br class="gt-only-mobile-show">자연스러워지고 더 다양해지길 바랍니다.<br>
            아름다운재단은 건강한 기부문화를 만들어가겠다는<br>
            첫 약속을 지켜가겠습니다.
        </p>
        <div class="gt-donation-message">
            <p>
                지원을 받는 사람도, 기부자도, 모금 기관도<br>
                건강한 기부문화 속에서 지속적이고 긍정적인<br>
                사회변화를 경험할 수 있습니다.
            </p>
            <p>
                그래서 아름다운 재단은 이 노력을 지속하고 싶습니다.
            </p>
            <p>
                당신의 기부가 더 건강하게<br>
                우리 사회에 자리잡을 수 있도록<br>
                아름다운재단과 함께해주세요.
            </p>
        </div>
        <a href="https://join.beautifulfund.org/1month_give-taste/" target="_blank">기부하기</a>
        <p class="gt-6-caption">
            기부금은 1%다달나눔기금을 통해 사각지대를 발굴하고, <br class="gt-only-mobile-show">변화를 만드는 아름다운재단의 다양한 활동에 지원됩니다.
        </p>
    </section>
    <section class="gt-section" id="gt-7">
        <p>
            아름다운재단의<br><span>기부문화캠페인</span>이 더 궁금하다면?
        </p>
        <div class="gt-outlinks">
            <a href="https://beautifulfund.org/give-culture " target="_blank">
                아름다운재단에는<br>
                우는 아이가 없습니다.
                <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/fruits_banana.png" alt="">
            </a>
            <a href="https://beautifulfund.org/give-mind/" target="_blank">
                별나라로 간<br>
                건강한 기부
                <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/fruits_orange.png" alt="">
            </a>
            <a href="https://insight.beautifulfund.org/give-connect/" target="_blank">
                기부연결지도
                <img src="<?php echo get_template_directory_uri() ?>/img/give-taste/fruits_strawberry.png" alt="">
            </a>
        </div>
    </section>
    <a id="gt-floating-donation-mobile">
        캠페인 기부하기
    </a>
</div>
</html>