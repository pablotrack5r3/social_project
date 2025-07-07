 <section class="main">
  <section class="container">
    <section class="iniciativa-social">
      <div class="text-content">
        <div class="badge">Iniciativa Social</div>
        <h1>Impulsando el cambio social a través de la colaboración comunitaria</h1>
        <p>Únete a nuestro proyecto para mejorar las condiciones de vida en comunidades vulnerables. Creemos en el poder de la acción colectiva para generar un impacto positivo real.</p>
        <a href="#" class="cta-button">Saber más</a>
      </div>
      <div class="image-content">
        <img src="https://img.freepik.com/free-vector/community-concept-illustration_114360-7800.jpg" alt="Proyecto social ilustración">
      </div>
    </section>

    <section class="features">
      <div class="feature-box">
        <div class="icon">🌱</div>
        <h3>Educación Comunitaria</h3>
        <p>Capacitaciones y talleres para empoderar a las personas a través del conocimiento y la formación práctica.</p>
      </div>
      <div class="feature-box">
        <div class="icon">🏥</div>
        <h3>Salud y Bienestar</h3>
        <p>Brindamos acceso a campañas de salud, atención básica y promoción del autocuidado en zonas con alta necesidad.</p>
      </div>
      <div class="feature-box">
        <div class="icon">🤝</div>
        <h3>Voluntariado Activo</h3>
        <p>Fomentamos la participación ciudadana mediante actividades colaborativas y voluntariado con impacto directo.</p>
      </div>
    </section>
  </section>
</section>

<style> 
    .main { 
      background-color: color-mix(in srgb, #5d57f4 5%, transparent 95%);
    }

    .iniciativa-social {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 60px 80px;
      flex-wrap: wrap;
    }

    .text-content {
      max-width: 500px;
    }

    .badge {
      display: inline-block;
      padding: 8px 16px;
      background-color: #e0e7ff;
      color: #3f51b5;
      border-radius: 20px;
      font-weight: 600;
      font-size: 14px;
      margin-bottom: 16px;
    }

    h1 {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #1a237e;
    }

    p {
      font-size: 16px;
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .cta-button {
      background-color: #3f51b5;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      text-decoration: none;
    }

    .image-content img {
      max-width: 500px;
      width: 100%;
      border-radius: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .image-content img:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .features {
      display: flex;
      justify-content: center;
      gap: 24px;
      padding: 40px 80px;
      flex-wrap: wrap;
    }

    .feature-box {
      background-color: white;
      padding: 24px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      flex: 1;
      min-width: 15.625rem;
    }

    .feature-box h3 {
      font-size: 18px;
      margin-top: 12px;
      color: #1a237e;
    }

    .feature-box p {
      font-size: 14px;
      color: #555;
    }

    .feature-box .icon {
      font-size: 32px;
      color: #3f51b5;
    }

</style>
