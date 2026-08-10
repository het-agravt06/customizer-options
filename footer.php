<!-- <hr>

<footer>

<p>© <?php 
// echo date('Y'); 
?> My Custom Theme</p>

</footer>

<?php 
// wp_footer(); 
?>

</body>
</html> -->


<!-- cuatomizer api  changing content on footer 
 appereance->costimize->theme option ->change content 
 -->
<footer>
    <p>
        <?php echo esc_html(get_theme_mod('footer_text')); ?>
    </p>
</footer>