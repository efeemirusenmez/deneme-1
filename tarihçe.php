<form action="https://formspree.io/your@email.com" method="post"> <!-- your@email.com yerine kendi mail adresimizi yazıyoruz. -->
    <div class="input-block">
        <label for="contact_author">
            <strong>Ad Soyad</strong> (gerekli)</label>
        <input type="text" name="contact_author" id="contact_author" required>
    </div>
    <div class="input-block">
        <label for="_replyto">
            <strong>E-Posta Adresi</strong> (gerekli)</label>
        <input type="email" name="_replyto" id="_replyto" required>
    </div>            
    <div class="input-block">
        <label for="contact_subject">
            <strong>İleti Konusu</strong> (gerekli)</label>
        <input type="text" name="contact_subject" id="contact_subject" required>
    </div>
    <div class="textarea-block">
        <label for="contact_content">
            <strong>İleti</strong> (gerekli)</label>
        <textarea name="contact_content" id="contact_content" required></textarea>
    </div>
    <input type="hidden" name="_next" value="https://site.io/thanks.html"> <!-- Form formspree.io adresine gönderildikten sonra tekrar sitenize dönüş yapılarak sitenizdeki thanks.html dosyasının görüntülenmesini sağlıyor. -->
    <input type="submit" value="GÖNDER">
</form>