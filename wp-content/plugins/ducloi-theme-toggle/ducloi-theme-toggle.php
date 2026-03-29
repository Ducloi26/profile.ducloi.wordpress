<?php
/**
 * Plugin Name: DucLoi Theme Toggle
 * Description: Plugin chuyển chế độ sáng/tối cho website portfolio.
 * Version: 1.0.4
 * Author: Phan Đức Lợi
 */

if (!defined('ABSPATH')) exit;

function ducloi_theme_toggle_inline_assets() {
    ?>
    <style>
        #ducloi-theme-toggle{
            position:fixed;
            right:24px;
            bottom:24px;
            z-index:999999;
            width:64px;
            height:64px;
            border:none;
            border-radius:50%;
            background:#ff0000;
            color:#fff;
            font-size:28px;
            cursor:pointer;
            box-shadow:0 14px 40px rgba(0,0,0,.35);
        }

        body.ducloi-light-mode{
            background:#ffffff !important;
            color:#111827 !important;
        }

        body.ducloi-light-mode #hero,
        body.ducloi-light-mode #about,
        body.ducloi-light-mode #skills,
        body.ducloi-light-mode #experience,
        body.ducloi-light-mode #projects,
        body.ducloi-light-mode #education,
        body.ducloi-light-mode #contact{
            background:#ffffff !important;
            color:#111827 !important;
        }

        body.ducloi-light-mode #nav{
            background:rgba(255,255,255,.96) !important;
            border-bottom:1px solid rgba(0,0,0,.08) !important;
        }

        body.ducloi-light-mode .hero-grid{
            background-image:
                linear-gradient(rgba(0,0,0,.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,0,0,.05) 1px, transparent 1px) !important;
        }

        body.ducloi-light-mode .hero-name,
        body.ducloi-light-mode .hero-role,
        body.ducloi-light-mode .hero-desc,
        body.ducloi-light-mode .sec-h,
        body.ducloi-light-mode .about-p,
        body.ducloi-light-mode .profile-name,
        body.ducloi-light-mode .profile-title,
        body.ducloi-light-mode .nav-links a,
        body.ducloi-light-mode .nav-logo,
        body.ducloi-light-mode .metric-n,
        body.ducloi-light-mode .metric-l,
        body.ducloi-light-mode .footer-copy,
        body.ducloi-light-mode .footer-social,
        body.ducloi-light-mode .contact-link-val,
        body.ducloi-light-mode .contact-link-label,
        body.ducloi-light-mode .proj-name,
        body.ducloi-light-mode .proj-desc,
        body.ducloi-light-mode .cert-name,
        body.ducloi-light-mode .cert-by,
        body.ducloi-light-mode .tl-role,
        body.ducloi-light-mode .tl-company,
        body.ducloi-light-mode .meta-k,
        body.ducloi-light-mode .meta-v,
        body.ducloi-light-mode .skill-cat-name,
        body.ducloi-light-mode .skill-cat-desc,
        body.ducloi-light-mode .bar-name,
        body.ducloi-light-mode .bar-pct{
            color:#111827 !important;
        }

        body.ducloi-light-mode .hero-image-wrap,
        body.ducloi-light-mode .profile-card,
        body.ducloi-light-mode .skill-cat,
        body.ducloi-light-mode .bar-item,
        body.ducloi-light-mode .metric,
        body.ducloi-light-mode .proj-card,
        body.ducloi-light-mode .cert-item,
        body.ducloi-light-mode .contact-link,
        body.ducloi-light-mode .meta-item,
        body.ducloi-light-mode .about-quote{
            background:#f8fafc !important;
            border-color:rgba(0,0,0,.08) !important;
            color:#111827 !important;
            box-shadow:none !important;
        }

        body.ducloi-light-mode .btn-outline{
            background:#ffffff !important;
            color:#111827 !important;
            border-color:rgba(0,0,0,.15) !important;
        }
    </style>

    <script>
        function ducloiToggleTheme(){
            var body = document.body;
            var btn = document.getElementById('ducloi-theme-toggle');
            var isLight = body.classList.contains('ducloi-light-mode');

            if(isLight){
                body.classList.remove('ducloi-light-mode');
                localStorage.setItem('ducloi-theme-mode', 'dark');
                if(btn) btn.textContent = '🌙';
            } else {
                body.classList.add('ducloi-light-mode');
                localStorage.setItem('ducloi-theme-mode', 'light');
                if(btn) btn.textContent = '☀️';
            }

            console.log('Current body class:', body.className);
        }

        document.addEventListener('DOMContentLoaded', function(){
            var saved = localStorage.getItem('ducloi-theme-mode');
            var btn = document.getElementById('ducloi-theme-toggle');

            if(saved === 'light'){
                document.body.classList.add('ducloi-light-mode');
                if(btn) btn.textContent = '☀️';
            } else {
                document.body.classList.remove('ducloi-light-mode');
                if(btn) btn.textContent = '🌙';
            }

            console.log('Theme init done');
        });
    </script>
    <?php
}
add_action('wp_head', 'ducloi_theme_toggle_inline_assets');

function ducloi_theme_toggle_button() {
    echo '<button id="ducloi-theme-toggle" onclick="ducloiToggleTheme()" type="button" aria-label="Chuyển chế độ sáng tối">🌙</button>';
}
add_action('wp_body_open', 'ducloi_theme_toggle_button');