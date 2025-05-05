// set height

(() => {


    sectionDatas = [
        {
            index: 0,
            heightNum: 1,
            innerHeight: 0,
            type: 'static',
        },
        {
            index: 1,
            heightNum: 1,
            innerHeight: 0,
            type: 'sticky',
        },
        {
            index: 2,
            heightNum: 3,
            innerHeight: 0,
            type: 'sticky',
        },
        {
            index: 3,
            heightNum: 1,
            innerHeight: 0,
            type: 'sticky',
        },
        {
            index: 4,
            heightNum: 4,
            innerHeight: 0,
            type: 'sticky',
        },
        {
            index: 5,
            heightNum: 1,
            innerHeight: 0,
            type: 'sticky',
        },
        {
            index: 6,
            heightNum: 1,
            innerHeight: 0,
            type: 'sticky',
        },
        {
            index: 7,
            heightNum: 1,
            innerHeight: 0,
            type: 'sticky',
        },
    ]

    // 플로팅 배너
    function showDonationBanner() {
        const web = document.getElementById('gt-floating-donation-web');
        const scrollY = window.scrollY;
        const triggerSection = document.getElementById('gt-1')
        const mobile = document.getElementById('gt-floating-donation-mobile');

        if (scrollY > triggerSection.offsetTop) {
            if (window.innerWidth > 1440) {
                web.style.opacity = 1;
                web.style.visibility = 'visible';
                mobile.style.opacity = 0;
                mobile.style.visibility = 'hidden';
            } else {
                mobile.style.opacity = 1;
                mobile.style.visibility = 'visible';
                web.style.opacity = 0;
                web.style.visibility = 'hidden';
            }
        } else {
            web.style.opacity = 0;
            web.style.visibility = 'hidden';
            mobile.style.opacity = 0;
            mobile.style.visibility = 'hidden';
        }
    }

    window.addEventListener('scroll', showDonationBanner)
    window.addEventListener('resize', showDonationBanner)


    const giveTasteEl = document.getElementById('give-taste');
    const baseUrl = giveTasteEl.dataset.url;

    // 과일 폭발ㅋ
    const fruitImages = [
        `${baseUrl}/img/give-taste/fruits_apple.png`,
        `${baseUrl}/img/give-taste/fruits_banana.png`,
        `${baseUrl}/img/give-taste/fruits_blueberry.png`,
        `${baseUrl}/img/give-taste/fruits_orange.png`,
        `${baseUrl}/img/give-taste/fruits_rhyme.png`,
        `${baseUrl}/img/give-taste/fruits_strawberry.png`,
    ];

    document.addEventListener('click', (e) => {
        const tagName = e.target.tagName.toLowerCase();
        if (tagName === 'a' || tagName === 'button' || tagName === 'img' || tagName === 'input' || tagName === 'textarea' || e.target.isContentEditable) return;

        const centerX = e.clientX;
        const centerY = e.clientY;


        fruitImages.forEach((src, index) => {
            const fruit = document.createElement('img');
            fruit.src = src;
            fruit.classList.add('fruit');

            // 초기 위치: 클릭한 위치
            fruit.style.left = `${centerX - 20}px`;
            fruit.style.top = `${centerY - 20}px`;

            document.body.appendChild(fruit);

            // 폭죽처럼 날릴 방향 설정
            const angle = (Math.PI * 2 / fruitImages.length) * index;
            const distance = Math.random() * 80 + 60; // 60~140px 사이로 튐
            const dx = Math.cos(angle) * distance;
            const dy = Math.sin(angle) * distance;

            // 트랜지션 시작
            requestAnimationFrame(() => {
                fruit.style.transform = `translate(${dx}px, ${dy}px) scale(1.5) rotate(${Math.random() * 360}deg)`;
                fruit.style.opacity = '0';
            });

            // 일정 시간 뒤 제거
            setTimeout(() => fruit.remove(), 800);
        });
    });


    // 탄산수
    const canvas = document.getElementById('bubble-canvas');
    const ctx = canvas.getContext('2d');

    let bubbles = [];

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }

    resizeCanvas();

    window.addEventListener('resize', resizeCanvas);

    function createBubble() {
        return {
            x: Math.random() * canvas.width,
            y: canvas.height + Math.random() * 100,
            radius: Math.random() * 10 + 5,
            speed: Math.random() + 0.5,
            alpha: Math.random() * 0.5 + 0.5
        };
    }

// 초기 기포 생성
    for (let i = 0; i < 20; i++) {
        bubbles.push(createBubble());
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        bubbles.forEach((b, i) => {
            b.y -= b.speed;
            ctx.beginPath();
            ctx.arc(b.x, b.y, b.radius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(255, 255, 255, ${b.alpha})`;
            ctx.fill();

            // 위로 사라지면 재생성
            if (b.y + b.radius < 0) {
                bubbles[i] = createBubble();
            }
        });

        requestAnimationFrame(animate);
    }

    animate();


    const sections = document.querySelectorAll('.gt-section');

    function setSectionPreset() {
        console.log(sections.length)
        for (let i = 0; i < sections.length; i++) {
            sections[i].style.height = `${sectionDatas[i].heightNum * 100}dvh`
        }
    }

    setSectionPreset();


    function gt_2_animation() {
        const scrollY = window.scrollY;
        const gt_2_messages = document.querySelectorAll('#gt-2 .gt-message')
        if (scrollY > sections[2].offsetTop + window.innerHeight * 0.2) {
            gt_2_messages[0].style.opacity = 0;
            gt_2_messages[0].style.visibility = 'hidden';
            gt_2_messages[0].style.transform = 'translate(-50%, -70%)';
        } else if (scrollY > sections[2].offsetTop - window.innerHeight * 0.2) {
            gt_2_messages[0].style.opacity = 1;
            gt_2_messages[0].style.visibility = 'visible';
            gt_2_messages[0].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_2_messages[0].style.opacity = 0;
            gt_2_messages[0].style.visibility = 'hidden';
            gt_2_messages[0].style.transform = 'translate(-50%, -40%)';
        }

        if (scrollY > sections[2].offsetTop + window.innerHeight * 1.2) {
            gt_2_messages[1].style.opacity = 0;
            gt_2_messages[1].style.visibility = 'hidden';
            gt_2_messages[1].style.transform = 'translate(-50%, -70%)';
        } else if (scrollY > sections[2].offsetTop + window.innerHeight * 0.2) {
            gt_2_messages[1].style.opacity = 1;
            gt_2_messages[1].style.visibility = 'visible';
            gt_2_messages[1].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_2_messages[1].style.opacity = 0;
            gt_2_messages[1].style.visibility = 'hidden';
            gt_2_messages[1].style.transform = 'translate(-50%, -40%)';
        }

        if (scrollY > sections[2].offsetTop + window.innerHeight * 2.2) {
            gt_2_messages[2].style.opacity = 0;
            gt_2_messages[2].style.visibility = 'hidden';
            gt_2_messages[2].style.transform = 'translate(-50%, -70%)';
        } else if (scrollY > sections[2].offsetTop + window.innerHeight * 1.2) {
            gt_2_messages[2].style.opacity = 1;
            gt_2_messages[2].style.visibility = 'visible';
            gt_2_messages[2].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_2_messages[2].style.opacity = 0;
            gt_2_messages[2].style.visibility = 'hidden';
            gt_2_messages[2].style.transform = 'translate(-50%, -40%)';
        }


    }


    window.addEventListener('scroll', gt_2_animation);

    function gt_4_animation() {
        const scrollY = window.scrollY;
        const gt_4_messages = document.querySelectorAll('#gt-4 .gt-message')
        if (scrollY > sections[4].offsetTop + window.innerHeight * 0.2) {
            gt_4_messages[0].style.opacity = 0;
            gt_4_messages[0].style.visibility = 'hidden';
            gt_4_messages[0].style.transform = 'translate(-50%, -70%)';
        } else if (scrollY > sections[4].offsetTop - window.innerHeight * 0.2) {
            gt_4_messages[0].style.opacity = 1;
            gt_4_messages[0].style.visibility = 'visible';
            gt_4_messages[0].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_4_messages[0].style.opacity = 0;
            gt_4_messages[0].style.visibility = 'hidden';
            gt_4_messages[0].style.transform = 'translate(-50%, -40%)';
        }

        if (scrollY > sections[4].offsetTop + window.innerHeight * 1.2) {
            gt_4_messages[1].style.opacity = 0;
            gt_4_messages[1].style.visibility = 'hidden';
            gt_4_messages[1].style.transform = 'translate(-50%, -70%)';
        } else if (scrollY > sections[4].offsetTop + window.innerHeight * 0.2) {
            gt_4_messages[1].style.opacity = 1;
            gt_4_messages[1].style.visibility = 'visible';
            gt_4_messages[1].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_4_messages[1].style.opacity = 0;
            gt_4_messages[1].style.visibility = 'hidden';
            gt_4_messages[1].style.transform = 'translate(-50%, -40%)';
        }

        if (scrollY > sections[4].offsetTop + window.innerHeight * 2.2) {
            gt_4_messages[2].style.opacity = 0;
            gt_4_messages[2].style.visibility = 'hidden';
            gt_4_messages[2].style.transform = 'translate(-50%, -70%)';
        } else if (scrollY > sections[4].offsetTop + window.innerHeight * 1.2) {
            gt_4_messages[2].style.opacity = 1;
            gt_4_messages[2].style.visibility = 'visible';
            gt_4_messages[2].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_4_messages[2].style.opacity = 0;
            gt_4_messages[2].style.visibility = 'hidden';
            gt_4_messages[2].style.transform = 'translate(-50%, -40%)';
        }

        if (scrollY > sections[4].offsetTop + window.innerHeight * 3.2) {
            gt_4_messages[3].style.opacity = 0;
            gt_4_messages[3].style.visibility = 'hidden';
            gt_4_messages[3].style.transform = 'translate(-50%, -70%)';
        } else if (scrollY > sections[4].offsetTop + window.innerHeight * 2.2) {
            gt_4_messages[3].style.opacity = 1;
            gt_4_messages[3].style.visibility = 'visible';
            gt_4_messages[3].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_4_messages[3].style.opacity = 0;
            gt_4_messages[3].style.visibility = 'hidden';
            gt_4_messages[3].style.transform = 'translate(-50%, -40%)';
        }
    }


    window.addEventListener('scroll', gt_4_animation);

    const stickers = document.querySelectorAll('.gt-sticker-btn')
    const checkedMark = document.querySelectorAll('.gt-checked-mark')
    let checkedSticker = [];
    let username;
    console.log(stickers)

    const juiceMap = {
        'gt-cheer,gt-duty,gt-happy': `juice-1.jpg`,
        'gt-cheer,gt-duty,gt-thanks': 'juice-2.jpg',
        'gt-cheer,gt-duty,gt-hope': 'juice-3.jpg',
        'gt-cheer,gt-compassion,gt-duty': 'juice-4.jpg',
        'gt-duty,gt-happy,gt-thanks': 'juice-5.jpg',
        'gt-duty,gt-happy,gt-hope': 'juice-6.jpg',
        'gt-compassion,gt-duty,gt-happy': 'juice-7.jpg',
        'gt-duty,gt-hope,gt-thanks': 'juice-8.jpg',
        'gt-compassion,gt-duty,gt-thanks': 'juice-9.jpg',
        'gt-compassion,gt-duty,gt-hope': 'juice-10.jpg',
        'gt-cheer,gt-happy,gt-thanks': 'juice-11.jpg',
        'gt-cheer,gt-happy,gt-hope': 'juice-12.jpg',
        'gt-cheer,gt-compassion,gt-happy': 'juice-13.jpg',
        'gt-cheer,gt-hope,gt-thanks': 'juice-14.jpg',
        'gt-cheer,gt-compassion,gt-thanks': 'juice-15.jpg',
        'gt-cheer,gt-compassion,gt-hope': 'juice-16.jpg',
        'gt-happy,gt-hope,gt-thanks': 'juice-17.jpg',
        'gt-compassion,gt-happy,gt-thanks': 'juice-18.jpg',
        'gt-compassion,gt-happy,gt-hope': 'juice-19.jpg',
        'gt-compassion,gt-hope,gt-thanks': 'juice-20.jpg'
    };

    const makeBtn = document.getElementById('gt-make-button');
    const nameInput = document.getElementById('gt-username');
    const juiceFrame = document.getElementById('gt-show-result');
    const juiceImage = document.getElementById('gt-juice-img');

    function makeJuice() {
        makeBtn.addEventListener('click', () => {
            username = nameInput.value;
            const sortedCombo = checkedSticker.slice().sort().join(',');

            if (checkedSticker.length === 3) {
                const result = juiceMap[sortedCombo];
                if (result) {
                    juiceImage.src = `${baseUrl}/img/give-taste/${result}`;
                    juiceFrame.style.opacity = 1;
                    juiceFrame.style.visibility = 'visible';
                } else {
                    console.log('알 수 없는 조합입니다.');
                }
            } else {
                alert('3가지 맛을 선택해주세요!');
            }
        });
    }

    makeJuice();

    function closeJuice() {
        const closeBtn = document.getElementById('gt-show-btn-close')
        closeBtn.addEventListener('click', () => {
            juiceFrame.style.opacity = 0;
            juiceFrame.style.visibility = 'hidden';
        })
    }

    closeJuice();

    function selectedSticker() {
        for (let i = 0; i < stickers.length; i++) {
            stickers[i].addEventListener('click', (e) => {
                // Get the associated input's ID from the label's 'for' attribute
                const id = stickers[i].getAttribute('for');
                const index = checkedSticker.indexOf(id);
                if (index > -1) {
                    // 이미 선택된 경우 → 선택 해제
                    checkedSticker.splice(index, 1);
                    checkedMark[i].style.opacity = 0;
                    checkedMark[i].style.visibility = 'hidden';
                    console.log('removed:', id, checkedSticker);
                } else {
                    if (checkedSticker.length < 3) {
                        checkedMark[i].style.opacity = 1;
                        checkedMark[i].style.visibility = 'visible';
                        checkedSticker.push(id);
                        console.log('added:', id, checkedSticker);
                    } else {
                        console.log('nope');
                    }
                }
            })
        }
    }

    selectedSticker();

    const btn = document.querySelector('.gt-go-to-top');

    function goToTop() {
        btn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // 부드럽게 스크롤
            });
        })
    }

    goToTop();

    function showGoToTopBtn(){
        const scrollY = window.scrollY;
        const triggerSection = document.getElementById('gt-6')
        if(scrollY > triggerSection.offsetTop){
            btn.style.opacity = 1;
            btn.style.visibility = 'visible';
        } else{
            btn.style.opacity = 0;
            btn.style.visibility = 'hidden';
        }
    }

    window.addEventListener('scroll', showGoToTopBtn)

})();