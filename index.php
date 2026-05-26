<?php
$cv = [
  "nombre" => "Alizon Rosales",
  "titulo" => "Desarrolladora Web Full Stack",
  "email" => "rovaalemi.es@gamil.com",
  "github" => "https://github.com/rovalemi",
  "sobre_mi" => "Apasionado por el desarrollo web, el aprendizaje continuo y construir cosas que funcionen de verdad. Actualmente formandonme en entornos servidor, CI/CD y DevOps.",
  "experiencia" => [
    ["puesto" => "Practicas Desarrollo Web", "empresa" => "Nester", "periodo" => "2025 - 2026", "descripcion" => "Desarrollo de aplicaciones web con PHP, React y despliegue automatizado con Jenkins."],
    ["puesto" => "Proyecto Personal", "empresa" => "GitHub", "periodo" => "2024 - presente", "descripcion" => "CV online con pipeline CI/CD, CDN Cloudflare e imagenes optimizadas con ImageKit."]
  ],
  "educacion" => [
    ["titulo" => "Desarrollo de Aplicaciones Web", "centro" => "Monlau FP", "anno" => "2024 - 2026"],
    ["titulo" => "Bachillerato Tecnologico", "centro" => "IES Ejemplo", "anno" => "2022 - 2024"]
  ],
  "habilidades" => ["PHP", "React", "JavaScript", "HTML/CSS", "Git", "Docker", "Jenkins", "Linux", "Apache", "MySQL"],
  "foto" => "https://ik.imagekit.io/tuusuario/foto.jpg?tr=w-300,h-300,c-maintain_ratio,f-webp,q-80"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $cv['nombre'] ?> - CV</title>
  <style>
    :root {
      --bg:        #0d1117;
      --surface:   #161b22;
      --surface2:  #1c2333;
      --border:    #2a3a4a;
      --accent:    #3b82c4;
      --accent2:   #2ecc8a;
      --text:      #cdd9e5;
      --textmuted: #768a9a;
      --tag-bg:    #1a2f45;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { background: var(--bg); color: var(--text); font-family: 'Segoe UI', system-ui, sans-serif; min-height: 100vh; }
    header {
      background: linear-gradient(135deg, #0d1f35 0%, #0d2a40 60%, #0a1e30 100%);
      border-bottom: 1px solid var(--border);
      padding: 3rem 2rem 2.5rem;
      display: flex; align-items: center; gap: 2rem; flex-wrap: wrap;
    }
    header img { width: 110px; height: 110px; border-radius: 50%; border: 3px solid var(--accent); object-fit: cover; box-shadow: 0 0 24px rgba(59,130,196,0.35); }
    header .info h1 { font-size: 2rem; color: #e6edf3; letter-spacing: -0.5px; }
    header .info p.titulo { color: var(--accent2); text-transform: uppercase; font-size: 0.85rem; margin-top: 4px; letter-spacing: 1px; }
    header .info .contacto { margin-top: 0.8rem; display: flex; gap: 1.2rem; flex-wrap: wrap; }
    header .info .contacto a { color: var(--textmuted); text-decoration: none; font-size: 0.9rem; transition: color .2s; }
    header .info .contacto a:hover { color: var(--accent); }
    main { max-width: 900px; margin: 0 auto; padding: 2.5rem 1.5rem; display: grid; grid-template-columns: 1fr 300px; gap: 2rem; }
    @media (max-width: 700px) { main { grid-template-columns: 1fr; } header { justify-content: center; text-align: center; } header .info .contacto { justify-content: center; } }
    section { margin-bottom: 2rem; }
    h2 { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px; color: var(--accent); border-bottom: 1px solid var(--border); padding-bottom: 0.5rem; margin-bottom: 1.2rem; }
    .sobre-mi p { color: var(--textmuted); line-height: 1.75; font-size: 0.95rem; }
    .item { background: var(--surface); border: 1px solid var(--border); border-radius: 8px; padding: 1.1rem 1.3rem; margin-bottom: 1rem; transition: border-color .2s; }
    .item:hover { border-color: var(--accent); }
    .item .head { display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem; flex-wrap: wrap; }
    .item h3 { font-size: 0.95rem; color: #e6edf3; }
    .item .empresa { color: var(--accent2); font-size: 0.82rem; margin-top: 2px; }
    .item .periodo { color: var(--textmuted); font-size: 0.8rem; white-space: nowrap; }
    .item p { color: var(--textmuted); font-size: 0.88rem; margin-top: 0.5rem; line-height: 1.6; }
    .tags { display: flex; flex-wrap: wrap; gap: 0.5rem; }
    .tag { background: var(--tag-bg); color: var(--accent); border: 1px solid var(--accent); border-radius: 4px; padding: 0.3rem 0.7rem; font-size: 0.8rem; }
    aside section { background: var(--surface); border: 1px solid var(--border); border-radius: 8px; padding: 1.2rem; margin-bottom: 1.2rem; }
    footer { text-align: center; padding: 1.5rem; color: var(--textmuted); font-size: 0.8rem; border-top: 1px solid var(--border); }
    footer span { color: var(--accent2); }
  </style>
</head>
<body>
<header>
  <img src="<?= $cv['foto'] ?>" alt="Foto de perfil" onerror="this.style.display='none'">
  <div class="info">
    <h1><?= $cv['nombre'] ?></h1>
    <p class="titulo"><?= $cv['titulo'] ?></p>
    <div class="contacto">
      <a href="mailto:<?= $cv['email'] ?>">✉ <?= $cv['email'] ?></a>
      <a href="<?= $cv['github'] ?>" target="_blank">⌥ GitHub</a>
    </div>
  </div>
</header>
<main>
  <div class="col-main">
    <section class="sobre-mi">
      <h2>Sobre mi</h2>
      <p><?= $cv['sobre_mi'] ?></p>
    </section>
    <section>
      <h2>Experiencia</h2>
      <?php foreach ($cv['experiencia'] as $exp): ?>
      <div class="item">
        <div class="head">
          <div><h3><?= $exp['puesto'] ?></h3><p class="empresa"><?= $exp['empresa'] ?></p></div>
          <span class="periodo"><?= $exp['periodo'] ?></span>
        </div>
        <p><?= $exp['descripcion'] ?></p>
      </div>
      <?php endforeach; ?>
    </section>
    <section>
      <h2>Educacion</h2>
      <?php foreach ($cv['educacion'] as $edu): ?>
      <div class="item">
        <div class="head">
          <div><h3><?= $edu['titulo'] ?></h3><p class="empresa"><?= $edu['centro'] ?></p></div>
          <span class="periodo"><?= $edu['anno'] ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </section>
  </div>
  <aside>
    <section>
      <h2>Habilidades</h2>
      <div class="tags">
        <?php foreach ($cv['habilidades'] as $h): ?>
        <span class="tag"><?= $h ?></span>
        <?php endforeach; ?>
      </div>
    </section>
    <section>
      <h2>Stack DevOps</h2>
      <div class="tags">
        <span class="tag">Jenkins</span>
        <span class="tag">Docker</span>
        <span class="tag">GitHub Actions</span>
        <span class="tag">Cloudflare CDN</span>
        <span class="tag">ImageKit</span>
        <span class="tag">ngrok</span>
      </div>
    </section>
    <section>
      <h2>Pipeline CI/CD</h2>
      <p style="color:var(--textmuted);font-size:0.85rem;line-height:1.7">
        git push &rarr; GitHub Webhook &rarr; Jenkins &rarr; Apache<br>
        <span style="color:var(--accent2)">&#10003; Deploy automatico</span>
      </p>
    </section>
  </aside>
</main>
<footer>Desplegado automaticamente con <span>Jenkins + Cloudflare</span> · <?= date('Y') ?></footer>
</body>
</html>
