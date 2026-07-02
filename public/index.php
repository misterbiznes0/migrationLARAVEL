---
const name = "Никита";

const skills = [
  "HTML", "CSS", "JavaScript", "PHP", "Laravel", "Python", "Django",
  "SQLite", "Twee", "Google Colab", "GitHub", "Prompt Engineering",
  "AI", "LLM", "РЕД ОС", "1С"
];

const projects = [
  {
    type: "Сайт",
    title: "Как я провёл своё лето",
    site: "https://misterbiznes0.github.io/summer/",
    github: "https://github.com/misterbiznes0/summer",
    tech: ["HTML", "CSS"],
    text: "Персональный веб-проект о летних впечатлениях и событиях. Демонстрирует навыки вёрстки и оформления страниц."
  },
  {
    type: "Веб-проект",
    title: "Моя первая новелла",
    site: "https://misterbiznes0.github.io/twine/twine.html",
    github: "https://github.com/misterbiznes0/twine",
    tech: ["HTML", "Twee"],
    text: "Интерактивная текстовая новелла с выбором действий и ветвлением сюжета."
  },
  {
    type: "Сайт",
    title: "BestGames — маркетплейс игр",
    site: "https://misterbiznes0.github.io/module-a-BestGames/index.html",
    github: "https://github.com/misterbiznes0/module-a-BestGames",
    tech: ["HTML", "CSS", "JavaScript"],
    text: "Концепт маркетплейса для покупки компьютерных игр с каталогом и интерактивными элементами."
  },
  {
    type: "Веб-приложение",
    title: "Интерактивная виртуальная доска",
    site: "https://misterbiznes0.github.io/module-B/",
    github: "https://github.com/misterbiznes0/module-B",
    tech: ["HTML", "CSS", "JavaScript"],
    text: "Веб-приложение для создания заметок и визуальной организации информации."
  },
  {
    type: "Сайт",
    title: "Astra Linux",
    site: "https://misterbiznes0.github.io/astra-linux/index.html",
    github: "https://github.com/misterbiznes0/astra-linux",
    tech: ["HTML", "CSS"],
    text: "Информационный сайт об операционной системе Astra Linux."
  },
  {
    type: "Веб-проект",
    title: "Практика на 1 курсе",
    site: "https://misterbiznes0.github.io/twine-practika/practika.html",
    github: "https://github.com/misterbiznes0/twine-practika",
    tech: ["HTML", "Twee"],
    text: "Интерактивная новелла о прохождении производственной практики на первом курсе."
  },
  {
    type: "Сайт",
    title: "Сайт для колледжа",
    site: "https://misterbiznes0.github.io/collage/",
    github: "https://github.com/misterbiznes0/collage",
    tech: ["HTML", "CSS", "JavaScript"],
    text: "Информационный сайт для колледжа с навигацией и интерактивными элементами."
  },
  {
    type: "Веб-проект",
    title: "Практика на 2 курсе",
    site: "https://misterbiznes0.github.io/libraryTWINE/librarry.html",
    github: "https://github.com/misterbiznes0/libraryTWINE",
    tech: ["HTML", "Twee"],
    text: "Интерактивная новелла о прохождении производственной практики на втором курсе."
  },
  {
    type: "Веб-приложение",
    title: "Сайт библиотеки",
    site: "https://smelyakov-library.ifree.page/",
    github: "https://github.com/misterbiznes0/smelyakov_library",
    tech: ["Laravel", "PHP", "JavaScript", "SQLite"],
    text: "Веб-приложение для библиотеки, созданное во время производственной практики."
  },
  {
    type: "Веб-приложение",
    title: "Генератор документов по практике",
    site: "https://djangonnv.onrender.com/",
    github: "https://github.com/misterbiznes0/djangoNNV",
    tech: ["Django", "Python", "SQLite", "HTML", "CSS", "JavaScript"],
    text: "Веб-приложение для автоматической генерации документов по производственной практике."
  },
  {
    type: "Веб-приложение",
    title: "Миграционная служба",
    site: "https://migrationlaravel.onrender.com/",
    github: "https://github.com/misterbiznes0/migrationLARAVEL",
    tech: ["Laravel", "PHP", "JavaScript", "SQLite"],
    text: "Веб-приложение для автоматизации работы миграционной службы."
  }
];

const aiProjects = [
  {
    title: "Обучение нейронной сети на первом датасете",
    link: "https://colab.research.google.com/drive/1lGUqfK-bfgq4GUZwxD1K5ZJ-K6IquU3c?usp=sharing",
    tech: ["Python", "Google Colab"],
    text: "Учебный проект по обучению нейронной сети для анализа тональности текстовых отзывов. Модель научилась определять, является отзыв положительным или отрицательным."
  },
  {
    title: "Обучение нейронной сети на втором датасете",
    link: "https://colab.research.google.com/drive/1ixjqJIkoEM9NLNrzKLDdN-JfCWHTD5aM?usp=sharing",
    tech: ["Python", "Google Colab"],
    text: "Практический проект по обучению более точной модели нейронной сети для определения позитивных и негативных отзывов на втором датасете."
  }
];

const certificates = [
  ["VR-разработка", "Startexam", "2026", "https://drive.google.com/file/d/17ebgScIuU8ImN5ga83Oe6Lwac8IgDrV3/view"],
  ["Олимпиада по искусственному интеллекту", "Не указана", "2025", "https://drive.google.com/file/d/1CIEmiqlpktIfleHblEpeqBcpL_AJ077V/view"],
  ["Офицер безопасности", "Startexam", "2026", "https://drive.google.com/file/d/1OJjDEwvTPx7CaKPlk7MUohly62UBGLIB/view"],
  ["Нейросетевое искусство", "Startexam", "2026", "https://drive.google.com/file/d/1WzPkrr4tJ3t18qZTm7sE1lEV0BL0SoLv/view"],
  ["Генеративное искусство", "Сбер Университет", "2025", "https://drive.google.com/file/d/1HXX4nnTXyRuItkKgfV4ND2pPrewD4K2r/view"],
  ["Работа с LLM GigaChat", "Сбер Университет", "2025", "https://drive.google.com/file/d/1Ufb5-kas8BcNkMLFS2M1-JFDBucnXEqX/view"],
  ["VR-разработка", "Траектория будущего", "2026", "https://drive.google.com/file/d/1aYfQwaAi9YnZmIZPvYhGx_1o8f7FrE_b/view"],
  ["Офицер безопасности", "Траектория будущего", "2026", "https://drive.google.com/file/d/1QNthPI3Ky_iRilqilw7Y_jNFv2-U7g5L/view"],
  ["Нейросетевое искусство", "Траектория будущего", "2026", "https://drive.google.com/file/d/15q69q6U2e2BvRDrlrGiuJ5P2imGBsDWA/view"],
  ["ИТ-диктант", "ИТ-диктант", "2025", "https://drive.google.com/file/d/1ly7YMTmtRW1-kp3FVUrDtWL4xFH_qjDb/view"],
  ["Администрирование РЕД ОС", "IT Планета", "2026", "https://drive.google.com/file/d/1vjEoRiu3FkIoxbb8r5Z6rMefuN_TlSM_/view"],
  ["Мастерство промптов: работа с текстом", "IT Планета", "2026", "https://drive.google.com/file/d/18XXDzskGMcb6zCD4CL9VxkiXmbLmKa_F/view"],
  ["Мастерство промптов: работа с изображениями", "IT Планета", "2026", "https://drive.google.com/file/d/1rSP-v4r4eXePIWxJRNlI9gjssnVdLPnA/view"],
  ["Информационная безопасность", "IT Планета", "2026", "https://drive.google.com/file/d/1b4EWk3507UTDu-q7AmMbKdMzRUWAwi7Z/view"],
  ["1С: Пропуск", "1С", "2026", "https://drive.google.com/file/d/1KcRwIiH3196eW2-wMqbZpHSJw57FMK2o/view"]
];
---

<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <title>{name} — портфолио</title>

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    html { scroll-behavior: smooth; }

    body {
      font-family: Arial, sans-serif;
      color: #fff;
      background:
        radial-gradient(circle at 20% 20%, rgba(37,99,235,.35), transparent 28%),
        radial-gradient(circle at 80% 10%, rgba(14,165,233,.22), transparent 25%),
        linear-gradient(180deg, #020617, #0f172a 55%, #020617);
      min-height: 100vh;
      overflow-x: hidden;
    }

    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background-image:
        radial-gradient(#fff 1px, transparent 1px),
        radial-gradient(#60a5fa 1px, transparent 1px);
      background-size: 90px 90px, 150px 150px;
      background-position: 0 0, 40px 70px;
      opacity: .35;
      pointer-events: none;
      animation: stars 25s linear infinite;
    }

    @keyframes stars {
      from { transform: translateY(0); }
      to { transform: translateY(120px); }
    }

    .container {
      width: min(1150px, 92%);
      margin: auto;
      position: relative;
      z-index: 1;
    }

    header {
      padding: 24px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      color: #93c5fd;
      font-weight: 700;
    }

    nav a {
      color: #cbd5e1;
      text-decoration: none;
      margin-left: 16px;
      font-size: 15px;
    }

    nav a:hover { color: #38bdf8; }

    .hero {
      min-height: 78vh;
      display: flex;
      align-items: center;
    }

    .badge {
      display: inline-block;
      padding: 9px 16px;
      border-radius: 999px;
      background: rgba(15,23,42,.75);
      border: 1px solid rgba(147,197,253,.25);
      color: #bfdbfe;
      margin-bottom: 22px;
    }

    h1 {
      font-size: clamp(44px, 9vw, 92px);
      line-height: 1;
      margin-bottom: 20px;
      background: linear-gradient(90deg, #fff, #38bdf8, #818cf8);
      -webkit-background-clip: text;
      color: transparent;
    }

    .hero p {
      max-width: 760px;
      color: #cbd5e1;
      font-size: 22px;
      line-height: 1.6;
    }

    section { margin-bottom: 75px; }

    h2 {
      font-size: 34px;
      color: #38bdf8;
      margin-bottom: 25px;
    }

    .glass {
      background: rgba(15,23,42,.72);
      border: 1px solid rgba(147,197,253,.22);
      border-radius: 26px;
      padding: 28px;
      box-shadow: 0 0 45px rgba(37,99,235,.18);
      backdrop-filter: blur(12px);
    }

    .about-text {
      color: #dbeafe;
      font-size: 18px;
      line-height: 1.8;
    }

    .stats, .contacts, .skills, .grid {
      display: grid;
      gap: 18px;
    }

    .stats {
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      margin-top: 25px;
    }

    .stat {
      padding: 22px;
      border-radius: 20px;
      background: rgba(30,41,59,.8);
      border: 1px solid rgba(96,165,250,.22);
      text-align: center;
    }

    .stat strong {
      font-size: 34px;
      color: #60a5fa;
      display: block;
    }

    .contacts {
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }

    .contact-card {
      display: flex;
      align-items: center;
      gap: 18px;
      text-decoration: none;
      color: white;
      background: rgba(15,23,42,.82);
      border: 1px solid rgba(96,165,250,.25);
      border-radius: 20px;
      padding: 24px;
      transition: .3s;
    }

    .emoji { font-size: 34px; }

    .contact-card div {
      display: flex;
      flex-direction: column;
    }

    .contact-card strong {
      color: #60a5fa;
      margin-bottom: 4px;
    }

    .contact-card span {
      color: #cbd5e1;
      font-size: 15px;
    }

    .skills {
      grid-template-columns: repeat(auto-fit, minmax(135px, 1fr));
    }

    .skill {
      padding: 17px;
      text-align: center;
      border-radius: 16px;
      background: rgba(30,41,59,.85);
      border: 1px solid rgba(96,165,250,.25);
      font-weight: 700;
      transition: .3s;
    }

    .tabs {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 22px;
    }

    .tab {
      border: 1px solid rgba(96,165,250,.3);
      background: rgba(15,23,42,.85);
      color: #dbeafe;
      padding: 10px 18px;
      border-radius: 999px;
      cursor: pointer;
    }

    .tab.active {
      background: #2563eb;
      color: #fff;
    }

    .grid {
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }

    .card {
      background: rgba(15,23,42,.82);
      border: 1px solid rgba(96,165,250,.25);
      border-radius: 22px;
      padding: 22px;
      transition: .3s;
    }

    .card:hover, .contact-card:hover, .skill:hover {
      transform: translateY(-5px);
      border-color: #38bdf8;
      box-shadow: 0 0 30px rgba(56,189,248,.18);
    }

    .type {
      color: #60a5fa;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .card h3 {
      font-size: 21px;
      margin-bottom: 10px;
    }

    .card p {
      color: #cbd5e1;
      line-height: 1.6;
      margin-bottom: 16px;
    }

    .tech {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 18px;
    }

    .tech span {
      font-size: 13px;
      padding: 6px 10px;
      background: rgba(37,99,235,.25);
      border-radius: 999px;
      color: #bfdbfe;
    }

    .buttons {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .btn {
      display: inline-block;
      color: white;
      text-decoration: none;
      background: #2563eb;
      padding: 10px 14px;
      border-radius: 12px;
      font-size: 14px;
    }

    .btn.secondary {
      background: rgba(30,41,59,.9);
      border: 1px solid rgba(96,165,250,.3);
    }

    footer {
      text-align: center;
      padding: 40px 0;
      color: #94a3b8;
    }

    @media (max-width: 720px) {
      header {
        flex-direction: column;
        gap: 16px;
      }

      nav {
        text-align: center;
      }

      nav a {
        margin: 0 7px 8px;
        display: inline-block;
      }

      .hero {
        min-height: 68vh;
        text-align: center;
      }

      .hero p {
        font-size: 18px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <header>
      <div class="logo">★ {name}</div>
      <nav>
        <a href="#about">Обо мне</a>
        <a href="#contacts">Контакты</a>
        <a href="#skills">Навыки</a>
        <a href="#projects">Проекты</a>
        <a href="#ai">Google Colab</a>
        <a href="#certificates">Сертификаты</a>
      </nav>
    </header>

    <main>
      <section class="hero">
        <div>
          <span class="badge">Учусь на веб-разработчика</span>
          <h1>{name}</h1>
          <p>
            Я изучаю веб-разработку и создаю сайты, интерактивные проекты,
            веб-приложения и AI-проекты в Google Colab. Работаю с HTML, CSS,
            JavaScript, PHP, Laravel, Python, Django и базами данных.
          </p>
        </div>
      </section>

      <section id="about" class="glass">
        <h2>Обо мне</h2>
        <p class="about-text">
          Сейчас я учусь на веб-разработчика и развиваюсь как frontend и backend-разработчик.
          За время обучения я создал учебные сайты, интерактивные новеллы, веб-приложения
          на Laravel и Django, а также проекты по обучению нейронных сетей в Google Colab.
        </p>

        <div class="stats">
          <div class="stat"><strong>{projects.length}</strong>веб-проектов</div>
          <div class="stat"><strong>{aiProjects.length}</strong>AI-проекта</div>
          <div class="stat"><strong>{certificates.length}</strong>сертификатов</div>
          <div class="stat"><strong>2+</strong>года обучения</div>
        </div>
      </section>

      <section id="contacts">
        <h2>Контакты</h2>
        <div class="contacts">
          <a href="mailto:nnaumov2394@gmail.com" class="contact-card">
            <span class="emoji">📧</span>
            <div>
              <strong>Email</strong>
              <span>nnaumov2394@gmail.com</span>
            </div>
          </a>

          <a href="https://github.com/misterbiznes0" target="_blank" class="contact-card">
            <span class="emoji">💻</span>
            <div>
              <strong>GitHub</strong>
              <span>github.com/misterbiznes0</span>
            </div>
          </a>
        </div>
      </section>

      <section id="skills">
        <h2>Навыки</h2>
        <div class="skills">
          {skills.map(skill => <div class="skill">{skill}</div>)}
        </div>
      </section>

      <section id="projects">
        <h2>Проекты</h2>

        <div class="tabs">
          <button class="tab active" data-filter="Все">Все</button>
          <button class="tab" data-filter="Сайт">Сайты</button>
          <button class="tab" data-filter="Веб-приложение">Веб-приложения</button>
          <button class="tab" data-filter="Веб-проект">Веб-проекты</button>
        </div>

        <div class="grid">
          {projects.map(project => (
            <article class="card project-card" data-type={project.type}>
              <div class="type">{project.type}</div>
              <h3>{project.title}</h3>
              <p>{project.text}</p>

              <div class="tech">
                {project.tech.map(item => <span>{item}</span>)}
              </div>

              <div class="buttons">
                <a class="btn" href={project.site} target="_blank">Открыть сайт</a>
                <a class="btn secondary" href={project.github} target="_blank">GitHub</a>
              </div>
            </article>
          ))}
        </div>
      </section>

      <section id="ai">
        <h2>Google Colab / AI-проекты</h2>

        <div class="grid">
          {aiProjects.map(project => (
            <article class="card">
              <div class="type">Google Colab</div>
              <h3>{project.title}</h3>
              <p>{project.text}</p>

              <div class="tech">
                {project.tech.map(item => <span>{item}</span>)}
              </div>

              <div class="buttons">
                <a class="btn" href={project.link} target="_blank">Открыть Colab</a>
              </div>
            </article>
          ))}
        </div>
      </section>

      <section id="certificates">
        <h2>Сертификаты и достижения</h2>

        <div class="grid">
          {certificates.map(cert => (
            <article class="card">
              <div class="type">{cert[2]}</div>
              <h3>{cert[0]}</h3>
              <p>{cert[1]}</p>
              <div class="buttons">
                <a class="btn" href={cert[3]} target="_blank">Открыть сертификат</a>
              </div>
            </article>
          ))}
        </div>
      </section>
    </main>

    <footer>
      © 2026 {name}. Сайт-портфолио.
    </footer>
  </div>

  <script>
    const tabs = document.querySelectorAll(".tab");
    const cards = document.querySelectorAll(".project-card");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((item) => item.classList.remove("active"));
        tab.classList.add("active");

        const filter = tab.getAttribute("data-filter");

        cards.forEach((card) => {
          const type = card.getAttribute("data-type");

          if (filter === "Все" || type === filter) {
            card.setAttribute("style", "display: block;");
          } else {
            card.setAttribute("style", "display: none;");
          }
        });
      });
    });
  </script>
</body>
</html>