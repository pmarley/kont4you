</main>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Kont4You</h3>
                <p>Soluções contábeis digitais respaldadas por mais de 65 anos de credibilidade com a IRKO.</p>
            </div>
            
            <div class="footer-section">
                <h3>Links Rápidos</h3>
                <a href="<?php echo esc_url(home_url('/')); ?>">Página Inicial</a>
                <a href="#sobre">Sobre nós</a>
                <a href="#servicos">Serviços</a>
                <a href="#blog">Blog</a>
                <a href="#contato">Contato</a>
            </div>
            
            <div class="footer-section">
                <h3>Contato</h3>
                <p><?php echo esc_html(get_theme_mod('kont4you_address', 'Av. Rio Branco, 125 - 19º andar - Centro, RJ')); ?></p>
                <p>Email: <?php echo esc_html(get_theme_mod('kont4you_email', 'kontcomigo@kont4you.com.br')); ?></p>
                <p>Telefone: <?php echo esc_html(get_theme_mod('kont4you_phone', '(21) 98306-0000')); ?></p>
            </div>
            
            <div class="footer-section">
                <h3>Redes Sociais</h3>
                <a href="#" target="_blank">Facebook</a>
                <a href="#" target="_blank">Instagram</a>
                <a href="#" target="_blank">LinkedIn</a>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Kont4You. Desenvolvido por Pinout.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
