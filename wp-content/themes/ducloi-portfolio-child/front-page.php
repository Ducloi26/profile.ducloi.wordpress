<?php get_header(); ?>

<div id="cur"></div>
<div id="cur2"></div>

<nav id="nav">
  <a class="nav-logo" href="#hero">PDL</a>
  <ul class="nav-links">
    <li><a href="#about">Về tôi</a></li>
    <li><a href="#skills">Kỹ năng</a></li>
    <li><a href="#experience">Kinh nghiệm</a></li>
    <li><a href="#projects">Dự án</a></li>
    <li><a href="#education">Chứng chỉ</a></li>
    <li><a href="#contact">Liên hệ</a></li>
  </ul>
  <a class="nav-cta" href="#contact">Liên hệ ngay</a>
</nav>

<section id="hero">
  <div class="hero-glow"></div>
  <div class="hero-glow2"></div>
  <div class="hero-grid"></div>

  <div class="hero-inner">
    <div class="hero-container">
      <div class="hero-left">
        <div class="hero-badge">
          <span class="dot"></span>Sẵn sàng nhận dự án mới
        </div>

        <h1 class="hero-name">
          Phan <span class="line2"> Đức Lợi</span>
        </h1>

        <p class="hero-role">
          Full-Stack Developer &amp; <span>Software Engineer</span>
        </p>

        <p class="hero-desc">
          Tôi xây dựng những sản phẩm kỹ thuật số hiệu suất cao — từ kiến trúc backend đến giao diện người dùng tinh tế.
          Đam mê code sạch, giải pháp sáng tạo và trải nghiệm người dùng xuất sắc.
        </p>

        <div class="hero-btns">
          <a class="btn-gold" href="#projects">Xem dự án</a>
          <a class="btn-outline" href="#contact">Kết nối với tôi</a>
        </div>
      </div>

      <div class="hero-right">
        <div class="hero-image-wrap">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/real1.jpg" alt="Phan Đức Lợi">
        </div>
      </div>
    </div>

    <div class="hero-metrics">
      <div class="metric">
        <div class="metric-n">1+</div>
        <div class="metric-l">Năm KN</div>
      </div>
      <div class="metric">
        <div class="metric-n">10+</div>
        <div class="metric-l">Dự án</div>
      </div>
      <div class="metric">
        <div class="metric-n">15+</div>
        <div class="metric-l">Khách hàng</div>
      </div>
    </div>

    <div class="scroll-hint">
      <div class="scroll-bar"></div>
      <span class="scroll-lbl">Scroll</span>
    </div>
  </div>
</section>

<section id="about">
  <div class="about-left reveal">
    <p class="sec-eyebrow">01 — Về tôi</p>
    <h2 class="sec-h">Lập trình không chỉ là công việc,<br>đó là <em>nghệ thuật</em></h2>

    <p class="about-p">
      Xin chào! Tôi là <strong>Phan Đức Lợi</strong>, một Software Engineer đam mê tạo ra những giải pháp công nghệ có giá trị thực tiễn.
      Tôi chuyên về phát triển ứng dụng web và mobile, với tư duy sản phẩm và khả năng giải quyết vấn đề phức tạp.
    </p>

    <p class="about-p">
      Với nền tảng vững chắc về cả frontend lẫn backend, tôi luôn hướng tới việc viết code có cấu trúc rõ ràng, dễ bảo trì và có khả năng mở rộng.
      Tôi thích làm việc trong các môi trường năng động, nơi sáng tạo và kỹ thuật cùng gặp nhau.
    </p>

    <p class="about-p">
      Ngoài công việc, tôi quan tâm đến xu hướng AI, đóng góp cho các dự án open-source và chia sẻ kiến thức trong cộng đồng lập trình viên Việt Nam.
    </p>

    <blockquote class="about-quote">
      "Code tốt không chỉ chạy đúng — nó còn phải dễ đọc, dễ hiểu và truyền cảm hứng cho người đến sau."
    </blockquote>
  </div>

  <div class="about-right reveal reveal-delay-2">
    <div class="profile-card">
      <div class="profile-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/avatar.jpg" alt="Phan Đức Lợi">
      </div>

      <div class="profile-meta">
        <div class="profile-name">Phan Đức Lợi</div>
        <div class="profile-title">Full-Stack Developer</div>

        <div class="meta-grid">
          <div class="meta-item">
            <div class="meta-k">Vị trí</div>
            <div class="meta-v">TP. Buôn Ma Thuột</div>
          </div>

          <div class="meta-item">
            <div class="meta-k">Trình độ</div>
            <div class="meta-v">Fresher</div>
          </div>

          <div class="meta-item">
            <div class="meta-k">Ngôn ngữ</div>
            <div class="meta-v">VI / EN</div>
          </div>

          <div class="meta-item">
            <div class="meta-k">Trạng thái</div>
            <div class="meta-v" style="color:var(--green)">● Sẵn sàng</div>
          </div>

          <div class="meta-item">
            <div class="meta-k">Chuyên môn</div>
            <div class="meta-v">Web / Mobile</div>
          </div>

          <div class="meta-item">
            <div class="meta-k">Làm việc</div>
            <div class="meta-v">Full-time / Remote</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="skills">
  <div class="skills-top reveal">
    <div>
      <p class="sec-eyebrow">02 — Kỹ năng</p>
      <h2 class="sec-h">Công cụ &amp; <em>Chuyên môn</em></h2>
    </div>
    <p class="skills-intro">
      Tôi liên tục cập nhật kỹ năng để theo kịp xu hướng công nghệ hiện đại, từ kiến trúc cloud đến các framework mới nhất.
    </p>
  </div>

  <div class="skill-cats">
    <div class="skill-cat reveal">
      <span class="skill-cat-icon">⚡</span>
      <div class="skill-cat-name">Frontend</div>
      <p class="skill-cat-desc">Xây dựng giao diện người dùng hiệu suất cao, đẹp mắt và dễ tiếp cận.</p>
      <div class="tags">
        <span class="tag">React</span>
        <span class="tag">Next.js</span>
        <span class="tag">TypeScript</span>
        <span class="tag">Vue.js</span>
        <span class="tag">Tailwind</span>
        <span class="tag">Figma</span>
      </div>
    </div>

    <div class="skill-cat reveal reveal-delay-1">
      <span class="skill-cat-icon">🔧</span>
      <div class="skill-cat-name">Backend</div>
      <p class="skill-cat-desc">Thiết kế API mạnh mẽ, kiến trúc microservices và hệ thống có khả năng mở rộng.</p>
      <div class="tags">
        <span class="tag">Node.js</span>
        <span class="tag">Python</span>
        <span class="tag">FastAPI</span>
        <span class="tag">PostgreSQL</span>
        <span class="tag">MongoDB</span>
        <span class="tag">Redis</span>
      </div>
    </div>

    <div class="skill-cat reveal reveal-delay-2">
      <span class="skill-cat-icon">☁️</span>
      <div class="skill-cat-name">DevOps &amp; Cloud</div>
      <p class="skill-cat-desc">Triển khai, giám sát hệ thống và tự động hoá quy trình phát triển phần mềm.</p>
      <div class="tags">
        <span class="tag">Docker</span>
        <span class="tag">Kubernetes</span>
        <span class="tag">AWS</span>
        <span class="tag">CI/CD</span>
        <span class="tag">Nginx</span>
        <span class="tag">Linux</span>
      </div>
    </div>
  </div>

  <div class="skill-bars reveal">
    <div class="bar-item">
      <div class="bar-header">
        <span class="bar-name">JavaScript / TypeScript</span>
        <span class="bar-pct">92%</span>
      </div>
      <div class="bar-track"><div class="bar-fill" data-w="92"></div></div>
    </div>

    <div class="bar-item">
      <div class="bar-header">
        <span class="bar-name">React / Next.js</span>
        <span class="bar-pct">88%</span>
      </div>
      <div class="bar-track"><div class="bar-fill" data-w="88"></div></div>
    </div>

    <div class="bar-item">
      <div class="bar-header">
        <span class="bar-name">Node.js / Python</span>
        <span class="bar-pct">85%</span>
      </div>
      <div class="bar-track"><div class="bar-fill" data-w="85"></div></div>
    </div>

    <div class="bar-item">
      <div class="bar-header">
        <span class="bar-name">Database Design</span>
        <span class="bar-pct">80%</span>
      </div>
      <div class="bar-track"><div class="bar-fill" data-w="80"></div></div>
    </div>

    <div class="bar-item">
      <div class="bar-header">
        <span class="bar-name">Docker / DevOps</span>
        <span class="bar-pct">75%</span>
      </div>
      <div class="bar-track"><div class="bar-fill" data-w="75"></div></div>
    </div>

    <div class="bar-item">
      <div class="bar-header">
        <span class="bar-name">System Architecture</span>
        <span class="bar-pct">78%</span>
      </div>
      <div class="bar-track"><div class="bar-fill" data-w="78"></div></div>
    </div>
  </div>
</section>

<section id="experience">
  <div class="reveal">
    <p class="sec-eyebrow">03 — Kinh nghiệm</p>
    <h2 class="sec-h">Con đường <em>sự nghiệp</em></h2>
  </div>

  <div class="exp-grid">
    <div class="reveal reveal-delay-1">
      <div class="exp-col-title">Kinh nghiệm làm việc</div>
      <div class="timeline">
        <div class="tl-item">
          <div class="tl-dot current"></div>
          <div class="tl-body">
            <div class="tl-period">2025 — Hiện tại</div>
            <div class="tl-role">Senior Full-Stack Developer</div>
            <div class="tl-company">Tech Company — Đắk Lắk</div>
            <div class="tl-desc">Phát triển và tối ưu hóa nền tảng SaaS phục vụ 50k+ người dùng. Cải thiện hiệu suất hệ thống lên 40%.</div>
          </div>
        </div>

        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-body">
            <div class="tl-period">2024 — 2026</div>
            <div class="tl-role">Full-Stack Developer</div>
            <div class="tl-company">Startup E-commerce — Đắk Lắk</div>
            <div class="tl-desc">Xây dựng hệ thống thương mại điện tử từ đầu, tích hợp payment gateway và quản lý kho hàng real-time.</div>
          </div>
        </div>

        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-body">
            <div class="tl-period">2021 — 2022</div>
            <div class="tl-role">Frontend Developer</div>
            <div class="tl-company">Digital Agency — Đắk Lắk</div>
            <div class="tl-desc">Phát triển UI/UX cho các dự án web khách hàng trong và ngoài nước, đảm bảo hiệu suất và trải nghiệm tối ưu.</div>
          </div>
        </div>
      </div>
    </div>

    <div class="reveal reveal-delay-2">
      <div class="exp-col-title">Học vấn</div>
      <div class="timeline">
        <div class="tl-item">
          <div class="tl-dot current"></div>
          <div class="tl-body">
            <div class="tl-period">2023 — 2027</div>
            <div class="tl-role">Sinh viên Công nghệ máy tính</div>
            <div class="tl-company">Đại học Tây Nguyên</div>
            <div class="tl-desc">Chuyên ngành Công nghệ máy tính.</div>
          </div>
        </div>

        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-body">
            <div class="tl-period">2025 — 2027</div>
            <div class="tl-role">Thực tập sinh Phát triển Phần mềm</div>
            <div class="tl-company">Freelance</div>
            <div class="tl-desc">Tham gia sprint Agile và xây dựng tính năng cho ứng dụng quản lý nội bộ.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="projects">
  <div class="reveal">
    <p class="sec-eyebrow">04 — Dự án nổi bật</p>
    <h2 class="sec-h">Những gì tôi đã <em>xây dựng</em></h2>
  </div>

  <div class="proj-grid">
    <div class="proj-card reveal">
      <div class="proj-thumb" style="background:linear-gradient(135deg,#0f1025 0%,#1a1540 100%)">
        <span class="proj-thumb-label">SaaS</span>
        <div class="proj-thumb-overlay"><div class="proj-view-btn">Xem dự án →</div></div>
      </div>
      <div class="proj-body">
        <div class="proj-num">01</div>
        <div class="proj-name">CloudBoard Analytics</div>
        <p class="proj-desc">Nền tảng phân tích dữ liệu real-time cho doanh nghiệp. Dashboard tùy biến, báo cáo tự động và AI insights.</p>
        <div class="proj-stack">
          <span class="proj-tag">Next.js</span>
          <span class="proj-tag">Node.js</span>
          <span class="proj-tag">PostgreSQL</span>
          <span class="proj-tag">Redis</span>
        </div>
      </div>
    </div>

    <div class="proj-card reveal reveal-delay-1">
      <div class="proj-thumb" style="background:linear-gradient(135deg,#130e24 0%,#1e1438 100%)">
        <span class="proj-thumb-label">App</span>
        <div class="proj-thumb-overlay"><div class="proj-view-btn">Xem dự án →</div></div>
      </div>
      <div class="proj-body">
        <div class="proj-num">02</div>
        <div class="proj-name">ShopFlow Commerce</div>
        <p class="proj-desc">Hệ thống thương mại điện tử toàn diện với quản lý kho hàng, xử lý đơn hàng và tích hợp đa cổng thanh toán.</p>
        <div class="proj-stack">
          <span class="proj-tag">React</span>
          <span class="proj-tag">FastAPI</span>
          <span class="proj-tag">MongoDB</span>
          <span class="proj-tag">Docker</span>
        </div>
      </div>
    </div>

    <div class="proj-card reveal reveal-delay-2">
      <div class="proj-thumb" style="background:linear-gradient(135deg,#0d1025 0%,#150e2a 100%)">
        <span class="proj-thumb-label">API</span>
        <div class="proj-thumb-overlay"><div class="proj-view-btn">Xem dự án →</div></div>
      </div>
      <div class="proj-body">
        <div class="proj-num">03</div>
        <div class="proj-name">SmartNotify Platform</div>
        <p class="proj-desc">Hệ thống thông báo đa kênh với khả năng xử lý hàng triệu sự kiện mỗi ngày qua email, SMS và push notification.</p>
        <div class="proj-stack">
          <span class="proj-tag">Node.js</span>
          <span class="proj-tag">Kafka</span>
          <span class="proj-tag">AWS</span>
          <span class="proj-tag">TypeScript</span>
        </div>
      </div>
    </div>

    <div class="proj-card reveal">
      <div class="proj-thumb" style="background:linear-gradient(135deg,#14083a 0%,#1c0e4a 100%)">
        <span class="proj-thumb-label">AI</span>
        <div class="proj-thumb-overlay"><div class="proj-view-btn">Xem dự án →</div></div>
      </div>
      <div class="proj-body">
        <div class="proj-num">04</div>
        <div class="proj-name">DocuMind AI</div>
        <p class="proj-desc">Ứng dụng AI cho phép người dùng trò chuyện với tài liệu PDF và dữ liệu nội bộ sử dụng RAG + vector database.</p>
        <div class="proj-stack">
          <span class="proj-tag">Python</span>
          <span class="proj-tag">LangChain</span>
          <span class="proj-tag">Pinecone</span>
          <span class="proj-tag">Vue.js</span>
        </div>
      </div>
    </div>

    <div class="proj-card reveal reveal-delay-1">
      <div class="proj-thumb" style="background:linear-gradient(135deg,#0a0e20 0%,#10142e 100%)">
        <span class="proj-thumb-label">Mobile</span>
        <div class="proj-thumb-overlay"><div class="proj-view-btn">Xem dự án →</div></div>
      </div>
      <div class="proj-body">
        <div class="proj-num">05</div>
        <div class="proj-name">TaskFlow Mobile</div>
        <p class="proj-desc">Ứng dụng quản lý công việc nhóm iOS/Android với tính năng offline-first và đồng bộ real-time.</p>
        <div class="proj-stack">
          <span class="proj-tag">React Native</span>
          <span class="proj-tag">Firebase</span>
          <span class="proj-tag">GraphQL</span>
          <span class="proj-tag">Expo</span>
        </div>
      </div>
    </div>

    <div class="proj-card reveal reveal-delay-2">
      <div class="proj-thumb" style="background:linear-gradient(135deg,#110d28 0%,#1a1438 100%)">
        <span class="proj-thumb-label">OSS</span>
        <div class="proj-thumb-overlay"><div class="proj-view-btn">Xem dự án →</div></div>
      </div>
      <div class="proj-body">
        <div class="proj-num">06</div>
        <div class="proj-name">vi-component-lib</div>
        <p class="proj-desc">Thư viện UI component mã nguồn mở dành cho cộng đồng lập trình viên Việt Nam — 500+ GitHub stars.</p>
        <div class="proj-stack">
          <span class="proj-tag">React</span>
          <span class="proj-tag">Storybook</span>
          <span class="proj-tag">Rollup</span>
          <span class="proj-tag">Open Source</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="education">
  <div class="reveal">
    <p class="sec-eyebrow">05 — Học vấn &amp; Chứng chỉ</p>
    <h2 class="sec-h">Chứng nhận &amp; <em>Đào tạo</em></h2>
  </div>

  <div class="edu-grid">
    <div class="reveal reveal-delay-1">
      <p class="exp-col-title">Chứng chỉ chuyên môn</p>
      <div class="cert-list">
        <div class="cert-item"><span class="cert-icon">🏆</span><div><div class="cert-name">AWS Certified Solutions Architect</div><div class="cert-by">Amazon Web Services</div><div class="cert-yr">2023 — Còn hiệu lực</div></div></div>
        <div class="cert-item"><span class="cert-icon">🎯</span><div><div class="cert-name">Google Professional Cloud Developer</div><div class="cert-by">Google Cloud</div><div class="cert-yr">2023 — Còn hiệu lực</div></div></div>
        <div class="cert-item"><span class="cert-icon">📘</span><div><div class="cert-name">Meta Front-End Developer Certificate</div><div class="cert-by">Meta / Coursera</div><div class="cert-yr">2022</div></div></div>
        <div class="cert-item"><span class="cert-icon">🐳</span><div><div class="cert-name">Certified Kubernetes Administrator</div><div class="cert-by">CNCF</div><div class="cert-yr">2022</div></div></div>
      </div>
    </div>

    <div class="reveal reveal-delay-2">
      <p class="exp-col-title">Thành tích &amp; Giải thưởng</p>
      <div class="cert-list">
        <div class="cert-item"><span class="cert-icon">🥇</span><div><div class="cert-name">Giải nhất Hackathon AI 2023</div><div class="cert-by">VietTech Innovation Challenge</div><div class="cert-yr">Top 3 / 200+ đội tham gia</div></div></div>
        <div class="cert-item"><span class="cert-icon">⭐</span><div><div class="cert-name">Employee of the Year</div><div class="cert-by">Tech Company TP.HCM</div><div class="cert-yr">2023</div></div></div>
        <div class="cert-item"><span class="cert-icon">📝</span><div><div class="cert-name">500+ GitHub Stars — Open Source</div><div class="cert-by">vi-component-lib</div><div class="cert-yr">2022 — Nay</div></div></div>
        <div class="cert-item"><span class="cert-icon">🌏</span><div><div class="cert-name">Speaker — VietJS Conference</div><div class="cert-by">Cộng đồng JavaScript Việt Nam</div><div class="cert-yr">2023</div></div></div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="contact-glow"></div>
  <div class="contact-inner">
    <div class="reveal">
      <p class="sec-eyebrow">06 — Liên hệ</p>
      <h2 class="contact-tagline">Hãy cùng tạo ra điều gì đó <em>tuyệt vời</em></h2>
      <p class="contact-sub">
        Tôi luôn chào đón các cơ hội hợp tác thú vị, dự án mới, hoặc chỉ đơn giản là một cuộc trò chuyện về công nghệ.
        Đừng ngại liên hệ!
      </p>
    </div>

    <div class="reveal reveal-delay-2">
      <div class="contact-links">
        <a class="contact-link" href="mailto:lp177529@gmail.com">
          <span class="contact-link-icon">✉️</span>
          <div>
            <div class="contact-link-label">Email</div>
            <div class="contact-link-val">lp177529@gmail.com</div>
          </div>
        </a>

        <a class="contact-link" href="tel:+84378075160">
          <span class="contact-link-icon">📞</span>
          <div>
            <div class="contact-link-label">Điện thoại</div>
            <div class="contact-link-val">+84 378 075 160</div>
          </div>
        </a>

        <a class="contact-link" href="https://linkedin.com/in/phanducloi" target="_blank" rel="noopener noreferrer">
          <span class="contact-link-icon">💼</span>
          <div>
            <div class="contact-link-label">LinkedIn</div>
            <div class="contact-link-val">linkedin.com/in/phanducloi</div>
          </div>
        </a>

        <a class="contact-link" href="https://github.com/Ducloi26" target="_blank" rel="noopener noreferrer">
          <span class="contact-link-icon">🐙</span>
          <div>
            <div class="contact-link-label">GitHub</div>
            <div class="contact-link-val">github.com/Ducloi26</div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<footer>
  <span class="footer-copy">© 2025 Phan Đức Lợi. All rights reserved.</span>
  <a class="footer-logo" href="#hero">PDL</a>
  <div class="footer-socials">
    <a class="footer-social" href="https://github.com/Ducloi26" target="_blank" rel="noopener noreferrer">GitHub</a>
    <a class="footer-social" href="https://linkedin.com/in/phanducloi" target="_blank" rel="noopener noreferrer">LinkedIn</a>
    <a class="footer-social" href="#">Twitter</a>
  </div>
</footer>

<?php get_footer(); ?>