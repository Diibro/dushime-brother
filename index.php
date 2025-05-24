
<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: false }" :class="{ 'dark': darkMode }" class="transition duration-500">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dushime Brother Portfolio</title>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-white dark:bg-gray-900 text-black dark:text-white">
  <div class="p-6 max-w-4xl mx-auto space-y-6">
    <div class="flex justify-between items-center">
      <h1 class="text-3xl font-bold">Dushime Brother</h1>
      <button @click="darkMode = !darkMode" class="px-4 py-2 bg-gray-200 dark:bg-gray-800 rounded">
        Toggle Theme
      </button>
    </div>
    <p>Rwanda | (+250) 780795232 | <a href="#" class="text-blue-500">LinkedIn</a> | <a href="#" class="text-blue-500">GitHub</a> | brother.dushime@gmail.com</p>
    <img src="img/profile.jpg" class="rounded-full w-32 h-32 mt-4" alt="Profile">
    
    <section>
      <h2 class="text-2xl font-semibold mt-6">Bio</h2>
      <p>
        I am a full stack web developer with in-depth experience in front-end development.
        I create websites that help organizations address business challenges and meet their needs.
        I manage everything from website navigation and layout to a company's web hosting and security architecture.
      </p>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mt-6">Work Experience</h2>
      <ul class="list-disc ml-6">
        <li><strong>Huza250 Ltd (Remote)</strong>, Sept 2022 – April 2024<br>
        - Developed marketing web applications with React.js and Express.js<br>
        - Implemented backend using Node.js, SQL, and Express<br>
        - Developed optimized SQL schemas</li>
        <li><strong>Ikuzo Technologies Ltd (Remote)</strong>, Sept 2020 – Sept 2022<br>
        - Developed websites and portfolios for clients<br>
        - Improved responsiveness and trained interns</li>
      </ul>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mt-6">Education</h2>
      <p><strong>Adventist University of Central Africa</strong>, Sept 2021 – Sept 2024<br>
      - Software Engineering with skills in software design, SQL, and RDBMS</p>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mt-6">Technical Skills</h2>
      <p>Java, JavaScript, Node.js, Python, C/C++, Go, TypeScript, NestJS, ExpressJS, Spring Boot, Django, .NET,
      React, Next, Redux, HTML5, CSS3, Tailwind CSS, WordPress, Figma, D3.js, Chart.js, SQL, MySQL, PostgreSQL, SQLite, MongoDB</p>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mt-6">Projects</h2>
      <ul class="list-disc ml-6">
        <li><strong>Click Rwanda:</strong> Marketing platform for businesses using React, Redux, Express, MySQL</li>
        <li><strong>Visit My Venue:</strong> WordPress-based platform for discovering visit-worthy places</li>
        <li><strong>Smart Study App:</strong> JavaFX app for student course management with SQLite</li>
      </ul>
    </section>
  </div>
</body>
</html>
