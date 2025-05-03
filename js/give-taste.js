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
        if (scrollY > sections[2].offsetTop + window.innerHeight * 0.5) {
            gt_2_messages[0].style.opacity = 0;
            gt_2_messages[0].style.visibility = 'hidden';
            gt_2_messages[0].style.transform = 'translate(-50%, -80%)';
        } else if (scrollY > sections[2].offsetTop - window.innerHeight * 0.5) {
            gt_2_messages[0].style.opacity = 1;
            gt_2_messages[0].style.visibility = 'visible';
            gt_2_messages[0].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_2_messages[0].style.opacity = 0;
            gt_2_messages[0].style.visibility = 'hidden';
            gt_2_messages[0].style.transform = 'translate(-50%, -20%)';
        }

        if (scrollY > sections[2].offsetTop + window.innerHeight * 1.5) {
            gt_2_messages[1].style.opacity = 0;
            gt_2_messages[1].style.visibility = 'hidden';
            gt_2_messages[1].style.transform = 'translate(-50%, -80%)';
        } else if (scrollY > sections[2].offsetTop + window.innerHeight * 0.5) {
            gt_2_messages[1].style.opacity = 1;
            gt_2_messages[1].style.visibility = 'visible';
            gt_2_messages[1].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_2_messages[1].style.opacity = 0;
            gt_2_messages[1].style.visibility = 'hidden';
            gt_2_messages[1].style.transform = 'translate(-50%, -20%)';
        }

        if (scrollY > sections[2].offsetTop + window.innerHeight * 2.5) {
            gt_2_messages[2].style.opacity = 0;
            gt_2_messages[2].style.visibility = 'hidden';
            gt_2_messages[2].style.transform = 'translate(-50%, -80%)';
        } else if (scrollY > sections[2].offsetTop + window.innerHeight * 1.5) {
            gt_2_messages[2].style.opacity = 1;
            gt_2_messages[2].style.visibility = 'visible';
            gt_2_messages[2].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_2_messages[2].style.opacity = 0;
            gt_2_messages[2].style.visibility = 'hidden';
            gt_2_messages[2].style.transform = 'translate(-50%, -20%)';
        }


    }


    window.addEventListener('scroll', gt_2_animation);

    function gt_4_animation() {
        const scrollY = window.scrollY;
        const gt_4_messages = document.querySelectorAll('#gt-4 .gt-message')
        if (scrollY > sections[4].offsetTop + window.innerHeight * 0.5) {
            gt_4_messages[0].style.opacity = 0;
            gt_4_messages[0].style.visibility = 'hidden';
            gt_4_messages[0].style.transform = 'translate(-50%, -80%)';
        } else if (scrollY > sections[4].offsetTop - window.innerHeight * 0.5) {
            gt_4_messages[0].style.opacity = 1;
            gt_4_messages[0].style.visibility = 'visible';
            gt_4_messages[0].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_4_messages[0].style.opacity = 0;
            gt_4_messages[0].style.visibility = 'hidden';
            gt_4_messages[0].style.transform = 'translate(-50%, -20%)';
        }

        if (scrollY > sections[4].offsetTop + window.innerHeight * 1.5) {
            gt_4_messages[1].style.opacity = 0;
            gt_4_messages[1].style.visibility = 'hidden';
            gt_4_messages[1].style.transform = 'translate(-50%, -80%)';
        } else if (scrollY > sections[4].offsetTop + window.innerHeight * 0.5) {
            gt_4_messages[1].style.opacity = 1;
            gt_4_messages[1].style.visibility = 'visible';
            gt_4_messages[1].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_4_messages[1].style.opacity = 0;
            gt_4_messages[1].style.visibility = 'hidden';
            gt_4_messages[1].style.transform = 'translate(-50%, -20%)';
        }

        if (scrollY > sections[4].offsetTop + window.innerHeight * 2.5) {
            gt_4_messages[2].style.opacity = 0;
            gt_4_messages[2].style.visibility = 'hidden';
            gt_4_messages[2].style.transform = 'translate(-50%, -80%)';
        } else if (scrollY > sections[4].offsetTop + window.innerHeight * 1.5) {
            gt_4_messages[2].style.opacity = 1;
            gt_4_messages[2].style.visibility = 'visible';
            gt_4_messages[2].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_4_messages[2].style.opacity = 0;
            gt_4_messages[2].style.visibility = 'hidden';
            gt_4_messages[2].style.transform = 'translate(-50%, -20%)';
        }

        if (scrollY > sections[4].offsetTop + window.innerHeight * 3.5) {
            gt_4_messages[3].style.opacity = 0;
            gt_4_messages[3].style.visibility = 'hidden';
            gt_4_messages[3].style.transform = 'translate(-50%, -80%)';
        } else if (scrollY > sections[4].offsetTop + window.innerHeight * 2.5) {
            gt_4_messages[3].style.opacity = 1;
            gt_4_messages[3].style.visibility = 'visible';
            gt_4_messages[3].style.transform = 'translate(-50%, -50%)';
        } else {
            gt_4_messages[3].style.opacity = 0;
            gt_4_messages[3].style.visibility = 'hidden';
            gt_4_messages[3].style.transform = 'translate(-50%, -20%)';
        }
    }


    window.addEventListener('scroll', gt_4_animation);




})();